<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $comentario = Comentario::all();
      return view('comentarios.index')->with('comentario', $comentario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('comentario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validateData = $request->validate([
          'cumplimiento' => 'required',
          'observaciones' => 'required',
      ]);

      //insertar usuario
      $comentario = new Comentario;
      $comentario->cumplimiento = $request->input('cumplimiento');
      $comentario->observaciones = $request->input('observaciones');
      $comentario->save();

      //podriamos hacer un redirect
      return view('comentario.create');
      return redirect('/comentario/create')->with('succes','comentario created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $comentario = Comentario::find($id);
      return view('comentario.show')->with('comentario', $comentario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $comentario = Comentario::find($id);
      return view('comentario.edit')->with('comentario', $comentario);
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
      $validateData = $request->validate([
          'cumplimiento' => 'required',
          'observaciones' => 'required',
      ]);

      //insertar usuario
      $comentario = new Comentario;
      $comentario->cumplimiento = $request->input('cumplimiento');
      $comentario->observaciones = $request->input('observaciones');
      $comentario->save();

      //podriamos hacer un redirect
      return view('comentario.create');
      return redirect('/comentario/create')->with('succes','comentario created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $comentario = Comentario::find($id);
      $comentario->delete();
    }
}
