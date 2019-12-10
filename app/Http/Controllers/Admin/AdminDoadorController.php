<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doador;


class AdminDoadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doadores=Doador::all();

        return view('admin/doadores/index', compact('doadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('admin/doadores/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return redirect('admin/doadores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doador=Doador::find($id);

        return view('admin/doadores/edit', compact('doador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doador = Doador::find($id);
        
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

        return redirect('admin/doadores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doador = Doador::find($id);
        $doador->delete();
        return redirect('admin/doadores');
    }
}
