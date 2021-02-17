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

Route::group(['prefix' => '/admin','namespace'=>'Admin','middleware'=>'admin:admin'],function(){
        
  
    Route::get('/', "AdminController@index")->name('admins.dashboard');

    // Invoices
    Route::group(['prefix' =>'invoices'],function(){
        Route::get('/', 'InvoiceController@index')->name('admins.invoices');
    });
    
    // Sections
    Route::group(['prefix' =>'sections'],function(){
        Route::get('/', 'SectionController@index')->name('admins.sections');
        Route::post('/add', 'SectionController@store')->name('admins.sections.store');
    });
});





