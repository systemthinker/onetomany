<?php

use App\User;
use App\Post;
use App\Role;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create/user', function(){
    User::create(['name'=>'Robbert', 'email' => 'robbert@sjaakie.com']);
});

Route::get('/create/post', function(){
   DB::insert("INSERT INTO posts (title,content) values (?,?)",['Laravel','Laravel Homestead is the best!']);
});

Route::get('/create/role',function(){
   Role::create(['name'=>'Admin']);
});

Route::get('/user/{id}/roles',function($id){

    $user = User::findOrFail($id);

    foreach($user->roles as $role){
        echo $role->name;
    }
});

Route::get('role/{id}/users', function($id){
   $role = Role::findOrFail($id);

   foreach($role->users as $user){
       echo $user->name . '<br>';
   }

});

Route::resource('/posts', 'PostController');