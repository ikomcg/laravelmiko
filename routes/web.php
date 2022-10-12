<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UriController;
use App\Http\Controllers\UserRegistration;

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

// Route::get('/', [home::class, 'index']);
// Route::get('/about',[home::class, 'about']);
// Route::get('/Contact',[home::class, 'edi']);

// Route::get('/try/{category?}/{item?}', function ($category= null, $item = null) {

//     if(isset($category)){

//         if(isset($item)){
//              return "You viewing the {$category} for {$item}";
//         }
//         return "you viewing the". strip_tags($category);
//     }
//      return "Home Page";
//  });
 
// Route::get('/role',[
// 		'middleware' => 'Role:editor',
// 		'uses' => 'App\Http\Controllers\TestController@index',
// 	]);

// Route::get('/foo/bar', 'App\Http\Controllers\UriController@index');

// Route::get('/register',function(){return view('register');});

// Route::post('/user/register', array('uses'=>'App\Http\Controllers\UserRegistration@postRegistration'));

Route::get('/', function(){
    return view('welcome');
});
Route::get('/register', function(){
    return view('register');
});
Route::get('/home', [UserRegistration::class, 'postRegistration']);

Route::get('/user/{id}', [UserRegistration::class, 'show']);

?>