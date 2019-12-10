@extends('layouts.base')

@section('content')


<!-- Page Header -->
  <header class="masthead" style="background-image: url('img/doação.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Doe sangue!Salve vidas!!!</h1>
            <span class="subheading">Cadastre-se e ajuda a salvar vidas!</span>
          </div>
        </div>
      </div>
    </div>
  </header>

<body>

@section('content')


    <div class="container w-70">        
        <h1> Novo Doador </h1>    
        <form method="post" action="{{url('salvarCadastro')}}">
            @csrf
            <label>Nome</label>
            <input class="form-control form-control-sm" type="text"  name="nome" placeholder="Seu Nome">
            <br>

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
            <input class="form-control form-control-sm" type="number" name="cep" maxlength="8"><br>

            <label>RG</label>
            <input class="form-control form-control-sm" type="text" name="rg" maxlength="12"><br>

            <label>CPF</label>
            <input class="form-control form-control-sm" type="number" name="cpf" maxlength="11"><br>

            <label>Telefone</label>
            <input class="form-control form-control-sm" type="number" name="telefone" maxlength="11"><br>

            <label>Tipo Sanguíneo</label>
            <input class="form-control form-control-sm" type="text" name="tipo_sangue"><br>

            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
    <div class="container w-70">
        <div class="alert alert-secondary" role="alert">
        <a href="http://127.0.0.1:8000/admin/doadores">Clique aqui para administrar os usuários</a>
        </div>
    </div>
</body>
@endsection   


