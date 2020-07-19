<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
        public function Customers(){

            return view('customers.customers',['title'=>'Dms']);

        }
}
?>