@extends('admin/base')
@section('title', 'Criar novo DOADOR')

@section('content')
    <div class="container w-70">
        <h1> Novo Doador </h1>    
        <form method="post" action="{{url('admin/doadores/'.$doador->id)}}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            
            <label>Nome</label>
            <input class="form-control form-control-sm" type="text" name="nome" value="{{$doador->nome}}"><br>

            <label>Data de Nascimento</label>
            <input class="form-control form-control-sm" name="data_nascimento" value="{{$doador->data_nascimento}}"><br>

            <label>E-mail</label>
            <input class="form-control form-control-sm" name="email" value="{{$doador->email}}"><br>

            <label>Endereço</label>
            <input class="form-control form-control-sm" name="endereco" value="{{$doador->endereco}}"><br>

            <label>Cidade</label>
            <input class="form-control form-control-sm" name="cidade" value="{{$doador->cidade}}"><br>

            <label>Estado</label>
            <input class="form-control form-control-sm" name="estado" value="{{$doador->estado}}"><br>

            <label>CEP</label>
            <input class="form-control form-control-sm" name="cep" value="{{$doador->cep}}"><br>

            <label>RG</label>
            <input class="form-control form-control-sm" name="rg" value="{{$doador->rg}}"><br>

            <label>CPF</label>
            <input class="form-control form-control-sm" name="cpf" value="{{$doador->cpf}}"><br>

            <label>Telefone</label>
            <input class="form-control form-control-sm" name="telefone" value="{{$doador->telefone}}"><br>

            <label>Tipo Sanguíneo</label>
            <input class="form-control form-control-sm" name="tipo_sangue" value="{{$doador->tipo_sangue}}"><br>
            
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection   
