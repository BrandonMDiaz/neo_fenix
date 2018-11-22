<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan_anual;

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
}
