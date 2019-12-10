@extends ('layouts.base')
@section ('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/doação.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Doe sangue! Salve vidas!!!</h1>
            <span class="subheading">Cadastre-se e ajuda a salvar vidas!</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2>Doadores Cadastrados</h2><br>
        @foreach($doadores as $doador)
        <div class="doador-preview">
          <a href="doador.html">
            <h4 class="doador-title">
              {{$doador->nome}} Tipo Sanguíneo: {{$doador->tipo_sangue}}
            </h4>
            
          </a>
          <p class="doador-meta">Cadastrou-se em {{$doador->created_at->format('d/m/y H:i')}}</p>
        </div>
        <hr>

        @endforeach

        
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>
@endsection

  