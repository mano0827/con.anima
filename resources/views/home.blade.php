<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSSの読み込み -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


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

        <div class="slide_wrapper">
            <div class="slide_text">
                    <h1>con anima</h1>
                    <h3>～日常を紡ぎ、未来を想う～</h3>
            </div>
        </div>



        <div class="about_wrapper">
            <div class="about_title">
                <h2>完全オーダーメイド<br>
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
            <div class="service_title">
                <p>サービス内容</p>
            </div>

            <ul>
                <li>
                    <section class="service_section">
                        <div class="service_section_img">
                            <img src="" alt="">
                        </div>
                        <div class="service_section_content">
                            <div class="service_section_content_title">
                                <h3>初回打ち合わせ体験プラン</h3>
                            </div>
                            <div class="service_section_content_price">
                                <p>¥5,000</p>
                            </div>
                            <div class="service_section_content_link">
                                <a href="http://localhost:8888/service">詳細はこちらから</a>
                            </div>
                        </div>
                    </section>
                </li>

                <li>
                    <section class="service_section">
                        <div class="service_section_img">
                            <img src="" alt="">
                        </div>
                        <div class="service_section_content">
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
                    </section>
                </li>


                <li>
                    <section class="service_section">
                        <div class="service_section_img">
                            <img src="" alt="">
                        </div>
                        <div class="service_section_content">
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
                    </section>
                </li>

            </ul>


            <div class="contact_wrapper">
                <div class="contact_title">
                    <h2>お問合せ</h2>
                </div>

                <div class="contact_content">
                    <div class="contact_content_name">
                        <p class="contact_content_name_title">名前</p>
                        <input type="text" name="" id="">
                    </div>

                    <div class="contact_content_email">
                        <p class="contact_content_email_title">メールアドレス</p>
                        <input type="text" name="" id="">
                    </div>

                    <div class="contact_content_subject">
                        <p class="contact_content_subject_title">件名</p>
                        <input type="text" name="" id="">
                    </div>

                    <div class="contact_content_message">
                        <p class="contact_content_message_title">メッセージ</p>
                        <input type="text" name="" id="">
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>