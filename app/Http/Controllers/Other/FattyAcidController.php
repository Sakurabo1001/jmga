<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FattyAcidController extends Controller
{
    protected $view;
    protected $src;
    protected $title;
    protected $breadcrumbs;

    public function __construct()
    {
        $this->title = '豚枝肉の脂肪酸測定について';
        $this->breadcrumbs = [
            'ホーム' => url('/'),
            $this->title => null,
        ];
    }

    public function index()
    {
        $description = '豚枝肉の脂肪酸測定についてご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。';
        $keywords = '豚枝肉の脂肪酸測定について,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人';

        return view('other.fattyacid.index', [
            'title' => $this->title,
            'breadcrumbs' => $this->breadcrumbs,
            'description' => $description,
            'keywords' => $keywords,
        ]);
    }
}
