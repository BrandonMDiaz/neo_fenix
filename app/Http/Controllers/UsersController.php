<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Hash;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('users.delete');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {
        return view('users.create');
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
          'idCode' => 'required|max:11',
          'name' => 'required|string|max:255',
          'second_last_name' => 'required|string|max:255',
          'first_last_name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'user_name' => 'required|string|max:255',
          'password' => 'required|string|min:6',
          'user_type' => 'required',
      ]);
      return 1;
      //insertar usuario
      $user = new User;
      $user->id = $request->input('idCode');
      $user->name = $request->input('name');
      $user->last_name = $request->input('first_last_name');
      $user->second_last_name = $request->input('second_last_name');
      $user->email = $request->input('email');
      $user->user_name = $request->input('user_name');
      $user->password = Hash::make($request->input('password'));
      $user->tipo_id = $request->input('user_type');
      $user->save();

      //podriamos hacer un redirect
      return redirect('/user/create')->with('succes','User created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::find($id);

      return view('users.show')->with('user', $user);
    }

    public function modUser(Request $request) {

      if(count($request->all()) == 0) {
        $user = new User;
        return view('users.edit')->with('user', $user);
      }
      $id = $request->input("Codigo");
      $user = User::find($id);
      $user->password = "";
      return view('users.edit')->with('user', $user);
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
          'idCode' => 'required|max:11',
          'name' => 'required|string|max:255',
          'second_last_name' => 'required|string|max:255',
          'first_last_name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'user_name' => 'required|string|max:255',
          'password' => 'required|string|min:6',
          'user_type' => 'required',
      ]);

      //editar
      $user = User::find($id);
      $user->name = $request->input('name');
      $user->last_name = $request->input('last_name');
      $user->second_last_name = $request->input('second_last_name');
      $user->email = $request->input('email');
      $user->user_name = $request->input('user_name');
      $user->password = \Hash::make($request->input('password'));
      $user->tipo_id = $request->input('user_type');
      $user->save();
      $user = new User;
      return view('users.edit')->with('user', $user);
    }

    public function delUser()
    {
         return view('users.delete');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    public function upload(){
      return view('users.upload');
    }

}
