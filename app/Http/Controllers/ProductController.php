<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();

        if ($products->isEmpty()){
            echo "データが存在しません";
        } else {
            return view('products.index', compact('products'));
        }
    }
}
