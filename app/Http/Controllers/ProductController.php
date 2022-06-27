<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
      
    }
    
    public function index()
    {   
        $products = Product::all();
        //dd($product);
        return view('client.index', compact('products'));
    }


    public function buy(Request $request){

        $product = DB::table('products')
        ->where('id', '=', $request->product_id)
        ->decrement('stock', 1);
        //dd($product);
        //return $product;

        $buy = new Buy();
        $buy->user_id = Auth::user()->id;
        $buy->product_id = $request->product_id;
        //$buy -> amount = 100;
        //$buy->price = $request->price;
        //dd($buy);
        $buy->save();


        return redirect('/producto')->with('status', 'Compra realizada con exito');
        
       /*  $product = new Product();
        $product->id = $request->input('product_id');
        dd($product); */
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
