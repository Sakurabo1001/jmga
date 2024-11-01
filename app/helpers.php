<?php
/*
 * helpers.phpが動かない場合は以下のコマンドを実行する
 * composer dump-autoload
 * */


use Carbon\Carbon;

/*
 * 日付を任意のフォーマットに変換
 * */
if (! function_exists('convertToWareki')) {
    function convertToWareki($date) {
        // 日付の年・月・日を抽出
        $year = (int)date('Y', strtotime($date));
        $month = date('m', strtotime($date));
        $day = date('d', strtotime($date));

        // 元号と開始年を定義
        $eras = [
            ["name" => "令和", "start" => 2019],
            ["name" => "平成", "start" => 1989],
            ["name" => "昭和", "start" => 1926],
            ["name" => "大正", "start" => 1912],
            ["name" => "明治", "start" => 1868]
        ];

        foreach ($eras as $era) {
            if ($year >= $era["start"]) {
                $warekiYear = $year - $era["start"] + 1;
                $warekiYear = ($warekiYear === 1) ? "元" : $warekiYear;
                return "{$era["name"]}{$warekiYear}年{$month}月{$day}日";
            }
        }

        return "明治以前の年は対応していません";
    }
}

/**
 * お知らせの区分を取得
 * @return array
 */
if (! function_exists('getInfoKbn')) {
    function getInfoKbn($key)
    {
        $array = array(
            1 => 'お知らせ',
            2 => '格付結果',
        );
        if($key) {
            return $array[$key];
        }
        return $array;
    }
}
