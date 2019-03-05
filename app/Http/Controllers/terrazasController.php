<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class terrazasController extends Controller
{
    public function index()
    {
      $terr=DB::table('terrazas')->get();
      /*dd($docs);

      return $docs;*/

      return view('documentos.terrazasIndex', compact('terr'));
    }
}
