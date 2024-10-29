
{{--牛枝肉取引規格ページ--}}

@extends('layouts.base')

@section('title', '牛枝肉取引規格')

@section('description', '牛枝肉取引規格（牛枝肉取引規格の適用条件、歩留等級、肉質等級、等級表示、瑕疵の種類区分と表示、性別など）についてご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', '牛,枝肉,取引,規格,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人')

@section('sub_title', '- standard beef -')

@section('breadcrumb')

    <div class="m-breadcrumb">
        <ol class="topicPath">
            <li><a href="./../../index.html">ホーム</a></li>
            <li><a href="/standard">食肉格付とは</a></li>
            <li>牛枝肉取引規格</li>
        </ol>
    </div>

@endsection

@section('content')

    <div class="l-localnavi">
        <div id="m-localnavi">
            <ul>
                <li><a href="#standard_beef">取引規格</a></li>
                <li><a href="#standard-condition_beef">取引規格の適用条件</a></li>
                <li><a href="#yield-grade_beef">歩留等級</a></li>
                <li><a href="#meatquality-grade_beef">肉質等級</a></li>
                <li><a href="#grad-label_beef">等級表示</a></li>
                <li><a href="#defect_beef">瑕疵の種類区分と表示</a></li>
                <li><a href="#sex_beef">性別</a></li>
                <li><a href="#standard-pamph_beef">取引規格概要パンフレット</a></li>
            </ul>
        </div>
    </div>

    <div class="l-section_white" id="standard_beef">
        <div class="l-h2Head">
            <h2 class="titleSection">牛枝肉取引規格</h2>
        </div>
        <div class="l-h2Body">
            <h3>（1）歩留等級</h3>
            <div class="l-h3Body">
                <table class="m-section-table_variable firstCol firstRow">
                    <thead>
                    <tr>
                        <th>等級</th>
                        <th>歩留基準値</th>
                        <th>歩留</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>A</th>
                        <td>72以上</td>
                        <td>部分肉歩留が標準より良いもの</td>
                    </tr>
                    <tr>
                        <th>B</th>
                        <td>69以上72未満</td>
                        <td>部分肉歩留の標準のもの</td>
                    </tr>
                    <tr>
                        <th>C</th>
                        <td>69未満</td>
                        <td>部分肉歩留が標準より劣るもの</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h3>（2）肉質等級</h3>
            <div class="l-h3Body">
                <table class="m-section-table firstCol firstRow">
                    <thead>
                    <tr>
                        <th>等級</th>
                        <th>脂肪交雑</th>
                        <th>肉の色沢</th>
                        <th>肉の締まり及びきめ</th>
                        <th>脂肪の色沢と質</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>5</th>
                        <td>胸最長筋並びに背半棘筋及び頭半棘筋における脂肪交雑がかなり多いもの</td>
                        <td>肉色及び光沢がかなり良いもの</td>
                        <td>締まりはかなり良く、きめがかなり細かいもの</td>
                        <td>脂肪の色、光沢及び質がかなり良いもの</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>胸最長筋並びに背半棘筋及び頭半棘筋における脂肪交雑がやや多いもの</td>
                        <td>肉色及び光沢がやや良いもの</td>
                        <td>締まりはやや良く、きめがやや細かいもの</td>
                        <td>脂肪の色、光沢及び質がやや良いもの</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>胸最長筋並びに背半棘筋及び頭半棘筋における脂肪交雑が標準のもの</td>
                        <td>肉色及び光沢が標準のもの</td>
                        <td>締まり及びきめが標準のもの</td>
                        <td>脂肪の色、光沢及び質が標準のもの</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>胸最長筋並びに背半棘筋及び頭半棘筋における脂肪交雑がやや少ないもの</td>
                        <td>肉色及び光沢が標準に準ずるもの</td>
                        <td>締まり及びきめが標準に準ずるもの</td>
                        <td>脂肪の色、光沢及び質が標準に準ずるもの</td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>胸最長筋並びに背半棘筋及び頭半棘筋における脂肪交雑がほとんどないもの</td>
                        <td>肉色及び光沢が劣るもの</td>
                        <td>締まりが劣り又はきめが粗いもの</td>
                        <td>脂肪の色、光沢及び質が劣るもの</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="l-section_orange" id="standard-condition_beef">
        <div class="l-h2Head">
            <h2 class="titleSection">牛枝肉取引規格の適用条件</h2>
        </div>
        <div class="l-h2Body">
            <ul class="m-section-list">
                <li>（1）この規格は、別記1に定める解体整形方法によって整形した冷却枝肉を対象とするものとし、温枝肉については、これを準用するものとする。</li>
                <li>（2）この規格は、品種、年令、性別にかかわらず、いずれの枝肉にも適用するものとする。ただし、子牛の枝肉には適用しないものとする。</li>
                <li>（3）この規格は、枝肉の2分体で第6～第7肋骨間において平直に切り開き、胸最長筋、背半棘筋及び頭半棘筋の状態並びにばら、皮下脂肪及び筋間脂肪の厚さがわかるようにしたものに適用するものとする。<br>
                    ただし、当分の間、明らかに外観上、｢歩留等級｣が｢C｣であって、かつ、｢肉質等級｣が｢1｣に該当するものと認められる枝肉については、切り開かなくても差し支えないものとする。</li>
                <li>（4）この規格の適用については、歩留及び肉質のそれぞれについて等級の格付を行い、連記して表示するものとする。<br>
                    また、枝肉に瑕疵の認められるものについては、瑕疵の状況を別記2の種類区分により等級の表示に付記して表示するものとする。</li>
                <li>（5）｢歩留等級｣の適用基準は原則として｢A｣は別記3に定める算式により算出された歩留基準値が72以上、｢B｣は69以上72未満、｢C｣は69未満とする。ただし、上記の規定にかかわらず枝肉が次のいずれかに該当する場合には、1等級下に格付けしても差し支えないものとする。<br>
                    <ul class="m-section-list-item">
                        <li>&#9312;切開面における筋間脂肪が、枝肉重量及び胸最長筋面積に対して相対的に厚いもの</li>
                        <li>&#9313;「もも｣の厚みに欠け、かつ、｢まえ｣と｢もも｣の釣合を著しく欠くもの</li>
                    </ul>
                </li>
                <li>（6）｢肉質等級｣は、｢脂肪交雑｣、｢肉の色沢｣、｢肉の締まり及びきめ」並びに｢脂肪の色沢と質」の4者について判定するものとし、その項目別等級のうち、最も低い等級に格付けするものとする。<br>
                    <ul class="m-section-list-item">
                        <li>&#9312;｢脂肪交雑」のうち胸最長筋の脂肪交雑の適用基準は、｢肉質等級5」はビーフ・マーブリング・スタンダード（以下｢B.M.S.｣という。）No.8（2<sup>+</sup>）以上、｢同4｣はB.M.S. No.5（1<sup>+</sup>）以上、｢同3｣はB.M.S. No.3（1<sup>-</sup>）以上、｢同2｣はB.M.S. No.2（0<sup>+</sup>）以上とし、｢同1｣はB.M.S. No.1（0）とする。</li>
                        <li>&#9313;｢肉の色沢｣のうち肉色の適用基準は、｢肉質等級5｣はビーフ・カラー・スタンダード（以下｢B.C.S.｣という。）No.3からNo.5までのもの、｢同4｣はB.C.S. No.2からNo.6までのもの、｢同3｣はB.C.S.No.1からNo.6までのもの、｢同2｣はB.C.S. No.1からNo.7までのものとし、｢同1｣は｢同5｣から｢同2｣までに該当しないものとする。</li>
                        <li>&#9314;｢脂肪の色沢と質｣のうち脂肪の色の適用基準は、｢肉質等級5｣はビーフ・ファット・スタンダード（以下｢B.F.S.｣という。）No.1からNo.4までのもの、｢同4｣はB.F.S. No.1からNo.5までのもの、｢同3｣はB.F.S. No.1からNo.6までのもの、｢同2｣はB.F.S. No.1からNo.7までのものとし、｢同1｣は｢同5｣から｢同2｣までに該当しないものとする。</li>
                    </ul>
                </li>
            </ul>
            <p class="commentSection">別記1　解体整形方法</p>
            <table class="m-section-table firstCol standard-condition">
                <thead>
                <tr>
                    <th>項目</th>
                    <th>要領</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>はく皮</td>
                    <td>真皮に沿ってはく皮する</td>
                </tr>
                <tr>
                    <td>頭部切断</td>
                    <td>はく皮後、後頭骨端と第1頚椎との間で切断する</td>
                </tr>
                <tr>
                    <td>内臓割去</td>
                    <td>腹側の正中線に沿って切り開き、胸骨及び骨盤結合を縦に鋸断し、肛門及び外陰部は周囲組織より分離し、横隔膜は体壁付着部より切離する<br>
                        腎臓及び腎臓脂肪は枝肉に残し、その他の内臓はすべて摘出する<br>
                        陰茎、精巣、乳房（未経産を除く）は切除する
                    </td>
                </tr>
                <tr>
                    <td>前肢切断</td>
                    <td>手根骨と中手骨の間を切断する</td>
                </tr>
                <tr>
                    <td>後肢切断</td>
                    <td>足根骨と中足骨の間を切断する</td>
                </tr>
                <tr>
                    <td>尾切断</td>
                    <td>尾根部は第1～第2尾椎間で切断する</td>
                </tr>
                <tr>
                    <td>枝肉の分割</td>
                    <td>尾椎及び仙椎を縦断し、脊柱の中央に沿って左右の半丸枝肉に切断する</td>
                </tr>
                <tr>
                    <td>半丸枝肉の切開</td>
                    <td>第6肋骨と第7肋骨との間で平直に切り開く</td>
                </tr>
                </tbody>
            </table>
            <p class="commentSection">別記2　瑕疵の種類区分と表示</p>
            <table class="m-section-table_variable firstCol textCenter">
                <thead>
                <tr>
                    <th>瑕疵の種類</th>
                    <th>表示</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>多発性筋出血（シ　　ミ）</td>
                    <td>ア</td>
                </tr>
                <tr>
                    <td>水　　　　腫（ズ　　ル）</td>
                    <td>イ</td>
                </tr>
                <tr>
                    <td>筋　　　　炎（シ コ リ）</td>
                    <td>ウ</td>
                </tr>
                <tr>
                    <td>外　　　　傷（ア タ リ）</td>
                    <td>エ</td>
                </tr>
                <tr>
                    <td>割　　　　除（カツジョ）</td>
                    <td>オ</td>
                </tr>
                <tr>
                    <td><span class="fl">そ 　の 　他</span></td>
                    <td>カ</td>
                </tr>
                </tbody>
            </table>
            <p class="commentSection">別記3　歩留基準値の算式</p>
            <p>歩留等級決定の歩留基準値は次の式により算出する。</p>
            <table class="m-section-table_variable">
                <tbody>
                <tr>
                    <td>
                        歩留基準値＝67.37 ＋〔0.130×胸最長筋面積（cm&sup2;）〕<br>
                        　　　　　　　　　＋〔0.667×「ばら」の厚さ（cm）〕<br>
                        　　　　　　　　　−〔0.025×冷と体重量（半丸枝肉kg）〕<br>
                        　　　　　　　　　−〔0.896×皮下脂肪の厚さ（cm）〕
                    </td>
                </tr>
                </tbody>
            </table>
            <p class="commentSection">
                ただし、肉用種枝肉の場合には2.049を加算して歩留基準値とするものとする。<br>
                なお、歩留基準値の加算対象となる肉用種とは、黒毛和種、褐毛和種、日本短角種及び無角和種の4品種、<br>
                並びにこの4品種間の交雑牛とする。
            </p>
        </div>
    </div>

    <div class="l-section_white" id="yield-grade_beef">
        <div class="l-h2Head">
            <h2 class="titleSection">歩留等級</h2>
        </div>
        <div class="l-h2Body">
            <h3>歩留基準値の算式</h3>
            <div class="l-h3Body">
                <p>歩留等級決定の歩留基準値は次の式により算出する。</p>
                <table class="m-section-table_variable">
                    <tbody>
                    <tr>
                        <td>
                            歩留基準値＝67.37 ＋〔0.130×胸最長筋面積（cm&sup2;）〕<br>
                            　　　　　　　　　＋〔0.667×「ばら」の厚さ（cm）〕<br>
                            　　　　　　　　　−〔0.025×冷と体重量（半丸枝肉kg）〕<br>
                            　　　　　　　　　−〔0.896×皮下脂肪の厚さ（cm）〕
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p class="commentSection">
                    ただし、肉用種枝肉の場合には2.049を加算して歩留基準値とするものとする。<br>
                    なお、歩留基準値の加算対象となる肉用種とは、黒毛和種、褐毛和種、日本短角種及び無角和種の4品種、並びにこの4品種間の交雑牛とする。
                </p>
            </div>
            <h3>歩留等級区分と等級呼称</h3>
            <div class="l-h3Body">
                <p>歩留等級の区分は、3区分であり、等級呼称は、A、B、Cとする。</p>
                <table class="m-section-table_variable firstCol firstRow">
                    <thead>
                    <tr>
                        <th>等級</th>
                        <th>歩留基準値</th>
                        <th>歩留</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>A</th>
                        <td>72以上</td>
                        <td>部分肉歩留が標準より良いもの</td>
                    </tr>
                    <tr>
                        <th>B</th>
                        <td>69以上72未満</td>
                        <td>部分肉歩留の標準のもの</td>
                    </tr>
                    <tr>
                        <th>C</th>
                        <td>69未満</td>
                        <td>部分肉歩留が標準より劣るもの</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h3>歩留等級の補正</h3>
            <div class="l-h3Body clearfix">
                <p>歩留等級の決定は、前述のとおりであるが、この規定にかかわらず枝肉が次のいずれかに該当する場合には、1等級下に格付しても差し支えないものとする。</p>
                <ul class="m-section-list-item">
                    <li>&#9312;切開面における筋間脂肪が、枝肉重量及び胸最長筋面積に対して、相対的に厚いもの。</li>
                    <li>&#9313;「もも」の厚みに欠け、かつ、「まえ」と「もも」の釣合を著しく欠くもの。</li>
                </ul>
                <div class="m-section-imageWrap">
                    <p>第6～第7肋骨間切開面の測定部位</p>
                    <img src="/assets/commons/img/img_beef01.png" alt="第6～第7肋骨間切開面の測定部位" />
                </div>
            </div>
            <h3>測定部位</h3>
            <div class="l-h3Body clearfix">
                <div class="m-section-imageWrap">
                    <p>1.胸最長筋面積の測定部位</p>
                    <img src="/assets/commons/img/img_beef02.jpg" height="185" alt="胸最長筋面積の測定部位" />
                    <p class="m-section-imageWrap-item">
                        胸最長筋（ロースしん）面積は、<br>
                        第6～第7肋骨間切開面における<br>
                        胸最長筋筋膜線上を周囲とする面積。
                    </p>
                </div>
                <div class="m-section-imageWrap">
                    <p>2.｢ばら｣の厚さの測定部位</p>
                    <img src="/assets/commons/img/img_beef03.jpg" height="185" alt="｢ばら｣の厚さの測定部位" />
                    <p class="m-section-imageWrap-item">
                        ばらの厚さは、第6～第7肋骨間切開面における<br>
                        肋骨全長のほぼ中央において、胸腔の胸膜内面から<br>
                        広背筋外側までの長さ。
                    </p>
                </div>
                <div class="m-section-imageWrap">
                    <p>3.皮下脂肪の厚さの測定部位</p>
                    <img src="/assets/commons/img/img_beef04.jpg" height="185" alt="皮下脂肪の厚さの測定部位" />
                    <p class="m-section-imageWrap-item">
                        皮下脂肪の厚さは、第6～第7肋骨間切開面において、腸肋筋側端から枝肉表面に直角に上げた<br>
                        線上で、広背筋外側から枝肉表面までの長さ。<br>
                        筋間脂肪の厚さについては、腸肋筋側端から広背筋内側までの長さ。<br>
                        ただし、筋間脂肪の厚さは、歩留基準値の算式には含まれない。
                    </p>
                </div>
                <div class="m-section-imageWrap">
                    <p>歩留等級Ａ</p>
                    <img class="itemContainer fl" src="/assets/commons/img/img_beef05.jpg" height="230" alt="歩留等級Ａ" />
                    <table class="m-section-table_variable fl">
                        <tbody>
                        <tr>
                            <th>胸最長筋面積</th>
                            <td>91&#13216;</td>
                        </tr>
                        <tr>
                            <th>｢ばら｣の厚さ</th>
                            <td>9.2cm</td>
                        </tr>
                        <tr>
                            <th>冷と体重量（半丸枝肉）</th>
                            <td>257.9kg</td>
                        </tr>
                        <tr>
                            <th>皮下脂肪の厚さ</th>
                            <td>3.0cm</td>
                        </tr>
                        <tr>
                            <th>歩留基準値（肉用種）</th>
                            <td>78.2</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="m-section-imageWrap">
                    <p>歩留等級B</p>
                    <img  class="itemContainer fl" src="/assets/commons/img/img_beef06.jpg" height="230" alt="歩留等級B" />
                    <table class="m-section-table_variable fl">
                        <tbody>
                        <tr>
                            <th>胸最長筋面積</th>
                            <td>56&#13216;</td>
                        </tr>
                        <tr>
                            <th>｢ばら｣の厚さ</th>
                            <td>8.5cm</td>
                        </tr>
                        <tr>
                            <th>冷と体重量（半丸枝肉）</th>
                            <td>245.5kg</td>
                        </tr>
                        <tr>
                            <th>皮下脂肪の厚さ</th>
                            <td>4.1cm</td>
                        </tr>
                        <tr>
                            <th>歩留基準値（肉用種）</th>
                            <td>70.5</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="m-section-imageWrap">
                    <p>歩留等級B</p>
                    <img class="itemContainer fl" src="/assets/commons/img/img_beef07.jpg" height="230" alt="歩留等級B" />
                    <table class="m-section-table_variable fl">
                        <tbody>
                        <tr>
                            <th>胸最長筋面積</th>
                            <td>60&#13216;</td>
                        </tr>
                        <tr>
                            <th>｢ばら｣の厚さ</th>
                            <td>8.5cm</td>
                        </tr>
                        <tr>
                            <th>冷と体重量（半丸枝肉）</th>
                            <td>312.3kg</td>
                        </tr>
                        <tr>
                            <th>皮下脂肪の厚さ</th>
                            <td>2.7cm</td>
                        </tr>
                        <tr>
                            <th>歩留基準値（乳用種）</th>
                            <td>70.6</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="m-section-imageWrap">
                    <p>歩留等級C</p>
                    <img class="itemContainer fl" src="/assets/commons/img/img_beef08.jpg" height="230" alt="歩留等級C" />
                    <table class="m-section-table_variable fl">
                        <tbody>
                        <tr>
                            <th>胸最長筋面積</th>
                            <td>47&#13216;</td>
                        </tr>
                        <tr>
                            <th>｢ばら｣の厚さ</th>
                            <td>6.1cm</td>
                        </tr>
                        <tr>
                            <th>冷と体重量（半丸枝肉）</th>
                            <td>226.2kg</td>
                        </tr>
                        <tr>
                            <th>皮下脂肪の厚さ</th>
                            <td>4.1cm</td>
                        </tr>
                        <tr>
                            <th>歩留基準値（乳用種）</th>
                            <td>68.2</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <h3>歩留等級の補正</h3>
            <div class="l-h3Body clearfix">
                <h4>&#9312;筋間脂肪による補正</h4>
                <div class="clearfix">
                    <div class="m-section-imageWrap">
                        <div class="m-section-imageWrap-inner_a">
                            <p>(1)筋間脂肪が相対的に厚いもの</p>
                            <img class="itemContainer fl" src="/assets/commons/img/img_beef09.png" alt="筋間脂肪が相対的に厚いもの" />
                            <table class="m-section-table_variable">
                                <tbody>
                                <tr>
                                    <th>胸最長筋面積</th>
                                    <td>38&#13216;</td>
                                </tr>
                                <tr>
                                    <th>｢ばら｣の厚さ</th>
                                    <td>7.4cm</td>
                                </tr>
                                <tr>
                                    <th>冷と体重量（半丸枝肉）</th>
                                    <td>201kg</td>
                                </tr>
                                <tr>
                                    <th>皮下脂肪の厚さ</th>
                                    <td>2.4cm</td>
                                </tr>
                                <tr>
                                    <th>歩留基準値（肉用種）</th>
                                    <td>72.1</td>
                                </tr>
                                <tr>
                                    <th>筋間脂肪の厚さ</th>
                                    <td>8.5cm</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="m-section-imageWrap">
                        <div class="m-section-imageWrap-inner_a">
                            <p>(2)筋間脂肪が厚く、菱形筋がほとんど認められないもの</p>
                            <img class="itemContainer fl" src="/assets/commons/img/img_beef10.png" alt="筋間脂肪が厚く、菱形筋がほとんど認められないもの" />
                            <table class="m-section-table_variable">
                                <tbody>
                                <tr>
                                    <th>胸最長筋面積</th>
                                    <td>51&#13216;</td>
                                </tr>
                                <tr>
                                    <th>｢ばら｣の厚さ</th>
                                    <td>7.5cm</td>
                                </tr>
                                <tr>
                                    <th>冷と体重量（半丸枝肉）</th>
                                    <td>200kg</td>
                                </tr>
                                <tr>
                                    <th>皮下脂肪の厚さ</th>
                                    <td>4.4cm</td>
                                </tr>
                                <tr>
                                    <th>歩留基準値（肉用種）</th>
                                    <td>72.1</td>
                                </tr>
                                <tr>
                                    <th>筋間脂肪の厚さ</th>
                                    <td>9.0cm</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <h4>&#9313;｢もも｣の厚みに欠け、かつ、「まえ」と「もも」の釣合を著しく欠くもの。</h4>
                <div class="m-section-imageWrap">
                    <div class="m-section-imageWrap-inner_b">
                        <p>｢もも｣の厚みに欠けるもの</p>
                        <img class="itemContainer fl" src="/assets/commons/img/img_beef11.png" alt="｢もも｣の厚みに欠けるもの" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="l-section_orange" id="meatquality-grade_beef">
        <div class="l-h2Head">
            <h2 class="titleSection">肉質等級</h2>
        </div>
        <div class="l-h2Body">
            <p>
                肉質項目は、「脂肪交雑」、「肉の色沢」、「肉の締まり及びきめ」、「脂肪の色沢と質」の4項目である。<br>
                前3項目の判定部位は、第6〜第7肋骨間切開面における胸最長筋並びに背半棘筋及び頭半棘筋の断面とする。<br>
                「脂肪の色沢と質」の判定部位は、切開面の皮下脂肪、筋間脂肪、枝肉の外面及び内面脂肪とする。<br>
                肉質等級の区分は5区分であり、等級呼称は5、4、3、2、1とする。
            </p>
            <h3>脂肪交雑</h3>
            <div class="l-h3Body">
                <table class="m-section-table firstCol">
                    <thead>
                    <tr>
                        <th>5</th>
                        <th>4</th>
                        <th>3</th>
                        <th>2</th>
                        <th>1</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>胸最長筋並びに背半棘筋及び頭半棘筋における脂肪交雑がかなり多いもの</td>
                        <td>胸最長筋並びに背半棘筋及び頭半棘筋における脂肪交雑がやや多いもの</td>
                        <td>胸最長筋並びに背半棘筋及び頭半棘筋における脂肪交雑が標準のもの</td>
                        <td>胸最長筋並びに背半棘筋及び頭半棘筋における脂肪交雑がやや少ないもの</td>
                        <td>胸最長筋並びに背半棘筋及び頭半棘筋における脂肪交雑がほとんどないもの</td>
                    </tr>
                    </tbody>
                </table>
                <p class="commentSection">脂肪交雑の等級区分</p>
                <table class="m-section-table_variable firstCol firstRow textCenter">
                    <thead>
                    <tr>
                        <th colspan="2">等級</th>
                        <th>B.M.S. No.</th>
                        <th>脂肪交雑評価基準</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>5</th>
                        <th class="textLeft">かなり多いもの</th>
                        <td>No.8 ～ No.12</td>
                        <td>2<sup>+</sup> 以上</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th class="textLeft">やや多いもの</th>
                        <td>No.5 ～ No.7</td>
                        <td>1<sup>+</sup> ～ 2</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th class="textLeft">標準のもの</th>
                        <td>No.3 ～ No.4</td>
                        <td>1<sup>-</sup> ～ 1</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th class="textLeft">やや少ないもの</th>
                        <td>No.2</td>
                        <td>0<sup>+</sup></td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th class="textLeft">ほとんどないもの</th>
                        <td>No.1</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>
                <table class="m-section-table_variable firstCol textCenter commentSection">
                    <thead>
                    <tr>
                        <th>B.M.S. No.</th>
                        <th>No.1</th>
                        <th>No.2</th>
                        <th>No.3</th>
                        <th>No.4</th>
                        <th>No.5</th>
                        <th>No.6</th>
                        <th>No.7</th>
                        <th>No.8</th>
                        <th>No.9</th>
                        <th>No.10</th>
                        <th>No.11</th>
                        <th>No.12</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>等級区分</th>
                        <td>1</td>
                        <td>2</td>
                        <td colspan="2">3</td>
                        <td colspan="3">4</td>
                        <td colspan="5">5</td>
                    </tr>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="m-section-imageWrap">
                        <p>牛脂肪交雑基準（B.M.S.）</p>
                        <img src="/assets/commons/img/img_beef18.png" alt="牛脂肪交雑基準（B.M.S.）" />
                    </div>
                    <div class="m-section-imageWrap">
                        <p>牛肉色基準（B.C.S.）</p>
                        <img src="/assets/commons/img/img_beef19.png" alt="牛肉色基準（B.C.S.）" />
                    </div>
                    <div class="m-section-imageWrap">
                        <p>牛脂肪色基準（B.F.S.）</p>
                        <img src="/assets/commons/img/img_beef20.png" alt="牛脂肪色基準（B.F.S.）" />
                    </div>
                </div>
                <p>
                    ※上記のBMS、BCS、BFSは、実物と色及び大きさが異なります。<br>
                    ※なお、BMSの適用については、脂肪交雑基準を明確化するため「写真による脂肪交雑基準」に基づき判定を行います。
                </p>
            </div>
            <h3>肉の色沢</h3>
            <div class="l-h3Body clearfix">
                <table class="m-section-table firstCol">
                    <thead>
                    <tr>
                        <th>5</th>
                        <th>4</th>
                        <th>3</th>
                        <th>2</th>
                        <th>1</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>肉色及び光沢がかなり良いもの</td>
                        <td>肉色及び光沢がやや良いもの</td>
                        <td>肉色及び光沢が標準のもの</td>
                        <td>肉色及び光沢が標準に準ずるもの</td>
                        <td>肉色及び光沢が劣るもの</td>
                    </tr>
                    </tbody>
                </table>
                <p class="commentSection">肉色及び光沢の等級区分</p>
                <table class="m-section-table_variable firstCol firstRow textCenter">
                    <thead>
                    <tr>
                        <th colspan="2">等級</th>
                        <th>肉色(B.C.S. No.)</th>
                        <th>光沢</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>5</th>
                        <th class="textLeft">かなり良いもの</th>
                        <td>No.3 ～ No.5</td>
                        <td>かなり良いもの</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th class="textLeft">やや良いもの</th>
                        <td>No.2 ～ No.6</td>
                        <td>やや良いもの</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th class="textLeft">標準のもの</th>
                        <td>No.1 ～ No.6</td>
                        <td>標準のもの</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th class="textLeft">標準に準ずるもの</th>
                        <td>No.1 〜 No.7</td>
                        <td>標準に準ずるもの</td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th class="textLeft">劣るもの</th>
                        <td  colspan="2">等級5～2以外のもの</td>
                    </tr>
                    </tbody>
                </table>
                <div class="m-section-imageWrap">
                    <p>｢肉の色沢｣のかなり良いもの</p>
                    <img src="/assets/commons/img/img_beef12.jpg" height="202" alt="｢肉の色沢｣のかなり良いもの" />
                </div>
                <div class="m-section-imageWrap">
                    <p>｢肉の色沢｣が標準のもの</p>
                    <img src="/assets/commons/img/img_beef13.jpg" height="202" alt="｢肉の色沢｣の劣るもの" />
                </div>
            </div>
            <h3>肉の締まり及びきめ</h3>
            <div class="l-h3Body clearfix">
                <table class="m-section-table firstCol">
                    <thead>
                    <tr>
                        <th>5</th>
                        <th>4</th>
                        <th>3</th>
                        <th>2</th>
                        <th>1</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>締まりはかなり良く、きめがかなり細かいもの</td>
                        <td>締まりはやや良く、きめがやや細かいもの</td>
                        <td>締まり及びきめが標準のもの</td>
                        <td>締まり及びきめが標準に準ずるもの</td>
                        <td>締まりが劣り又はきめが粗いもの</td>
                    </tr>
                    </tbody>
                </table>
                <p class="commentSection">肉の締まり及びきめの等級区分</p>
                <table class="m-section-table_variable firstCol firstRow">
                    <thead>
                    <tr>
                        <th>等級</th>
                        <th>締まり</th>
                        <th>きめ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>5</th>
                        <td>かなり良いもの</td>
                        <td>かなり細かいもの</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>やや良いもの</td>
                        <td>やや細かいもの</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>標準のもの</td>
                        <td>標準のもの</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>標準に準ずるもの</td>
                        <td>標準に準ずるもの</td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>劣るもの</td>
                        <td>粗いもの</td>
                    </tr>
                    </tbody>
                </table>
                <div class="m-section-imageWrap">
                    <p>｢肉の締まり及びきめ｣のかなり良いもの</p>
                    <img src="/assets/commons/img/img_beef12.jpg" height="197" alt="｢肉の締まり及びきめ｣のかなり良いもの" />
                </div>
                <div class="m-section-imageWrap">
                    <p>｢肉の締まり及びきめ｣が標準のもの</p>
                    <img src="/assets/commons/img/img_beef15.jpg" height="197" alt="｢肉の締まり及びきめ｣の劣るもの" />
                </div>
            </div>
            <h3>脂肪の色沢と質</h3>
            <div class="l-h3Body clearfix">
                <table class="m-section-table firstCol">
                    <thead>
                    <tr>
                        <th>5</th>
                        <th>4</th>
                        <th>3</th>
                        <th>2</th>
                        <th>1</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>脂肪の色、光沢及び質がかなり良いもの</td>
                        <td>脂肪の色、光沢及び質がやや良いもの</td>
                        <td>脂肪の色、光沢及び質が標準のもの</td>
                        <td>脂肪の色、光沢及び質が標準に準ずるもの</td>
                        <td>脂肪の色、光沢及び質が劣るもの</td>
                    </tr>
                    </tbody>
                </table>
                <p class="commentSection">脂肪の色沢と質の等級区分</p>
                <table class="m-section-table_variable firstCol firstRow textCenter">
                    <thead>
                    <tr>
                        <th colspan="2">等級</th>
                        <th>脂肪色(B.F.S. No.)</th>
                        <th>光沢と質</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>5</th>
                        <th class="textLeft">かなり良いもの</th>
                        <td>No.1 ～ No.4</td>
                        <td>かなり良いもの</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th class="textLeft">やや良いもの</th>
                        <td>No.1 ～ No.5</td>
                        <td>やや良いもの</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th class="textLeft">標準のもの</th>
                        <td>No.1 ～ No.6</td>
                        <td>標準のもの</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th class="textLeft">標準に準ずるもの</th>
                        <td>No.1 〜 No.7</td>
                        <td>標準に準ずるもの</td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th class="textLeft">劣るもの</th>
                        <td  colspan="2">等級5～2以外のもの</td>
                    </tr>
                    </tbody>
                </table>
                <div class="m-section-imageWrap">
                    <p>｢脂肪の色沢と質｣のかなり良いもの</p>
                    <img src="/assets/commons/img/img_beef16.png" alt="｢脂肪の色沢と質｣のかなり良いもの" />
                </div>
                <div class="m-section-imageWrap">
                    <p>｢脂肪の色沢と質｣の劣るもの</p>
                    <img src="/assets/commons/img/img_beef17.png" alt="｢脂肪の色沢と質｣の劣るもの" />
                </div>
            </div>
            <h3>肉質等級の決定</h3>
            <div class="l-h3Body clearfix">
                <p class="cection_cnt">肉質等級の決定は、脂肪交雑、肉の色沢、肉の締まり及びきめ、脂肪の色沢と質の4項目について判定し、その項目別等級のうち、最も低い等級に決定して格付する。</p>
                <div class="m-section-imageWrap">
                    <div class="m-section-imageWrap-inner_c">
                        <p>肉質等級の決定（例）</p>
                        <table class="m-section-table_variable firstCol textCenter">
                            <thead>
                            <tr>
                                <th>肉質項目</th>
                                <th>等級</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>脂肪交雑</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>肉の色沢</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>肉の締まり及びきめ</td>
                                <td class="red">3</td>
                            </tr>
                            <tr>
                                <td>脂肪の色沢と質</td>
                                <td>4</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="l-section_white" id="grad-label_beef">
        <div class="l-h2Head">
            <h2 class="titleSection">等級表示</h2>
        </div>
        <div class="l-h2Body">
            <p class="commentSection">規格の等級表示は、歩留等級と肉質等級のそれぞれを次の表示区分によって連記表示する。</p>
            <h3>規格の等級と表示</h3>
            <div class="l-h3Body clearfix">
                <table class="m-section-table_half textCenter firstCol  fl">
                    <thead>
                    <tr>
                        <th rowspan="2">歩留等級</th>
                        <th colspan="5">肉質等級</th>
                    </tr>
                    <tr>
                        <th class="leftSolid">5</th>
                        <th>4</th>
                        <th>3</th>
                        <th>2</th>
                        <th>1</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>A</th>
                        <td>A5</td>
                        <td>A4</td>
                        <td>A3</td>
                        <td>A2</td>
                        <td>A1</td>
                    </tr>
                    <tr>
                        <th>B</th>
                        <td>B5</td>
                        <td>B4</td>
                        <td>B3</td>
                        <td>B2</td>
                        <td>B1</td>
                    </tr>
                    <tr>
                        <th>C</th>
                        <td>C5</td>
                        <td>C4</td>
                        <td>C3</td>
                        <td>C2</td>
                        <td>C1</td>
                    </tr>
                    </tbody>
                </table>
                <div class="m-section-imageWrap mt0">
                    <p>等級印</p>
                    <img src="/assets/commons/img/img_beef22.png" width="101" alt="等級印" />
                </div>
                <div class="m-section-imageWrap mt0">
                    <p>等級表示（例）</p>
                    <img src="/assets/commons/img/img_beef23.jpg" width="172" alt="等級表示（例）" />
                </div>
            </div>
        </div>
    </div>

    <div class="l-section_orange" id="defect_beef">
        <div class="l-h2Head">
            <h2 class="titleSection">瑕疵の種類区分と表示</h2>
        </div>
        <div class="l-h2Body">
            <h3>瑕疵の種類区分と表示</h3>
            <div class="l-h3Body clearfix">
                <div class="clearfix">
                    <table class="m-section-table_variable firstCol textCenter fl">
                        <thead>
                        <tr>
                            <th>瑕疵の種類</th>
                            <th>表示</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>多発性筋出血（シ　　ミ）</td>
                            <td>ア</td>
                        </tr>
                        <tr>
                            <td>水　　　　腫（ズ　　ル）</td>
                            <td>イ</td>
                        </tr>
                        <tr>
                            <td>筋　　　　炎（シ コ リ）</td>
                            <td>ウ</td>
                        </tr>
                        <tr>
                            <td>外　　　　傷（ア タ リ）</td>
                            <td>エ</td>
                        </tr>
                        <tr>
                            <td>割　　　　除（カツジョ）</td>
                            <td>オ</td>
                        </tr>
                        <tr>
                            <td><span class="fl">そ 　の 　他</span></td>
                            <td>カ</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="m-section-imageWrap mt0">
                        <p>〈瑕疵の表示〉（筋炎の表示例）</p>
                        <img src="/assets/commons/img/img_beef24.png" height="230" alt="〈瑕疵の表示〉（筋炎の表示例）" />
                    </div>
                </div>
                <p>※なお、その他（カ）は、背割不良、骨折、放血不良、異臭、異色のあるもの及び著しく汚染されているもの等ア～オに該当しないものである。</p>
                <div class="m-section-imageWrap">
                    <p>胸最長筋の多発性筋出血</p>
                    <img src="/assets/commons/img/img_beef25.png" height="230" alt="胸最長筋の多発性筋出血" />
                </div>
                <div class="m-section-imageWrap">
                    <p>胸最長筋周辺の水腫</p>
                    <img src="/assets/commons/img/img_beef26.png" height="230" alt="胸最長筋周辺の水腫" />
                </div>
                <div class="m-section-imageWrap">
                    <p>「ばら」の水腫</p>
                    <img src="/assets/commons/img/img_beef27.png" height="230" alt="「ばら」の水腫" />
                </div>
                <div class="m-section-imageWrap">
                    <p>僧帽筋の筋炎</p>
                    <img src="/assets/commons/img/img_beef28.png" height="230" alt="僧帽筋の筋炎" />
                </div>
                <div class="m-section-imageWrap">
                    <p>「もも」の外傷</p>
                    <img src="/assets/commons/img/img_beef29.png" height="230" alt="「もも」の外傷" />
                </div>
                <div class="m-section-imageWrap">
                    <p>「ばら」の割除</p>
                    <img src="/assets/commons/img/img_beef30.png" height="230" alt="「ばら」の割除" />
                </div>
            </div>
        </div>
    </div>

    <div class="l-section_white" id="sex_beef">
        <div class="l-h2Head">
            <h2 class="titleSection">性別</h2>
        </div>
        <div class="l-h2Body clearfix">
            <div class="m-section-imageWrap">
                <p>雌</p>
                <img src="/assets/commons/img/img_beef31.png" alt="雌" />
            </div>
            <div class="m-section-imageWrap">
                <p>去勢</p>
                <img src="/assets/commons/img/img_beef32.png" alt="去勢" />
            </div>
            <div class="m-section-imageWrap">
                <img src="/assets/commons/img/img_beef33.png" alt="雌・去勢" />
            </div>
        </div>
    </div>

    <div class="l-section_orange">
        <ul class="largeButton column_03 clearfix">
            <li><a class="itemLink" href="/standard/pork/">豚枝肉取引規格</a></li>
            <li><a class="itemLink" href="/standard/beef-partial/">牛部分肉取引規格</a></li>
            <li><a class="itemLink" href="/standard/pork-partial/">豚部分肉取引規格</a></li>
        </ul>
    </div>


    <div class="l-section_white l-section-last" id="standard-pamph_beef">
        <div class="l-h2Head">
            <h2 class="titleSection">牛枝肉取引規格の概要パンフレット</h2>
        </div>
        <div class="l-h2Body clearfix">
            <p class="commentSection">以下よりパンフレットをご覧いただけます。</p>
            <ul class="largeButton clearfix">
                <li><img src="/assets/commons/img/img_pam_beef.png" alt="牛枝肉取引規格の概要パンフレット" /><a class="itemPdf" href="/assets/commons/doc/pamphlet_beef.pdf" target="pamphlet_beef">牛枝肉取引規格の概要</a></li>
            </ul>
        </div>
    </div>

@endsection
