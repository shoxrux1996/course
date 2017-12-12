<?php
use App\Notifications\TelegramNotification;
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
Route::get('/test', function (){
    $user = \App\User::find(1);
    
    $user->notify(new TelegramNotification());
});
Route::post('/t',function (\Illuminate\Http\Request $request){
    dd($request->name);
})->name('submit');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
