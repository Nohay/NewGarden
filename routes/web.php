<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\PrecommandeController;
use App\Http\Controllers\SessionController;
use GuzzleHttp\Middleware;

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

Route::get('/', [PrecommandeController::class, 'index']);

// Route::middleware([Authenticate::class])->group(function () {

// });


// Only authenticated users may enter...

Route::post('/precommande', [PrecommandeController::class, 'save'])->name('precomma)ende.save');


// sleep(60);
// return json_encode(["status" => "2", "message" => "L'utilisateur n'est pas connecté"]);



// Route::post('/session/put', [SessionController::class, 'addSessionArray'])->name('session.put');

Route::get('/logout', function () {
    Auth::logout();
});

Auth::routes();

Route::get('/test', [SessionController::class, 'ckeckSessionArray']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

