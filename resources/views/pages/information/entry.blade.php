
{{--お知らせ詳細ページ--}}

@extends('layouts.base')

@section('title', 'お知らせ詳細')

@section('description', '当協会からのお知らせ（格付結果やその他のお知らせ）をご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', 'お知らせ,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人')

@section('sub_title', '- information  -')

@section('breadcrumb')

    <div class="m-breadcrumb">
        <ol class="topicPath">
            <li><a href="./../../index.html">ホーム</a></li>
            <li><a href="/information">お知らせ</a></li>
            <li>お知らせ詳細</li>
        </ol>
    </div>

@endsection

@section('content')

    <div class="l-section_white l-section-info l-section-last">
        <div class="l-h2Head">
{{--            <h2 class="titleSection"><?php echo $rs[0]['title'] ?></h2>--}}
        </div>
        <div class="l-h2Body">
{{--            <p class="infoDate"><?php echo \My\Func::getWareki($rs[0]['publishDateF'],false) ?></p>--}}
            <div class="l-h3Body">
{{--                <p class="commentSection"><?php echo html_entity_decode(nl2br($rs[0]['body']), ENT_QUOTES, 'UTF-8'); ?></p>--}}
            </div>

        </div>
    </div>

@endsection
