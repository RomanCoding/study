<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academic Start</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="shortcut icon" href="/assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.min.css"/>
    <link href="//fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
          rel="stylesheet">
    <script src="/assets/js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"></link>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <style>
        div#ip-container {
            max-height: 150vh;
        }
        div.oxford {
            background-image: url("/assets/img/background_sketch_Oxford.png");
            background-size: cover;
            background-position: right;
            padding-top: 10px;
            height: 130vh;
        }
        .h4 {
            color: #263376;
            font-size: 18px;
            padding-top: 2vh;
            padding-bottom: 1vh;
            font-weight: bold;
        }
        .screen01__text02 {
            text-align: center;
        }
        a.step.active {
            color: #e40d1d;
            border-color: red
        }
        a.step {
            background-repeat: no-repeat;
            background-position: 50% 20%;
        }
        a.step.step1c {
            background-image: url("/assets/img/step1c.png");
        }
        a.step.step2 {
            background-image: url("/assets/img/step2.png");
        }
        a.step.step2c {
            background-image: url("/assets/img/step2c.png");
        }
        a.step.step3 {
            background-image: url("/assets/img/step3.png");
        }
        div.step {
            width: 2vw;
            background-image: url("/assets/img/arrow.png");
            background-position: center;
            background-repeat: no-repeat;
        }
        .header-menu > a.step {
            background-repeat: no-repeat;
            background-position: 50% 20%;
            pointer-events: none;
        }
        @media screen and (min-width: 480px) {
            div#ip-container {
                max-height: 100vh;
            }
            div.oxford {
                height: 93vh;
            }
        }
    </style>
</head>
<body>
<div id="ip-container">
    <!-- initial header -->
    <header class="ip-header">
        <h1 class="ip-logo">
            <img src="/assets/img/study_academy_goriz_color-01.svg"/>
        </h1>
        <div class="ip-loader">
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg"
                      d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle"
                      d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg>
        </div>
    </header>
    <!-- main content -->
    <div class="ip-main">

        <div class="top-line wow1 fadeInUp" data-wow-delay=".4s">
            <div class="container">
                <div class="top-line__i">
                    <div class="top-line__phones">
                        <div class="top-line__phone">
                            <img class="top-line__phone-icon" src="/assets/img/top-line__phone.png"/>
                            <a href="tel:0445000320" class="top-line__phone-number">(044) 500-03-20</a>
                        </div>
                        <div class="top-line__phone">
                            <img class="top-line__phone-icon" src="/assets/img/top-line__kievstar.png"/>
                            <a href="tel:0970000320" class="top-line__phone-number">(097) 000-03-20 </a>
                        </div>
                        <div class="top-line__phone">
                            <img class="top-line__phone-icon" src="/assets/img/top-line__lifecell.png"/>
                            <a href="tel:0930000320" class="top-line__phone-number">(093) 000-03-20 </a>
                        </div>
                        <div class="top-line__phone">
                            <img class="top-line__phone-icon" src="/assets/img/top-line__vodafone.png"/>
                            <a href="tel:0990000320" class="top-line__phone-number">(099) 000-03-20</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.top-line -->

        <div class="header wow1 fadeInUp" data-wow-delay=".35s" id="header">
            <div class="container">
                <div class="header__i">
                    <a href="#"><img class="header__logo" src="/assets/img/study_academy_goriz_color-01.svg"/></a>
                    <div class="header-menu">
                        <a class="scroll_link step step1c" href="#">Введите ваши данные</a>
                        <div class="step">&nbsp;</div>
                        <a class="scroll_link step step2c" href="#">Пройдите тестирование</a>
                        <div class="step">&nbsp;</div>
                        <a class="scroll_link active step step3" href="#">Переходите к обучению</a>
                    </div>
                    <div class="header__hamburg" onclick="openMenu()"><img src="/assets/img/menu.svg"/></div>
                </div>
            </div>
        </div> <!-- /.header -->

        <div class="screen01 oxford" id="screen01">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6">
                        <div class="screen01__text02 wow1 fadeInUp" data-wow-delay=".1s">
                            Уровень вашего английского:
                            <p class="h4"><?= $level ?></p>
                            <br/>
                            Вы можете приступить к обучению на программе
                            <br>
                            <a href="http://onlinelearn.study.ua/user/organization/1/self_registration/22081-MaJsC-2HyU2-urdHy"
                               class="screen01__btn wow1 fadeInUp" data-wow-delay=".05s">Начать обучение</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.screen01 -->

        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="footer-top__copyright wow1 fadeInUp">
                        © Все права защищены 2018.<br/>
                        Academic Start STUDY.UA
                    </div>
                </div>
            </div>
        </div> <!-- /.footer -->
    </div>
</div>

<div class="menu-modal" id="menu-modal">
    <div class="menu-modal__bg" onclick="closeMenu()"></div>
    <div class="menu-modal__i">
        <a class="scroll_link" href="#">Введите ваши данные</a>
        <a class="scroll_link" href="#">Пройдите тестирование</a>
        <a class="scroll_link" href="#">Переходите к обучению</a>
        <div class="menu-modal__langs">
            <a href="/ua">УКР</a>
            <a href="/" class="active">РУ</a>
        </div>
    </div>
</div>

<script src="//maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>


<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--<script src="//code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>-->
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"
        type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" type="text/javascript"></script>
<!--<script src="/assets/js/parallax.min.js"></script>-->

<script src="/assets/js/classie.js"></script>
<script src="/assets/js/pathLoader.js"></script>
<script src="/assets/js/main.js"></script>
<script>

    $(document).ready(function () {
        $("#header").sticky({
            topSpacing: 0,
            zIndex: 5
        });

        var regFormCall = 0;
        var smsFormCall = 0;
        var questionFormCall = 0;
        var sitekey = '6LfPJT0UAAAAANeFyWajFZOzxOSyX07hgrX3M4TW';

        $.validate({
            lang: 'ru'
        });

        $('#regform').on('submit', function (e) {
            e.preventDefault();
            regFormCall++;
            if (regFormCall == 1) {
                widgetRecaptcha = grecaptcha.render('regform-recaptcha', {
                    'sitekey': sitekey,
                    'callback': regFormSubmit,
                    'size': "invisible"
                });
            }
            grecaptcha.reset(widgetRecaptcha);
            grecaptcha.execute(widgetRecaptcha);
        });


        $('#smsform').on('submit', function (e) {
            e.preventDefault();
            smsFormCall++;
            if (smsFormCall == 1) {
                widgetRecaptcha = grecaptcha.render('smsform-recaptcha', {
                    'sitekey': sitekey,
                    'callback': smsFormSubmit,
                    'size': "invisible"
                });
            }
            grecaptcha.reset(widgetRecaptcha);
            grecaptcha.execute(widgetRecaptcha);
        });


        $(function () {
            var icons = {
                header: "screen04__arrow-down",
                activeHeader: "screen04__arrow-up"
            };

            $("#accordion").accordion({
                heightStyle: "fill",
                icons: icons
            });

            var icons = {
                header: "screen10__arrow-down",
                activeHeader: "screen10__arrow-up"
            };

            $("#accordion2").accordion({
                heightStyle: "fill",
                icons: icons
            });
        });

        $(function () {
            $("#tabs").tabs();
        });

        $('.phone-input').mask('+38 (000) 000-0000', {placeholder: "+38 (___) ___-____"});

        $(".scroll_link").click(function (event) {
            event.preventDefault();
            var id = $(this).attr("href");
            var top = $(id).offset().top;
            closeMenu();
            $("body, html").animate({scrollTop: top}, 500);
        });

        $('.owl-carousel-1').owlCarousel({
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1400: {
                    items: 3
                }
            },
            margin: 30,
            nav: true,
            navText: ["<img src='/assets/img/prev.png'>", "<img src='/assets/img/next.png'>"]
        });
        $('.owl-carousel-2').owlCarousel({
            margin: 30,
            nav: true,
            navText: ["", ""],
            items: 1
        });
    });

    function regModalOpen() {
        $('#register-modal').addClass('register-modal_show');
        return false;
    }
    function regModalClose() {
        $('#register-modal').removeClass('register-modal_show');
        return false;
    }

    function openMenu() {
        $('#menu-modal').addClass('menu-modal_show');
        return false;
    }

    function closeMenu() {
        $('#menu-modal').removeClass('menu-modal_show');
        return false;
    }

    var locations = [
        ['м. Дружбы Народов, ЖК Новопечерские Липки,\n' + 'ул. Драгомирова 18', 50.410154, 30.544949],
        ['м. Вокзальная, ул.В.Липковского \n' + '(Урицкого) 16а', 50.435938, 30.487910],
        ['м. Выставочный Центр, ЖК Лико-Град,\n' + 'ул. Михаила Ломоносова 46/1', 50.386495, 30.467328],
        ['м. Осокорки, ЖК Статус Град,\n' + 'ул. Завальная 10-Б', 50.392460, 30.615489],
        ['м. Минская, пр-т Героев Сталинграда, 20', 50.510685, 30.509618],
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: new google.maps.LatLng(50.442774, 30.527483),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: '/assets/img/marker.png'
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
</script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
</body>
</html>