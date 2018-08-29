<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use Illuminate\Support\Facades\Input;
use App\Banner;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;

class BannerController extends Controller
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

    public function insert(BannerRequest $request){

        $file_principal           = Input::file('image');
        $destinationPath          = 'img-banner/';
        $fileName_principal       = $file_principal->getClientOriginalName();
        Input::file('image')->move($destinationPath, $fileName_principal);

        // Validação dos dados
        $nome                    = $request->input('nome');
        $image                   = $request->file('image');

        DB::table('banner')->insert(

            ['nome' => $nome,  'image' => $fileName_principal]
        );

        // Post Message
        $request->session()->flash('message', 'Banner Inserido com Sucesso');
        return Redirect::to('listar-banner');


    }

}
