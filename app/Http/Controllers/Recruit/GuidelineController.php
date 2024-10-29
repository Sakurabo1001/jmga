<?php

namespace App\Http\Controllers\Recruit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuidelineController extends Controller
{
    protected $title;
    protected $breadcrumbs;
    protected $subTitle;
    protected $description;
    protected $keywords;

    public function __construct()
    {
        $this->subTitle = '-&nbsp;recruit guideline&nbsp;-';
        $this->breadcrumbs = [
            'ホーム' => url('/'),
            '採用情報' => url('/recruit/'),
        ];
    }

    public function index()
    {
        // データの設定
        $this->title = '令和7年度募集要項';
        $this->breadcrumbs[$this->title] = null;
        $this->description = '募集要項についてご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。';
        $this->keywords = '募集,要項,採用,情報,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人';

        // ビューにデータを渡す
        return view('recruit.guideline.index', [
            'title' => $this->title,
            'pageTitle' => $this->title,
            'breadcrumbs' => $this->breadcrumbs,
            'subTitle' => $this->subTitle,
            'description' => $this->description,
            'keywords' => $this->keywords,
        ]);
    }
}
