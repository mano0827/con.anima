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
    <div class="site_container" id="site_container">

        <div class="header" id="header_id">
            <div class="header_list d-flex flex-row align-items-center justify-content-between">
                <img class="header_img" src="{{ asset('image/logo/logo_black.png')}}" alt="con animaロゴ">
                <div class="site_links list-inline d-flex">
                        <a class="site_link mx-3" href="#site_container">Top</a>
                        <a class="site_link mx-3" href="#about_wrapper">About</a>
                        <a class="site_link mx-3" href="#service_wrapper">Service</a>
                        <a class="site_link mx-3" href="#contact_wrapper">Contact</a>
                </div>
            </div>
        </div>

        <div class="main">

            <div class="slide_wrapper" id="slide_wrapper">
                <div class="slide_text text-white text-center">
                    <h1 class="slide_title">con anima</h1>
                    <h3 class="slide_subtitle">～日常を紡ぎ、未来を想う～</h3>
                </div>
            </div>



            <div class="about_wrapper text-center mt-7 pb-5" id="about_wrapper">
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






            <div class="service_wrapper pt-5" id="service_wrapper">
                <div class="service_outer" mt-5 pt-5">
                    <div class="service_about_title_img_r">
                        <img src="{{ asset('image/text/first_trial_plan.png')}}" alt="First Trial, Plan">
                    </div>


                    <div class="service_about d-flex flex-row justify-content-end align-items-center mt-3">
                        <div class="service_about_title-r px-2 mx-2 ms-2">
                            <h1 class="service_outer_title">
                                初回体験プラン
                            </h1>
                            <p class="service_about_text">
                                初回打ち合わせまでの流れを実際に体験していただくプランです。<br>
                                ※楽曲、映像の制作は行いません。
                            </p>
                            <div class="service_link text-start">
                                <a class="link" href="http://localhost:8888/service_first">Read more</a>
                            </div>
                        </div>

                        <div class="service_about_img">
                            <img src="{{ asset('image/common/service_img1.png')}}" alt="初回体験プランの画像">
                        </div>

                    </div>

                </div>




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
                            <div class="service_link text-start">
                                <a class="link" href="http://localhost:8888/service_semi">Read more</a>
                            </div>
                        </div>


                    </div>
                </div>






                <div class="service_outer mt-5 pt-5">
                    <div class="service_about_title_img_r">
                        <img src="{{ asset('image/text/full_order_plan.png')}}" alt="First Trial, Plan">
                    </div>


                    <div class="service_about d-flex flex-row justify-content-end align-items-center mt-3">
                        <div class="service_about_title-r px-2 mx-2 ms-2">
                            <h1 class="service_outer_title">
                                フルオーダープラン
                            </h1>
                            <p class="service_about_text">
                                完全オリジナル楽曲&構成含め0から作り上げるMVを制作
                            </p>
                            <div class="service_link text-start">
                                <a class="link" href="http://localhost:8888/service_full">Read more</a>
                            </div>
                        </div>

                        <div class="service_about_img">
                            <img src="{{ asset('image/common/service_img3.png')}}" alt="初回体験プランの画像">
                        </div>

                    </div>

                </div>

            </div>







            <!-- <div class="service_wrapper">
                <div class="text-center">
                    <h2 class="service_title">Service</h2>
                </div>



                <div class="service_area d-flex justify-content-center">

                    <div class="service_section">
                        <a href="http://localhost:8888/service"></a>
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
                            <div class="service_section_content_detail">
                                <p>詳細はこちらから</a>
                            </div>
                        </div>
                    </div>



                    <div class="service_section">
                        <a href="http://localhost:8888/service"></a>
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
                            <div class="service_section_content_detail">
                                <p>詳細はこちらから</a>
                            </div>
                        </div>
                    </div>


                    <div class="service_section">
                        <a href="http://localhost:8888/service"></a>
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
                            <div class="service_section_content_detail">
                                <p>詳細はこちらから
                            </div>
                        </div>
                    </div>
                    </a>

                </div>
 -->



            <div class="contact_wrapper text-center" id="contact_wrapper">
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
                        <textarea class="w-100" type="textarea" name="" id="" rows="4"></textarea>
                    </div>

                    <div class="contact_content_message_btn">
                        <button type="submit">送信</button>
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