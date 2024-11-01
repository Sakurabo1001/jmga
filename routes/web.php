<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\RatingController;

// トップページのルート
Route::get('/', [InformationController::class, 'Index']);

// お知らせページのルート
Route::get('/information', [InformationController::class, 'Information']);

// お知らせ詳細ージのルート
Route::get('/information/entry/{informationCd}', [InformationController::class, 'detail']);

// 格付結果情報ページのルート
Route::get('/rating', [RatingController::class, 'rating'])->name('rating');


// 静的ページ共通ルート
Route::get('/{any?}', [StaticPageController::class, 'show'])
    ->where('any', '.*');

