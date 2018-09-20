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

    public function listar(){

        $banner = \App\Banner::All();
        return view('painel.listar-banner', compact('banner'));

    }

    //editar banner -- > bannerdetails
    public function edit($id){

        $banner = \App\Banner::find($id);
        return view('painel.bannerdetails', ['banner'=>$banner]);

    }

    public function update($id, BannerRequest $request){

        $file_principal           = Input::file('image');
        $destinationPath          = 'img-banner/';
        $fileName_principal       = $file_principal->getClientOriginalName();
        Input::file('image')->move($destinationPath, $fileName_principal);

        // Validação dos dados
        $nome                       = $request->input('nome');
        $image                      = $request->file('image');


          DB::table('banner')
                  ->where('id', $id)
                  ->update(
                  ['nome' => $nome,'image' => $fileName_principal]
                );



      $request->session()->flash('message', 'Banner Atualizado com Sucesso!');
      return Redirect::to('listar-banner');


    }

    public function destroy($id, Request $request){

        $file_principal = DB::table('banner')->value('nome', 'image');
        //example it.png, which is located in `public/uploads/masters/logocatagory_Computers` folder
        \App\Banner::destroy($id);
        DB::table('banner')->delete($id);
        File::delete('img-banner/'.$file_principal);

       $request->session()->flash('message', 'Banner Excluído com sucesso');
       return Redirect::to('listar-banner');
    }


}
