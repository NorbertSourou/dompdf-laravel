<?php

use App\Http\Controllers\PDFController;
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
    return view('welcome');
});
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

Route::get('generate-recuA4', [PDFController::class, 'generateRecuA4']);

Route::get('statistiqueCaisse-pdf', [PDFController::class, 'statistiqueCaissePDF']);

Route::get('statistiquefamille-pdf', [PDFController::class, 'statistiquefamille']);
