@extends ('layouts.base')
@section ('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Doe Sangue. Salve Vidas!
                </div>

                <div class="links">
                    <a href="http://www.saude.gov.br/saude-de-a-z/doacao-de-sangue">Tudo sobre a doação</a>
                    <a href="http://saude.gov.br/saude-de-a-z/doacao-de-sangue/hemocentros-no-brasil">Hemocentros no Brasil</a>
                    <a href="http://saude.gov.br/saude-de-a-z/doacao-de-sangue/criterios-para-doacao">Critérios para doação</a>
                    <a href="http://saude.gov.br/saude-de-a-z/doacao-de-sangue/legislacao">Legislação</a>
                    <a href="cadastro">Doe Sangue! cadastre-se aqui</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
@endsection