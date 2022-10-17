<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    //Mostrar todos los Productos
    public function index(){
        $products = Product::oldest('id')->filter(request(['category_id', 'search']))->paginate('8');
        if (Route::current()->action['prefix']==="/admin") {
            return view('admin.products.index', [
                'products' => $products
            ]);
        }
        return view('products.index', [
            'products' => $products
        ]);
    }
    //Mostrar un solo Producto
    public function show(Product $product){
        if (Route::current()->action['prefix']==="/admin") {
            return view('admin.products.show', [
                'product' => $product
            ]);
        }
        return view('products.show', [
            'product'=>$product
        ]);
    }
    //Mostrar Creacion de Producto
    public function create(){
        return view('admin.products.create');
    }
    //Guarda datos de Creacion
    public function store(Request $request){
        $formFields = $request->validate([
            'name'=>'required',
            'category_id'=>'required'
        ]);
        Product::create($formFields);
        return redirect('/');
    }
}
