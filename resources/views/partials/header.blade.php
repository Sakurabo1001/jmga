<header class="l-header clearfix">
    <nav class="l-navHeader clearfix">
        <div class="m-navHeader clearfix">
            <div class="headerSectionWrap clearfix">
                <p class="m-headerTitle">品質と信頼をつなぐ - 公益社団法人日本食肉格付協会</p>
            </div>
            <p class="m-navHeader-logo"><a class="sprite" href="/">公益社団法人日本食肉格付協会</a></p>
            <ul class="m-navGlobal clearfix">
                {{-- <li><a class="no-navLocal" href="/">ホーム</a></li> --}}
                <li class="m-navGlobal_dropdownBtn">
                    <a href="/about/" class="m-navGlobal_dropdownBtn_link">当協会について</a>
                    <ul class="m-navLocal dn">
                        <li><a href="/about/organization/">組織</a></li>
                        <li><a href="/about/branch/">支所・事業所</a></li>
                        <li><a href="/about/factory/">部分肉認定工場</a></li>
                        <li><a href="/about/disclosure/">情報公開</a></li>
                        <li><a href="/about/access/">交通アクセス</a></li>
                    </ul>
                </li>
                <li><a class="no-navLocal w102" href="/service/">事業内容</a></li>
                <li class="m-navGlobal_dropdownBtn">
                    <a href="/standard/" class="m-navGlobal_dropdownBtn_link">食肉格付とは</a>
                    <ul class="m-navLocal dn">
                        <li><a href="/standard/beef/">牛枝肉取引規格</a></li>
                        <li><a href="/standard/pork/">豚枝肉取引規格</a></li>
                        <li><a href="/standard/beef-partial/">牛部分肉取引規格</a></li>
                        <li><a href="/standard/pork-partial/">豚部分肉取引規格</a></li>
                    </ul>
                </li>
                <li class="m-navGlobal_dropdownBtn">
                    <a href="/rating/" class="m-navGlobal_dropdownBtn_link">格付結果情報</a>
                    <ul class="m-navLocal dn">
                        <li><a href="/rating/archive/">過去の格付結果</a></li>
                    </ul>
                </li>
                <li class="m-navGlobal_dropdownBtn">
                    <a href="/recruit/" class="m-navGlobal_dropdownBtn_link w92"
                       style="animation: flash 2s linear infinite; color: #ff0000!important;">採用情報</a>
                    <ul class="m-navLocal dn">
                        <li><a href="/recruit/message/">トップメッセージ</a></li>
                        <li><a href="/recruit/guideline/">募集要項</a></li>
                        <li><a href="/recruit/staff/">先輩職員の声</a></li>
                    </ul>
                </li>
                <li class="m-navGlobal_dropdownBtn active">
                    <a href="javascript:void(0);" class="m-navGlobal_dropdownBtn_link"
                       style="padding-top: 2px; height: 98px; width: 210px;">豚枝肉規格改正関係<br/>その他</a>
                    <ul class="m-navLocal dn" style="width: 242px">
                        <li>
                            <a href="{{ asset('assets/commons/doc/kikakukaisei_tesuryokaitei.pdf') }}">規格及び料⾦改正のお知らせ</a>
                        </li>
                        <li><a target="_blank"
                               href="https://pig-info.jmga.or.jp/porkinfo">格付情報提供システムについて</a></li>
                        <li><a href="{{ url('/other/fattyacid') }}">豚枝肉の脂肪酸測定について</a></li>
                        <li><a href="{{ url('/other/internship') }}">インターンシップ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
