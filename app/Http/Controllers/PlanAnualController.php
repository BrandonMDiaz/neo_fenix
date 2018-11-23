<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan_anual;
use App\Docencia;
use App\Difusion;
use App\Investigacion;
use App\Tutoria;
use App\Gestion;
use App\Superacion;
use App\Horas;

class PlanAnualController extends Controller
{
    public function index(){
      return view('plan.inicioP');
    }

    public function docencia(){
      return view('plan.docencia');
    }

    public function investigacion(){
      return view('plan.investigacion');
    }

    public function tutoria(){
      return view('plan.tutoria');
    }

    public function gestion(){
      return view('plan.gestion');
    }

    public function difusion(){
      return view('plan.difusion');
    }

    public function superacion(){
      return view('plan.superacion');
    }

    public function horas(){
      return view('plan.horas');
    }

    public function pdf(){
      $plan =  Plan_anual::all();
      $pdf = PDF::loadView('plan.pdf');
      return $pdf->download('plan_anual.pdf');
    }
}
