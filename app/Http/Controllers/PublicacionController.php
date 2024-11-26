<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PublicacionController extends Controller
{
    public function publicaciones()
    {
        return view('publicaciones.index');
    }
}
