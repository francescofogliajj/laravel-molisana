<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {

    $data = config('pasta');

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($data as $key => $pasta) {

        $pasta["id"] = $key;

        if ($pasta["tipo"] == "lunga") {
            $lunghe[] = $pasta;
        } elseif ($pasta["tipo"] == "corta") {
            $corte[] = $pasta;
        } elseif ($pasta["tipo"] == "cortissima") {
            $cortissime[] = $pasta;
        }

    }

    return view('home', compact('lunghe', 'corte', 'cortissime'));
})->name('home');

Route::get('/prodotto/{id}', function ($id) {

    $data = config('pasta');

    return view('product', [
        'product' => $data[$id],
        'id' => $id,
        'max' => count($data) - 1
    ]);
})->name('prodotto');

Route::get('/news', function () {
    return view('news');
})->name('news');;