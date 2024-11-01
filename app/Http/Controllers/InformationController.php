<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Validation\Rules\In;


class InformationController extends Controller
{
    // トップページのお知らせ表示処理
    public function index()
    {
        $rsFix = Information::isPublished(1)->get();
        $rs = Information::isPublished(0)->get();

        // indexビューにデータを渡す
        return view('index', compact('rsFix', 'rs'));
    }

    // お知らせページのお知らせ表示処理
    public function information()
    {
        $rsAll = Information::isPublished()->get();

        // informationビューにデータを渡す場合
        return view('information', compact('rsAll'));
    }

    // お知らせ詳細ページの表示処理
    public function detail($informationCd)
    {
        // お知らせコード(informationCd)でお知らせデータを取得
        $information = Information::where('informationCd', $informationCd)->first();

        // 該当のお知らせが存在しない場合は一覧ページへリダイレクト
        if (!$information) {
            return redirect('/information');
        }

        // entryビューに取得したお知らせデータを渡す
        return view('information.entry', compact('information'));

    }
}
