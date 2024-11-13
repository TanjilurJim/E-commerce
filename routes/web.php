<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\products;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Middleware\Calculate;


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

Route::get('/', function(){
    return view('welcome');
});

// Route::get('/', function (Request $request) {   
    
//     $token = $request->session()->token();
//     // return view('welcome');
//     return $token;
// });

Route::post('/posts', function(){
    return "It worked";
    
});  

Route::get('/about',[PostsController::class,'index']);

// Route::get('/products',[products::class,'index']);
 

// Route::get('/{id?}/{status? }', function ($id=null,$status=null) {return $status;});
// dependency injection and redirects
// Route::redirect("/", "/profile");


Route::get('/profile', function () {
    return "Profile";
});

// Route::get("/user",[UserController::class,"show"]);

Route::resources(['products'=>products::class,
'user' => UserController::class,
'posts'=> PostsController::class,


]);

Route::get('/practice', function(){
    return view('practice');
});


// Route::post('/', function () {
//     return view('welcome');
// });
// Route::put('/', function () {
//     return view('welcome');
// });
// Route::patch('/', function () {
//     return view('welcome');
// });