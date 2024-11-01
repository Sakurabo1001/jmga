
{{--トップページ--}}

@extends('layouts.top')

@section('title', 'トップページ')

@section('description', '公益社団法人日本食肉格付協会は、牛肉、豚肉の格付け事業、牛肉のトレーサビリティ業務委託事業、家畜改良対策の推進などの事業を通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', '牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人')

@section('content')

    <div class="l-section_orange clearfix">
        <div class="l-h2Body clearfix">
            <div class="mainImageSection itemStandard">
                <h2 class="titleSection_mainImage">食肉格付とは</h2>
                <p class="commentSection_mainImage itemStandard">
                    枝肉流通の物差しとして、生産者と購買者との間で枝肉の品質を客観的（枝肉取引規格に基づき）に評価判定し、公正な取引を確保すること。
                </p>
                <ul class="buttonSection_mainImage itemStandard clearfix">
                    <li><a href="/standard/beef/">牛枝肉</a></li>
                    <li><a href="/standard/pork/">豚枝肉</a></li>
                    <li><a href="/standard/beef-partial/">牛部分肉</a></li>
                    <li><a href="/standard/pork-partial/">豚部分肉</a></li>
                </ul>
                <p class="bannerSection_mainImage itemStandard"><a class="sprite" href="/standard/#standard-pamph_beef_pork">取引規格概要のパンフレットの配布</a></p>
            </div>
            <div class="mainImageSection itemRating">
                <h2 class="titleSection_mainImage">格付結果情報</h2>
                <p class="commentSection_mainImage itemRating">
                    牛・豚枝肉について、年別・月別の格付結果を掲載しています。<br>
                    牛枝肉については、品種別・性別の格付結果及び<br>
                    黒毛和種、交雑種、乳用種の去勢については、出荷県別に格付結果と歩留算出の各測定部位の平均値を掲載しています。
                </p>
                <ul class="buttonSection_mainImage itemRating clearfix">
                    <li><a href="/rating/#beef_result">牛枝肉</a></li>
                    <li><a href="/rating/#pork_result">豚枝肉</a></li>
                    <li><a href="/rating/#beefpork_result">牛・豚部分肉</a></li>
                </ul>
                <p class="bannerSection_mainImage itemRating"><a class="sprite" href="/service/#beef-gradingCertification">牛枝肉格付結果証明書の発行</a></p>
            </div>
        </div>
        <p class="notice">
            <a href="/terms/">当ホームページへのリンクの掲載及び画像等の引用に当たっての注意事項</a>
        </p>
    </div>

    <div class="l-section_white">
        <div class="l-h2Head">
            <h2 class="titleSection">お知らせ</h2>
            <p class="smallButton"><a href="/information/">一覧を見る</a></p>
        </div>
        <div class="l-h2Body">

            @if(!empty($rsFix))
                <dl class="m-listInformation l-h2Head l-h2Head--block">
                    @foreach ($rsFix as $value)
                        <dt>
                            <span class="{{ $value->informationKbn === "1" ? 'm-listInformation-iconInformation' : 'm-listInformation-iconRating' }}">
                                {{ getInfoKbn($value->informationKbn) }}
                            </span>
                            {{ convertToWareki($value->publishDateF) }}
                        </dt>
                        <dd>
                            <a href="{{ $value->informationKbn === "1" ? '/information/entry/' . $value->informationCd : '/rating/' }}">{{ $value->title }}</a>
                        </dd>
                    @endforeach
                </dl>
            @endif

            @if(!empty($rs))
                <dl class="m-listInformation">
                    @foreach ($rs as $value)
                        <dt>
                        <span class="{{ $value->informationKbn === "1" ? 'm-listInformation-iconInformation' : 'm-listInformation-iconRating' }}">
                            {{ getInfoKbn($value->informationKbn) }}
                        </span>
                            {{ convertToWareki($value->publishDateF) }}
                        </dt>
                        <dd>
                            <a href="{{ $value->informationKbn === "1" ? '/information/entry/' . $value->informationCd : '/rating/' }}">{{ $value->title }}</a>
                        </dd>
                    @endforeach
                </dl>
            @endif

        </div>
    </div>

    <div class="l-section_orange clearfix">
        <div class="l-h2Head">
            <h2 class="titleSection">関連リンク</h2>
        </div>
        <div class="l-h2Body clearfix">
            <ul class="relatedLinkSection clearfix">
                <li><a class="relatedLinkSection-banner01 sprite" href="http://www.maff.go.jp/j/chikusan/kikaku/lin/index.html" target="maff">農林水産省</a></li>
                <li><a class="relatedLinkSection-banner02 sprite" href="http://www.fsc.go.jp/" target="fsc">食品安全委員会</a></li>
                <li><a class="relatedLinkSection-banner03 sprite" href="http://www.lin.gr.jp/" target="lin">畜産情報ネットワーク</a></li>
                <li><a class="relatedLinkSection-banner04 sprite" href="http://www.alic.go.jp/" target="alic">独立行政法人農畜産業振興機構</a></li>
                <li><a class="relatedLinkSection-banner05 sprite" href="http://jlec-pr.jp/ja/" target="jlec-pr">日本畜産物輸出促進協議会</a></li>
                <li><a class="relatedLinkSection-banner06 sprite" href="http://www.nlbc.go.jp/" target="nlbc">独立行政法人家畜改良センター</a></li>
                <li><a class="relatedLinkSection-banner07 sprite" href="http://www.jmi.or.jp/" target="jmi">公益財団法人日本食肉消費総合センター</a></li>
            </ul>
        </div>
    </div>

@endsection
