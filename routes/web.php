<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
return response ('<h1>welcome </h1>', 404)
->header('Content-Type', 'text/plain')
->header('foo', 'bar');
});

Route::get('/posts/{id}', function ($id){
    ddd($id);
    return response ('Post ' . $id);
  
    })-> where('id', '[0-9]+');
    
    Route::get('/search', function (Request $request){

       return($request -> name . ' ' . $request ->city);
        
        });
        