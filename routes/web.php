<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SubscriptionMail;
app()->setlocale("ptbr");
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
    return view('bootstrap.index_offline');
});
Route::get("registro",function (){
    return view("bootstrap.registro");
});
Route::get("error", function(){
    if(!isset($_SESSION["errorData"])){
            return "fail";
        } else {
            $errorData = $_SESSION["errorData"];
            return view("bootstrap.erros_cadlogin")->with($errorData);
    }
});
Route::get("mailteste", function(){
    // app('translator')->get("site.subscription");
    Mail::to("daniel.santos.ap@gmail.com")->send(new SubscriptionMail());
    return view("bootstrap.mails.teste_template");
});
Route::post("add/actInputRegistro", [App\Http\Controllers\AddController::class, 'actInputRegistro']);


