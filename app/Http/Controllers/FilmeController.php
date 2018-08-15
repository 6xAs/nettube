<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Request\FilmeRequest;
use App\Filme;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;

class FilmeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('painel.inserir-filme');
    }

    public function insert(){

        return "funciona!";

    }


}
