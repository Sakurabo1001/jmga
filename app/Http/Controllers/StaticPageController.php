<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function show(...$segments)
    {
        // セグメントを `.` で結合してビューのパスを生成
        $viewPath = implode('.', $segments);

        // 指定されたビューが存在するかを確認
        if (view()->exists("pages.{$viewPath}")) {
            return view("pages.{$viewPath}");
        }

        // 存在しない場合は404エラーを返す
        abort(404);
    }
}
