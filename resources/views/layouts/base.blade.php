{{--静的ページ　共通レイアウト--}}

    <!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta id="viewport" name="viewport"
          content="target-densitydpi=device-dpi, width=1000, maximum-scale=1.0, user-scalable=yes">
    <meta charset="UTF-8">
    <title>@yield('title')｜日本食肉格付協会（JMGA）</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
    <link rel="stylesheet" href="/assets/commons/css/style.css?20220526" media="screen,print"/>
    <link rel="stylesheet" type="text/css" href="/assets/commons/css/slick.css" media="screen,print"/>
    <link rel="stylesheet" type="text/css" href="/assets/commons/css/slick-theme.css" media="screen,print"/>

    @if (request()->getHost() === 'www.jmga.or.jp')

        <!-- Google Analytics -->
        <script>
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
        </script>

    @endif

</head>
<body>

<div class="bodyWrap">

    <!-- ヘッダー -->
    @include('partials.header')

    <!-- メインコンテンツ -->
    <div class="l-breadcrumb">

        @yield('breadcrumb')

        <div class="l-topTitle">
            <h1 class="topTitleSection">

                @yield('title')

                <div class="topTitleSection-university">

                    @yield('university_name')

                </div>

                <span>

                    @yield('sub_title')

                </span>

            </h1>
        </div>
    </div>

    @yield('content')

    <!-- フッター -->
    @include('partials.footer')

</div>

<!-- スクリプト -->
<script src="/assets/commons/js/jquery-1.8.2.min.js"></script>
<script src="/assets/commons/js/active.js"></script>
<script src="/assets/commons/js/local_navi.js"></script>
<script src="/assets/commons/js/dropdowns.js"></script>
<script src="/assets/commons/js/pagetop.js"></script>
<script src="/assets/commons/js/addressAppend.js"></script>

</body>
</html>
