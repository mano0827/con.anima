@extends('common')

@section('content')
<div class="main">

    <div class="site_container service ">

        <div class="service_slide_wrapper_1">
            <div class="service_slide_text text-white text-left">
                <h1 class="service_slide_title">First</h1>
                <h1 class="service_slide_title">Trial,</h1>
                <h1 class="service_slide_title">Plan</h1>
            </div>
        </div>


        <div class="service_about text-center mt-5 py-4">
            <div class="service_about_title">
                <h1 class="service_outer_title">
                    初回体験プラン
                </h1>
                <p class="service_about_text pt-1 pb-3">
                    初回打ち合わせまでの流れを実際に体験していただくプランです。<br>
                    ※楽曲、映像の制作は行いません。 </p>
            </div>
        </div>


        <div class="service_price mb-3 pb-5">
            <div class="service_price_content">
                <h3 class="service_price_title text-center">Price</h3>
                <hr>
                <p class="service_price_text text-center">
                    ¥5,000-
                </p>
            </div>
        </div>



        <div class="movie-main d-flex align-items-center pb-3 px-3">
            <iframe width="738" height="415" src="https://www.youtube.com/embed/i24t9GPkYWo?loop=1&playlist=i24t9GPkYWo&showinfo=0&theme=light&color=white" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>


        <div class="service_detail my-4 pt-5">

            <div class="service_detail_content mt-5 pt-3">
                <h3 class="service_detail_title text-center">Service</h3>
                <hr>
                <p class="service_detail_text text-center">
                    まず初めに、楽曲に関する簡単なアンケートをご記入いただきます。<br>
                    そちらのアンケート内容をもとに、楽曲に関する初回お打ち合わせを、<br>
                    オンライン形式にて1時間程行います。<br>
                    もし、こちらの初回打ち合わせ体験プラン終了後、実際に楽曲制作に進みたいというご要望の場合<br>
                    こちらの体験料金の差額分のプラン料金で、セミオーダー/フルオーダープランをご注文することも可能です。
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