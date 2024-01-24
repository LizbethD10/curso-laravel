<?php
//namespace app\Http\Controllers\Dashboard;
 
//use app\Http\Controllers\Dashboard\TestController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\TestMiddleware;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route:: get ('/',function(){
    return view('welcome');
});

Route::middleware([App\Http\Middleware\TestMiddleware::class])->group(function()
{
    Route::get('/test/{id}/{name?}',function($id = 10, $name="pepe"){
        echo $id;
        echo $name;
    });
});

Route::group(['prefix'=>'dashboard'],function(){
     Route::resource('post', PostController::class) ;
     Route::resource('category', CategoryController::class) ;
    // Route:: resources([
    //     'post'=>PostController::class;
    //     'Category'=>CategoryController::class;
    // ]);

});

// Route::controller(PostController::class)->group(function(){
// });
//Route::get('/category/{is',[CategoryController::class,'new']);

    




