<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Filme;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;

class PainelController extends Controller
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
        $filme = \App\filme::All();
        return view('painel.home', compact('filme'));

    }


}
