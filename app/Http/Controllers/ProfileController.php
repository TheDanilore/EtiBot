<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use File;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */


    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::user()->id],
            'avatar' => ['image', 'max:2048']
        ]);

        $user = $request->user();

        // Handle avatar upload
        if ($request->hasFile('avatar')) {

            if (File::exists(public_path($user->avatar)) && $user->avatar != 'img/uploads/user-defecto.jpg') {
                File::delete(public_path($user->avatar));
            }

            $avatar = $request->avatar;
            $filename = rand() . '_' . $avatar->getClientOriginalName();
            $avatar->move(public_path('img/uploads'), $filename);
            $path = "/img/uploads/" . $filename;
            $user->avatar = $path;
        }

        // If email is updated, clear email verification
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Save the updated user
        $user->save();

        // Store the toastr notification in the session
        session()->flash('toastr', "
        <script>
        toastr.success('Sus datos se han actualizado exitosamente.');
        </script>
        ");

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }





    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
