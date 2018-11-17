<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;

class DivisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //muestra todo
        //display the page
        $division = Division::all();
        return view('division.index')->with('division', $division);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('division.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //mandas a llamar este desde el form para guardar
        $this->validate($request, [
            'tipo' => 'required'
        ]);

        $division = new Division;
        $division->tipo = $reques->input('tipo');
        $division->save();

        // return redirect('')->with('succes',)
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $division = Division::find($id);
      return view('division.show')->with('division', $division);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $division = Division::find($id);
      return view('division.edit')->with('division', $division);
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
        //el que se va a encargar de hacer el update de verdad
        $this->validate($request, [
            'tipo' => 'required|string',
        ]);

        $division = Division::find($id);
        $division->tipo = $reques->input('tipo');
        $division->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $division = Division::find($id);
      $division->delete();
    }
}
