<?php

use Illuminate\Support\Facades\Route;

// 静的ページ共通ルート
use App\Http\Controllers\StaticPageController;

// トップページのルート
Route::get('/', function () {
    return view('index');
});

// お知らせページのルート
Route::get('/information ', function () {
    return view('information ');
});

// 格付結果情報ページのルート
Route::get('/rating ', function () {
    return view('rating ');
});


// 静的ページ共通ルート
Route::get('/{any?}', [StaticPageController::class, 'show'])
    ->where('any', '.*');

