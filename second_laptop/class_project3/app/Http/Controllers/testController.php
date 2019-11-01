<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){
    $email = "tanvirrahman@gmail.com";
    $name = "Tanvir Rahman";

    return view('math',['email' => $email,'name'=>$name ]);

    }

   // public function posttest(Request $request){

     //   $name = $request->input('name'); // this is how you fetch the
                                         // the post data
        // and the form  post will redirect to the /test link
        // and method will be like POST


       // }

       
}
