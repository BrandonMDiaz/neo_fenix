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

    public function pdf($id){
      $plan =  Plan_anual::find($id);
      $docencia = Docencia::find($plan.docencia_id);
      $difusion = Difusion::find($plan.difusion_id);
      $investigacion = Investigacion::find($plan.investigacion_id);
      $tutoria = Tutoria::find($plan.tutoria_id);
      $gestion = Gestion::find($plan.gestion_id);
      $superacion = Superacion::find($plan.superacion_id);
      $horas = Horas::find($plan.horas_id);
      $pdf = PDF::loadView('plan.pdf', [$docencia,$difusion,$investigacion,$tutoria,
    $gestion,$superacion,$horas]);
      return $pdf->download('plan_anual.pdf');
    }
}
