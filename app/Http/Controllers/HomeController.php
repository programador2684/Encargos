<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

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
}
