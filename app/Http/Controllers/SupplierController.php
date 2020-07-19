<?php

namespace App\Http\Controllers;

class SupplierController extends Controller
{
        public function Suppliers(){

            return view('suppliers.suppliers',['title'=>'Dms']);

        }
}
?>