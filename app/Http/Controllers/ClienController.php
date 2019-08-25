<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Auth;
use App\Cliente;
use App\brandModel;
use App\pieceModel;
use App\user_has_client;

class ClienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.registerClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $user=Auth::user();

        $client=new Cliente();
        $client->cedula=$request->input('cedula');
        $client->nombre=$request->input('nombre');
        $client->correo=$request->input('correo');
        $client->telefono=$request->input('telefono');
        $client->save();

        if($user){
            $user_has_client= new user_has_client();
            $user_has_client->users_id=$user->id;
            $user_has_client->cliente_cedula=$client->cedula;
            $user_has_client->save();
        }

        $brands= brandModel::brands();
        $pieces= pieceModel::pieces();

        return view('charge.createCharge')
        ->with('success','El cliente se registro satisfactoriamente')
        ->with('brands',$brands)
        ->with('pieces',$pieces)
        ->with('client',$client);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
