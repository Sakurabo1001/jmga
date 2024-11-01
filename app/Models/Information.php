<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Information extends Model
{
    // テーブル名を指定
    protected $table = 't_informations';

    public function scopeIsPublished($query, ?int $fixKbn = null)
    {
        $query->where('publishKbn', 1)
            ->whereDate('publishDateF', '<=', Carbon::today())
            ->where(function ($query) {
                $query->whereNull('publishDateT')
                    ->orWhere('publishDateT', '>=', Carbon::today());
            });

        // $fixKbnがnullでない場合のみ条件を追加
        if (!is_null($fixKbn)) {
            $query->where('fixKbn', $fixKbn);
        }

        $query->orderBy('publishDateF', 'DESC');
    }
}
