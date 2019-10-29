<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


## when the /student
class StudentController extends Controller
{
    public function index(){
        #return "abs"; ## this will return the string
        ## we will return a view
        ## it will be under view folder
        return view('math');
    }
}
