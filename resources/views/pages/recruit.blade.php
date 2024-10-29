
{{--採用情報ページ--}}

@extends('layouts.base')

@section('title', '採用情報')

@section('description', '採用情報（募集要項）についてご案内します。日本食肉格付協会は、牛肉・豚肉の格付け事業など通じて、食肉の安全に貢献し、品質と信頼をつなぎます。')

@section('keywords', '採用,情報,募集,要項,牛肉,豚肉,格付,日本食肉格付協会,JMGA,公益社団法人')

@section('pankz', '採用情報')

@section('sub_title', '- recruit -')

@section('content')
    <div class="l-section_white l-section-last">
        <div class="l-h2Body">
            <p>

            </p>
            <ul class="buttonSection_standard clearfix">
                <li>
                    <a class="stripeButton itemBlue" href="/recruit/message/">
                        <p>トップメッセージ
                            <span>トップメッセージはこちら
                        </span>
                        </p>
                    </a>
                </li>
                <li>
                    <a class="stripeButton stripeButton--auto itemYellow" href="/recruit/guideline/">
                        <p>令和7年度募集要項
                            <span>令和7年度募集要項はこちら
                        </span>
                        </p>
                    </a>
                </li>
                <li>
                    <a class="stripeButton stripeButton--auto itemBlue" href="/recruit/staff/">
                        <p>先輩職員の声
                            <span>先輩職員の声はこちら
                        </span>
                        </p>
                    </a>
                </li>
            </ul>
            <p class="notice">※注意：当ホームページから画像等を引用する場合は、出典名（当協会名）を必ず明記してください。</p>
        </div>
    </div>
@endsection
