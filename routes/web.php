<?php

// 静的ページ共通ルート
use App\Http\Controllers\StaticPageController;

// 静的ページ

// 静的ページ共通ルート
Route::get('/{any?}', [StaticPageController::class, 'show'])
    ->where('any', '.*');

