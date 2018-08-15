<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    // tabela do banco 
     protected $table = 'filme';
     // Atributos(colunas) da tabela
     protected $fillable   = ['nome', 'categoria', 'image', 'link'];
}
