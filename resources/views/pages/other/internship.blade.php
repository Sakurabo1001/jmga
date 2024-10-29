
{{--インターンシップページ--}}

@extends('layouts.base')

@section('title', 'インターンシップ')

@section('description', 'インターンシップについてご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', 'インターンシップ,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人')

@section('pankz', 'インターンシップ')

@section('sub_title', '- internship -')

@section('content')
    <div class="l-section_white">
        <div class="l-h2Head">
            <h2 class="titleSection">公益社団法人日本食肉格付協会インターンシップについて</h2>
        </div>
        <div class="l-h2Body">
            <ul class="internList clearfix">
                <li class="internList_item">
                    <p>
                        対象者は大学生（短大を含む）とし、申込者は所属する大学に申込み、大学が推薦する者を協会が決定します。<br>
                        受入れに当たっては、事前に大学と当協会が覚書を締結します。（一度結んだ覚書は双方から廃止の申出がない限り継続）
                    </p>
                </li>
                <li class="internList_item">
                    <p>受入期間は、原則として１２月及び３月から５月を除く期間とし、５日以内（土、日、祝祭日を除く）です。<br>
                        <span class="smallText">※&nbsp;日数については、原則５日としていますが、単位取得に必要な日数を受入れることも可能</span></p>
                </li>
                <li class="internList_item">
                    <p>受入れに当たっては、協会が担当の職員（指導員）を配置します。<br>
                        なお、実習生は学生教育研究災害傷害保険及びインターンシップ等賠償責任保険等への加入を条件とします。</p>
                </li>
                <li class="internList_item">
                    <p>実習生は、実習終了後、協会に体験レポートを提出していただきます。</p>
                </li>
                <li class="internList_item">
                    <p>その他留意事項</p>
                    <ul class="internList_item_notice-list">
                        <li>(1)実習生は、日本国内の大学において畜産又は畜産物関連学を専攻・習得のため在学している学生としております。</li>
                        <li>(2)申込書は実習希望予定日から起算して少なくとも１か月前に当協会に提出してください。</li>
                        <li>(3)詳細は別掲載のインターンシップ実施要領のとおりです。</li>
                    </ul>
                </li>
            </ul>
            <div class="m-notice m-notice--right clearfix" style="margin-top: 80px;">
                <div class="m-notice_inner">
                    <p class="">受付窓口　公益社団法人日本食肉格付協会　総務部</p>
                    <dl class="intern-tel">
                        <dt>TEL</dt>
                        <dd>03-3257-0220</dd>
                    </dl>
                    <dl class="intern-tel">
                        <dt>FAX</dt>
                        <dd>03-3257-0224</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="l-section_orange clearfix l-section-last">
        <div class="l-h2Head">
            <h2 class="titleSection">ダウンロード</h2>
        </div>
        <div class="l-h2Body clearfix">
            <ul class="largeButton column_02 clearfix">
                <li><a class="itemXls" href="/assets/commons/doc/internship_ukeire_form.xlsx" target="internship_ukeire_form">【様式1】受入申込書（Excel版）</a></li>
                <li><a class="itemXls" href="/assets/commons/doc/internship_recommendation_form.xlsx" target="internship_recommendation_form">【様式2】推薦申込書（Excel版）</a></li>
            </ul>
            <ul class="largeButton column_02 clearfix">
                <li><a class="itemDoc" href="/assets/commons/doc/internship_memorandum.docx" target="internship_memorandum">【様式3】覚書（Word版）</a></li>
                <li><a class="itemDoc" href="/assets/commons/doc/internship_oath.docx" target="internship_oath">【様式4】誓約書（Word版）</a></li>
            </ul>
            <ul class="largeButton column_02 clearfix">
                <li><a style="width: 610px" class="itemPdf" href="/assets/commons/doc/internship_description.pdf" target="internship_description">公益社団法人日本食肉格付協会インターンシップ実施要領（PDF版）</a></li>
            </ul>
        </div>
    </div>
@endsection
