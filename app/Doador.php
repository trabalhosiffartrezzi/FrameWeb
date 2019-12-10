<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    protected $fillable = ['nome', 'data_nascimento', 'email', 'endereco', 'cidade', 'estado', 'cep', 'rg', 'cpf', 'telefone', 'tipo_sangue'];
    protected $table = 'doador';

    
}
