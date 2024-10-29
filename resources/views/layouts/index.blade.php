<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta id="viewport" name="viewport" content="target-densitydpi=device-dpi, width=1000, maximum-scale=1.0, user-scalable=yes">
    <meta charset="UTF-8">
    <title>@yield('title')｜日本食肉格付協会（JMGA）</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
    <link rel="stylesheet" href="{{ asset('assets/commons/css/style.css') }}" media="screen,print" />
    <link rel="stylesheet" href="{{ asset('assets/commons/css/slick.css') }}" media="screen,print" />
    <link rel="stylesheet" href="{{ asset('assets/commons/css/slick-theme.css') }}" media="screen,print" />

    <script>
        if (location.host === 'www.jmga.or.jp') {
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-80425226-1', 'auto');
            ga('send', 'pageview');
        }
    </script>
</head>
<body>
<div class="bodyWrap">
    <header class="l-header clearfix">
        <div class="headerSectionWrap clearfix">
            <p class="m-headerTitle">品質と信頼をつなぐ - 公益社団法人日本食肉格付協会</p>
        </div>
    </header>

    <div class="l-slide clearfix">
        <ul class="m-slide clearfix">
            <li><img src="{{ asset('assets/commons/img/img_main01.png') }}" alt="品質と信頼をつなぐ - 公益社団法人日本食肉格付協会" /></li>
            <li><img src="{{ asset('assets/commons/img/img_main02.png') }}" alt="品質と信頼をつなぐ - 公益社団法人日本食肉格付協会" /></li>
            <li><img src="{{ asset('assets/commons/img/img_main03.png') }}" alt="品質と信頼をつなぐ - 公益社団法人日本食肉格付協会" /></li>
            <li><img src="{{ asset('assets/commons/img/img_main04.png') }}" alt="品質と信頼をつなぐ - 公益社団法人日本食肉格付協会" /></li>
        </ul>
        <div class="top-fattyacid-nav js-top-nav_elem">
            <p class="top-fattyacid-nav_title js-top-nav_link_text">♢豚枝肉取引規格改正関連・豚枝肉格付情報提供システム利用申請等・豚枝肉脂肪酸測定についてはこちら♢</p>
            <ul class="top-fattyacid-nav_list js-top-nav_box dn">
                <li class="top-fattyacid-nav_list_item">
                    <a href="{{ asset('assets/commons/doc/kikakukaisei_tesuryokaitei.pdf') }}">豚枝肉取引規格改正関連</a>
                </li>
                <li class="top-fattyacid-nav_list_item">
                    <a href="https://pig-info.jmga.or.jp/porkinfo" target="porkinfo">豚枝肉情報提供システム利用申請等</a>
                </li>
                <li class="top-fattyacid-nav_list_item">
                    <a href="{{ url('/other/fattyacid') }}">豚枝肉脂肪酸測定について</a>
                </li>
            </ul>
        </div>
    </div>

    @include('partials.nav-header')

    <div class="l-content">
        @yield('content')
    </div>

    @include('partials.footer')

</div>

<!-- 共通JavaScriptファイルの読み込み -->
<script src="{{ asset('assets/commons/js/jquery-1.8.2.min.js') }}"></script>
<script src="{{ asset('assets/commons/js/active.js') }}"></script>
<script src="{{ asset('assets/commons/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/commons/js/dropdowns.js') }}"></script>
<script src="{{ asset('assets/commons/js/pagetop.js') }}"></script>
<script src="{{ asset('assets/commons/js/slick_slide.js') }}"></script>
<script src="{{ asset('assets/commons/js/addressAppend.js') }}"></script>
</body>
</html>
