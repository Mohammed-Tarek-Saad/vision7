<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RdController;


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

Route::get('/', [RdController::class, 'home'])->name('home');
Route::get('/about', [RdController::class, 'about']
)->name('about');
Route::get('/contact', [RdController::class, 'contact']
)->name('contact');


// Route::get('/',function(){
//     $name='Ali';
//     $id=5;
//     $id2=10;    
    
//    // return route('contactpage', [$name , $id ,$id2]);
//     return url('/');
// });

// Route::get('user/{name}/posts/{id}/comment/{id2}',function($name, $id, $id2){
//     return "$name , $id , $id2";
// })->name('contactpage');

// Route::get('/',[MainController::class, 'home'])->name('home');



