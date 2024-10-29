<?php

namespace App\Http\Controllers\PrivacyPolicy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    protected $title;
    protected $breadcrumbs;
    protected $subTitle;
    protected $jsFile;

    public function __construct()
    {
        $this->title = '個人情報保護方針';
        $this->subTitle = '-&nbsp;privacypolicy&nbsp;-';
        $this->breadcrumbs = [
            'ホーム' => url('/'),
            $this->title => null,
        ];
    }

    public function index()
    {
        $description = '個人情報保護方針（法律・法令等を遵守し、個人情報の取扱いについて定めた基本方針）についてご説明します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。';
        $keywords = '個人情報,保護方針,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人';
        $jsFile = 'mailSet.js';

        $srcView = [
            'rsTopics' => []
        ];

        return view('privacypolicy.index', [
            'title' => $this->title,
            'pageTitle' => $this->title,
            'description' => $description,
            'keywords' => $keywords,
            'breadcrumbs' => $this->breadcrumbs,
            'subTitle' => $this->subTitle,
            'srcView' => $srcView,
            'jsFile' => $jsFile,
        ]);
    }
}
