{{--トップページ　レイアウト--}}

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
    <header class="l-header clearfix">
        <div class="headerSectionWrap clearfix">
            <p class="m-headerTitle">品質と信頼をつなぐ - 公益社団法人日本食肉格付協会</p>
        </div>
    </header>

    <div class="l-slide clearfix">
        <ul class="m-slide clearfix">
            <li><img src="/assets/commons/img/img_main01.png" alt="品質と信頼をつなぐ - 公益社団法人日本食肉格付協会"/>
            </li>
            <li><img src="/assets/commons/img/img_main02.png" alt="品質と信頼をつなぐ - 公益社団法人日本食肉格付協会"/>
            </li>
            <li><img src="/assets/commons/img/img_main03.png" alt="品質と信頼をつなぐ - 公益社団法人日本食肉格付協会"/>
            </li>
            <li><img src="/assets/commons/img/img_main04.png" alt="品質と信頼をつなぐ - 公益社団法人日本食肉格付協会"/>
            </li>
        </ul>
        <div class="top-fattyacid-nav js-top-nav_elem">
            <p class="top-fattyacid-nav_title js-top-nav_link_text">
                ♢豚枝肉取引規格改正関連・豚枝肉格付情報提供システム利用申請等・豚枝肉脂肪酸測定についてはこちら♢</p>
            <ul class="top-fattyacid-nav_list js-top-nav_box dn">
                <li class="top-fattyacid-nav_list_item">
                    <a href="/assets/commons/doc/kikakukaisei_tesuryokaitei.pdf">豚枝肉取引規格改正関連</a>
                </li>
                <li class="top-fattyacid-nav_list_item">
                    <a href="https://pig-info.jmga.or.jp/porkinfo"
                       terget="porkinfo">豚枝肉情報提供システム利用申請等</a>
                </li>
                <li class="top-fattyacid-nav_list_item">
                    <a href="/other/fattyacid/">豚枝肉脂肪酸測定について</a>
                </li>
            </ul>
        </div>
    </div>

    <nav class="l-navHeader clearfix">
        <div class="m-navHeader clearfix">
            <p class="m-navHeader-logo"><a class="sprite" href="/">公益社団法人日本食肉格付協会</a></p>
            <ul class="m-navGlobal clearfix">
                <?php /* <li><a class="no-navLocal" href="/">ホーム</a></li> */ ?>
                <li class="m-navGlobal_dropdownBtn">
                    <a href="/about/" class="m-navGlobal_dropdownBtn_link">当協会について</a>
                    <ul class="m-navLocal dn">
                        <li><a href="/about/organization/">組織</a></li>
                        <li><a href="/about/branch/">支所・事業所</a></li>
                        <li><a href="/about/factory/">部分肉認定工場</a></li>
                        <li><a href="/about/disclosure/">情報公開</a></li>
                        <li><a href="/about/access/">交通アクセス</a></li>
                    </ul>
                </li>
                <li><a class="no-navLocal w102" href="/service/">事業内容</a></li>
                <li class="m-navGlobal_dropdownBtn">
                    <a href="/standard/" class="m-navGlobal_dropdownBtn_link">食肉格付とは</a>
                    <ul class="m-navLocal dn">
                        <li><a href="/standard/beef/">牛枝肉取引規格</a></li>
                        <li><a href="/standard/pork/">豚枝肉取引規格</a></li>
                        <li><a href="/standard/beef-partial/">牛部分肉取引規格</a></li>
                        <li><a href="/standard/pork-partial/">豚部分肉取引規格</a></li>
                    </ul>
                </li>
                <li class="m-navGlobal_dropdownBtn">
                    <a href="/rating/" class="m-navGlobal_dropdownBtn_link">格付結果情報</a>
                    <ul class="m-navLocal dn">
                        <li><a href="/rating/archive/">過去の格付結果</a></li>
                    </ul>
                </li>
                <li class="m-navGlobal_dropdownBtn">
                    <a href="/recruit/" class="m-navGlobal_dropdownBtn_link w92"
                       style="animation: flash 2s linear infinite; color: #ff0000!important;">採用情報</a>
                    <ul class="m-navLocal dn">
                        <li><a href="/recruit/message/">トップメッセージ</a></li>
                        <li><a href="/recruit/guideline/">令和7年度募集要項</a></li>
                        <li><a href="/recruit/staff/">先輩職員の声</a></li>
                    </ul>
                </li>
                <li class="m-navGlobal_dropdownBtn active">
                    <a href="javascript:void(0);" class="m-navGlobal_dropdownBtn_link"
                       style="padding-top: 2px; height: 98px; width: 210px;">豚枝肉規格改正関係<br/>その他</a>
                    <ul class="m-navLocal dn" style="width: 242px">
                        <li><a href="/assets/commons/doc/kikakukaisei_tesuryokaitei.pdf">規格及び料⾦改正のお知らせ</a>
                        </li>
                        <li><a target="_blank"
                               href="https://pig-info.jmga.or.jp/porkinfo">格付情報提供システムについて</a></li>
                        <li><a href="/other/fattyacid/">豚枝肉の脂肪酸測定について</a></li>
                        <li><a href="/other/internship/">インターンシップ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

</div>

<!-- フッター -->
@include('partials.footer')

</div>

<!-- スクリプト -->
<script src="/assets/commons/js/jquery-1.8.2.min.js"></script>
<script src="/assets/commons/js/active.js"></script>
<script src="/assets/commons/js/slick.min.js"></script>
<script src="/assets/commons/js/dropdowns.js"></script>
<script src="/assets/commons/js/pagetop.js"></script>
<script src="/assets/commons/js/slick_slide.js"></script>
<script src="/assets/commons/js/addressAppend.js"></script>
</body>
</html>
