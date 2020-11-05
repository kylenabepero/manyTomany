<?php

use App\Models\User;
use App\Models\Role;

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

Route::get('/createRole', function(){

    $user= User::findOrFail(1);

//    $role= new Role(['name'=>'Faculty']);

//    $user->roles()->save( $role);
//    foreach ($user->roles as $role){
//        echo $role->name;
//    }
//    return dd($user->roles);
//    foreach ($user->roles as $role) {
//        if($role->name=='engineer'){
////            $role->name='engineer';
////            $role->save();
//            $role->delete();
//        }
//    }

    dd($user->roles()->getTable());

});



Route::get('/attach',function(){
    $user= User::find(2);
    $user->roles()->attach(5);

});
Route::get('/dettach',function(){
    $user= User::find(1);
    $user->roles()->detach(2);

});

Route::get('create',function(){

});
