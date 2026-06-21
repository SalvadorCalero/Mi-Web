<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function avisoLegal()
    {
        return view('legal.aviso-legal');
    }

    public function privacidad()
    {
        return view('legal.privacidad');
    }

    public function cookies()
    {
        return view('legal.cookies');
    }

    public function accesibilidad()
    {
        return view('legal.accesibilidad');
    }
}