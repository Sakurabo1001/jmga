
{{--サイトマップページ--}}

@extends('layouts.base')

@section('title', 'サイトマップ')

@section('description', '日本食肉格付協会のサイトマップです。当協会について、事業内容、食肉格付とは、格付結果情報、お知らせ、個人情報保護方針など主要なページをご紹介します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', 'サイトマップ,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人')

@section('sub_title', '- sitemap -')

@section('breadcrumb')

    <div class="m-breadcrumb">
        <ol class="topicPath">
            <li><a href="./../../index.html">ホーム</a></li>
            <li>サイトマップ</li>
        </ol>
    </div>

@endsection

@section('content')

    <div class="l-section_white clearfix">
        <div class="l-h2Head">
            <h2 class="titleSection">サイトマップ</h2>
        </div>
        <div class="l-h2Body clearfix">
            <div class="sitemapSection_left">
                <ul class="m-sitemap-menu">
                    <li><a href="/">ホーム</a></li>
                    <li>
                        <a href="/about/">当協会について</a>
                        <ul class="m-sitemap-menu-inner">
                            <li><a href="/about/organization/">組織</a></li>
                            <li><a href="/about/branch/">支所・事業所</a></li>
                            <li><a href="/about/factory/">部分肉認定工場</a></li>
                            <li><a href="/about/disclosure/">情報公開</a></li>
                            <li><a href="/about/access/">交通アクセス</a></li>
                        </ul>
                    </li>
                    <li><a href="/service/">事業内容</a></li>
                    <li>
                        <a href="/standard/">食肉格付とは</a>
                        <ul class="m-sitemap-menu-inner">
                            <li><a href="/standard/beef/">牛枝肉取引規格</a></li>
                            <li><a href="/standard/pork/">豚枝肉取引規格</a></li>
                            <li><a href="/standard/beef-partial/">牛部分肉取引規格</a></li>
                            <li><a href="/standard/pork-partial/">豚部分肉取引規格</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/rating/">格付結果情報</a>
                        <ul class="m-sitemap-menu-inner">
                            <li><a href="/rating/archive/">過去の格付結果</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/recruit/">採用情報</a>
                        <ul class="m-sitemap-menu-inner">
                            <li><a href="/recruit/message/">トップメッセージ</a></li>
                            <li><a href="/recruit/guideline/">令和7年度募集要項</a></li>
                            <li><a href="/recruit/staff/">先輩職員の声</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sitemapSection_right">
                <ul class="m-sitemap-menu">
                    <?php /*
                  <li><a href="/qa/">格付Q&A</a></li> */ ?>
                    <li><a href="/other/internship/">インターンシップ</a></li>
                    <li><a href="/information/">お知らせ</a></li>
                    <li><a href="/privacy-policy/">個人情報保護方針</a></li>
                    <li><a href="/terms/">利用規約 </a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
