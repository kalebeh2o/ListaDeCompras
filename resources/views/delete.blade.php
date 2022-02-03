@extends('layouts.main')
@section('title' , 'Deletar Produto')
@section('content')
              

        <h1 class="text-center mt-5"> DELETAR PRODUTO </h1>
        <div class="container mt-5 col-md-5">
           <form action="/delete/{{$product->id}}" method="POST">
               @csrf
               @method('DELETE')
                <div class="mb-3">
                    <label for="name"  class="form-label"> nome produto</label>
                    <input type="text" value="{{$product->name}}" class="form-control" name="nome" id="name"  required disabled> 
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label"> preço produto</label>
                    <input type="value" value="{{$product->price}}" class="form-control" name="preco" id="price"  required disabled>
                </div>
                <div class="mb-3">
                 <button type="submit"  value="excluir produto" class="btn btn-outline-dark "> Excluir </button>
                 
                 
                </div>
            </form>
            <a href="/">
                <button href="" class="btn btn-outline-danger "> Cancelar</button>  
            </a>
        </div>
@endsection