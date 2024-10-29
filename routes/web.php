<?php

// 静的ページ共通
use App\Http\Controllers\StaticPageController;

// 静的ページ

// 静的ページ共通
Route::get('/{any?}', [StaticPageController::class, 'show'])
    ->where('any', '.*'); // 任意のディレクトリ階層にマッチ

