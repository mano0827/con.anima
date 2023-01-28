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

            <div class="slide_wrapper">
                <div class="slide_text text-white text-center">
                    <h1 class="slide_title">con anima</h1>
                    <h3 class="slide_subtitle">～日常を紡ぎ、未来を想う～</h3>
                </div>
            </div>



            <div class="about_wrapper text-center mt-7">
                <div class="mb-4">
                    <h2 class="about_title">完全オーダーメイド<br>
                        音楽映像制作サービス</h2>
                </div>

                <div class="about_text">
                    <p>「オリジナル楽曲」×「オリジナル映像」で、結婚や記念日などのお祝い事、または大切な人への贈り物として<br>
                        完全オーダーメイドのミュージックビデオを作成いたします。<br>
                        付き合うまでのストーリーや普段の何気ない日常生活、いつもは伝えられない感謝な<br>
                        お客さま自身の伝えたい想いを<br>
                        オリジナル楽曲とオリジナル映像で届けてみませんか。
                    </p>
                </div>
            </div>


            <!-- <div class="movie_wrapper">
                <div class="movie-main">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/i24t9GPkYWo?loop=1&playlist=i24t9GPkYWo&showinfo=0&theme=light&color=white" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="movie-sub">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3hYhU4v26UY?loop=1&playlist=3hYhU4v26UY&showinfo=0&theme=light&color=white" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div> -->



            <div class="service_wrapper">
                <div class="text-center">
                    <h2 class="service_title">Service</h2>
                </div>



                <div class="service_area d-flex justify-content-center">

                    <div class="service_section">
                        <div class="service_section_img">
                            <img src="" alt="">
                        </div>
                        <div class="service_section_content text-center">
                            <div class="service_section_content_title">
                                <h3>初回体験プラン</h3>
                            </div>
                            <div class="service_section_content_price">
                                <p>¥5,000</p>
                            </div>
                            <div class="service_section_content_link">
                                <a href="http://localhost:8888/service">詳細はこちらから</a>
                            </div>
                        </div>
                    </div>



                    <div class="service_section">
                        <div class="service_section_img">
                            <img src="" alt="">
                        </div>
                        <div class="service_section_content text-center">
                            <div class="service_section_content_title">
                                <h3>セミオーダープラン</h3>
                            </div>
                            <div class="service_section_content_price">
                                <p>¥98,000~</p>
                            </div>
                            <div class="service_section_content_link">
                                <a href="http://localhost:8888/service">詳細はこちらから</a>
                            </div>
                        </div>
                    </div>



                    <div class="service_section">
                        <div class="service_section_img">
                            <img src="" alt="">
                        </div>
                        <div class="service_section_content text-center">
                            <div class="service_section_content_title">
                                <h3>フルオーダープラン</h3>
                            </div>
                            <div class="service_section_content_price">
                                <p>¥198,000~</p>
                            </div>
                            <div class="service_section_content_link">
                                <a href="http://localhost:8888/service">詳細はこちらから</a>
                            </div>
                        </div>
                    </div>

                </div>




                <div class="contact_wrapper text-center">
                    <h2 class="contact_title">Contact</h2>

                    <div class="contact_content w-50">
                        <div class="contact_content_name text-start">
                            <p class="contact_content_title">名前</p>
                            <input class="w-100" type="text" name="" id="">
                        </div>

                        <div class="contact_content_email text-start">
                            <p class="contact_content_title">メールアドレス</p>
                            <input class="w-100" type="text" name="" id="">
                        </div>

                        <div class="contact_content_subject text-start">
                            <p class="contact_content_title">件名</p>
                            <input class="w-100" type="text" name="" id="">
                        </div>

                        <div class="contact_content_message text-start">
                            <p class="contact_content_title">メッセージ</p>
                            <input class="w-100" type="textarea" name="" id="">
                        </div>
                    </div>
                </div>
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

</body>

</html>