<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
    </script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        #icerik {
            width: 100%;
            height: 100%;
            display: table;
            background-color: rgb(220, 220, 220, .5);
        }

        #icerik p {
            display: table-cell;
            vertical-align: middle;
            font-size: 5em;
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            height: 15%;
            width: 100%;
            background-color: white;
            color: white;
            text-align: right;
        }

        .footer ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .footer ul li {
            /*      padding-top: 2%;
                padding-bottom: 2%;
                padding-left: 4%;
                padding-right: 6.5%;
                color: #821067;
                align-items: center; */
        }

        .footer ul li a i {
            display: block;
            margin: 0 auto 10px;
            text-align: center;
        }

        .footer ul li a {
            color: #821067;
            text-decoration: none;
            text-align: center;
            display: block;
            position: relative;
            width: 100%;
            height: 100%;
        }

        .footer ul li a span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .footer ul li.active a {

            color: white;
        }

        .footer ul li.active {

            background-color: #821067;
        }


        .footer ul li i {
            margin-right: 5px;
        }

        .footer ul li.hover:hover {
            background-color: #821067;
            color: white;
            cursor: pointer;
            transition-duration: 1.0s;
            -webkit-transition-duration: 1.0s;
            -moz-transition-duration: 1.0s;
            -ms-transition-duration: 1.0s;
            -o-transition-duration: 1.0s;
            /* border-radius: 10px; */
        }

        .footer ul li:hover a {
            color: white;

            /* border-radius: 10px; */
        }


        /*
        @media screen and (max-width: 1920px) and (min-width: 1080px){
            .footer {
                height: 12%;
            }
        }

        @media screen and (max-width: 1440px){
            .footer {
                height: 13%;
            }
            .footer ul li{
                padding-top: 1%;
            }
        }

        @media screen and (max-width: 768px){
            .footer ul li{
                width: 100%;
            }

            #icerik{
                width: 100%;
                height: 40%;
                display: table;
            }

            .footer {
                height: 60%;
                text-align: center;
            }
        }
        */

        @media screen and (max-width: 850px) {
            .footer ul li a {
                font-size: 14px !important;
                padding-top: 2;

            }

            .footer {
                height: 110px;
            }
        }

        @media screen and (max-width: 375px) {
            .footer ul li a {
                font-size: 0.6em;
            }

            .footer {
                height: auto;
            }
        }

        @media screen and (max-width: 320px) {
            .footer ul li a {
                font-size: 0.6em;
            }

            .footer {
                height: auto;
            }
        }

        .footer>div,
        .footer>div>ul,
        .footer>div>ul li {
            height: 100%;
        }

        .footer div ul li img{
            max-width: 90%;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Anasayfa</a>
            @else
                <a href="{{ route('login') }}">Giriş Yap</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Kayıt Ol</a>
                @endif
            @endauth
        </div>
    @endif

    <div id="icerik">
        <p>Ana Sayfa</p>
    </div>

    <div class="footer">
        <div class="container-fluid p-0">

            <ul class="row">
                <li class="col"><img src="public/logo.png" alt="Logo" class="img-fluid" style="min-width: 100px;"></li>
                <li class="col hover"><a href="#"><span><i class="fas fa-question fa-2x"></i>SORU SOR</span></a>
                </li>
                <li class="col hover"><a href="#"><span><i class="far fa-calendar-alt fa-2x"></i>ETKİNLİK
                            TAKVİMİ</span></a></li>
                <li class="col hover"><a href="#"><span><i class="far fa-square fa-2x"></i>STAND ALANI</span></a></li>
                <li class="col hover"><a href="#"><span><i class="fas fa-play-circle fa-2x"></i>TOPLANTI
                            SALONU</span></a></li>
                <li class="col hover"><a href="#"><span><i class="fas fa-house-user fa-2x"></i>FUAYE</span></a></li>

            </ul>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('li.hover').on('click', function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
            })
        })
    </script>
</div>
</body>
</html>
