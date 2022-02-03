<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Product;
class ProductController extends Controller
{
    public function index() {
      
            $products = Product::all();

            return view('read', ['products' => $products]);




    }

    public function delete ($id) {
        $product = Product::FindOrFail($id);

        return view('delete', ['product' =>$product]);

    }

    public function update ($id) {
        $product = Product::FindOrFail($id);

        return view('update', ['product' =>$product]);
        
    }
  
    public function create () {
          return view('create');
    }
    public function createSend (Request $request) {

        try {

            $product = new Product;

            $product->name = $request->name;
            $product->price = $request->price;
            $nameproduct = $request->name;

            $product->save();

            return redirect('/')->with('msg', 'último produto criado: '.$nameproduct);

        }catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->getMessage();
            return redirect('/criar')->with('msg', ' ERRO: dados inválidos inseridos no banco!!! ');
            echo $errorInfo;
        }
    }

    public function UpdateSend (Request $request) {
            
        try {
            $product = Product::FindOrFail($request->id)->update($request->all());

            $nameproduct = $request->name;
            return redirect('/')->with('msg', 'último produto atualizado: '.$nameproduct);

        }catch (\Illuminate\Database\QueryException $exception) {
            $id = $request->id;
            $errorInfo = $exception->getMessage();
            return redirect('/atualizar/'.$id)->with('msg', ' ERRO: dados inválidos inseridos no banco!!! ');
            echo $errorInfo;
        }
  


    }

    public function deleteSend ($id) {
        $product = Product::FindOrFail($id);
        $nameproduct = $product->name;
        $product->delete();

        return redirect('/')->with('msg', 'último produto deletado: '.$nameproduct);
    }
}
