<?php

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

Route::post('/signup',[
	'uses'=>'UserController@userSignUp',
	'as' => 'signup'
]);

Route::post('/signin',[
	'uses'=>'UserController@userSignIn',
	'as' => 'signin'
]);
Route::post('/createpost',[
'uses' => 'PostController@postCreatePost',
 'as' => 'post.create'

]);

/*
*/

Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);
Route::get('/welcome', [
    'uses' => 'UserController@getmainpage',
    'as' => 'welcome'
]);
Auth::routes();

Route::get('/home', [
'uses'=> 'UserController@gethome',
'as' => 'home'

]);

Route::get('/post', [
'uses'=> 'PostController@gethomepost',
'as' => 'post'

]);
Route::get('/profile', [
'uses'=> 'UserController@getprofile',
'as' => 'profile'

]);