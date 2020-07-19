<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
        public function Products(){

            return view('products.products',['title'=>'Dms']);

        }
}
?>