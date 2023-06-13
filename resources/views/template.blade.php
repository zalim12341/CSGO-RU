<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <script src="https://kit.fontawesome.com/f6fcb7088a.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            nav{
                font-family: 'Raleway', sans-serif;
            }
            .sign {
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 30%;
                height: 50%;
                transform: translate(-50%, -50%);
                left: 50%;
                top: 50%;
                text-transform: uppercase;
                font-size: 6em;
                color: #a553f6;
                text-shadow: 0 0 0.6rem #a553f6, 0 0 1.5rem #ff5fdc,
                -0.2rem 0.1rem 1rem #2f1946, 0.2rem 0.1rem 1rem #2f1946,
                0 -0.5rem 2rem #ff5fdc, 0 0.5rem 1rem #2f1946;
                animation: shine 2s forwards, flicker 3s infinite;
            }

            @keyframes blink {
                0%,
                22%,
                36%,
                75% {
                    color: #a553f6;
                    text-shadow: 0 0 0.6rem #ff5fdc, 0 0 1.5rem #2f1946,
                    -0.2rem 0.1rem 1rem #a553f6, 0.2rem 0.1rem 1rem #ff5fdc,
                    0 -0.5rem 2rem #ff5fdc, 0 0.5rem 1rem #2f1946;
                }
                28%,
                33% {
                    color: #ff5fdc;
                    text-shadow: none;
                }
                82%,
                97% {
                    color: #ff5fdc;
                    text-shadow: none;
                }
            }

            .flicker {
                animation: shine 2s forwards, blink 3s 2s infinite;
            }

            .fast-flicker {
                animation: shine 2s forwards, blink 10s 1s infinite;
            }

            @keyframes shine {
                0% {
                    color: #2f1946;
                    text-shadow: none;
                }
                100% {
                    color: #a553f6;
                    text-shadow: 0 0 0.6rem #ff5fdc, 0 0 1.5rem #2f1946,
                    -0.2rem 0.1rem 1rem #2f1946, 0.2rem 0.1rem 1rem #ff5fdc,
                    0 -0.5rem 2rem #ff5fdc, 0 0.5rem 3rem #2f1946;
                }
            }

            @keyframes flicker {
                from {
                    opacity: 1;
                }

                4% {
                    opacity: 0.9;
                }

                6% {
                    opacity: 0.85;
                }

                8% {
                    opacity: 0.95;
                }

                10% {
                    opacity: 0.9;
                }

                11% {
                    opacity: 0.922;
                }

                12% {
                    opacity: 0.9;
                }

                14% {
                    opacity: 0.95;
                }

                16% {
                    opacity: 0.98;
                }

                17% {
                    opacity: 0.9;
                }

                19% {
                    opacity: 0.93;
                }

                20% {
                    opacity: 0.99;
                }

                24% {
                    opacity: 1;
                }

                26% {
                    opacity: 0.94;
                }

                28% {
                    opacity: 0.98;
                }

                37% {
                    opacity: 0.93;
                }

                38% {
                    opacity: 0.5;
                }

                39% {
                    opacity: 0.96;
                }

                42% {
                    opacity: 1;
                }

                44% {
                    opacity: 0.97;
                }

                46% {
                    opacity: 0.94;
                }

                56% {
                    opacity: 0.9;
                }

                58% {
                    opacity: 0.9;
                }

                60% {
                    opacity: 0.99;
                }

                68% {
                    opacity: 1;
                }

                70% {
                    opacity: 0.9;
                }

                72% {
                    opacity: 0.95;
                }

                93% {
                    opacity: 0.93;
                }

                95% {
                    opacity: 0.95;
                }

                97% {
                    opacity: 0.93;
                }

                to {
                    opacity: 1;
                }
            }

            .navbar-toggler:focus {
                text-decoration: none;
                outline: 0;
                box-shadow: none;
            }

            .neonNav {
                color: #fff;
                text-shadow:
                    0 0 7px #ff5fdc,
                    0 0 10px #2f1946,
                    0 0 21px #2f1946,
                    0 0 42px #2f1946;
            }

            .neonText {
                color: #fff;
                animation: flicker 1.5s infinite alternate;
            }

            @keyframes flicker {

                0%, 53%, 100% {

                    text-shadow:
                        0 0 7px #fff
                }

                20%, 24%, 55% {
                    text-shadow: none;
                }
            }

            .nav-link{
                font-size: larger;
                border-bottom: solid 1px rgba(165,83,246, 0.4);
                margin-bottom: 20px;
            }

            body {
                background-attachment: fixed;
                background-size: contain;
                max-width: 100%;
                background-image: url("https://mobimg.b-cdn.net/v3/fetch/53/53b126582f6b7cb5c05e73d8346d812f.jpeg")
            }

            .neonStatic{
                text-shadow: 0 0 7px #a553f6;
                color: #a553f6;
            }

            .neonH{
                text-shadow: 0 0 3px #a553f6;
                color: #a553f6;
                font-weight: lighter
            }

            .img-border{
                border: 1px solid #f60800;
                border-radius: 10%;
                background-color: transparent;
                transition: 0.2s;
                box-shadow: 3px 1px 25px 3px #f60800;
            }

            .def-text{
                color: #fff;
                font-weight: lighter;
                font-size: 20px;
            }

            .nav-small{
                align-items: center;
            }

            .form-border{
                height: 40px;
                border: 1px solid #e2e8f0;
            }

            .form{
                padding: 30px;
                border: #ffffff 3px solid;
                box-shadow: 3px 1px 25px 3px #ffe6ff;
                border-radius: 10%;
                margin-top: 50px;
            }

            .neon-btn {
                border: 1px solid;
                background-color: transparent;
                text-transform: uppercase;
                font-size: 16px;
                padding: 15px 30px;
                transition: 0.2s;
                margin-right: 100px;
                color: #8446c2;
            }

            .neon-btn:hover{
                background-color: #8446c2;
                color: #fff;
                border: 1px solid #8446c2;
                box-shadow: 10px 10px 50px 6px #8446c2;
            }

            .avatar-btn{
                border: 1px solid;
                background-color: transparent;
                text-transform: uppercase;
                font-size: 20px;
                padding: 7px 15px;
                transition: 0.4s;
                margin-right: 100px;
                color: #8446c2;
            }

            .avatar-btn:hover{
                background-color: #8446c2;
                color: #14181b;
                border: 1px solid #8446c2;
                box-shadow: 1px 1px 4px 1px #8446c2;
            }

            .chat-btn{
                border: 1px solid;
                background-color: transparent;
                align-items: center;
                justify-content: center;
                height: 25px;
                border-radius: 7%;
                text-decoration: none;
                font-size: 15px;
                padding: 7px 7px;
                transition: .5s;
                color: #007c23;
            }
            .chat-btn:hover{
                background-color: #007c23;
                color: #202529;
                box-shadow: 0 0 5px 3px #007c23;
            }

            .ultimate-btn{
                border: 1px solid;
                background-color: transparent;
                align-items: center;
                justify-content: center;
                border-radius: 7%;
                height: 25px;
                text-decoration: none;
                font-size: 15px;
                padding: 7px 7px;
                transition: .5s;
                color: #0d6ff0;
            }
            .ultimate-btn:hover{
                background-color: #0d6ff0;
                color: #202529;
                box-shadow: 0 0 5px 3px #0d6ff0;
            }

            .nitro-btn{
                border: 1px solid;
                background-color: transparent;
                align-items: center;
                justify-content: center;
                border-radius: 7%;
                height: 25px;
                text-decoration: none;
                font-size: 15px;
                padding: 7px 7px;
                transition: .5s;
                color: #b158e2;
            }
            .nitro-btn:hover{
                background-color: #b158e2;
                color: #202529;
                box-shadow: 0 0 5px 3px #b158e2;
            }

            .private-btn{
                border: 1px solid;
                background-color: transparent;
                align-items: center;
                justify-content: center;
                border-radius: 7%;
                height: 25px;
                text-decoration: none;
                font-size: 15px;
                padding: 7px 7px;
                transition: .5s;
                color: #e71e1e;
            }
            .private-btn:hover{
                background-color: #e71e1e;
                color: #202529;
                box-shadow: 0 0 5px 3px #e71e1e;
            }

            .wind-btn{
                border: 1px solid;
                background-color: transparent;
                align-items: center;
                justify-content: center;
                border-radius: 7%;
                height: 25px;
                text-decoration: none;
                font-size: 13px;
                padding: 4px 4px;
                transition: .5s;
                color: #7bccff;
            }
            .wind-btn:hover{
                background-color: #7bccff;
                color: #202529;
                box-shadow: 0 0 5px 3px #7bccff;
            }

            .cloud-btn{
                border: 1px solid;
                background-color: transparent;
                align-items: center;
                justify-content: center;
                border-radius: 7%;
                height: 25px;
                text-decoration: none;
                font-size: 13px;
                padding: 4px 4px;
                transition: .5s;
                color: #ff4f00;
            }
            .cloud-btn:hover{
                background-color: #ff4f00;
                color: #202529;
                box-shadow: 0 0 5px 3px #ff4f00;
            }

            .custom-btn{
                border: 1px solid;
                background-color: transparent;
                align-items: center;
                justify-content: center;
                border-radius: 7%;
                height: 50px;
                text-decoration: none;
                font-size: 20px;
                padding: 10px 10px;
                transition: .5s;
                color: #a4f14f;
            }
            .custom-btn:hover{
                background-color: #a4f14f;
                color: #202529;
                box-shadow: 0 0 5px 3px #a4f14f;
            }

            #nitro{
                transition: .5s;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: none;
            }
            #nitro:target {display: block;}

            #chatGPT{
                transition: .5s;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: none;
            }
            #chatGPT:target {display: block;}

            #cloudflare{
                transition: .5s;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: none;
            }
            #cloudflare:target {display: block;}

            #windscribe{
                transition: .5s;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: none;
            }
            #windscribe:target {display: block;}

            .windows-btn{
                border: 1px solid;
                background-color: transparent;
                align-items: center;
                justify-content: center;
                border-radius: 7%;
                height: 25px;
                text-decoration: none;
                font-size: 13px;
                padding: 4px 4px;
                transition: .5s;
                color: #2143ff;
            }
            #windows {
                transition: .5s;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: none;
            }
            #windows:target {display: block;}
            .windows-btn:hover{
                background-color: #2143ff;
                color: #202529;
                box-shadow: 0 0 5px 3px #2143ff;
            }
            #viewer {
                width: 100%;
                height: 100%;;
                padding: 15px;
                color: white;
                background: #0b0e1b;
            }

            .avatar-file{
                background-color: #ffffff;
                border: #ffffff 2px solid;
                box-shadow: 1px 1px 4px 1px #ffffff;
                font-size: 18px;
                border-radius: 1%;

            }

            .element-animation {
                /* Скроем элемент в начальном состоянии */
                opacity: 0;
            }

            .element-animation.element-show {
                opacity: 1;
                transition: opacity 0.4s;
            }

            .text-btn{
                border: 1px solid #14181b;
                background-color: transparent;
                font-size: 20px;
                font-weight: lighter;
                margin-left: 0px;
                padding: 0px 0px;
                transition: 0.2s;
                color: #ffffff;

            }
            #rules {
                transition: .5s;
                background: rgba(0, 0, 0, 0.5);
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: none;
            }
            #roles {
                transition: .5s;
                background: rgba(0, 0, 0, 0.5);
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: none;
            }
            #channels {
                transition: .5s;
                background: rgba(0, 0, 0, 0.5);
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: none;
            }
            #developer{
                transition: .5s;
                font-size: 15px;
                font-weight: lighter;
                display: none;
            }
            #moderator{
                transition: .5s;
                font-size: 15px;
                font-weight: lighter;
                display: none;
            }
            #eventmaker{
                transition: .5s;
                font-size: 15px;
                font-weight: lighter;
                display: none;
            }
            #ultimate{
                transition: .5s;
                font-size: 15px;
                font-weight: lighter;
                display: none;
            }
            #control{
                transition: .5s;
                font-size: 15px;
                font-weight: lighter;
                display: none;
            }
            #okno {
                transition: .5s;
                width: 600px;
                max-width: 90%;
                max-height: 100%;
                height: 650px;
                text-align: center;
                padding: 15px;
                border: 3px solid #0b0e1b;
                box-shadow: 1px 1px 4px 1px #0b0e1b;
                border-radius: 10px;
                color: white;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                margin: auto;
                background: #0b0e1b;
            }
            #info {
                transition: .5s;
                overflow-x: hidden;
            }

            #developer:target {display: block}
            #moderator:target {display: block}
            #eventmaker:target {display: block}
            #ultimate:target {display: block}
            #control:target {display: block}


            #rules:target {display: block;}
            .close {
                display: inline-block;
                border: 1px solid black;
                color: black;
                padding: 0 12px;
                margin: 10px;
                text-decoration: none;
                background: #f2f2f2;
                font-size: 14pt;
                cursor:pointer;
                border-radius: 5%;
            }
            #roles:target {display: block;}
            .close {
                display: inline-block;
                border: 1px solid black;
                color: black;
                padding: 0 12px;
                margin: 10px;
                text-decoration: none;
                background: #f2f2f2;
                font-size: 14pt;
                cursor:pointer;
                border-radius: 5%;
            }
            #channels:target {display: block;}
            .close {
                display: inline-block;
                border: 1px solid black;
                color: black;
                padding: 0 12px;
                margin: 10px;
                text-decoration: none;
                background: #f2f2f2;
                font-size: 14pt;
                cursor:pointer;
                border-radius: 5%;
            }
            .close:hover {
                background: rgba(0, 0, 0, .5);
                color: #ffe6ff;
                transition: 0.3s;
            }

            .review{
                background-color: #202529;
                color: white;
                border: 1px solid #8446c2;
                box-shadow: 0 0 2px 1px #8446c2;
            }

            .review-form{
                background-color: #202529;
                color:white;
                border: 1px solid white;
                box-shadow: 0 0 2px 1px white;
                padding: 10px 20px;
            }
            .review-form:focus{
                background-color: #202529;
                color:#8446c2;
                border: 1px solid #8446c2;
                box-shadow: 0 0 2px 1px #8446c2;
            }

            .review-btn{
                border: #8446c2 2px solid;
                box-shadow: 0 0 2px 1px #8446c2;
                background-color: #8446c2;
                padding: 10px 10px;
                font-size: 20px;
                border-radius: 7%;
            }


        </style>
    </head>
    <body>

        <nav class="navbar navbar-dark py-5 mb-5" style="background-color: #0b0e1b;">
            <div class="container-fluid py-2">
                    <a class="navbar-brand sign" style="font-size: 40px" href="/csgo">
                        <span class="flicker" style="margin-right: 5px">CS:GO RU</span>
                    </a>
                <button class="navbar-toggler" style="border: none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <i class="fa-solid fa-list fa-lg ms-3"></i>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header" style="background-color: #0b0e1b">
                        <h2 class="offcanvas-title neonNav" id="offcanvasDarkNavbarLabel">Меню сервера</h2>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body" style="background-color: #0b0e1b">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item mt-3">
                                @auth()
                                    <a class="nav-link active" href="/profile">
                                        <i class="fa-solid fa-user fa-2xs me-2"></i>
                                        Профиль
                                    </a>
                                @else
                                    <a class="nav-link active" href="/register">
                                        <i class="fa-solid fa-arrow-right-to-bracket fa-xs me-2"></i>
                                        Авторизоваться
                                    </a>
                                @endauth
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/serverMap">
                                    Навигация по серверу
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/staff">
                                    Заявки в стафф
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active neonText" href="/news">
                                    Розыгрыши и обновления
                                </a>
                            </li>
                            @auth
                                <form id="logout" action="/logout" method="POST">
                                    @csrf
                                </form>
                                <li class="nav-item">
                                    <a class="nav-link active neonNav" onclick="logout.submit()" style="font-size: medium" href="#">
                                        <i class="fa-solid fa-arrow-right-from-bracket fa-2xs me-2"></i>
                                        Выйти из аккаунта
                                    </a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <!-- Main Content-->
        <div class="container mt-5">@yield('content')</div>


        <!-- Footer -->
        <footer style="margin-top: 200px; border-top: 1px solid dimgrey; font-family: 'Raleway', sans-serif">
            <div class="container-fluid py-5" style=" color: #ac71f5; background-color: #0b0e1b">
                <div class="small text-center text-muted">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="neonStatic">Ссылки</h4>
                            <h6 class="mt-3">
                                <a href="https://discord.gg/csgoru" style="text-decoration: none; color: dimgrey">Дискорд сервера</a>
                            </h6>
                            <h6 class="mt-1">
                                <a href="https://vk.com/csgo__ru" style="text-decoration: none; color: dimgrey">Группы в вк</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <h4 class="neonStatic">Контакты с разработчиками</h4>
                            <h6 class="mt-3">
                                <a href="https://t.me/gyzglsfuck4ujchpxphx" style="text-decoration: none; color: dimgrey">Telegram администратора</a>
                            </h6>
                            <h6 class="mt-1">
                                <a style="text-decoration: none; color: dimgrey">Discord админа: кирил123#7728</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            function onEntry(entry) {
            entry.forEach(change => {
            if (change.isIntersecting) {
            change.target.classList.add('element-show');
            }
            });
            }
            let options = { threshold: [0.5] };
            let observer = new IntersectionObserver(onEntry, options);
            let elements = document.querySelectorAll('.element-animation');
            for (let elm of elements) {
            observer.observe(elm);
            }

        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
