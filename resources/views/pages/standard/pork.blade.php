
{{--豚枝肉取引規格ページ--}}

@extends('layouts.base')

@section('title', '豚枝肉取引規格')

@section('description', '豚枝肉取引規格（豚枝肉取引規格の適用条件、外観、肉質、等級表示、背脂肪の測定、性別など）についてご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', '豚,枝肉,取引,規格,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人')

@section('sub_title', '- standard pork -')

@section('breadcrumb')

    <div class="m-breadcrumb">
        <ol class="topicPath">
            <li><a href="./../../index.html">ホーム</a></li>
            <li><a href="/standard">食肉格付とは</a></li>
            <li>豚枝肉取引規格</li>
        </ol>
    </div>

@endsection

@section('content')

    <div class="l-localnavi">
        <div id="m-localnavi">
            <ul>
                <li><a href="#standard_pork">取引規格</a></li>
                <li><a href="#standard-condition_pork">取引規格の適用条件</a></li>
                <li><a href="#appearance_pork">外観</a></li>
                <li><a href="#meat-quality_pork">肉質</a></li>
                <li><a href="#grad-label_pork">等級表示</a></li>
                <li><a href="#backfat_pork">背脂肪の測定</a></li>
                <li><a href="#sex_pork">性別</a></li>
                <li><a href="#standard-pamph_pork">取引規格概要パンフレット</a></li>
            </ul>
        </div>
    </div>

    <div class="l-section_white" id="standard_pork">
        <div class="l-h2Head">
            <h2 class="titleSection">豚枝肉取引規格</h2>
        </div>
        <div class="l-h2Body">
            <h3>重量及び背脂肪の厚さの範囲</h3>
            <div class="l-h3Body">
                <table class="m-section-table firstCol firstRow">
                    <thead>
                    <tr>
                        <th>等級</th>
                        <th>重量及び背脂肪の厚さの範囲</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>極上</th>
                        <td>皮はぎ73kg以上81kg以下、湯はぎ79kg以上87kg以下（背脂肪の厚さの区分は別記2による。）</td>
                    </tr>
                    <tr>
                        <th>上</th>
                        <td>皮はぎ68kg以上83kg以下、湯はぎ74kg以上89kg以下（同上）</td>
                    </tr>
                    <tr>
                        <th>中</th>
                        <td>皮はぎ63kg以上88kg以下、湯はぎ69kg以上94kg以下（同上）</td>
                    </tr>
                    <tr>
                        <th>並</th>
                        <td>皮はぎ63kg未満88kg超過、湯はぎ69kg未満94kg超過（同上）</td>
                    </tr>
                    <tr>
                        <th>等外</th>
                        <td>※<a href="#l-togai">等外</a>参照</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h3>外観</h3>
            <div class="l-h3Body">
                <table class="m-section-table firstCol firstRow">
                    <thead>
                    <tr>
                        <th>等級</th>
                        <th>均称</th>
                        <th>肉づき</th>
                        <th>脂肪付着</th>
                        <th>仕上げ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>極上</th>
                        <td>長さ、広さが適当で厚く、もも、ロース、ばら、かたの各部がよく充実して、釣合の特に良いもの</td>
                        <td>厚く、なめらかで肉づきが特に良く、枝肉に対する赤肉の割合が脂肪と骨よりも多いもの</td>
                        <td>背脂肪及び腹部脂肪の付着が適度のもの</td>
                        <td>放血が十分で、疾病などによる損傷がなく、取扱の不適による汚染、損傷などの欠点のないもの</td>
                    </tr>
                    <tr>
                        <th>上</th>
                        <td>長さ、広さが適当で厚く、もも、ロース、ばら、かたの各部が充実して、釣合の良いもの</td>
                        <td>厚く、なめらかで肉づきが良く、枝肉に対する赤肉の割合が、おおむね脂肪と骨よりも多いもの</td>
                        <td>背脂肪及び腹部脂肪の付着が適度のもの</td>
                        <td>放血が十分で、疾病などによる損傷がなく、取扱の不適による汚染、損傷などの欠点のほとんどないもの</td>
                    </tr>
                    <tr>
                        <th>中</th>
                        <td>長さ、広さ、厚さ、全体の形、各部の釣合において、いずれにも優れたところがなく、また大きな欠点のないもの</td>
                        <td>特に優れたところもなく、赤肉の発達も普通で、大きな欠点のないもの</td>
                        <td>背脂肪及び腹部脂肪の付着に大きな欠点のないもの</td>
                        <td>放血普通で、疾病などによる損傷が少なく、取扱の不適による汚染、損傷などの大きな欠点のないもの</td>
                    </tr>
                    <tr>
                        <th>並</th>
                        <td>全体の形、各部の釣合ともに欠点の多いもの</td>
                        <td>薄く、付着状態が悪く、赤肉の割合が劣っているもの</td>
                        <td>背脂肪及び腹部脂肪の付着に欠点の認められるもの</td>
                        <td>放血がやや不十分で、多少の損傷があり、取扱の不適による汚染などの欠点の認められるもの</td>
                    </tr>
                    <tr>
                        <th>等外</th>
                        <td colspan="4">※<a href="#l-togai">等外</a>参照</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h3>肉質</h3>
            <div class="l-h3Body">
                <table class="m-section-table firstCol firstRow">
                    <thead>
                    <tr>
                        <th>等級</th>
                        <th>肉の締まり及びきめ</th>
                        <th>肉の色沢</th>
                        <th>脂肪の色沢と質</th>
                        <th>脂肪の沈着</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>極上</th>
                        <td>締まりは特に良く、きめが細かいもの</td>
                        <td>肉色は、淡灰紅色で、鮮明であり、光沢の良いもの</td>
                        <td>色白く、光沢があり、締まり、粘りともに特に良いもの</td>
                        <td>適度のもの</td>
                    </tr>
                    <tr>
                        <th>上</th>
                        <td>締まりは良く、きめが細かいもの</td>
                        <td>肉色は、淡灰紅色で又はそれに近く、鮮明で光沢の良いもの</td>
                        <td>色白く、光沢があり、締まり、粘りともに良いもの</td>
                        <td>適度のもの</td>
                    </tr>
                    <tr>
                        <th>中</th>
                        <td>締まり、きめともに大きな欠点のないもの</td>
                        <td>肉色、光沢ともに特に大きな欠点のないもの</td>
                        <td>色沢普通のもので、締まり、粘りともに大きな欠点のないもの</td>
                        <td>普通のもの</td>
                    </tr>
                    <tr>
                        <th>並</th>
                        <td>締まり、きめともに欠点のあるもの</td>
                        <td>肉色は、かなり濃いか又は過度に淡く、光沢の良くないもの</td>
                        <td>やや異色があり、光沢も不十分で、締まり粘りともに十分でないもの</td>
                        <td>過少か又は過多のもの</td>
                    </tr>
                    <tr>
                        <th>等外</th>
                        <td colspan="4">※<a href="#l-togai">等外</a>参照</td>
                    </tr>
                    </tbody>
                </table>
                <div class="commentSection" id="l-togai">※等外
                    <ul class="m-section-list_decimal">
                        <li>以上の等級のいずれにも該当しないもの</li>
                        <li>外観又は肉質の特に悪いもの</li>
                        <li>黄豚又は脂肪の質の特に悪いもの</li>
                        <li>牡臭その他異臭のあるもの</li>
                        <li>衛生検査による割除部の多いもの</li>
                        <li>著しく汚染されているもの</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="l-section_orange clearfix" id="standard-condition_pork">
        <div class="l-h2Head">
            <h2 class="titleSection">豚枝肉取引規格の適用条件</h2>
        </div>
        <div class="l-h2Body clearfix">
            <ul class="m-section-list-item">
                <li>1.この規格は、別記1に定める解体整形方法によって整形した皮はぎ、湯はぎの冷却枝肉又は温枝肉の両者を対象とする。</li>
                <li>2.この規格は、品種、年令、性別の如何にかかわらず適用する。</li>
                <li>3.この規格による背脂肪の厚さは、第9～第13胸椎関節部直上における背脂肪の薄い部位の厚さとする。</li>
                <li>4.この規格の適用については、枝肉重量と背脂肪の厚さ、外観、肉質の3者について、その等級の条件を同時に具備しているものを当該等級に格付する。格付に当たっては、まず、枝肉重量と背脂肪の厚さによる等級の判定表によって該当する等級を判定し、次いで外観と肉質の各項の条件によって等級を決定する。</li>
            </ul>
            <p class="commentSection">別記1　解体整形方法</p>
            <table class="m-section-table standard-condition">
                <thead>
                <tr>
                    <th rowspan="2">項目</th>
                    <th colspan="2">要領</th>
                </tr>
                <tr>
                    <th class="leftSolid">皮はぎ</th>
                    <th>湯はぎ</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>はく皮、はく毛</td>
                    <td>真皮の内面に沿ってはく皮する。</td>
                    <td>短時間湯に浸した後、はく毛する。</td>
                </tr>
                <tr>
                    <td>頭部切断</td>
                    <td>はく皮後、頰肉は頭部に残し、他の頰部は枝肉につけ、後頭骨端と第1頚椎との間で切断する。</td>
                    <td>頰肉は頭部に残し、他の頰部は枝肉につけ、耳は頭に残し、後頭骨端と第1頚椎との間で切断する。</td>
                </tr>
                <tr>
                    <td>内臓割去</td>
                    <td>腹側正中線に沿って、頚、胸、腹を切り開き、横隔膜はその脚筋とともに体壁付着部から切離し、腎臓及び腎臓脂肪は枝肉に残し、陰茎、精巣は内臓ととも摘出する。</td>
                    <td>皮はぎの場合と同じ</td>
                </tr>
                <tr>
                    <td>前肢切断</td>
                    <td>手根骨と中手骨の間を切断する。</td>
                    <td>皮はぎの場合と同じ</td>
                </tr>
                <tr>
                    <td>後肢切断</td>
                    <td>足根骨と中足骨の間を切断する。</td>
                    <td>皮はぎの場合と同じ</td>
                </tr>
                <tr>
                    <td>尾切断</td>
                    <td>尾根部は、第３～第４尾椎間で切断する。</td>
                    <td>皮はぎの場合と同じ</td>
                </tr>
                <tr>
                    <td>枝肉の分割</td>
                    <td>骨盤結合及び脊柱の中央線に沿って左右の半体に切断し、左右の半丸枝肉とする。</td>
                    <td>皮はぎの場合と同じ</td>
                </tr>
                </tbody>
            </table>
            <h3>1.枝肉重量と背脂肪の厚さによる等級の判定表（皮はぎ用）</h3>
            <div class="l-h3Body clearfix">
                <div class="m-section-imageWrap itemContainer">
                    <img width="438" src="/assets/commons/img/img_pork01.png" alt="枝肉重量と背脂肪の厚さによる等級の判定表（皮はぎ用）" />
                </div>
                <p class="commentSection">枝肉重量と背脂肪の厚さの範囲</p>
                <table class="m-section-table_variable firstCol firstRow fl">
                    <thead>
                    <tr>
                        <th>等級</th>
                        <th>重量（kg）</th>
                        <th>背脂肪（cm）</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>極上</th>
                        <td>73.0以上 ～ 81.0以下</td>
                        <td>1.5以上 ～ 2.1以下</td>
                    </tr>
                    <tr>
                        <th>上</th>
                        <td>68.0以上 ～ 83.0以下</td>
                        <td>1.3以上 ～ 2.4以下</td>
                    </tr>
                    <tr>
                        <th>中</th>
                        <td>63.0以上 ～ 78.0未満<br>78.0以上 ～ 88.0以下</td>
                        <td>0.9以上 ～ 2.7以下<br>1.0以上 ～ 3.0以下</td>
                    </tr>
                    <tr>
                        <th>並</th>
                        <td>63.0未満<br>63.0以上 ～ 78.0未満<br>78.0以上 ～ 88.0以下<br>88.0超過</td>
                        <td class="veMi">0.9未満　  2.7超過<br>1.0未満　  3.0超過</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h3>2.枝肉重量と背脂肪の厚さによる等級の判定表（湯はぎ用）</h3>
            <div class="l-h3Body clearfix">
                <div class="m-section-imageWrap itemContainer">
                    <img width="438" src="/assets/commons/img/img_pork02.png" alt="枝肉重量と背脂肪の厚さによる等級の判定表（湯はぎ用)" />
                </div>
                <p class="commentSection">枝肉重量と背脂肪の厚さの範囲</p>
                <table class="m-section-table_variable firstCol firstRow fl">
                    <thead>
                    <tr>
                        <th>等級</th>
                        <th>重量（kg）</th>
                        <th>背脂肪（cm）</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>極上</th>
                        <td>79.0以上 ～ 87.0以下</td>
                        <td>1.5以上 ～ 2.1以下</td>
                    </tr>
                    <tr>
                        <th>上</th>
                        <td>74.0以上 ～ 89.0以下</td>
                        <td>1.3以上 ～ 2.4以下</td>
                    </tr>
                    <tr>
                        <th>中</th>
                        <td>69.0以上 ～ 84.0未満<br>84.0以上 ～ 94.0以下</td>
                        <td>0.9以上 ～ 2.7以下<br>1.0以上 ～ 3.0以下</td>
                    </tr>
                    <tr>
                        <th>並</th>
                        <td>69.0未満<br>69.0以上 ～ 84.0未満<br>84.0以上 ～ 94.0以下<br>94.0超過</td>
                        <td class="veMi">0.9未満　  2.7超過<br>1.0未満　  3.0超過</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="l-section_white clearfix" id="appearance_pork">
        <div class="l-h2Head">
            <h2 class="titleSection">外観</h2>
        </div>
        <div class="l-h2Body">
            <h3>均称</h3>
            <div class="l-h3Body clearfix">
                <table class="m-section-table firstRow">
                    <tbody>
                    <tr>
                        <th>極上</th>
                        <td>長さ、広さが適当で厚く、もも、ロース、ばら、かたの各部がよく充実して、釣合の特に良いもの</td>
                    </tr>
                    <tr>
                        <th>上</th>
                        <td>長さ、広さが適当で厚く、もも、ロース、ばら、かたの各部が充実して、釣合の良いもの</td>
                    </tr>
                    <tr>
                        <th>中</th>
                        <td>長さ、広さ、厚さ、全体の形、各部の釣合において、いずれにも優れたところがなく、また大きな欠点のないもの</td>
                    </tr>
                    <tr>
                        <th>並</th>
                        <td>全体の形、各部の釣合ともに欠点の多いもの</td>
                    </tr>
                    </tbody>
                </table>
                <div class="m-section-imageWrap">
                    <img  src="/assets/commons/img/img_pork03.png" alt="均称" />
                </div>
            </div>
            <h3>肉づき</h3>
            <div class="l-h3Body clearfix">
                <table class="m-section-table firstRow">
                    <tbody>
                    <tr>
                        <th>極上</th>
                        <td>厚く、なめらかで肉づきが特に良く、枝肉に対する赤肉の割合が脂肪と骨よりも多いもの</td>
                    </tr>
                    <tr>
                        <th>上</th>
                        <td>厚く、なめらかで肉づきが良く、枝肉に対する赤肉の割合が、おおむね脂肪と骨よりも多いもの</td>
                    </tr>
                    <tr>
                        <th>中</th>
                        <td>特に優れたところもなく、赤肉の発達も普通で、大きな欠点のないもの</td>
                    </tr>
                    <tr>
                        <th>並</th>
                        <td>薄く、付着状態が悪く、赤肉の割合が劣っているもの</td>
                    </tr>
                    </tbody>
                </table>
                <div class="m-section-imageWrap">
                    <img src="/assets/commons/img/img_pork04.png" alt="豚枝肉切断部位" />
                </div>
                <div class="m-section-imageWrap">
                    <img src="/assets/commons/img/img_pork05.png" alt="肉付" />
                </div>
                <div class="m-section-imageWrap">
                    <p>肋張り</p>
                    <img src="/assets/commons/img/img_pork06.png" alt="肋張り" />
                </div>
                <div class="m-section-imageWrap">
                    <p>もも</p>
                    <img src="/assets/commons/img/img_pork07.png" alt="もも" />
                    <p class="m-section-imageWrap-item">充実したもの 小さいもの</p>
                </div>
                <div class="m-section-imageWrap">
                    <p>ランジリ</p>
                    <img src="/assets/commons/img/img_pork08.png" alt="ランジリ" />
                    <p class="m-section-imageWrap-item">大きいもの 小さいもの</p>
                </div>
            </div>
            <h3>脂肪付着</h3>
            <div class="l-h3Body clearfix">
                <table class="m-section-table firstRow">
                    <tbody>
                    <tr>
                        <th>極上</th>
                        <td>背脂肪及び腹部脂肪の付着が適度のもの</td>
                    </tr>
                    <tr>
                        <th>上</th>
                        <td>背脂肪及び腹部脂肪の付着が適度のもの</td>
                    </tr>
                    <tr>
                        <th>中</th>
                        <td>背脂肪及び腹部脂肪の付着に大きな欠点のないもの </td>
                    </tr>
                    <tr>
                        <th>並</th>
                        <td>背脂肪及び腹部脂肪の付着に欠点の認められるもの</td>
                    </tr>
                    </tbody>
                </table>
                <div class="m-section-imageWrap">
                    <img src="/assets/commons/img/img_pork09_01.png" alt="脂肪付着の薄いもの" />
                    <p class="m-section-imageWrap-item">脂肪付着の薄いもの</p>
                </div>
                <div class="m-section-imageWrap">
                    <img src="/assets/commons/img/img_pork09_02.png" alt="脂肪が厚く被覆しているもの" />
                    <p class="m-section-imageWrap-item">脂肪が厚く被覆しているもの<br>腹部脂肪の厚いもの<br>腰の厚いもの</p>
                </div>
                <div class="m-section-imageWrap">
                    <img src="/assets/commons/img/img_pork09_03.png" alt="皮下脂肪が厚く被覆しているもの" />
                    <p class="m-section-imageWrap-item">皮下脂肪が厚く被覆しているもの<br>(第6～第7腰椎間の切断面)</p>
                </div>
            </div>
            <h3>仕上げ</h3>
            <div class="l-h3Body clearfix">
                <table class="m-section-table firstRow">
                    <tbody>
                    <tr>
                        <th>極上</th>
                        <td>放血が十分で、疾病などによる損傷がなく、取扱の不適による汚染、損傷などの欠点のないもの</td>
                    </tr>
                    <tr>
                        <th>上</th>
                        <td>放血が十分で、疾病などによる損傷がなく、取扱の不適による汚染、損傷などの欠点のほとんどないもの</td>
                    </tr>
                    <tr>
                        <th>中</th>
                        <td>放血普通で、疾病などによる損傷が少なく、取扱の不適による汚染、損傷などの大きな欠点のないもの </td>
                    </tr>
                    <tr>
                        <th>並</th>
                        <td>放血がやや不十分で、多少の損傷があり、取扱の不適による汚染などの欠点の認められるもの</td>
                    </tr>
                    </tbody>
                </table>
                <div class="m-section-imageWrap">
                    <img src="/assets/commons/img/img_pork10_01.png" alt="骨折" />
                    <p class="m-section-imageWrap-item">骨折</p>
                </div>
                <div class="m-section-imageWrap">
                    <img src="/assets/commons/img/img_pork10_02.png" alt="ロースに損傷のあるもの" />
                    <p class="m-section-imageWrap-item">ロースに損傷のあるもの</p>
                </div>
                <div class="m-section-imageWrap">
                    <img src="/assets/commons/img/img_pork10_03.png" alt="ロースに損傷のあるもの" />
                    <p class="m-section-imageWrap-item">衛生検査による割除部の多いもの</p>
                </div>
            </div>
        </div>
    </div>

    <div class="l-section_orange clearfix" id="meat-quality_pork">
        <div class="l-h2Head">
            <h2 class="titleSection">肉質</h2>
        </div>
        <div class="l-h2Body">
            <div class="meat-qualityColumn">
                <h3>肉の締まり及びきめ</h3>
                <div class="l-h3Body meat-qualityColumn clearfix">
                    <table class="m-section-table_half">
                        <tbody>
                        <tr>
                            <th>極上</th>
                            <td>締まりは特に良く、きめが細かいもの</td>
                        </tr>
                        <tr>
                            <th>上</th>
                            <td>締まりは良く、きめが細かいもの</td>
                        </tr>
                        <tr>
                            <th>中</th>
                            <td>締まり、きめともに大きな欠点のないもの </td>
                        </tr>
                        <tr>
                            <th>並</th>
                            <td>締まり、きめともに欠点のあるもの</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="meat-qualityColumn">
                <h3>肉の色沢</h3>
                <div class="l-h3Body meat-qualityColumn clearfix">
                    <table class="m-section-table_half">
                        <tbody>
                        <tr>
                            <th>極上</th>
                            <td>肉色は、淡灰紅色で、鮮明であり、光沢の良いもの</td>
                        </tr>
                        <tr>
                            <th>上</th>
                            <td>肉色は、淡灰紅色で又はそれに近く、鮮明で光沢の良いもの</td>
                        </tr>
                        <tr>
                            <th>中</th>
                            <td>肉色、光沢ともに特に大きな欠点のないもの </td>
                        </tr>
                        <tr>
                            <th>並</th>
                            <td>肉色は、かなり濃いか又は過度に淡く、光沢の良くないもの</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="meat-qualityColumn">
                <h3>脂肪の色沢と質</h3>
                <div class="l-h3Body clearfix">
                    <table class="m-section-table_half">
                        <tbody>
                        <tr>
                            <th>極上</th>
                            <td>色白く、光沢があり、締まり、粘りともに特に良いもの</td>
                        </tr>
                        <tr>
                            <th>上</th>
                            <td>色白く、光沢があり、締まり、粘りともに良いもの</td>
                        </tr>
                        <tr>
                            <th>中</th>
                            <td>色沢普通のもので、締まり、粘りともに大きな欠点のないもの </td>
                        </tr>
                        <tr>
                            <th>並</th>
                            <td>やや異色があり、光沢も不十分で、締まり粘りともに十分でないもの</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="meat-qualityColumn">
                <h3>脂肪の沈着</h3>
                <div class="l-h3Body clearfix">
                    <table class="m-section-table_half">
                        <tbody>
                        <tr>
                            <th>極上</th>
                            <td>適度のもの</td>
                        </tr>
                        <tr>
                            <th>上</th>
                            <td>適度のもの</td>
                        </tr>
                        <tr>
                            <th>中</th>
                            <td>普通のもの </td>
                        </tr>
                        <tr>
                            <th>並</th>
                            <td>過少か又は過多のもの</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfix">
                <div class="m-section-imageWrap">
                    <p>ポークカラー・スタンダード(胸最長筋における肉色判定)</p>
                    <img src="/assets/commons/img/img_pork11.png" alt="ポークカラー・スタンダード(胸最長筋における肉色判定)" />
                </div>
                <div class="m-section-imageWrap">
                    <p>ポークカラー・スタンダード(脂肪色判定)</p>
                    <img src="/assets/commons/img/img_pork13.png" alt="ポークカラー・スタンダード(脂肪色判定)" />
                </div>
                <div class="m-section-imageWrap">
                    <p>うちももの肉色の濃いもの　うちももの肉色の淡いもの</p>
                    <img src="/assets/commons/img/img_pork12.png" alt="うちももの肉色" />
                </div>
            </div>
            <p class="commentSection">※上記のポークカラー・スタンダードは、実物と色及び大きさが異なります。</p>
        </div>
    </div>

    <div class="l-section_white clearfix" id="grad-label_pork">
        <div class="l-h2Head">
            <h2 class="titleSection">等級表示</h2>
        </div>
        <div class="l-h2Body clearfix">
            <div class="m-section-imageWrap">
                <img src="/assets/commons/img/img_pork14.png" alt="等級表示" />
            </div>
        </div>
    </div>

    <div class="l-section_orange clearfix" id="backfat_pork">
        <div class="l-h2Head">
            <h2 class="titleSection">背脂肪の測定</h2>
        </div>
        <div class="l-h2Body clearfix">
            <p>背脂肪の厚さは第9～第13胸椎関節部直上における背脂肪の薄い部位で測定する。</p>
            <div class="m-section-imageWrap">
                <img src="/assets/commons/img/img_pork15.png" alt="背脂肪の測定" />
            </div>
        </div>
    </div>

    <div class="l-section_white clearfix" id="sex_pork">
        <div class="l-h2Head">
            <h2 class="titleSection">性別</h2>
        </div>
        <div class="l-h2Body clearfix">
            <div class="m-section-imageWrap">
                <p>雌</p>
                <img src="/assets/commons/img/img_pork16_01.png" alt="雌" />
            </div>
            <div class="m-section-imageWrap">
                <p>去勢</p>
                <img src="/assets/commons/img/img_pork16_02.png" alt="去勢" />
            </div>
            <div class="m-section-imageWrap">
                <p>雄</p>
                <img src="/assets/commons/img/img_pork16_03.png" alt="雄" />
            </div>
            <div class="m-section-imageWrap">
                <img src="/assets/commons/img/img_pork17.png" alt="性別" />
            </div>
        </div>
    </div>

    <div class="l-section_orange">
        <ul class="largeButton column_03 clearfix">
            <li><a class="itemLink" href="/standard/beef/">牛枝肉取引規格</a></li>
            <li><a class="itemLink" href="/standard/beef-partial/">牛部分肉取引規格</a></li>
            <li><a class="itemLink" href="/standard/pork-partial/">豚部分肉取引規格</a></li>
        </ul>
    </div>


    <div class="l-section_white clearfix l-section-last" id="standard-pamph_pork">
        <div class="l-h2Head">
            <h2 class="titleSection">豚枝肉取引規格の概要パンフレット</h2>
        </div>
        <div class="l-h2Body clearfix">
            <p>以下よりパンフレットをご覧いただけます。</p>
            <ul class="largeButton clearfix">
                <li><img src="/assets/commons/img/img_pam_pork.png" alt="豚枝肉取引規格の概要パンフレット" /><a class="itemPdf" href="/assets/commons/doc/pamphlet_pork.pdf" target="pamphlet_pork">豚枝肉取引規格の概要</a></li>
            </ul>
        </div>
    </div>

@endsection
