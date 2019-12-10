@extends('admin/base')
@section('title', 'Pag DOADORES')

@section('content')
<body>
  
        <div class="container">
        <h2> Lista de doadores cadastrados </h2>  
        </div><br>
        <div class="container w-70">
        <a href="{{url('admin/doadores/create')}}" class="btn btn-primary"> Novo Doador</a>
        </div><br>
        
        
        <table class="table table-striped">
            <thead>
                <th> # </th> 
                <th> Nome </th> 
                <th> Data de Nascimento</th> 
                <th> E-mail</th> 
                <th> Endereço </th> 
                <th> Cidade </th> 
                <th> Estado </th>
                <th> CEP </th>
                <th> RG </th> 
                <th> CPF </th> 
                <th> Telefone </th>
                <th> Tipo Sanguíneo </th>
                <th></th>                    
            </thead>
            
            <tbody>
            
            @foreach($doadores as $doador)
                <tr>
                    <td>{{$doador->id}}</td> 
                    <td>{{$doador->nome}}</td>
                    <td>{{$doador->data_nascimento}}</td>
                    <td>{{$doador->email}}</td>
                    <td>{{$doador->endereco}}</td>
                    <td>{{$doador->cidade}}</td>
                    <td>{{$doador->estado}}</td>
                    <td>{{$doador->cep}}</td>
                    <td>{{$doador->rg}}</td>
                    <td>{{$doador->cpf}}</td>
                    <td>{{$doador->telefone}}</td>
                    <td>{{$doador->tipo_sangue}}</td>
                    <td>
                        <a href="{{url('admin/doadores/'.$doador->id.'/edit')}}"><button class="btn btn-primary" type='submit'>Editar</button></a>
                        <form method="post" action="{{url('admin/doadores/'.$doador->id)}}"><br>
                            @csrf
                            <input type="hidden"  name="_method" value="DELETE"> <button class="btn btn-secondary" type='submit'>Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    
 </body>       

@endsection   
 