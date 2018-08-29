<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    // tabela do banco
     protected $table = 'banner';
     // Atributos(colunas) da tabela
     protected $fillable   = ['nome', 'image'];
}
