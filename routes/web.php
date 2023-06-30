<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartyPlusController;
use App\Http\Controllers\DBController;
use App\Http\Middleware\PartyPlusMiddleware;

Route::get('/', function () {
    return view('welcome');
});

$BASE_DIR = "PartyPlus";

$TABLE_NAME_CUSTOMER = "/customers";
$TABLE_NAME_EVENT = "/Event";

Route::get($BASE_DIR, [PartyPlusController::class, 'index'])->middleware('partyplus');
Route::post($BASE_DIR, [PartyPlusController::class, 'post']);

Route::get($BASE_DIR . '/add', [PartyPlusController::class, 'add']);
Route::post($BASE_DIR . '/add', [PartyPlusController::class, 'insert']);

Route::get($BASE_DIR . '/edit', [PartyPlusController::class, 'edit']);
Route::post($BASE_DIR . '/edit', [PartyPlusController::class, 'update']);

Route::get($BASE_DIR . '/del', [PartyPlusController::class, 'del']);
Route::post($BASE_DIR . '/del', [PartyPlusController::class, 'remove']);

Route::get($BASE_DIR . '/show', [PartyPlusController::class, 'show']);
Route::get($BASE_DIR . '/show_by_name', [PartyPlusController::class, 'show_by_name']);
Route::get($BASE_DIR . '/show_by_age', [PartyPlusController::class, 'show_by_age']);

Route::get($BASE_DIR . $TABLE_NAME_EVENT, [PartyPlusController::class, 'index_event'])->middleware('partyplus');
Route::post($BASE_DIR . $TABLE_NAME_EVENT, [PartyPlusController::class, 'post_event']);

Route::get($BASE_DIR . $TABLE_NAME_EVENT . '/add', [PartyPlusController::class, 'add_event']);
Route::post($BASE_DIR . $TABLE_NAME_EVENT . '/add', [PartyPlusController::class, 'insert_event']);

Route::get($BASE_DIR . $TABLE_NAME_EVENT . '/edit', [PartyPlusController::class, 'edit_event']);
Route::post($BASE_DIR . $TABLE_NAME_EVENT . '/edit', [PartyPlusController::class, 'update_event']);

Route::get($BASE_DIR . $TABLE_NAME_EVENT . '/del', [PartyPlusController::class, 'del_event']);
Route::post($BASE_DIR . $TABLE_NAME_EVENT . '/del', [PartyPlusController::class, 'remove_event']);

Route::get($BASE_DIR . $TABLE_NAME_EVENT . '/show', [PartyPlusController::class, 'show_event']);
Route::get($BASE_DIR . $TABLE_NAME_EVENT . '/show_by_name', [PartyPlusController::class, 'show_event_by_name']);
Route::get($BASE_DIR . $TABLE_NAME_EVENT . '/show_by_age', [PartyPlusController::class, 'show_event_by_age']);

Route::get('registrate', function(){
    return view('database.registrate');
});