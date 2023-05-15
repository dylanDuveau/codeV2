<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\bddController;

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

Route::get('/', function () { return view('welcome');});
Route::get('formulaire', [PostController::class,'formulaire']);
Route::get('/qrcode', [bddController::class,'qrcode']);
Route::get('/codebarre', [bddController::class,'barrecode']);
Route::post('post', function (Illuminate\Http\Request $request) {
    // on récup les input numero/description
    $numero = $request->input('numero');
    $description = $request->input('description');


    return view('vue', [
        'numero' => $numero,
        'description' => $description,
    ]);
});
Route::get('/download-pdf', [bddController::class,'downloadPDF'])->name('download-pdf');
Route::get('/download-pdf', [bddController::class,'downloadPDF'])->name('download-pdf');

