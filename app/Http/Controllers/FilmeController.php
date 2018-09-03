<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\FilmeRequest;
use Illuminate\Support\Facades\Input;
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

    public function insert(FilmeRequest $request){

        $file_principal           = Input::file('image');
        $destinationPath          = 'img-filmes/';
        $fileName_principal       = $file_principal->getClientOriginalName();
        Input::file('image')->move($destinationPath, $fileName_principal);

        // Validação dos dados
        $nome                    = $request->input('nome');
        $categoria               = $request->input('categoria');
        $link                    = $request->input('link');
        $image                   = $request->file('image');

        DB::table('filme')->insert(

            ['nome' => $nome, 'categoria' => $categoria, 'link' => $link, 'image' => $fileName_principal]
        );

        // Post Message
        $request->session()->flash('message', 'Filme Inserido com Sucesso');
        return Redirect::to('listar-filmes');


    }

    public function listar(){

        $filme = \App\filme::All();
        return view('painel.listar-filmes', compact('filme'));

    }

    public function edit($id){

        $filme = \App\Filme::find($id);
        return view('painel.filmedetails', ['filme'=>$filme]);

    }


    public function update($id, FilmeRequest $request){

        $file_principal           = Input::file('image');
        $destinationPath          = 'img-filmes/';
        $fileName_principal       = $file_principal->getClientOriginalName();
        Input::file('image')->move($destinationPath, $fileName_principal);

        // Validação dos dados
        $nome                    = $request->input('nome');
        $categoria               = $request->input('categoria');
        $link                    = $request->input('link');
        //$image                   = $request->file('image');

      DB::table('filme')
              ->where('id', $id)
              ->update(
              ['nome' => $nome, 'categoria' => $categoria, 'link' => $link,
              'image' => $fileName_principal]
            );



      $request->session()->flash('message', 'Filme Atualizado com Sucesso!');
      return Redirect::to('listar-filmes');


    }

    public function destroy($id, Request $request){

        $fileName_principal = DB::table('filme')->value('nome','categoria','link','image');
        //example it.png, which is located in `public/uploads/masters/logocatagory_Computers` folder
        \App\filme::destroy($id);
        DB::table('filme')->delete($id);
       File::delete('img-filmes/'.$fileName_principal);

       $request->session()->flash('message', 'Filme Excluído com sucesso');
       return Redirect::to('listar-filmes');


    }

}
