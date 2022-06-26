<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
      
    }

    public function index()
    {
        $products = Product::all();
        //dd($products);
        return view('admin.index', compact('products'));
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
