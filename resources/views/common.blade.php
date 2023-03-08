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

        <div class="header" id="header_id">
            <div class="header_list d-flex flex-row align-items-center justify-content-between">
                <a href="http://localhost:8888/home">
                    <img class="header_img" src="{{ asset('image/logo/logo_black.png')}}" alt="con animaロゴ">
                </a>
                <div class="site_links list-inline d-flex">
                    <a class="site_link" href="http://localhost:8888/#site">Top</a>
                    <a class="site_link" href="http://localhost:8888/#about">About</a>
                    <a class="site_link" href="http://localhost:8888/#service">Service</a>
                    <a class="site_link" href="http://localhost:8888/#contact">Contact</a>
                </div>
            </div>
        </div>
        
        @yield('content')
        
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
                        <img class="footer_img" src="{{ asset('image/logo/logo_black.png')}}" alt="con animaロゴ">
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>