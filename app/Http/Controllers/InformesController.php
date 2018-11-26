<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('informe.inicioI');
    }

    public function docencia(){
      return view('informe.docencia');
    }

    public function investigacion(){
      return view('informe.investigacion');
    }

    public function tutoria(){
      return view('informe.tutoria');
    }

    public function gestion(){
      return view('informe.gestion');
    }

    public function difusion(){
      return view('informe.difusion');
    }

    public function superacion(){
      return view('informe.superacion');
    }

    public function horas(){
      return view('informe.horas');
    }
}
