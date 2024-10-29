{{--利用規約ページ--}}

@extends('layouts.base')

@section('title', '利用規約')

@section('description', '利用規約についてご説明します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', '利用規約,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人')

@section('sub_title', '- terms -')

@section('breadcrumb')

    <div class="m-breadcrumb">
        <ol class="topicPath">
            <li><a href="./../../index.html">ホーム</a></li>
            <li>利用規約</li>
        </ol>
    </div>

@endsection

@section('content')

    <div class="l-section_white">
        <div class="l-h2Head">
            <h2 class="titleSection">当ホームページへのリンクの掲載及び画像等の引用に当たっての注意事項</h2>
        </div>
        <div class="l-h2Body">
            <h3>1 著作権について</h3>
            <div class="l-h3Body">
                <p>
                    当Webサイトに掲載されている情報の著作権は、特記されていない限り、公益社団法人日本食肉格付協会に帰属します。<br>
                    当Webサイトの内容の全部又は一部については、私的使用又は引用等著作権法上認められた行為を除き、当協会に無断で転載、複製を行うことはできません。<br>
                    また、数値データ、簡単な表・グラフ等は著作権の保護対象ではなく、これらについては適宜ご利用いただけますが、その場合も、出典が当協会であることを明示するようお願いします。
                </p>
            </div>

            <h3>2 リンクについて</h3>
            <div class="l-h3Body">
                <div class="l-h4Body">
                    <ul class="m-section-list">
                        <li>（1）当Webサイトへのリンクは、リンク先が公益社団法人日本食肉格付協会であることを明記して、できるだけ<a
                                href="/">http://www.jmga.or.jp/</a>（トップページ）へリンクしてください。
                        </li>
                        <li>
                            （2）やむを得ず、当Webサイト内の各Webページにリンクを張る場合は、そのWebページが公益社団法人日本食肉格付協会のWebサイト内にあることが分かるように、必ず明記してください。
                        </li>
                        <li>（3）当Webサイトのコンテンツは、予告なしに内容を変更又は削除する場合があります。<br>あらかじめご了承ください。
                        </li>
                        <li>
                            （4）リンク設定を行う場合は、下記のリンク掲載届に記載の上、メールまたはFAXで送信をお願いします。
                        </li>
                    </ul>
                    <ul class="largeButton clearfix">
                        <li>
                            <a style="text-indent: initial;" class="itemXls"
                               href="/assets/commons/doc/link-application.xlsx">リンク掲載届（Excel版）</a>
                        </li>
                    </ul>
                </div>
            </div>

            <h3>3 免責事項について</h3>
            <div class="l-h3Body">
                <p>公益社団法人日本食肉格付協会は、当Webサイトの情報やリンク等に関して生じた如何なる損害・不利益等についても一切の責任を負いません。<br>
                    また、当Webサイトからリンクを設定している他のサイトにつきましては、著作権及び内容に関する責任等は各サイトの開設者に帰属するものであり、当協会では責任を負いかねますのでご了承ください。
                </p>
            </div>
        </div>
    </div>

@endsection
