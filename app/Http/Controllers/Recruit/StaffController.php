<?php

namespace App\Http\Controllers\Recruit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    protected $title;
    protected $breadcrumbs;
    protected $subTitle;
    protected $universityName;
    protected $description;
    protected $keywords;

    public function __construct()
    {
        $this->subTitle = '-&nbsp;recruit staff&nbsp;-';
        $this->breadcrumbs = [
            'ホーム' => url('/'),
            '採用情報' => url('/recruit/'),
            '先輩職員の声' => url('/recruit/staff'),
        ];
        $this->description = '先輩職員の声についてご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。';
        $this->keywords = '先輩職員の声,採用,募集,要項,情報,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人';
    }


    public function index()
    {
        $this->title = '先輩職員の声';

        return view('recruit.staff.index', [
            'title' => $this->title,
            'breadcrumbs' => $this->breadcrumbs,
            'subTitle' => $this->subTitle,
            'description' => $this->description,
            'keywords' => $this->keywords,
        ]);
    }


    public function show($id)
    {
        // スタッフのデータ（例: 年数と大学名）を配列で設定
        $staffData = [
            '0012' => ['title' => '入会5年目', 'university_name' => '（北里大学　卒業）'],
            '0013' => ['title' => '入社6年目', 'university_name' => '（酪農学園大学　卒業）'],
            '0015' => ['title' => '入会5年目', 'university_name' => '（宮城大学　卒業）'],
            '0016' => ['title' => '入会3年目', 'university_name' => '（酪農学園大学　卒業）'],
            '0017' => ['title' => '入会4年目', 'university_name' => '（宮崎大学大学院　卒業）'],
            '0018' => ['title' => '入会3年目', 'university_name' => '（東京農業大学　卒業）'],
            '0019' => ['title' => '入会5年目', 'university_name' => '（新潟大学大学院　卒業）'],
            '0020' => ['title' => '入会4年目', 'university_name' => '（鹿児島大学　卒業）'],
            '0021' => ['title' => '入会2年目', 'university_name' => '（東京農業大学　卒業）'],
            '0022' => ['title' => '入会1年目', 'university_name' => '（日本獣医生命科学大学　卒業）'],
            '0023' => ['title' => '入会2年目', 'university_name' => '（宮崎大学　卒業）'],
        ];

        // 指定したIDに対応するデータが存在しない場合は404エラー
        if (!isset($staffData[$id])) {
            abort(404);
        }

        // データのセット
        $staff = $staffData[$id];
        $title = $staff['title'];
        $universityName = $staff['university_name'];
        $breadcrumbs = $this->breadcrumbs;
        $breadcrumbs[$title] = null;

        return view('recruit.staff.show', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'subTitle' => $this->subTitle,
            'universityName' => $universityName,
            'description' => $this->description,
            'keywords' => $this->keywords,
        ]);
    }
}
