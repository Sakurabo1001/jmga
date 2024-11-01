<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Carbon;

class RatingController extends Controller
{
    public function rating()
    {
        // モデルから最新の評価データを取得
        $beef_hinsh_month = Rating::getLatestBeefHinshMonth();

        // ビューにデータを渡す
        return view('rating', [
            'rs' => ['beef_hinsh_month' => $beef_hinsh_month]
        ]);
    }
}
