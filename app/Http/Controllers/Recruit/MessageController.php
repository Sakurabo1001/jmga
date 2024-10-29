<?php

namespace App\Http\Controllers\Recruit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $title;
    protected $breadcrumbs;
    protected $subTitle;
    protected $description;
    protected $keywords;

    public function __construct()
    {
        $this->title = 'トップメッセージ';
        $this->subTitle = '-&nbsp;recruit message&nbsp;-';
        $this->breadcrumbs = [
            'ホーム' => url('/'),
            '採用情報' => url('/recruit/'),
        ];
        $this->description = '採用情報トップメッセージをご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。';
        $this->keywords = 'トップメッセージ,採用,募集,要項,情報,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人';
    }

    public function index()
    {
        $breadcrumbs = $this->breadcrumbs;
        $breadcrumbs[$this->title] = null;

        return view('recruit.message.index', [
            'title' => $this->title,
            'pageTitle' => $this->title,
            'breadcrumbs' => $breadcrumbs,
            'subTitle' => $this->subTitle,
            'description' => $this->description,
            'keywords' => $this->keywords,
        ]);
    }
}
