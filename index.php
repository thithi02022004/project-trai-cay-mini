<?php
session_start();
require_once "vendor\autoload.php";
require_once "config\config.php";
require_once "App\Config\database.php";
require_once "App\Config\limit.php";
use App\Routing\Route;

Route::add('/', 'HomeController@home');
Route::add('/product', 'ProductController@product');
Route::add('/product_detail', 'ProductController@product_detail');
Route::add('/show_login', 'UserController@show_login');
Route::add('/login', 'UserController@login');
Route::add('/show_register', 'UserController@show_register');
Route::add('/register_add', 'UserController@register_add');
Route::add('/account', 'UserController@account');
Route::add('/order_history', 'UserController@order_history');
Route::add('/cancel', 'UserController@cancel');
Route::add('/order_detail_user', 'UserController@order_detail_user');
Route::add('/logout', 'UserController@logout');
Route::add('/view_cart', 'CartController@view_cart');
Route::add('/add_cart', 'CartController@add_cart');
Route::add('/unset_cart', 'CartController@unset_cart');
Route::add('/checkout', 'CartController@checkout');
Route::add('/handle_checkout', 'CartController@handle_checkout');
Route::add('/update_cart', 'CartController@update_cart');
Route::add('/clear_cart', 'CartController@clear_cart');

// backend
Route::add('/dashboard', 'AdminController@dashboard');
Route::add('/list_category', 'CategoryController@list_category');
Route::add('/add_category', 'CategoryController@add_category');
Route::add('/handle_cate', 'CategoryController@handle_cate');
Route::add('/list_order', 'OrderController@list_order');
Route::add('/stage', 'OrderController@stage');
Route::add('/order_detail', 'OrderController@order_detail');
Route::add('/trash_order', 'OrderController@trash_order');
Route::add('/add_product_form', 'ProductController@add_product_form');

$uri = isset($_GET['url']) ? "/".rtrim($_GET['url'], '/') : '/';
Route::dispatch($uri);

?>