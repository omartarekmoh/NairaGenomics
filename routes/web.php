<?php

use App\Models\Gene;
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
    $genes = Gene::all();

    return view('pages.index', compact('genes'));
});

Route::get('/{gene}', function (Gene $gene) {
    return view('pages.gene', compact('gene'));
})->name('gene');


Route::get('/download/{gene}', function (Gene $gene) {
    return response()->download(public_path('fasta/' . $gene->name . '.zip'));
})->name('download');
