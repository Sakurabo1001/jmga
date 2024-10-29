
{{--食肉格付とはページ--}}

@extends('layouts.base')

@section('title', '食肉格付とは')

@section('description', '食肉格付（取引規格、牛枝肉・豚枝肉取引規格の概要パンフレット、認定看板および認定証）についてご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', '食肉格付とは,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人')

@section('sub_title', '- standard -')

@section('breadcrumb')

    <div class="m-breadcrumb">
        <ol class="topicPath">
            <li><a href="./../../index.html">ホーム</a></li>
            <li>食肉格付とは</li>
        </ol>
    </div>

@endsection

@section('content')

    <div class="l-section_white">
        <div class="l-h2Head">
            <h2 class="titleSection">格付の役割</h2>
        </div>
        <div class="l-h2Body">
            <ul class="kakudukeList clearfix">
                <li class="kakudukeList_item">
                    <p>
                        国民の食生活に必要不可欠な物資となっている食肉（牛肉、豚肉）は、畜産農家で肥育された肥育牛、肥育豚が、と畜場でと畜・解体され、食肉卸売市場（食肉取引の指標となる枝肉の価格形成の場所）や食肉センター等（食肉卸売市場以外の枝肉取引が行われる場所）での取引を経て、枝肉から部分肉そして精肉へと流通します。
                    </p>
                    <ul class="kakudukeList_item_notice-list">
                        <li>※枝  肉：牛、豚のと畜後、内臓を除去し、縦（頭から尾にかけて）に２分割した骨付き肉　</li>
                        <li>※部分肉：枝肉を分割したロース、ヒレ等ブロック状の肉</li>
                        <li>※精  肉：食肉販売店等に陳列されている肉</li>
                    </ul>
                </li>
                <li class="kakudukeList_item">
                    <p>食肉の取引は、主に枝肉の形で、全国２００余ヵ所の食肉卸売市場、食肉センター等で行われます。これらの場所で取引される食肉の価格は、畜産農家にとっては主要な収入、また食肉流通業者にとっては消費者が購入する食肉の店頭価格に直結する仕入れ値に相当する大変重要な意味を持っています。　このため、これらの場所での食肉の価格形成は公正に行われる必要があります。</p>
                </li>
                <li class="kakudukeList_item">
                    <p>当協会は、全国の食肉卸売市場、食肉センター等において、当協会が定めた全国統一の枝肉の取引規格に基づき、中立の立場で、取引される食肉について１頭毎に格付（品質評価）を行います。この格付が全国共通の食肉の品質指標とされ、この品質指標に基づき全国各地の食肉卸売市場、食肉センター等で公正な取引が行われます。</p>
                </li>
                <li class="kakudukeList_item">
                    <p>このように、当協会が中立の立場で行う全国統一の取引規格に基づく格付（品質評価）により初めて公正で自由な食肉取引が推進され、公正な食肉価格の形成が行われ、畜産農家や消費者の利益に資することになります。</p>
                </li>
                <li class="kakudukeList_item">
                    <p>また、格付結果（食肉の品質評価）は畜産農家にとり生産物（肥育牛、肥育豚）の品質に関する重要な情報であることから、これらを基に雌牛や交配に使用する雄牛（精液）を選択したり、飼育管理の改善を図ることができます。さらに、家畜の育種改良機関では、全国的な格付結果のデータを基に優良な雌牛や雄牛の育種改良を図ることができます。このように格付は、畜産農家の経営改善や家畜の育種改良の推進にも大いに役立っています。</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="l-section_white">
        <div class="l-h2Head">
            <h2 class="titleSection">取引規格</h2>
        </div>
        <div class="l-h2Body">
            <p>
                枝肉の格付は、公益社団法人日本食肉格付協会が農林水産省の承認を得て制定した「牛枝肉取引規格」及び「豚枝肉取引規格」に基づき、全国の食肉卸売市場及び基幹的な産地食肉センター等で実施しており、適正な価格の形成と、生産、流通の合理化におおきな役割を果たしています。
            </p>
            <ul class="buttonSection_standard clearfix">
                <li>
                    <a class="stripeButton itemBeef" href="/standard/beef/">
                        <p>牛枝肉
                            <span>牛枝肉の「取引規格」「適用条件」「歩留等級」<br>
                            「肉質等級」「等級表示」等についてはこちら
                        </span>
                        </p>
                    </a>
                </li>
                <li>
                    <a class="stripeButton itemPork" href="/standard/pork/">
                        <p>豚枝肉
                            <span>豚枝肉の「取引規格」「適用条件」「外観」<br>
                            「肉質等級」「等級表示」等についてはこちら
                        </span>
                        </p>
                    </a>
                </li>
                <li><a class="itemPdf itemBeef" href="/assets/commons/doc/ushi-kaisei-keii.pdf" target="pamphlet_beef">詳しい牛枝肉取引規格改正経緯</a></li>
                <li><a class="itemPdf itemPork" href="/assets/commons/doc/buta-kaisei-keii.pdf" target="pamphlet_pork">詳しい豚枝肉取引規格改正経緯</a></li>
                <li>
                    <a class="stripeButton itemBeef" href="/standard/beef-partial/">
                        <p>牛部分肉
                            <span>牛部分肉の「取引規格」「適用条件」<br>
                            「規格証票」等についてはこちら
                        </span>
                        </p>
                    </a>
                </li>
                <li>
                    <a class="stripeButton itemPork" href="/standard/pork-partial/">
                        <p>豚部分肉
                            <span>豚部分肉の「取引規格」「適用条件」<br>
                            「規格証票」等についてはこちら
                        </span>
                        </p>
                    </a>
                </li>
            </ul>
            <p class="notice">※注意：当ホームページから画像等を引用する場合は、出典名（当協会名）を必ず明記してください。</p>
        </div>
    </div>

    <div class="l-section_orange l-section-last clearfix" id="standard-pamph_beef_pork">
        <div class="l-h2Head">
            <h2 class="titleSection">牛枝肉・豚枝肉取引規格の概要パンフレット</h2>
        </div>
        <div class="l-h2Body clearfix">
            <p>
                以下よりパンフレットをご覧いただけます。
            </p>
            <ul class="largeButton column_02 clearfix">
                <li><img src="/assets/commons/img/img_pam_beef.png" alt="牛枝肉取引規格の概要パンフレット"><a class="itemPdf itemBeef" href="/assets/commons/doc/pamphlet_beef.pdf" target="pamphlet_beef">牛枝肉取引規格の概要</a></li>
                <li><img src="/assets/commons/img/img_pam_pork.png" alt="豚枝肉取引規格の概要パンフレット"><a class="itemPdf itemPork" href="/assets/commons/doc/pamphlet_pork.pdf" target="pamphlet_pork">豚枝肉取引規格の概要</a></li>
            </ul>
            <p class="oblongButton mT10"><a href="/service/#beefPamph-englishVersion">英訳版パンフレットの有料配布</a></p>
        </div>
    </div>

@endsection
