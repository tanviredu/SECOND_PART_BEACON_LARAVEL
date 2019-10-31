<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



// controller is for  returning the viw of the registration page

class RegistrationController extends Controller
{
    public function index(){
        return view('registration');
    }

// if submit button hit this function will
// be executed

    // the message will be posted and the function will be here 
    // in this functuction
    public function save(){
        //return 'saved';
        var_dump(request()->all()); // lets see all the rata that are coming with a var dump 
    }
}
