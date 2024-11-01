<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Rating extends Model
{
    //　テーブル名を指定
    protected $table = 't_ratings';

    public static function getLatestBeefHinshMonth()
    {
        // データの抽出条件
        $where = [
            ['publishKbn', 1],
            ['publishDate', '<=', Carbon::today()]
        ];

        // 最新のデータを取得
        return self::where($where)
            ->orderBy('spanYear', 'DESC')
            ->orderBy('spanMonth', 'DESC')
            ->first();
    }
}
