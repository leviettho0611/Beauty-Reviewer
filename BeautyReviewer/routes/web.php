<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\MemberController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group([
    // chỉ vào folder frontend
    'namespace' => 'Frontend'
], function () {
    Route::get('/', [FrontendController::class, 'index']);
    
    //About us
    Route::get('/aboutus', [FrontendController::class, 'aboutus']);
    //Blog
    Route::get('/blog', [BlogController::class, 'blog']);
    Route::get('/blog/detail/{id}',[BlogController::class, 'detail']);
    Route::post('/blog/comment/{id}', [BlogController::class, 'blog_comment']);
    //Category
    Route::get('/category', [App\Http\Controllers\Frontend\CategoryController::class, 'category']);
    Route::get('/category/{id}', [App\Http\Controllers\Frontend\CategoryController::class, 'categorydetail']);
    //Search
    Route::get('/search', [FrontendController::class, 'search']);
});

//membernotlogin
Route::group(['middleware' => 'memberNotLogin'], function () {
    Route::get('/shop/register', [MemberController::class, 'showregister']);
    Route::post('/shop/register', [MemberController::class, 'register']);
    Route::get('/shop/login', [MemberController::class, 'showlogin']);
    Route::post('/shop/login', [MemberController::class, 'login']);
    Route::get('/shop/forgotpassword', [MemberController::class, 'showforgotpass']);
});

 //member
Route::group([
    'prefix' => 'shop',
    'middleware' => 'member'], function () {

    Route::get('/logout', [MemberController::class, 'logout']);
    Route::get('/account', [MemberController::class, 'account']);
    //updateaccount
    Route::post('/account', [MemberController::class, 'updateaccount']);
    //blog
    Route::get('/addblog', [BlogController::class, 'addblog']);
    Route::post('/addblog', [BlogController::class, 'create']);
    Route::get('/myblog', [BlogController::class, 'myblog']);
    Route::get('/myblog/edit/{id}',[BlogController::class, 'edit']);
    Route::post('/myblog/edit/{id}',[BlogController::class, 'update']);
    Route::get('/myblog/delete/{id}',[BlogController::class, 'delete']);
    
    

});  

//Backend
Auth::routes();

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Auth'
], function() {
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/',[LoginController::class, 'showLoginForm']);
    Route::get('/login',[LoginController::class, 'showLoginForm']);
    Route::post('/login',[LoginController::class, 'login']);
    Route::get('/logout',[LoginController::class, 'logout']);

});
Route::group([
    'prefix' => 'admin', //add "admin" before link
    'namespace' => 'Admin',
    'middleware' => ['admin']
], function () {
    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    //category
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/add', [CategoryController::class, 'create']);
    Route::post('/category/add', [CategoryController::class, 'store']);
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);
});