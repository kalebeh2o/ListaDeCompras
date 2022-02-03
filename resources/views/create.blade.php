@extends('layouts.main')
@section('title' , 'Adicionar Produto')
@section('content')
              
        @if (session('msg'))
            <div class="col-md-8 mt-4">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></strong> {{session('msg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

        @endif
        <h1 class="text-center mt-5"> ADICIONAR PRODUTO </h1>
        <div class="container mt-5 col-md-5">
            <form action="/products" method="POST">
               @csrf
                    <div class="mb-3">
                        <label for="name"  class="form-label"> nome produto</label>
                        <input type="text" class="form-control" name="name" id="name"  required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label"> preço produto</label>
                        <input type="value" class="form-control" name="price" id="price"  required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" value="criar produto"  class="btn btn-outline-dark "> Salvar</button>

                    </div>

              
            </form>
            <a href="/">
                <button href="" class="btn btn-outline-danger "> Cancelar</button>  
            </a>
        </div>
@endsection