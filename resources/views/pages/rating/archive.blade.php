
{{--過去の格付結果ページ--}}

@extends('layouts.base')

@section('title', '過去の格付結果')

@section('description', '過去の格付結果（牛枝肉格付結果（品種別・性別）、出荷県別格付結果、牛及び豚枝肉共通格付結果）について案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', '過去,格付,結果,牛肉,豚肉,日本食肉格付協会,JMGA,公益社団法人')

@section('sub_title', '- rating archive -')

@section('breadcrumb')

    <div class="m-breadcrumb">
        <ol class="topicPath">
            <li><a href="./../../index.html">ホーム</a></li>
            <li><a href="/rating">格付結果情報</a></li>
            <li>過去の格付結果</li>
        </ol>
    </div>

@endsection

@section('content')

    <div class="l-localnavi">
        <div id="m-localnavi">
            <ul>
                <li class="dropdownBtn">
                    <a href="#beef_result">牛枝肉格付結果 （品種別・性別）</a>
                    <ul class="m-localnavi_children dropdownBox dn">
                        <li>
                            <a href="#beef_result_nenji">年次</a>
                        </li>
                        <li>
                            <a href="#beef_result_nendo">年度</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdownBtn">
                    <a href="#shipment_result">牛枝肉格付 出荷県別格付結果情報</a>
                    <ul class="m-localnavi_children dropdownBox dn">
                        <li>
                            <a href="#shipment_result_shihanki">四半期</a>
                        </li>
                        <li>
                            <a href="#shipment_result_nenji">年次</a>
                        </li>
                        <li>
                            <a href="#shipment_result_nendo">年度</a>
                        </li>
                    </ul></li>
                <li class="dropdownBtn">
                    <a href="#beefpork_common">牛及び豚枝肉共通格付結果の概要</a>
                    <ul class="m-localnavi_children dropdownBox dn">
                        <li>
                            <a href="#beefpork_common_shihanki">四半期</a>
                        </li>
                        <li>
                            <a href="#beefpork_common_nenji">年次</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="l-section_white" id="beef_result">
        <div class="l-h2Head">
            <h2 class="titleSection">牛枝肉格付 品種別・性別ごとの格付結果</h2>
        </div>
        <div class="l-h2Body">
            <h3 id="beef_result_nenji">年次【牛枝肉格付結果（品種別・性別）】</h3>
            <div class="l-h3Body">
                <div class="division-btm-area-innner clearfix">
{{--                    <?php--}}
{{--                    if (isset($rs['beef_hinsh_nenji'])) {--}}
{{--                    foreach ($rs['beef_hinsh_nenji'] as $value) {--}}
{{--                        ?>--}}

                    <div class="btm-area-item_s">
                        <ul>
                            <li>
{{--                                <a class="export" href="/rating/download/<?php echo $value['ratingCd']; ?>">--}}
{{--                                    <span class="list_date"><?php echo $value['ratingNm'] ?></span>--}}
{{--                                    <span class="list_month"><?php echo is_null($value['spanText']) ? '' : '（' . $value['spanText'] . '分）' ?></span>--}}
{{--                                        <?php if ($value['teisei'] !== '') { ?>--}}
{{--                                    <span class="icoTeisei"><?php echo $value['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                </a>--}}
                            </li>
                        </ul>
                    </div>
{{--                        <?php--}}
{{--                    }--}}
{{--                    }--}}
{{--                    ?>--}}
                    <div class="btm-area-item_s pdf_box">
                        <ul>
                            <li><a href="/assets/rating/ushi-shubetu-nenji_1989-1995.pdf">
                                    <span class="list_date">平成01-07年次</span>
                                    <span class="list_month">（平成01年01月～平成07年12月分）</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <h3 id="beef_result_nendo">年度【牛枝肉格付結果（品種別・性別）】</h3>
            <div class="l-h3Body">
                <div class="division-btm-area-innner clearfix">
{{--                    <?php--}}
{{--                    if (isset($rs['beef_hinsh_nendo'])) {--}}
{{--                    foreach ($rs['beef_hinsh_nendo'] as $value) {--}}
{{--                        ?>--}}

                    <div class="btm-area-item_s">
                        <ul>
                            <li>
{{--                                <a class="export" href="/rating/download/<?php echo $value['ratingCd']; ?>">--}}
{{--                                    <span class="list_date"><?php echo $value['ratingNm'] ?></span>--}}
{{--                                    <span class="list_month"><?php echo is_null($value['spanText']) ? '' : '（' . $value['spanText'] . '分）' ?></span>--}}
{{--                                        <?php if ($value['teisei'] !== '') { ?>--}}
{{--                                    <span class="icoTeisei"><?php echo $value['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                </a>--}}
                            </li>
                        </ul>
                    </div>
{{--                        <?php--}}
{{--                    }--}}
{{--                    }--}}
{{--                    ?>--}}
                    <div class="btm-area-item_s pdf_box">
                        <ul>
                            <li><a href="/assets/rating/ushi-shubetu-nendo_1989-1995.pdf">
                                    <span class="list_date">平成01-07年度</span>
                                    <span class="list_month">（平成01年4月～平成07年12月分） </span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="m-section-list_marker">
                    <li>この結果は格付した全ての牛枝肉についての調査結果です。</li>
                    <li>品種区分は荷受機関の区分によります。</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="l-section_orange" id="shipment_result">
        <div class="l-h2Head">
            <h2 class="titleSection">牛枝肉格付 出荷県別格付結果情報</h2>
        </div>
        <div class="l-h2Body">
            <h3 id="shipment_result_shihanki">四半期【牛枝肉格付 出荷県別格付結果情報】</h3>
            <div class="l-h3Body">
                <div class="division-btm-area-innner clearfix">
{{--                    <?php--}}
{{--                    if (isset($rs['beef_ken_four'])) {--}}
{{--                    foreach ($rs['beef_ken_four'] as $value) {--}}
{{--                        ?>--}}

                    <div class="btm-area-item_s">
                        <ul>
                            <li>
{{--                                <a class="export" href="/rating/download/<?php echo $value['ratingCd']; ?>">--}}
{{--                                    <span class="list_date"><?php echo $value['ratingNm'] ?></span>--}}
{{--                                    <span class="list_month"><?php echo is_null($value['spanText']) ? '' : '（' . $value['spanText'] . '分）' ?></span>--}}
{{--                                        <?php if ($value['teisei'] !== '') { ?>--}}
{{--                                    <span class="icoTeisei"><?php echo $value['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                </a>--}}
                            </li>
                        </ul>
                    </div>
{{--                        <?php--}}
{{--                    }--}}
{{--                    }--}}
{{--                    ?>--}}
                </div>
            </div>
            <h3 id="shipment_result_nenji">年次【牛枝肉格付 出荷県別格付結果情報】</h3>
            <div class="l-h3Body">
                <div class="division-btm-area-innner clearfix">
{{--                    <?php--}}
{{--                    if (isset($rs['beef_ken_nenji'])) {--}}
{{--                    foreach ($rs['beef_ken_nenji'] as $value) {--}}
{{--                        ?>--}}

                    <div class="btm-area-item_s">
                        <ul>
                            <li>
{{--                                <a class="export" href="/rating/download/<?php echo $value['ratingCd']; ?>">--}}
{{--                                    <span class="list_date"><?php echo $value['ratingNm'] ?></span>--}}
{{--                                    <span class="list_month"><?php echo is_null($value['spanText']) ? '' : '（' . $value['spanText'] . '分）' ?></span>--}}
{{--                                        <?php if ($value['teisei'] !== '') { ?>--}}
{{--                                    <span class="icoTeisei"><?php echo $value['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                </a>--}}
                            </li>
                        </ul>
                    </div>
{{--                        <?php--}}
{{--                    }--}}
{{--                    }--}}
{{--                    ?>--}}
                </div>
            </div>
            <h3 id="shipment_result_nendo">年度【牛枝肉格付 出荷県別格付結果情報】</h3>
            <div class="l-h3Body">
                <div class="division-btm-area-innner clearfix">
{{--                    <?php--}}
{{--                    if (isset($rs['beef_ken_nendo'])) {--}}
{{--                    foreach ($rs['beef_ken_nendo'] as $value) {--}}
{{--                        ?>--}}
                    <div class="btm-area-item_s">
                        <ul>
                            <li>
{{--                                <a class="export" href="/rating/download/<?php echo $value['ratingCd']; ?>">--}}
{{--                                    <span class="list_date"><?php echo $value['ratingNm'] ?></span>--}}
{{--                                    <span class="list_month"><?php echo is_null($value['spanText']) ? '' : '（' . $value['spanText'] . '分）' ?></span>--}}
{{--                                        <?php if ($value['teisei'] !== '') { ?>--}}
{{--                                    <span class="icoTeisei"><?php echo $value['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                </a>--}}
                            </li>
                        </ul>
                    </div>
{{--                        <?php--}}
{{--                    }--}}
{{--                    }--}}
{{--                    ?>--}}
                </div>
                <ul class="m-section-list_marker">
{{--                    <li>四半期（最新の四半期は<?php echo $rs['beef_ken_four'][0]['ratingNm'] ?>分を掲載しています。&nbsp;&nbsp;<?php echo \My\Func::getWareki($rs['beef_ken_four'][0]['publishDate']) ?>更新）</li>--}}
{{--                    <li>年次（最新の年次は<?php echo $rs['beef_ken_nenji'][0]['ratingNm'] ?>分（<?php echo is_null($rs['beef_ken_nenji'][0]['spanText']) ? '' : $rs['beef_ken_nenji'][0]['spanText'] ?>）を掲載しています。&nbsp;&nbsp;<?php echo \My\Func::getWareki($rs['beef_ken_nenji'][0]['publishDate']) ?>更新）</li>--}}
{{--                    <li>年度（最新の年度は<?php echo $rs['beef_ken_nendo'][0]['ratingNm'] ?>分（<?php echo is_null($rs['beef_ken_nendo'][0]['spanText']) ? '' : $rs['beef_ken_nendo'][0]['spanText'] ?>）を掲載しています。&nbsp;&nbsp;<?php echo \My\Func::getWareki($rs['beef_ken_nendo'][0]['publishDate']) ?>更新）</li>--}}
                </ul>
            </div>
        </div>
    </div>

    <div class="l-section_white l-section-last" id="beefpork_common">
        <div class="l-h2Head">
            <h2 class="titleSection">牛及び豚枝肉共通格付結果の概要</h2>
        </div>
        <div class="l-h2Body">
            <h3 id="beefpork_common_shihanki">四半期【牛及び豚枝肉共通格付結果の概要】</h3>
            <div class="l-h3Body">
                <div class="division-btm-area-innner clearfix">
{{--                    <?php--}}
{{--                    if (isset($rs['bp_gaiyo_four'])) {--}}
{{--                    foreach ($rs['bp_gaiyo_four'] as $value) {--}}
{{--                        ?>--}}
                    <div class="btm-area-item_s">
                        <ul>
                            <li>
{{--                                <a class="export" href="/rating/download/<?php echo $value['ratingCd']; ?>">--}}
{{--                                    <span class="list_date"><?php echo $value['ratingNm'] ?></span>--}}
{{--                                    <span class="list_month"><?php echo is_null($value['spanText']) ? '' : '（' . $value['spanText'] . '分）' ?></span>--}}
{{--                                        <?php if ($value['teisei'] !== '') { ?>--}}
{{--                                    <span class="icoTeisei"><?php echo $value['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                </a>--}}
                            </li>
                        </ul>
                    </div>
{{--                        <?php--}}
{{--                    }--}}
{{--                    }--}}
{{--                    ?>--}}
                </div>
            </div>
            <h3 id="beefpork_common_nenji">年次【牛及び豚枝肉共通格付結果の概要】</h3>
            <div class="l-h3Body">
                <div class="division-btm-area-innner clearfix">
{{--                    <?php--}}
{{--                    if (isset($rs['bp_gaiyo_nenji'])) {--}}
{{--                    foreach ($rs['bp_gaiyo_nenji'] as $value) {--}}
{{--                        ?>--}}
                    <div class="btm-area-item_s">
                        <ul>
                            <li>
{{--                                <a class="export" href="/rating/download/<?php echo $value['ratingCd']; ?>">--}}
{{--                                    <span class="list_date"><?php echo $value['ratingNm'] ?></span>--}}
{{--                                    <span class="list_month"><?php echo is_null($value['spanText']) ? '' : '（' . $value['spanText'] . '分）' ?></span>--}}
{{--                                        <?php if ($value['teisei'] !== '') { ?>--}}
{{--                                    <span class="icoTeisei"><?php echo $value['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                </a>--}}
                            </li>
                        </ul>
                    </div>
{{--                        <?php--}}
{{--                    }--}}
{{--                    }--}}
{{--                    ?>--}}
                </div>
                <ul class="m-section-list_marker">
{{--                    <li>四半期（最新の四半期は<?php echo $rs['bp_gaiyo_four'][0]['ratingNm'] ?>分を掲載しています。&nbsp;&nbsp;<?php echo \My\Func::getWareki($rs['bp_gaiyo_four'][0]['publishDate']) ?>更新）</li>--}}
{{--                    <li>年次（最新の年次は<?php echo $rs['bp_gaiyo_nenji'][0]['ratingNm'] ?>分（<?php echo is_null($rs['bp_gaiyo_nenji'][0]['spanText']) ? '' : $rs['bp_gaiyo_nenji'][0]['spanText'] ?>）を掲載しています。&nbsp;&nbsp;<?php echo \My\Func::getWareki($rs['bp_gaiyo_nenji'][0]['publishDate']) ?>更新）</li>--}}
                </ul>
            </div>
        </div>
    </div>

@endsection
