<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

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

Route::get('importExportView', [SampleController::class, 'importExportView'])->middleware('auth');
Route::post('import', [SampleController::class, 'import'])->name('import');
Route::post('upload', [SampleController::class, 'upload'])->name('upload');

Route::get('/home', function () {
    // dd('ログイン成功');
    return view('home');
})->middleware('auth');