<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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


// Grouper l'application par le puffix "gestion"
Route::group(['prefix' => 'gestion', 'middleware' => 'auth'], function () {

    Route::resource('clients', ClientController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class)->except(['update']);
    Route::post('products/{product}/update', [ProductController::class, 'update'])->name('products.update');
});

Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => [
            'required',
            'string',
            'max:255',
        ],
        'password' => [
            'required',
            'string',
            'max:255',
        ],
    ]);

    if (!Auth::attempt($credentials)) {
        throw ValidationException::withMessages([
            'email' => 'Invalid credentials'
        ]);
    }

    return redirect()->route('users.index');
});

Route::post('logout', function () {
    Auth::logout();

    return redirect('login');
});
