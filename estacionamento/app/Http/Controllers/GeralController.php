<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Vaga;




class GeralController extends Controller
{
    public function vagas(){
      //
      // $vagas = Vaga::orderBy('idStatus')->get();
      // dd($vagas);
      // if ($request->ajax()) {
      //     return $vagas;
      // }

      // return view('vagas',compact('vagas'));
      return view('vagas');
    }

    public function getVagas(Request $request){

      $vagas = Vaga::orderBy('idStatus')->get();
      // dd($vagas);
      if ($request->ajax()) {
          return $vagas;
      }
      return $vagas;

    }
}
