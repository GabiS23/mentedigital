<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VisitaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function inicio_index()
    {
        return view('contenedor/visita/inicio');
    }
    public function branding_index()
    {
        return view('contenedor/visita/branding');
    }
    public function contacto_index()
    {
        return view('contenedor/visita/contacto');
    }
}