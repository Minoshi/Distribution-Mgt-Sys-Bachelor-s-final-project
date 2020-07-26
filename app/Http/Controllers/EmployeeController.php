<?php

namespace App\Http\Controllers;

class EmployeeController extends Controller
{
        public function Employees(){

            return view('employees.employees',['title'=>'Employee']);

        }
}
?>