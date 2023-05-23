<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\DBController;
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('hello', function(){
    return view('hello.index');
});
*/
//Route::get('hello', [HelloController::class, 'index']);
Route::get('hello', [HelloController::class, 'index'])->middleware('hello');
Route::post('hello', [HelloController::class, 'post']);

Route::get('registrate', function(){
    return view('database.registrate');
});

Route::get('hello2', [DBController::class, 'index']);
Route::post('hello2', [DBController::class, 'post']);

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

/*
Route::get('/', function () {
    return view('welcome');
});

$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999; }
h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
</style>
</head>
<body>
    <h1>Hello</h1>
    <p>This is sample page.</p>
    <p>これはサンプルページです。</p>
</body>
</html>
EOF;

Route::get('hello', function() use ($html){
    return $html;
});

 
Route::get('hello/{msg}', function($msg){

    $html2 = <<<EOF
    <html>
    <head>
    <title>Hello</title>
    <style>
    body {font-size:16pt; color:#999; }
    h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
    </style>
    </head>
    <body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>これはサンプルページです。</p>
    </body>
    </html>
    EOF;

    return $html2;
});
*/
