<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSSの読み込み -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">

    <!-- fontawesomeの読み込み -->
    <script src="https://kit.fontawesome.com/ea36bd0c33.js" crossorigin="anonymous"></script>



    <title>con anime official</title>
</head>

<body>
    <div class="site_container">

        <div class="header" id="header_id">
            <div class="header_list d-flex flex-row align-items-center justify-content-between">
                <a href="http://localhost:8888/home">
                    <img class="header_img" src="{{ asset('image/logo/logo_black.png')}}" alt="con animaロゴ">
                </a>
                <div class="site_links list-inline d-flex">
                    <a class="site_link mx-3" href="http://localhost:8888/#site_container">Top</a>
                    <a class="site_link mx-3" href="http://localhost:8888/#about_wrapper">About</a>
                    <a class="site_link mx-3" href="http://localhost:8888/#service_wrapper">Service</a>
                    <a class="site_link mx-3" href="http://localhost:8888/#contact_wrapper">Contact</a>
                </div>
            </div>
        </div>

        <div class="main">

            <div class="site_container service ">

                <div class="service_slide_wrapper_3">
                    <div class="service_slide_text text-white text-left">
                        <h1 class="service_slide_title">Full</h1>
                        <h1 class="service_slide_title">Order,</h1>
                        <h1 class="service_slide_title">Plan</h1>
                    </div>
                </div>


                <div class="service_about text-center mt-5 py-4">
                    <div class="service_about_title">
                        <h1 class="service_outer_title">
                            フルオーダープラン
                        </h1>
                        <p class="service_about_text pt-1 pb-3">
                            完全オリジナル楽曲&構成含め0から作り上げるMVを制作するプランです。
                        </p>
                    </div>
                </div>


                <div class="service_price mb-3 pb-5 w-50">
                    <div class="service_price_content">
                        <h3 class="service_price_title text-center">Price</h3>
                        <hr>
                        <p class="service_price_text text-center">
                            ¥198,000~
                        </p>
                    </div>
                </div>



                <div class="movie-main d-flex align-items-center pb-3">
                    <iframe width="738" height="415" src="https://www.youtube.com/embed/i24t9GPkYWo?loop=1&playlist=i24t9GPkYWo&showinfo=0&theme=light&color=white" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>


                <div class="service_detail my-4 pt-5 w-50">

                    <div class="service_detail_content mt-5 pt-3">
                        <h3 class="service_detail_title text-center">Music</h3>
                        <hr>
                        <p class="service_detail_text text-center">

                            まず、楽曲制作にあたり簡単なアンケートをご記入いただきます。<br>
                            そちらのアンケートの内容を元に、オンライン形式にて3~4回ほどのお打ち合わせをさせていただきます。<br>
                            楽曲に込めたい想いや、曲の雰囲気等をお伝えいただき、完全オーダーメイドの楽曲を制作いたします。
                        </p>
                    </div>

                    <div class="service_detail_content mt-5 pt-3">
                        <h3 class="service_detail_title text-center">Movie</h3>
                        <hr>
                        <p class="service_detail_text text-center">
                            ミュージックビデオについては、撮影・編集作業含め0から作り上げていきます。<br>
                            撮影については、お客さまの出演も可能です。<br>
                            ミュージックビデオのイメージにつきましても、お打ち合わせの中でイメージを少しずつ固めながら、実際の制作に取り掛かります。<br>
                            プロのカメラマンが撮影、編集作業を行い、完全オリジナルのミュージックビデオを制作させていただきます。<br>
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



            <div class="footer text-center">
                <div class="sns_link mb-2" id="sns_logo">
                    <a href="https://www.instagram.com/con.anima_official/">
                        <i class="fa-brands fa-instagram mx-3"></i>
                    </a>
                    <a href="https://www.youtube.com/watch?v=i24t9GPkYWo&list=RDi24t9GPkYWo&start_radio=1">
                        <i class="fa-brands fa-youtube mx-3"></i> </a>
                </div>

                <div class="logo_img">
                    <a href="">
                        <img class="header_img w-11" src="{{ asset('image/logo/logo_black.png')}}" alt="con animaロゴ">
                    </a>
                </div>
            </div>


        </div>




    </div>

</body>

</html>