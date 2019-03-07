<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\terrazas;

class terrazasController extends Controller
{
    public function index()
    {
      $terr=terrazas::all();
      //->orWhere('','')
      //->where('','')
      //->get()
      /*dd($terr);

      return $docs;*/

      return view('documentos.terrazasIndex', compact('terr'));
    }
}
