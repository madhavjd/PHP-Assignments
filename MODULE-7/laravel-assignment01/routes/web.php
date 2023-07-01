<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/menu', [App\Http\Controllers\PizzaController::class, 'menu']);
Route::get('/services', [App\Http\Controllers\PizzaController::class, 'Services']);
Route::get('/blog', [App\Http\Controllers\PizzaController::class, 'blog']);
Route::get('/about', [App\Http\Controllers\PizzaController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\PizzaController::class, 'contact']);
Route::get('call-procedure', function () {
    $id = 6;
    $getPost = DB::select(
       'CALL GetUserInfo('.$id.')'
    );
    dd($getPost);
      
});
Route::get('/querybuilder', function (){
    // $users = DB::table('employees')->where('id',3)->get();
    // $users = DB::table('employees')->insert([
    //     'firstname'=>'Vipul',
    //     'lastname'=>'Bhatt',
    //     'email'=>'vip@gmail.com',
    //     'mobile'=>'7012345678',
    //     'branch_id'=>'89',
    //     'salary'=>'32000',
    // ]);
//    $users = DB::table('employees')->where('id',7)->update(['firstname'=>'abc']);
   $users = DB::table('employees')->where('id',7)->delete();
    dd($users);
});
Route::get('/ORM', function (){
     $users = employees::where('id',3)->get();
    // $users = DB::table('employees')->insert([
    //     'firstname'=>'Vipul',
    //     'lastname'=>'Bhatt',
    //     'email'=>'vip@gmail.com',
    //     'mobile'=>'7012345678',
    //     'branch_id'=>'89',
    //     'salary'=>'32000',
    // ]);
//    $users = DB::table('employees')->where('id',7)->update(['firstname'=>'abc']);
//    $users = DB::table('employees')->where('id',7)->delete();
    dd($users);
});
