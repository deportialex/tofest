<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio()
    {
      return view('paginas.inicio');
    }

    public function terrazas()
    {
      return view('paginas.terrazas');
    }

    public function servicios()
    {
      return view('paginas.servicios');
    }

    public function informacion()
    {
      return view('paginas.informacion');
    }

    public function dudas()
    {
      return view('paginas.dudas');
    }

    public function carrito()
    {
      return view('paginas.carrito');
    }
}
