<?php

use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;




Route::get('/',function(){
    return view('welcome');
});

// Route::get('/admin/post',array('as' => "admin.home", function(){
//     $url = route("admin.home");
//     return $url;
// }));

//Route::get('/post/{id}',[Postcontroller::class,"index"]);
Route::resource('posts',Postcontroller::class);



Route::group(['middleware' => ["web"]],function(){

});