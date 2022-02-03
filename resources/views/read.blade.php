@extends('layouts.main')
@section('title' , 'Ler Produtos')
@section('content')
        
        @if (session('msg'))
            <div class="col-md-5 mt-4">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Olá administrador!</strong> {{session('msg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

        @endif


        <h1 class="text-center mt-5"> PRODUTOS </h1>
        <div class="container mt-5 col-md-5">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome produto</th>
                        <th scope="col">preço</th>
                        <th scope="col">Data de inserção</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                     @foreach($products as $product)                 
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}} R$</td>
                            <td>{{$product->created_at}}</td>
                          
                            <td>
                                <a href="/atualizar/{{$product->id}}"> 
                                    <i class="fa fa-pencil" aria-hidden="true"> </i>
                                </a> 
                            </td>
                            
                             <td>
                                <a href="/deletar/{{$product->id}}"> 
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>  

            <a href="/criar">
                 <button type="button" class="btn btn-outline-dark">
                     <i class="fa fa-cart-plus" aria-hidden="true"></i>

                     Criar um novo produto

                 </button>
            </a>
           
           
@endsection
