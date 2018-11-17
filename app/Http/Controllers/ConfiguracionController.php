<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;

class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $configuracion = Configuracion::all();
      return view('configuracion.index')->with('configuracion', $configuracion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('configuracion.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'logo' => 'required',
          'periodo' => 'required|string|max:255',
          'horas' => 'required|string|email|max:255|unique:users',
          'fecha_inicio_p' => 'required|string|min:6|confirmed',
          'fecha_fin_p' => 'required|int',
          'fecha_inicio_i' => 'required|string|min:6|confirmed',
          'fecha_fin_i' => 'required|int',
      ]);

      $configuracion = new Configuracion;
      $configuracion->tipo = $reques->input('tipo');
      $configuracion->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $configuracion = configuracion::find($id);
      return view('configuracion.show')->with('configuracion', $configuracion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $configuracion = configuracion::find($id);
      return view('configuracion.edit')->with('configuracion', $configuracion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'tipo' => 'required|string',
      ]);

      $configuracion = configuracion::find($id);
      $configuracion->tipo = $reques->input('tipo');
      $configuracion->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $configuracion = configuracion::find($id);
      $configuracion->delete();
    }
}
