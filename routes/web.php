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

Route::redirect('/', 'UI/Landing') ;
    
Route ::prefix('UI')->group(function(){
   Route::get('/Landing',function(){
        return view('UI.Landing');
 });
   Route::get('/details',function(){
         return view('UI.movie-details');
   });

});
