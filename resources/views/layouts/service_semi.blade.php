@extends('common')

@section('content')
<div class="main">

    <div class="site_container service ">

        <div class="service_slide_wrapper_2">
            <div class="service_slide_text text-white text-left">
                <h1 class="service_slide_title">Semi</h1>
                <h1 class="service_slide_title">Order,</h1>
                <h1 class="service_slide_title">Plan</h1>
            </div>
        </div>


        <div class="service_about text-center mt-5 py-4">
            <div class="service_about_title">
                <h1 class="service_outer_title">
                    セミオーダープラン
                </h1>
                <p class="service_about_text pt-1 pb-3">
                    完全オリジナル楽曲＆お客さま自身で撮影いただいた写真や動画を編集しミュージックビデオを制作するプランです。
                </p>
            </div>
        </div>


        <div class="service_price mb-3 pb-5">
            <div class="service_price_content">
                <h3 class="service_price_title text-center">Price</h3>
                <hr>
                <h4 class="service_price_text text-center">
                    ¥98,000~
                </h4>
            </div>
        </div>



        <div class="movie-main d-flex align-items-center pb-3 px-3">
            <iframe width="738" height="415" src="https://www.youtube.com/embed/3hYhU4v26UY?loop=1&playlist=3hYhU4v26UY&showinfo=0&theme=light&color=white"" title=" YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>


        <div class="service_detail my-4 pt-5">

            <div class="service_detail_content mt-5 pt-3">
                <h3 class="service_detail_title text-center">Music</h3>
                <hr>
                <p class="service_detail_text text-center">
                    まず、楽曲制作にあたり簡単なアンケートをご記入いただきます。<br>
                    そちらのアンケートの内容を元に、オンライン形式にて2〜3回ほどのお打ち合わせをさせていただきます。<br>
                    楽曲に込めたい想いや、曲の雰囲気等をお伝えいただき、完全オーダーメイドの楽曲を制作いたします。
                </p>
            </div>

            <div class="service_detail_content mt-5 pt-3">
                <h3 class="service_detail_title text-center">Movie</h3>
                <hr>
                <p class="service_detail_text text-center">
                    ミュージックビデオについては、スマホやカメラ等でお客様が今までに撮影したデータをご共有いただきます。<br>
                    我々でそちらのデータの編集作業を行い、ミュージックビデオを制作させていただきます。<br>
                    <br>
                    その他ご希望・ご要望等ございましたら<br>
                    お気軽にご相談ください。<br>
                </p>
            </div>

        </div>



        <div class="service_bottom_links text-center pt-5">
            <a class="service_bottom_link mx-3" href="http://localhost:8888/service_first">First Trial</a>
            |
            <a class="service_bottom_link mx-3" href="http://localhost:8888/service_semi">Semi Order</a>
            |
            <a class="service_bottom_link mx-3" href="http://localhost:8888/service_full">Full Order</a>
        </div>
    </div>
</div>
@endsection