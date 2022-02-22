<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//routing
Route::get('/', function ($username ='Wildan') {
    return view('welcome', ['name' => $username]);
});

Route::get('/catalog/{type?}', function($type=''){
    return view('catalog', ['type' => $type]);
});

Route::get('/{type?}/{id?}', function($type='',$id=0){
    return view('itemdetail', ['type' => $type, 'id'=>$id]);
});

//routing with required parameter
Route::get('user/{id}', function($id){
    return "User ".$id;
});

Route::get('perkalian/{val1?}/{val2?}', function($val1=0, $val2=0){
    return view('perkalian',['val1'=>$val1, 'val2'=>$val2]);
});

//routing with optional parameter
Route::get('name/{name?}', function($name = 'default name'){
    return "Hello ".$name;
});

//routing with named parameter
Route::get('greeting/{username?}', function($username ='Default User'){
    return view('welcome', ['name' => $username]);
});
