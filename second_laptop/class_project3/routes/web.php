<?php 



Route::get('/',function(){
    return view('welcome');
});

Route::get('/students',function(){
    return "all students";
});
// students/edit.php

Route::get('/student/edit',function(){
    return "syudent edit";
});

// get method
// dynamic get method
// this is called preety url
// the more you add variable in the url more have to add 
// in the function
// this is called preety url
//Route::get('/student/edit/do/{id}',function($id){
//    return $id;
//});

// if it is not absolutely necessary
// if it is optional

// in optional you have to set to the variable null or some default 
// value

//Route::get('/student/edit/do/{id?}',function($id=null){
//    return $id;
//});

// if you only except numerical value
// Route::get('/student/edit/do/{id?}',function($id=null){
//     return $id;
// })->where("id","[0-9]+");

//Route::get('/student/edit/do/{username?}',function($username=null){
//         return $username;
//     });


    
// post request

//Route::post('/student/edit/do/{username?}',function($username=null){
//    return $username;
//});

// if there is same url this will be overwrite
// and last one is executed


// if we want to do any post or get both then this
// command will work

//Route::match(['get','post'],'/student/edit/do/{username?}',function($username=null){
//        return $username;
//    });

// if wou want any thinng which will be accepted then this will apply

//Route::any('/student/edit/do/{username?}',function($username=null){
//            return $username;
//        });

//Route::get('/student/{name?}/{id?}',function($id=null,$name=null){
//    return [$id,$name];

//});

// to set the root by default with a prefix



// you have to write under a prefix to set the root directory

Route::prefix('/employees')->group(function(){
    Route::get('/edit/{id?}',function($id){
        return $id;
    });

});
    


    //namespace view hw
