@extends('common')

@section('content')

        <div class="main">

            <div class="slide_wrapper" id="slide_wrapper">
                <div class="slide_text text-white text-center">
                    <h1 class="slide_title">con anima</h1>
                    <h3 class="slide_subtitle">～日常を紡ぎ、未来を想う～</h3>
                </div>
            </div>



            <div class="about_wrapper text-center mt-7 pb-5" id="about">
                <div class="mb-4">
                    <h2 class="about_title">完全オーダーメイド<br>
                        音楽映像制作サービス</h2>
                </div>

                <div class="about_text">
                    <p>「オリジナル楽曲」×「オリジナル映像」で、<br>
                        結婚や記念日などのお祝い事、または大切な人への贈り物として<br>
                        完全オーダーメイドのミュージックビデオを作成いたします。<br>
                        付き合うまでのストーリーや何気ない日常生活、普段伝えられてない感謝の気持ち。<br>
                        お客さま自身が伝えたい様々な想いを<br>
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



            <div class="service_wrapper pt-5" id="service">
                <div class="service_outer" mt-5 pt-5">
                    <div class="service_about_title_img right">
                        <img src="{{ asset('image/text/first_trial_plan.png')}}" alt="First Trial, Plan">
                    </div>

                    
                    <div class="service_about right mt-3">

                        <div class="service_about_img right">
                            <img src="{{ asset('image/common/service_img1.png')}}" alt="初回体験プランの画像">
                        </div>

                        <div class="service_about_title right px-4 mx-2 ms-2">
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


                    </div>

                </div>




                <div class="service_outer my-5 pt-4">
                    <div class="service_about_title_img left pt-5">
                        <img src="{{ asset('image/text/semi_order_plan.png')}}" alt="Semi Order, Plan">
                    </div>


                    <div class="service_about left mt-3">

                        <div class="service_about_img left">
                            <img src="{{ asset('image/common/service_img2.png')}}" alt="初回体験プランの画像">
                        </div>

                        <div class="service_about_title left px-4 mx-2 ms-2">
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
                    <div class="service_about_title_img right">
                        <img src="{{ asset('image/text/full_order_plan.png')}}" alt="First Trial, Plan">
                    </div>


                    <div class="service_about right mt-3">

                        <div class="service_about_img right">
                            <img src="{{ asset('image/common/service_img3.png')}}" alt="初回体験プランの画像">
                        </div>
                        
                        <div class="service_about_title right px-4 mx-2 ms-2">
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


                    </div>

                </div>

            </div>


            <div class="contact_wrapper text-center" id="contact">
                <h2 class="contact_title">Contact</h2>

                <div class="contact_content">
                    <form method="post" action="{{ route('send') }}">
                        @csrf
                        <div class="contact_content_name text-start">
                            <label class="contact_content_title" for="name">名前</label>
                            <input class="w-100" type="text" name="name" id="name">
                        </div>
                        <div class="contact_content_email text-start">
                            <label class="contact_content_title" for="email">メールアドレス</label>
                            <input class="w-100" type="email" name="email" id="email">
                        </div>

                        <div class="contact_content_subject text-start">
                            <label class="contact_content_title" for="subject">タイトル</label>
                            <input class="w-100" type="text" name="subject" id="subject">
                        </div>

                        <div class="contact_content_message text-start">
                            <label class="contact_content_title" for="contents">メッセージ</label>
                            <textarea class="w-100" type="textarea" name="contents" id="contents" rows="4"></textarea>
                        </div>

                        <div class="contact_content_message_btn">
                            <button type="submit">送信</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
