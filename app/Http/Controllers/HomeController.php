<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doador;

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
    public function index(){
        $doadores = Doador::all();
        return view ('site.index', compact ('doadores'));
    }

    public function cadastro(){
        
        return view ('site.cadastro');
    }

    
    public function salvarcadastro(Request $request)
    {
        $doador = new Doador;
        $doador->nome = $request->nome;
        $doador->data_nascimento = $request->data_nascimento;
        $doador->email = $request->email;
        $doador->endereco = $request->endereco;
        $doador->cidade = $request->cidade;
        $doador->estado = $request->estado;
        $doador->cep = $request->cep;
        $doador->rg = $request->rg;
        $doador->cpf = $request->cpf;
        $doador->telefone = $request->telefone;
        $doador->tipo_sangue = $request->tipo_sangue;

        $doador->save();

        return redirect('home');
    }
}
