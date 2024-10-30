
{{--お知らせページ--}}

@extends('layouts.base')

@section('title', 'お知らせ')

@section('description', '当協会からのお知らせ（格付結果やその他のお知らせ）をご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', 'お知らせ,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人')

@section('sub_title', '- information  -')

@section('breadcrumb')

    <div class="m-breadcrumb">
        <ol class="topicPath">
            <li><a href="./../../index.html">ホーム</a></li>
            <li>お知らせ</li>
        </ol>
    </div>

@endsection

@section('content')

    <div class="l-section_white l-section-info l-section-last">
        <div class="l-h2Head">
            <h2 class="titleSection">お知らせ一覧</h2>
        </div>
        <div class="l-h2Body">
            <dl class="m-listInformation">
{{--                <?php foreach ($rs as $value) {  $infoFlg = $value['informationKbn'] == \My\Para::INFO_INFO ? true : false?>--}}
{{--                <dt><span class="<?php echo $infoFlg ? 'm-listInformation-iconInformation' : 'm-listInformation-iconRating' ?>"><?php echo \My\Funcset::getInfoKbn($value['informationKbn']) ?></span><?php echo \My\Func::getWareki($value['publishDateF'],false) ?></dt>--}}
{{--                <dd><a href="<?php echo $infoFlg ? '/information/entry/'.$value['informationCd'] : '/rating/'; ?>"><?php echo $value['title'] ?></a><?php echo html_entity_decode(\My\Funcset::getNewHtml($value['publishDateF']), ENT_QUOTES, 'UTF-8'); ?></dd>--}}
{{--                <?php } ?>--}}
            </dl>
        </div>
    </div>

@endsection
