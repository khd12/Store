<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});



/*Route::get('admin/products/create',function(){

return view ('admin.products.create');

});

Route::get('admin/products',function(){

    return view ('admin.products.index');

    });*/


    //Dashboard Routes




    Route::get('products',[ProductController::class,'index']);
    Route::get('products/create',[ProductController::class,'create']);
    Route::post('products/store',[ProductController::class,'store']);
    Route::get('products/edit{{id}}',[ProductController::class,'edite']);
    Route::get('products/delete{{id}}',[ProductController::class,'destroy']);
    Route::patch('products/update{{id}}',[ProductController::class,'update']);


    Route::get('categories',[CategoryController::class,'index']);
    Route::get('categories/create',[CategoryController::class,'create']);
    Route::post('categories/store',[CategoryController::class,'store']);
    Route::get('categories/edit{{id}}',[CategoryController::class,'edite']);
    Route::get('categories/delete{{id}}',[CategoryController::class,'destroy']);
    Route::patch('categories/update{{id}}',[CategoryController::class,'update']);



    //Front Page Routes

    Route::get('/', [FrontController::class,'index']);


    Route::get('/', function(){
        $products = Product::all();
        return view('home.index',compact('products'));
    });

    Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');