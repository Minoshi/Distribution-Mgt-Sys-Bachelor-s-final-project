<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
        public function Categories(){

            return view('categories.categories',['title'=>'Dms']);

        }
}
?>