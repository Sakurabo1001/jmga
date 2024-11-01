
{{--格付結果情報ページ--}}

@extends('layouts.base')

@section('title', '格付結果情報')

@section('description', '格付結果情報（牛枝肉格付結果、豚枝肉格付結果、牛及び豚枝肉共通、牛・豚部分肉格付結果）についてご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', '格付,結果,情報,牛肉,豚肉,日本食肉格付協会,JMGA,公益社団法人')

@section('sub_title', '- rating  -')

@section('breadcrumb')

    <div class="m-breadcrumb">
        <ol class="topicPath">
            <li><a href="./../../index.html">ホーム</a></li>
            <li>格付結果情報</li>
        </ol>
    </div>

@endsection

@section('content')

    <div class="l-localnavi">
        <div id="m-localnavi">
            <ul>
                <li><a href="#beef_result">牛枝肉格付結果</a></li>
                <li><a href="#pork_result">豚枝肉格付結果</a></li>
                <li><a href="#beefpork_common">牛及び豚枝肉共通格付結果の概要</a></li>
                <li><a href="#beefpork_result">牛・豚部分肉格付結果</a></li>
            </ul>
        </div>
    </div>

    <div class="l-section_white clearfix" id="beef_result">
        <div class="l-h2Head">
            <h2 class="titleSection">牛枝肉格付結果</h2>
        </div>
        <div class="l-h2Body">
            <h3>品種別・性別ごとの格付結果</h3>
            <div class="l-h3Body clearfix">
                <p>最新月と年次、年度の最新月までの累計を掲載しています。</p>
                <ul class="m-section-list_marker">
                    <li>格付された全ての牛枝肉についてのデータを掲載しています。</li>
                    <li>品種区分は荷受機関の区分によります。</li>
                </ul>
                <div class="division-btm-area clearfix">
                    @if(isset($rs['beef_hinsh_month']))
                        <div class="division-btm-area-item">
                            <ul>
                                <li>
                                    <a href="/rating/download/{{ $rs['beef_hinsh_month']->ratingCd }}" class="export">
                                        <span class="list_title">最新月</span>
                                        <span class="list_date">{{ $rs['beef_hinsh_month']->ratingNm }}</span>
                                        @if($rs['beef_hinsh_month']->teisei)
                                            <span class="Teisei">{{ $rs['beef_hinsh_month']->teisei }}</span>
                                        @endif
                                    </a>
                                </li>
                            </ul>
                            <p class="update">{{ convertToWareki($rs['beef_hinsh_month']->publishDate) }}更新</p>
                        </div>
                    @endif

                    <div class="division-btm-area-item">
                        <ul>
                            <li>
{{--                                <a class="export" href="/rating/download/<?php echo $rs['beef_hinsh_nenji']['ratingCd']; ?>">--}}
{{--                                    <span class="list_title">年次</span>--}}
{{--                                    <span class="list_date"><?php echo $rs['beef_hinsh_nenji']['ratingNm'] ?></span>--}}
{{--                                    <span class="list_month"><?php echo is_null($rs['beef_hinsh_nenji']['spanText']) ? '' : '（' . $rs['beef_hinsh_nenji']['spanText'] . '分）' ?></span>--}}
{{--                                        <?php if ($rs['beef_hinsh_nenji']['teisei'] !== '') { ?>--}}
{{--                                    <span class="Teisei"><?php echo $rs['beef_hinsh_nenji']['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                </a>--}}
                            </li>
                        </ul>
{{--                        <p class="update"><?php echo \My\Func::getWareki($rs['beef_hinsh_nenji']['publishDate'], false) ?>更新<?php echo html_entity_decode($rs['beef_hinsh_nenji']['new'], ENT_QUOTES, 'UTF-8'); ?></p>--}}
                    </div>
{{--                    <?php }if (isset($rs['beef_hinsh_nendo'])) { ?>--}}
{{--                    <div class="division-btm-area-item">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a class="export" href="/rating/download/<?php echo $rs['beef_hinsh_nendo']['ratingCd']; ?>">--}}
{{--                                    <span class="list_title">年度</span>--}}
{{--                                    <span class="list_date"><?php echo $rs['beef_hinsh_nendo']['ratingNm'] ?></span>--}}
{{--                                        <?php if ($rs['beef_hinsh_nendo']['teisei'] !== '') { ?>--}}
{{--                                    <span class="Teisei"><?php echo $rs['beef_hinsh_nendo']['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                    <span class="list_month"><?php echo is_null($rs['beef_hinsh_nendo']['spanText']) ? '' : '（' . $rs['beef_hinsh_nendo']['spanText'] . '分）' ?></span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <p class="update"><?php echo \My\Func::getWareki($rs['beef_hinsh_nendo']['publishDate'], false) ?>更新<?php echo html_entity_decode($rs['beef_hinsh_nendo']['new'], ENT_QUOTES, 'UTF-8'); ?></p>--}}
{{--                    </div>--}}
{{--                    <?php } ?>--}}
                </div>
                <p class="smallButton">
                    <a href="/rating/archive/#beef_result">過去の格付結果</a>
                </p>
            </div>
            <h3>年別・月別の品種別・性別ごとの格付結果</h3>
            <div class="l-h3Body clearfix">
                <p>平成7年以降の格付結果を掲載しています。</p>
                <ul class="m-section-list_marker">
                    <li>格付された全ての牛枝肉についてのデータを掲載しています。</li>
                </ul>
                <div class="division-btm-area clearfix">
{{--                    <?php if (isset($rs['beef_sex'])) { ?>--}}
{{--                    <div class="division-btm-area-item">--}}
{{--                        <ul>--}}
{{--                            <li><a class="export" href="/rating/download/<?php echo $rs['beef_sex']['ratingCd']; ?>">--}}
{{--                                    <span class="list_date">格付結果</span>--}}
{{--                                        <?php if ($rs['beef_sex']['teisei'] !== '') { ?>--}}
{{--                                    <span class="Teisei"><?php echo $rs['beef_sex']['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <p class="update"><?php echo \My\Func::getWareki($rs['beef_sex']['publishDate'], false) ?>更新<?php echo html_entity_decode($rs['beef_sex']['new'], ENT_QUOTES, 'UTF-8'); ?></p>--}}
{{--                    </div>--}}
{{--                    <?php } ?>--}}
                </div>
            </div>
            <h3>出荷県別格付結果情報</h3>
            <div class="l-h3Body clearfix">
                <p>県別の品種別・性別ごとの格付結果と歩留基準算出の計測値を掲載しています。</p>
                <ul class="m-section-list_marker">
                    <li>
                        ここでは出荷県別に黒毛和牛、乳用牛、交雑牛の去勢牛ついて、等級別格付結果と歩留基準値算出のための各項目の平均測定値をお知らせします。<br>
                        なお、「歩留補正」、「未切開」及び「瑕疵のあるもの」を除いたものが調査対象となっていますので、この数値を活用する場合はこのことをご理解ください。
                    </li>
                    <li>出荷県とは、牛を出荷された方の所属する県のことを言います。（出荷県&ne;生産県）例えば、岩手で肥育された方が千葉の出荷専門の方に委託して、市場等に出荷された場合は、出荷者 が所属する県、つまり千葉県が出荷県となります。</li>
                </ul>
                <div class="division-btm-area clearfix">
{{--                    <?php if (isset($rs['beef_ken_four'])) { ?>--}}
{{--                    <div class="division-btm-area-item">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a class="export" href="/rating/download/<?php echo $rs['beef_ken_four']['ratingCd']; ?>">--}}
{{--                                    <span class="list_title">四半期</span>--}}
{{--                                    <span class="list_date"><?php echo $rs['beef_ken_four']['ratingNm'] ?></span>--}}
{{--                                        <?php if ($rs['beef_ken_four']['teisei'] !== '') { ?>--}}
{{--                                    <span class="Teisei"><?php echo $rs['beef_ken_four']['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                    <span class="list_month"><?php echo is_null($rs['beef_ken_four']['spanText']) ? '' : '（' . $rs['beef_ken_four']['spanText'] . '分）' ?></span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <p class="update"><?php echo \My\Func::getWareki($rs['beef_ken_four']['publishDate'], false) ?>更新<?php echo html_entity_decode($rs['beef_ken_four']['new'], ENT_QUOTES, 'UTF-8'); ?></p>--}}
{{--                    </div>--}}
{{--                    <?php } if (isset($rs['beef_ken_nenji'])) { ?>--}}
                    <div class="division-btm-area-item">
                        <ul>
                            <li>
{{--                                <a class="export" href="/rating/download/<?php echo $rs['beef_ken_nenji']['ratingCd']; ?>">--}}
{{--                                    <span class="list_title">年次</span>--}}
{{--                                    <span class="list_date"><?php echo $rs['beef_ken_nenji']['ratingNm'] ?></span>--}}
{{--                                        <?php if ($rs['beef_ken_nenji']['teisei'] !== '') { ?>--}}
{{--                                    <span class="Teisei"><?php echo $rs['beef_ken_nenji']['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                    <span class="list_month"><?php echo is_null($rs['beef_ken_nenji']['spanText']) ? '' : '（' . $rs['beef_ken_nenji']['spanText'] . '分）' ?></span>--}}
{{--                                </a>--}}
                            </li>
                        </ul>
{{--                        <p class="update"><?php echo \My\Func::getWareki($rs['beef_ken_nenji']['publishDate'], false) ?>更新<?php echo html_entity_decode($rs['beef_ken_nenji']['new'], ENT_QUOTES, 'UTF-8'); ?></p>--}}
                    </div>
{{--                    <?php } if (isset($rs['beef_ken_nendo'])) { ?>--}}
{{--                    <div class="division-btm-area-item">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a class="export" href="/rating/download/<?php echo $rs['beef_ken_nendo']['ratingCd']; ?>">--}}
{{--                                    <span class="list_title">年度</span>--}}
{{--                                    <span class="list_date"><?php echo $rs['beef_ken_nendo']['ratingNm'] ?></span>--}}
{{--                                        <?php if ($rs['beef_ken_nendo']['teisei'] !== '') { ?>--}}
{{--                                    <span class="Teisei"><?php echo $rs['beef_ken_nendo']['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                    <span class="list_month"><?php echo is_null($rs['beef_ken_nendo']['spanText']) ? '' : '（' . $rs['beef_ken_nendo']['spanText'] . '分）' ?></span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <p class="update"><?php echo \My\Func::getWareki($rs['beef_ken_nendo']['publishDate'], false) ?>更新<?php echo html_entity_decode($rs['beef_ken_nendo']['new'], ENT_QUOTES, 'UTF-8'); ?></p>--}}
{{--                    </div>--}}
{{--                    <?php } ?>--}}
                </div>
                <p class="smallButton">
                    <a href="/rating/archive/#shipment_result">過去の格付結果</a>
                </p>
            </div>
        </div>
    </div>

    <div class="l-section_orange" id="pork_result">
        <div class="l-h2Head">
            <h2 class="titleSection">豚枝肉格付結果</h2>
        </div>
        <div class="l-h2Body">
            <h3>年別・月別の格付結果</h3>
            <div class="l-h3Body clearfix">
                <p>平成7年以降の格付結果を掲載しています。</p>
                <ul class="m-section-list_marker">
                    <li>格付された全ての豚枝肉についてのデータを掲載しています。</li>
                </ul>
                <div class="division-btm-area clearfix">
{{--                    <?php if (isset($rs['pork_ym'])) { ?>--}}
{{--                    <div class="division-btm-area-item">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a class="export" href="/rating/download/<?php echo $rs['pork_ym']['ratingCd']; ?>">--}}
{{--                                    <span class="list_date">格付結果</span>--}}
{{--                                        <?php if ($rs['pork_ym']['teisei'] !== '') { ?>--}}
{{--                                    <span class="Teisei"><?php echo $rs['pork_ym']['teisei']; ?></span>--}}
{{--                                    <?php } ?>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <p class="update"><?php echo \My\Func::getWareki($rs['pork_ym']['publishDate'], false) ?>更新<?php echo html_entity_decode($rs['pork_ym']['new'], ENT_QUOTES, 'UTF-8'); ?></p>--}}
{{--                    </div>--}}
{{--                    <?php } ?>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="l-section_white" id="beefpork_common">
        <div class="l-h2Head">
            <h2 class="titleSection">牛及び豚枝肉共通格付結果の概要</h2>
        </div>
        <div class="l-h2Body">
            <h3>格付結果の概要</h3>
            <div class="l-h3Body clearfix">
                <div class="division-innner clearfix">
{{--                    <div class="division-btm-area clearfix">--}}
{{--                        <?php if (isset($rs['bp_gaiyo_four'])) { ?>--}}
{{--                        <div class="division-btm-area-item">--}}
{{--                            <ul>--}}
{{--                                <li><a class="export" href="/rating/download/<?php echo $rs['bp_gaiyo_four']['ratingCd']; ?>">--}}
{{--                                        <span class="list_title">四半期</span>--}}
{{--                                        <span class="list_date"><?php echo $rs['bp_gaiyo_four']['ratingNm'] ?></span>--}}
{{--                                            <?php if ($rs['bp_gaiyo_four']['teisei'] !== '') { ?>--}}
{{--                                        <span class="Teisei"><?php echo $rs['bp_gaiyo_four']['teisei']; ?></span>--}}
{{--                                        <?php } ?>--}}
{{--                                        <span class="list_month"><?php echo is_null($rs['bp_gaiyo_four']['spanText']) ? '' : '（' . $rs['bp_gaiyo_four']['spanText'] . '分）' ?></span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <p class="update"><?php echo \My\Func::getWareki($rs['bp_gaiyo_four']['publishDate'], false) ?>更新<?php echo html_entity_decode($rs['bp_gaiyo_four']['new'], ENT_QUOTES, 'UTF-8'); ?></p>--}}
{{--                        </div>--}}
{{--                        <?php } ?>--}}
                        <div class="division-btm-area-item_r">
                            <ul class="m-section-list_marker" style="max-width: 640px;">
                                <li>四半期の格付結果の概要は格付された全ての枝肉についてのデータをと畜日で集計し掲載しています。</li>
                                <li>表によっては対象頭数が異なることがあり、目次又は表下に注意書きで記載しています。</li>
                            </ul>
                        </div>
{{--                    </div>--}}
                    <div class="division-btm-area clearfix">
{{--                        <?php if (isset($rs['bp_gaiyo_nenji'])) { ?>--}}
{{--                        <div class="division-btm-area-item">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a class="export" href="/rating/download/<?php echo $rs['bp_gaiyo_nenji']['ratingCd']; ?>">--}}
{{--                                        <span class="list_title">年次</span>--}}
{{--                                        <span class="list_date"><?php echo $rs['bp_gaiyo_nenji']['ratingNm'] ?></span>--}}
{{--                                            <?php if ($rs['bp_gaiyo_nenji']['teisei'] !== '') { ?>--}}
{{--                                        <span class="Teisei"><?php echo $rs['bp_gaiyo_nenji']['teisei']; ?></span>--}}
{{--                                        <?php } ?>--}}
{{--                                        <span class="list_month"><?php echo is_null($rs['bp_gaiyo_nenji']['spanText']) ? '' : '（' . $rs['bp_gaiyo_nenji']['spanText'] . '分）' ?></span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <p class="update"><?php echo \My\Func::getWareki($rs['bp_gaiyo_nenji']['publishDate'], false) ?>更新<?php echo html_entity_decode($rs['bp_gaiyo_nenji']['new'], ENT_QUOTES, 'UTF-8'); ?></p>--}}
{{--                            <?php } ?>--}}
                        </div>
                        <div class="division-btm-area-item_r">
                            <ul class="m-section-list_marker" style="max-width: 640px;">
                                <li>年次の格付結果の概要は格付された全ての枝肉についてのデータをと畜日で集計し掲載しています。</li>
                                <li>表によっては対象頭数が異なることがあり、目次又は表下に注意書きで記載しています。</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="smallButton">
                    <a href="/rating/archive/#beefpork_common">過去の格付結果</a>
                </p>
            </div>
        </div>
    </div>

    <div class="l-section_orange l-section-last" id="beefpork_result">
        <div class="l-h2Head">
            <h2 class="titleSection">牛・豚部分肉格付結果</h2>
        </div>
        <div class="l-h2Body">
            <h3>部分肉格付結果</h3>
            <div class="l-h3Body clearfix">
                <div class="division-innner clearfix">
                    <div class="division-btm-area clearfix">
{{--                        <?php if (isset($rs['bp_part_gaiyo'])) { ?>--}}
{{--                        <div class="division-btm-area-item">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a class="export" href="/rating/download/<?php echo $rs['bp_part_gaiyo']['ratingCd']; ?>">--}}
{{--                                        <span class="list_date">格付結果</span>--}}
{{--                                            <?php if ($rs['bp_part_gaiyo']['teisei'] !== '') { ?>--}}
{{--                                        <span class="Teisei"><?php echo $rs['bp_part_gaiyo']['teisei']; ?></span>--}}
{{--                                        <?php } ?>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <p class="update"><?php echo \My\Func::getWareki($rs['bp_part_gaiyo']['publishDate'], false) ?>更新<?php echo html_entity_decode($rs['bp_part_gaiyo']['new'], ENT_QUOTES, 'UTF-8'); ?></p>--}}
{{--                        </div>--}}
{{--                        <?php } ?>--}}
                        <div class="division-btm-area-item_r">
                            <ul class="m-section-list_marker">
                                <li>牛部分肉の格付動向</li>
                                <li>豚部分肉の格付動向</li>
                                <li>部分肉格付工場数の推移</li>
                                <li>部分肉格付認定工場一覧（県別）</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
