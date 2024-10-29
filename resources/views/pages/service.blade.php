
{{--事業内容ページ--}}

@extends('layouts.base')

@section('title', '事業内容')

@section('description', '当協会の事業内容（事業の概要、枝肉・部分肉の格付事業、牛肉トレーサビリティ業務委託事業、家畜改良対策推進事業、牛枝肉格付結果証明書の発行、「牛枝肉取引規格の概要」英訳版パンフレットの有料配布）についてご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', '事業内容,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人')

@section('pankz', '事業内容')

@section('sub_title', '- service -')

@section('content')
    <div class="l-localnavi">
        <div id="m-localnavi">
            <ul>
                <li><a href="#business-summary_service">概要</a></li>
                <li><a href="#rating-business_service">格付事業</a></li>
                <li><a href="#outsourcing-business_service" style="padding-top: 12px;">牛肉トレーサビリティ<br>業務委託事業</a></li>
                <li><a href="#business-promotion_service">家畜改良対策推進事業</a></li>
                <li>
                    <a class="s-break" href="#beef-gradingCertification">牛枝肉格付結果証明書発行</a>
                    <a class="s-break" href="#pork-gradingCertification-01">豚枝肉格付結果証明書発行</a>
                    <a class="s-break" href="#pork-gradingCertification-02">豚肉の脂肪交雑判定及び判定証明書発行</a>
                </li>
                <li><a href="#beefPamph-englishVersion" style="padding-top: 12px;">英語・中国語（簡体字・繁体字）訳<br>パンフレット配布</a></li>
            </ul>
        </div>
    </div>

    <div class="l-section_white" id="business-summary_service">
        <div class="l-h2Head">
            <h2 class="titleSection">現在行っている事業の概要</h2>
        </div>
        <div class="l-h2Body">
            <p>
                当協会は、枝肉、部分肉の格付事業を基幹にして、その他、格付事業で得た各種情報を利活用した事業等を行っています。<br>
                現在実施している主な事業は次のとおりです。なお、事業結果等については、<a href="/about/disclosure/">定款・事業実績等</a>をご覧ください。
            </p>
            <ul class="m-section-list_point">
                <li>枝肉・部分肉の格付事業</li>
                <li>牛肉トレーサビリティ業務委託事業</li>
                <li>畜産生産力・生産体制強化対策事業</li>
                <li>牛枝肉格付結果証明書の発行</li>
                <li>豚枝肉格付結果証明書の発行</li>
                <li>豚肉の脂肪交雑判定及び判定証明書の発行</li>
                <li>「枝肉取引規格の概要」英語・中国語（簡体字・繁体字）訳パンフレットの有料配布</li>
            </ul>
        </div>
    </div>

    <div class="l-section_orange clearfix" id="rating-business_service">
        <div class="l-h2Head">
            <h2 class="titleSection">枝肉・部分肉の格付事業</h2>
        </div>
        <div class="l-h2Body">
            <h3>枝肉の格付事業</h3>
            <div class="l-h3Body clearfix">
                <p>全国の食肉中央卸売市場、食肉地方卸売市場、食肉センター等で、要請に応じ牛、豚の枝肉に対して、当協会の取引規格に基づき、中立の立場で規格格付（品質評価）を行い、公正な価格形成や円滑な食肉取引の推進に寄与しています。</p>
            </div>
            <h3>部分肉の格付事業</h3>
            <div class="l-h3Body clearfix">
                <p>全国の部分肉処理工場を対象に、要請に応じ当協会が定める部分肉の取引規格に基づき、中立の立場で規格格付（品質評価）を行い、公正かつ自由な食肉取引を推進し、公正な価格形成や円滑な食肉取引の推進に寄与しています。</p>
            </div>
            <ul class="largeButton clearfix">
                <li><a class="itemLink" href="/standard/">食肉格付とは</a></li>
            </ul>
        </div>
    </div>

    <div class="l-section_white clearfix" id="outsourcing-business_service">
        <div class="l-h2Head">
            <h2 class="titleSection">牛肉トレーサビリティ業務委託事業</h2>
        </div>
        <div class="l-h2Body">
            <p>牛肉トレーサビリティ制度の確実性を担保するために、DNA検査に必要な照合用サンプルとして、全国全てのと畜牛の枝肉から肉片を採取、処理、加工し、DNA検査機関へ送付する事業で、国産牛肉の安全・安心を確保し、消費者の利益の擁護に寄与しています。</p>

            <h3>牛肉トレーサビリティ制度とは</h3>
            <div class="l-h3Body clearfix">
                <p>牛のBSE発生を機会に制度化された牛の個体識別番号を利用した国産牛肉の生産履歴の追跡・確認を可能にする制度で、国産牛肉の安全・安心を確保するものです。この制度の実効性を担保するために、全国全てのと畜牛から採取した肉片（照合用サンプル）と流通末端の牛肉販売店から採取した肉片（調査用サンプル）との同一性を、牛の個体識別番号とDNA検査により確認します。</p>
                <div class="m-section-imageWrap clearfix">
                    <p>牛肉のトレーサビリティ（生産履歴情報把握）制度の仕組み</p>
                    <img src="/assets/commons/img/img_service_traceability.png" alt="牛肉トレーサビリティ制度" />
                    <dl class="m-section-imageWrap-item_left">
                        <dt class="red">＊1</dt>
                        <dd>（独）家畜改良センターがすべての牛の情報を記録・管理</dd>
                        <dt class="red">＊2</dt>
                        <dd>
                            1.と畜されるすべての枝肉からDNA照合用サンプルを集取<br>
                            2.農林水産省・地方農政局等による監視・指導の際に、小売店等から調査用サンプルを集取<br>
                            3.両サンプルの同一性をDNA鑑定により確認
                        </dd>
                    </dl>
                </div>
            </div>

        </div>
    </div>

    <div class="l-section_orange clearfix" id="business-promotion_service">
        <div class="l-h2Head">
            <h2 class="titleSection">畜産生産力・生産体制強化対策事業</h2>
        </div>
        <div class="l-h2Body clearfix">
            <p>牛肉の品質等級の格付結果はその牛の親の遺伝的能力を推定する有力なデータでもあります。このため、我が国で生産される肉用牛を対象に、枝肉の格付情報と血統情報を収集・分析し全国の肉用牛生産者や牛の育種改良機関等に、個人情報の保護に配慮し、無償で提供しています。この事業により、肉用牛の育種改良の精度と速度の向上、育種改良のコスト低減を図ることができます。</p>
            <ul class="largeButton column_04 clearfix">
                <li><a class="itemPdf" href="/assets/commons/doc/consent-form.pdf" target="consent-form">本事業に係る同意書（PDF版）</a></li>
                <li><a class="itemPdf" href="/assets/commons/doc/consent-pamphlet.pdf" target="consent-pamphlet">本事業に係るパンフレット（PDF版）</a></li>
            </ul>
        </div>
    </div>

    <div class="l-section_white" id="beef-gradingCertification">
        <div class="l-h2Head">
            <h2 class="titleSection">牛枝肉格付結果証明書の発行</h2>
        </div>
        <div class="l-h2Body">
            <p>（公社）日本食肉格付協会は、主要業務である規格格付のうち、牛枝肉の格付結果については、①牛枝肉への格付印の押印と②格付依頼者（委託者）には格付明細書の発行により開示していますが、格付依頼者（委託者）以外の食肉販売業者から、内外での取引を円滑に行うため、牛肉の格付結果を証明した書類が欲しいという要望が増加しております。
                この要望に応えることは、①牛肉の取引に関する信用の拡大、②食肉購買者（卸、小売、消費者等）への安心感の提供、③食肉の規格取引の普及推進等に資すると考えられますので、「牛の個体識別のための情報の管理及び伝達に関する特別措置法」に基づき農林水産省から委託を受けて実施しております、「牛肉トレーサビリティ業務委託事業」で伝達が義務付けられている牛の「個体識別番号」を活用した「牛枝肉格付結果証明書」を、全国の事業所（注）どこでも発行できるようにしました。（注：委嘱事業所は委嘱場所で格付した牛枝肉証明書のみ発行できます。）
            </p>
            <h3>牛枝肉格付結果証明書の発行</h3>
            <div class="l-h3Body clearfix">
                <h4>1.「牛枝肉格付結果証明書」発行対象者</h4>
                <p class="l-h4Body">証明する書類の発行対象者は、証明しようとする牛枝肉の肥育者（生産者）、出荷者、当該枝肉の購買者（以下「枝肉購買者」という。）又は枝肉購買者から部分肉を購買した者（食肉店、スーパー、レストラン等）とし、消費者は含めません。</p>
                <h4>2.「牛枝肉格付結果証明書」発行の条件</h4>
                <ul class="m-section-list l-h4Body">
                    <li>（1）発行希望者には、牛の出荷又は牛枝肉（部分肉）を購入したことを証する書類（コピー可）として、個体識別番号の記載されている売買伝票などを添付して事業所へ申請してもらいます。</li>
                    <li>
                        （2）証明書には肥育者（生産者）の個人名は表示しませんが、個体識別番号を表示することから、個人名が判明する場合もあります。このため、肥育者（生産者）が、自ら出荷した牛の証明書の発行を停止するように求めた場合は、その時点から直ちに当該者の本証明書の発行は取りやめます。<br>
                        なお、個人情報保護については、<a href="/privacy-policy/">個人情報保護方針</a>をご覧ください。
                    </li>
                </ul>
                <h4>3.発行手数料</h4>
                <div class="l-h4Body">
                    <ul class="m-section-list">
                        <li>（1）日本語版の牛枝肉格付結果証明書は、一枚につき税込み210円とします。</li>
                        <li>（2）英語版・中国語版の同証明書は、一枚につき税込み510円とします。</li>
                    </ul>
                    <div class="m-section-imageWrap-container">
                        <div class="m-section-imageWrap">
                            <p>日本語版見本</p>
                            <img src="/assets/commons/img/img_service.png" alt="牛枝肉格付結果証明書" height="561" />
                        </div>
                        <div class="m-section-imageWrap">
                            <p>英語版見本</p>
                            <img src="/assets/commons/img/img_service_eng.png" alt="牛枝肉格付結果証明書 英語版" height="561" />
                        </div>
                    </div>
                    <div class="m-section-imageWrap-container">
                        <div class="m-section-imageWrap">
                            <p>中国語版（簡体字）見本</p>
                            <img src="/assets/commons/img/img_service_kan.jpg" alt="牛枝肉格付結果証明書 中国語版（簡体字）" height="561" />
                        </div>
                        <div class="m-section-imageWrap">
                            <p>中国語版（繫体字）見本</p>
                            <img src="/assets/commons/img/img_service_han.jpg" alt="牛枝肉格付結果証明書 中国語版（繫体字）" height="561" />
                        </div>
                    </div>
                </div>
            </div>

            <h3>牛枝肉格付結果証明書の申請手順</h3>
            <div class="l-h3Body clearfix">
                <h4>1.格付協会の事業所に出向いて発行申請をする場合（委嘱事業所はそこの食肉センター等で格付した牛枝肉に限ります。）</h4>
                <ul class="m-section-list l-h4Body">
                    <li>（1）牛枝肉格付結果証明書発行申請書と、個体識別番号が記載された販売伝票等の該当する牛肉を購買したことを証明する書類のコピーを、事業所に提出してください。</li>
                    <li>（2）格付協会の事業所は、申請書に記載された個体識別番号を基に証明書を発行しますので、申請者は、手数料を支払い領収書を受領してください。</li>
                </ul>
                <ul class="largeButton column_02 clearfix">
                    <li><a class="itemXls" href="/assets/commons/doc/certification-application.xls">申請書（Excel版）</a></li>
                    <li><a class="itemPdf" href="/assets/commons/doc/certification-application.pdf" target="certification-application">申請書（PDF版）</a></li>
                </ul>
                <ul class="m-description-list clearfix">
                    <li>牛枝肉格付結果証明書発行申請書を入手</li>
                    <li>申請書に個体識別番号と発行枚数及び申請者名を記載</li>
                    <li>当協会事務所へ当該牛（部分肉も含む）を購入した証拠書類（コピー可）と一緒に提出</li>
                    <li>手数料を支払い証明書と領収書を受領</li>
                </ul>
                <h4>2.流通業者がスーパー等の納入先から証明書を求められるケース及び遠隔地で格付された牛の証明書を入手する手段</h4>
                <ul class="m-section-list l-h4Body">
                    <li style="text-indent: initial; padding-left: 1em;">お近くに格付協会の事業所がない場合は、現金書留に、牛枝肉格付結果証明書発行申請書、個体識別番号が記載された売買伝票等の書類のコピー、送付先住所を記載し切手を貼った返信用の封筒及び枚数分の現金を同封して格付協会本所へ郵送してください、牛枝肉格付結果証明書と領収書を返信用封筒に入れて返送します。<a href="/about/access/">（本所住所）</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="l-section_white" id="pork-gradingCertification-01">
        <div class="l-h2Head">
            <h2 class="titleSection">豚枝肉格付結果証明書の発行</h2>
        </div>
        <div class="l-h2Body">
            <p>（公社）日本食肉格付協会は、出荷者、生産者及び枝肉購買者を対象に、豚枝肉格付結果証明書を発行することにしました。<br>出荷者、生産者におかれては、自社ブランドのアピールに、また枝肉購買者におかれては円滑な取引を行うためにご活用いただければ幸いです。</p>
            <div class="l-h3Body clearfix">
                <div class="m-section-imageWrap">
                    <img src="/assets/commons/img/img_service-pork-01.png" width="424" alt="豚枝肉格付結果証明書" />
                </div>
            </div>
            <div class="l-h3Body clearfix">
                <h4>1.「豚枝肉格付結果証明書」の発行申請等について</h4>
                <ul class="m-section-list l-h4Body">
                    <li>
                        <p>（1）希望者は、「豚枝肉証明書発行申請書」をダウンロードして必要事項を記載の上、豚を格付した事業所（注）へ直接申請してください。</p>
                        <ul class="largeButton clearfix">
                            <li class="padding-left: 0;">
                                <a style="text-indent: initial;" class="itemXls" href="/assets/commons/doc/certification-application-pork-01.xlsx">申請書（Excel版）</a>
                            </li>
                        </ul>
                    </li>
                    <li>（2）発行手数料は一枚につき税込み210円とします。<br>（注：豚枝肉には、法律で定められた牛の個体識別番号に該当する番号がありませんので、証明書の内容を担保するため、当該豚を格付した事業所でしか発行しません。）</li>
                </ul>
                <h4>2.「豚枝肉格付結果証明書」の発行対象者について</h4>
                <div class="l-h4Body">
                    <ul class="m-section-list">
                        <li>（1）証明しようとする豚の生産者（肥育者）、出荷者</li>
                        <li>（2）食肉市場、食肉センター等で枝肉を購入した者</li>
                        <li>（3）上記（2）以外の枝肉購買者及び部分肉購買者は発行対象外とします。</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="l-section_orange" id="pork-gradingCertification-02">
        <div class="l-h2Head">
            <h2 class="titleSection">豚肉の脂肪交雑判定及び判定証明書の発行</h2>
        </div>
        <div class="l-h2Body">
            <p>これまで、我が国では豚肉のロース断面の脂肪交雑程度を客観的に評価する基準がありませんでしたが、出荷者（生産者）や流通業者等から豚肉の脂肪交雑の程度を評価してほしいとの要望があり、当協会は独立行政法人家畜改良センターと共同で「豚肉の脂肪交雑基準(P.M.S.)」を作成しました。</p>
            <div class="m-section-imageWrap m-section-imageWrap--center">
                <img src="/assets/commons/img/img_pork-pms.png" width="540">
            </div>
            <h3>豚肉の脂肪交雑判定及び判定証明書発行までの流れは次のとおりです。</h3>
            <div class="l-h3Body clearfix">
                <h4>1.「豚肉の脂肪交雑判定及び判定証明書」発行の対象者</h4>
                <p class="l-h4Body">豚肉の脂肪交雑判定及び判定証明書の発行対象者は出荷者（生産者）及び枝肉の購買者(以下「枝肉購買者」という。)とします。</p>
                <h4>2.「豚肉の脂肪交雑基準（PMS）判定依頼書」の提出</h4>
                <p class="l-h4Body">脂肪交雑判定及び判定証明書発行希望者は格付日、枝肉番号等（※）の必要事項を記入の上、格付事業所に提出してください。</p>
                <ul class="m-section-list l-h4Body">
                    <li>※判定証明書に発行依頼者名、生産者名、豚肉ブランド名の表示を希望する場合は併せて記入して下さい。</li>
                    <li>※判定証明書の受け取り方法は&#9312;格付事業所で手渡し、&#9313;ＰＤＦファイルをメール送信、&#9314;ＦＡＸで送信のいずれかを選んでください。（郵送については格付事業所にご相談ください。）</li>
                </ul>
                <h4>3.「豚肉の脂肪交雑判定」の場所</h4>
                <p class="l-h4Body">原則として格付事業所のある食肉市場(食肉センター)で行ないます。格付事業所以外での判定は最寄りの格付事業所にご相談ください。（格付事業所以外で判定する場合、交通費等の経費が別途かかる場合があります。）</p>
                <h4>4.「豚肉の脂肪交雑判定及び判定証明書」の料金</h4>
                <p class="l-h4Body">判定料は証明書を含め１頭５０円（税込）です。</p>
            </div>
            <div class="l-h3Body clearfix">
                <div class="m-section-imageWrap">
                    <img src="/assets/commons/img/img_service-pork.png" alt="豚肉の脂肪交雑判定証明書" />
                </div>
            </div>
            <div class="l-h3Body clearfix">
                <ul class="largeButton column_02 clearfix">
                    <li><a class="itemXls" href="/assets/commons/doc/certification-application-pork.xlsx">依頼書（Excel版）</a></li>
                    <li><a class="itemPdf" href="/assets/commons/doc/certification-application-pork.pdf" target="certification-application-pork">依頼書（PDF版）</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="l-section_white l-section-last clearfix" id="beefPamph-englishVersion">
        <div class="l-h2Head">
            <h2 class="titleSection">「枝肉取引規格の概要」英語・中国語（簡体字・繁体字）訳パンフレットの有料配布</h2>
        </div>
        <div class="l-h2Body clearfix">
            <p>
                現在我が国は、日本産牛肉の輸出を促進しております。こうした中で主として輸出関連業者から、日本の枝肉取引規格を翻訳したパンフレットの配布希望が増加しており、英語・中国語（簡体字・繁体字）訳の<span class="fw">「牛枝肉取引規格の概要」</span>を作成しました。ご希望の方は申込書に必要事項を記入の上、FAXで送信してください。<br>
                また、<span class="fw">「豚枝肉取引規格の概要」</span>の英語訳パンフレットも作成しておりますので、併せてご利用ください。価格はいずれも１冊１１０円（税込）です。
            </p>
            <ul class="largeButton clearfix">
                <li><a class="itemXls" href="/assets/commons/doc/pamphlet-application_english.xlsx">申込書（Excel版）</a></li>
            </ul>
        </div>
    </div>

@endsection
