@extends('admin/base')
@section('title', 'Cadastrar novo DOADOR')

@section('content')
        <div class="container w-70">
        <h2> Novo Doador </h2>    
        <form method="post" action="{{url('admin/doadores')}}">
            @csrf
            <label>Nome</label>
            <input class="form-control form-control-sm" type="text" name="nome"><br>

            <label>Data de Nascimento</label>
            <input class="form-control form-control-sm" type="date" name="data_nascimento"><br>

            <label>E-mail</label>
            <input class="form-control form-control-sm" type="text" name="email"><br>

            <label>Endereço</label>
            <input class="form-control form-control-sm" type="text" name="endereco"><br>

            <label>Cidade</label>
            <input class="form-control form-control-sm" type="text" name="cidade"><br>

            <label>Estado</label>
            <input class="form-control form-control-sm" type="text" name="estado"><br>

            <label>CEP</label>
            <input class="form-control form-control-sm" type="number" name="cep"><br>

            <label>RG</label>
            <input class="form-control form-control-sm" type="text" name="rg"><br>

            <label>CPF</label>
            <input class="form-control form-control-sm" type="number" name="cpf"><br>

            <label>Telefone</label>
            <input class="form-control form-control-sm" type="number" name="telefone"><br>

            <label>Tipo Sanguíneo</label>
            <input class="form-control form-control-sm" type="text" name="tipo_sangue"><br>

            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
        </div>
@endsection   
