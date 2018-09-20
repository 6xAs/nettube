<?php

namespace App\Http\Controllers;
use App\Http\Requests\FilmeRequest;
use Illuminate\Support\Facades\Input;
use App\Filme;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    //Busca conteudo de filmes no site
    public function index(request $request) {

        $request = \Request::get('buscar');
        $filme = Filme::where('nome', 'like','%'.$request.'%')
                   ->orderBy('nome')
                   ->paginate(20);
        if (count($filme) == 0) {
            return view('site.busca-error', compact('filme'));
        }
        else {
            return view('site.filme-gallery', compact('filme'));
        }


   } // buscar()


   public function noticeslimited(){

       $notice
   }
}
