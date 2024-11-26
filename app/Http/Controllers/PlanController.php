<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function showPlans()
    {
        return view('plans.index');
    }

    public function choosePlan(Request $request)
    {
        $user = Auth::user();
        $plan = $request->input('plan');

        // Asignar plan al usuario
        $user->plan_id = $plan;
        $user->save();

        // Redirigir según el plan seleccionado
        if ($plan == 'premium') {
            return redirect()->route('payment.process'); // Ruta a la vista de pago
        } else {
            return redirect('/home');
        }
    }
}
