<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSSの読み込み -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- fontawesomeの読み込み -->
    <script src="https://kit.fontawesome.com/ea36bd0c33.js" crossorigin="anonymous"></script>



    <title>con anime official</title>
</head>

<body>
    <div class="site_container">

        <div class="header">
            <div class="header_list d-flex flex-row align-items-center justify-content-between">
                <img class="header_img w-11" src="{{ asset('image/logo/logo_black.png')}}" alt="con animaロゴ">
                <div class="list-inline d-flex">
                    <div class="mx-3">Top</div>
                    <div class="mx-3">About</div>
                    <div class="mx-3">Service</div>
                    <div class="mx-3">Contact</div>
                </div>
            </div>
        </div>

        <div class="main">

            <div class="site_container service ">
                <div class="service_outer mt-5 pt-3">
                    <div class="service_about_title_img_r">
                        <img src="{{ asset('image/text/first_trial_plan.png')}}" alt="First Trial, Plan">
                    </div>


                    <div class="service_about d-flex flex-row justify-content-end align-items-center mt-3">
                        <div class="service_about_title px-2 mx-2 ms-2">
                            <h1 class="service_outer_title">
                                初回体験プラン
                            </h1>
                            <p class="service_about_text">
                                初回打ち合わせまでの流れを実際に体験していただくプランです。<br>
                                ※楽曲、映像の制作は行いません。
                            </p>
                        </div>

                        <div class="service_about_img">
                            <img src="{{ asset('image/common/service_img1.png')}}" alt="初回体験プランの画像">
                        </div>

                    </div>


                    <div class="service_detail my-4 px-2 mx-2">
                        <!-- <h3 class="service_detail_title">プラン内容</h3> -->
                        <p class="service_detail_text text-end">
                            まず、楽曲に関する簡単なアンケートをまずご記入いただきます。<br>
                            そちらのアンケート内容をもとに、楽曲に関する初回お打ち合わせを、<br>
                            オンライン形式にて1時間程行います。<br>
                            もし、こちらの初回打ち合わせ体験プラン終了後、実際に楽曲制作に進みたいというご要望の場合<br>
                            こちらの体験料金の差額分のプラン料金で、セミオーダー/フルオーダープランをご注文することも可能です。<br>
                        </p>
                    </div>

                </div>
            </div>





            <div class="site_container service">
                <div class="service_outer my-5 pt-4">
                    <div class="service_about_title_img_l pt-5">
                        <img src="{{ asset('image/text/semi_order_plan.png')}}" alt="Semi Order, Plan">
                    </div>


                    <div class="service_about d-flex flex-row justify-content-start align-items-center mt-3">

                        <div class="service_about_img">
                            <img src="{{ asset('image/common/service_img2.png')}}" alt="初回体験プランの画像">
                        </div>

                        <div class="service_about_title-l px-2 mx-2 ms-2">
                            <h1 class="service_outer_title">
                                セミオーダープラン
                            </h1>
                            <p class="service_about_text">
                                完全オリジナル楽曲＆お客さま自身で撮影いただいた写真や動画を編集しミュージックビデオを制作するプランです。
                            </p>
                        </div>


                    </div>


                    <div class="service_detail my-4 px-2 mx-2">
                        <!-- <h3 class="service_detail_title">プラン内容</h3> -->
                        <p class="service_detail_text">
                            まず、楽曲制作にあたり簡単なアンケートをご記入いただきます。<br>
                            そちらのアンケートの内容を元に、オンライン形式にて2〜3回ほどのお打ち合わせをさせていただきます。<br>
                            楽曲に込めたい想いや、曲の雰囲気等をお伝えいただき、完全オーダーメイドの楽曲を制作いたします。<br>
                            <br>
                            ミュージックビデオについては、スマホやカメラ等でお客様が今までに撮影したデータをご共有いただきます。<br>
                            我々でそちらのデータの編集作業を行い、ミュージックビデオを制作させていただきます。<br>
                            <br>
                            上記がセミオーダープランの基本的な内容になりますが、その他ご希望・ご要望等ございましたら<br>
                            お気軽にご相談ください。<br>
                        </p>
                    </div>

                </div>
            </div>






            <div class="service_outer mt-5 pt-3">
                <div class="service_about_title_img_r">
                    <img src="{{ asset('image/text/full_order_plan.png')}}" alt="First Trial, Plan">
                </div>


                <div class="service_about d-flex flex-row justify-content-end align-items-center mt-3">
                    <div class="service_about_title px-2 mx-2 ms-2">
                        <h1 class="service_outer_title">
                            フルオーダープラン
                        </h1>
                        <p class="service_about_text">
                            完全オリジナル楽曲&構成含め0から作り上げるMVを制作するプランです。
                        </p>
                    </div>

                    <div class="service_about_img">
                        <img src="{{ asset('image/common/service_img3.png')}}" alt="初回体験プランの画像">
                    </div>

                </div>


                <div class="service_detail my-4 px-2 mx-2">
                    <!-- <h3 class="service_detail_title">プラン内容</h3> -->
                    <p class="service_detail_text text-end">
                        まず、楽曲制作にあたり簡単なアンケートをご記入いただきます。<br>
                        そちらのアンケートの内容を元に、オンライン形式にて3~4回ほどのお打ち合わせをさせていただきます。<br>
                        楽曲に込めたい想いや、曲の雰囲気等をお伝えいただき、完全オーダーメイドの楽曲を制作いたします。<br>
                        <br>
                        ミュージックビデオについては、撮影・編集作業含め0から作り上げていきます。<br>
                        撮影については、お客さまの出演も可能です。<br>
                        ミュージックビデオのイメージにつきましても、お打ち合わせイメージを少しずつ固めながら、実際の制作に取り掛かります。<br>
                        プロのカメラマンが撮影、編集作業を行い、完全オリジナルのミュージックビデオを制作させていただきます。<br>
                        <br>
                        上記がフルオーダープランの基本的な内容になりますが、その他ご希望・ご要望等ございましたら<br>
                        お気軽にご相談ください。<br>
                    </p>
                </div>

            </div>
        </div>




    </div>

</body>

</html>