<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function process()
    {
        return view('payment.process');
    }

    public function handle(Request $request)
    {
        // manejamos el proceso de pago aquí
        // ...

        return redirect('/home')->with('success', 'Pago realizado con éxito. ¡Disfruta de tu plan premium!');
    }
}
