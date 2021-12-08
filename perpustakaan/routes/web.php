<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MemberController;
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
//     return view('home');
// });

Route::get('/', [MemberController::class, 'index']);
//menangani CRUD
Route::resource('/book', BookController::class);
Route::resource('/member', MemberController::class);
Route::resource('/loan', LoanController::class);

Route::get('/backLoan', function () {
    return view('backLoan', ["siteName" => "KEMBALI"]);
});
