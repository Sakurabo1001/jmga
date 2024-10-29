<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    protected $view;
    protected $src;
    protected $title;
    protected $breadcrumbs;
    protected $subTitle;

    public function __construct()
    {
        $this->title = 'インターンシップ';
        $this->subTitle = '-&nbsp;internship&nbsp;-';
        $this->breadcrumbs = [
            'ホーム' => url('/'),
            $this->title => null,
        ];
    }

    public function index()
    {
        $description = 'インターンシップについてご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。';
        $keywords = 'インターンシップ,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人';

        // FuelPHPのafterメソッドに相当する処理を実行
        return view('other.internship.index', [
            'title' => $this->title,
            'pageTitle' => $this->title,
            'breadcrumbs' => $this->breadcrumbs,
            'description' => $description,
            'keywords' => $keywords,
            'subTitle' => $this->subTitle,
        ]);
    }
}
