<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Cliente;
use App\user_has_client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function searchClient(Request $request, $id){
        if($request->ajax()){
            $client=Cliente::searchCliente($id);
            return response()->json($client);
        }
    }

    public function obtainClientsUser(){

        $user=Auth::user();

        if($user){
            $clients=user_has_client::obtainClientsUser($user->id);
            return view('auth.clientsUser')->with('clients', $clients);  
        }
    }

    public function allClients(){
        $allClient=user_has_client::allClients();
        return view('auth.clientsUser')->with('clients', $allClient);
    }
}
