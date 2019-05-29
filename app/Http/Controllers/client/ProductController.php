<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
    	// $data = Product::paginate(8);
        //product view cao
    	$hot_product = Product::orderBy('view','desc')->take(4)->get();
        // product sale
        // $sale = Product::where('stt',2)->orderBy('id','desc')->take(4)->get();
    	return view('client.index',compact('hot_product'));
    }
}
