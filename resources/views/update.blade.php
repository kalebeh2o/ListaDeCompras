@extends('layouts.main')
@section('title' , 'Atualizar Produto')
@section('content')
              

        @if (session('msg'))
            <div class="col-md-8 mt-4">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></strong> {{session('msg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

        @endif
        <h1 class="text-center mt-5"> ATUALIZAR PRODUTO  </h1>
        <div class="container mt-5 col-md-5">
           <form  action="/update/{{$product->id}}" method="POST">
               @csrf
               @method('PUT')
                <div class="mb-3">
                    <label for="name"  class="form-label"> nome produto</label>
                    <input type="text" class="form-control" value="{{$product->name}}" name="name" id="name"  required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label"> preço produto</label>
                    <input type="value" class="form-control" value="{{$product->price}}" name="price" id="price"  required>
                </div>
                <div class="mb-3">
                 <button type="submit" value="editar produto" class="btn btn-outline-dark "> Salvar</button>

                 
                </div>
            </form>
             <a href="/">
                <button href="" class="btn btn-outline-danger "> Cancelar</button>  
            </a>
        </div>
@endsection