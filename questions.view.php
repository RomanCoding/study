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
        div.oxford {
            padding-top: 20vh;
            height: auto;
            background: white;
            text-align: start;
            padding-left: 5vw;
            padding-right: 0;
        }

        ol.questions input:not([type='radio']) {
            width: 20vw;
            border-bottom: 1px solid black;
        }

        @media screen and (min-width: 480px) {
            ol.questions input:not([type='radio']) {
                width: 10vw;
            }

            div.oxford {
                padding-left: 0;
            }
        }

        audio {
            width: 5vw;
        }

        #countdown {
            height: 20vh;
            width: 20vw;
            position: fixed;
            bottom: 0;
            right: 0;
            background: red;
            color: white;
            display: none;
            line-height: 20vh;
            font-size: 10vh;
            text-align: center;
        }

        a.step.active {
            color: #e40d1d;
            border-color: red
        }

        .header-menu > a.step {
            background-repeat: no-repeat;
            background-position: 50% 20%;
            pointer-events: none;
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
                        <a class="scroll_link active step step2" href="#">Пройдите тестирование</a>
                        <div class="step">&nbsp;</div>
                        <a class="scroll_link step step3" href="#">Переходите к обучению</a>
                    </div>
                    <div class="header__hamburg" onclick="openMenu()"><img src="/assets/img/menu.svg"/></div>
                </div>
            </div>
        </div> <!-- /.header -->
        <p id="demo">
            Times remaining:
        </p>
        <div class="screen01 oxford" id="screen01">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6">
                        <form id="qForm">
                            <h4>Fill in the gaps with one word.</h4>
                            <h4>Доповніть речення одним словом.</h4>
                            <ol class="questions">
                                <li>What nationality <input type="text" name="q1" id="q1"> you?</li>
                                <li>How much money <input type="text" name="q2" id="q2"> he got?</li>
                                <li><input type="text" name="q3" id="q3"> there any people in the room now?</li>
                                <li>Where do you come <input type="text" name="q4" id="q4">? &mdash; Canada.</li>
                                <li>Sally is a good swimmer. She <input type="text" name="q5" id="q5"> swim very well.
                                </li>
                                <li><input type="text" name="q6" id="q6"> is your favourite subject at school?</li>
                                <li>My friend is <input type="text" name="q7" id="q7"> than me. I am 20 and he is 22
                                    years
                                    old.
                                </li>
                                <li>Are you going <input type="text" name="q8" id="q8"> study in the USA next year?</li>
                                <li>What <input type="text" name="q9" id="q9"> you do last night?</li>
                                <li>Maria <input type="text" name="q10" id="q10"> TV every Saturday.</li>
                                <li>What <input type="text" name="q11" id="q11"> Maria doing at the moment?</li>
                                <li>Have you <input type="text" name="q12" id="q12"> been to the USA? &mdash; No, never.
                                </li>
                                <li>What does he <input type="text" name="q13" id="q13"> like? &mdash; He is tall and
                                    handsome.
                                </li>
                                <li><input type="text" name="q14" id="q14"> they visit you two or three months ago?</li>
                                <li>Do you remember the woman <input type="text" name="q15" id="q15"> came yesterday?
                                </li>
                                <li>Our holiday was so bad! In fact it was the <input type="text" name="q16" id="q16">
                                    holiday in my life.
                                </li>
                                <li><input type="text" name="q17" id="q17"> did you become a doctor? &mdash; I wanted to
                                    help people.
                                </li>
                                <li>I've got too <input type="text" name="q18" id="q18"> work. Can you help me?</li>
                                <li>Listen to my advice: You <input type="text" name="q19" id="q19"> work hard if you
                                    want
                                    to study at university.
                                </li>
                                <li>She <input type="text" name="q20" id="q20"> won several prizes for singing.</li>
                            </ol>
                            <h4>Choose the correct answer.</h4>
                            <h4>Оберіть вірну відповідь.</h4>
                            <ol class="questions" start="21">
                                <li>
                                    What ___ if you ___ me?
                                    <br>
                                    <input type="radio" name="q21" value="a"> will you do, are
                                    <br>
                                    <input type="radio" name="q21" value="b"> would you do, was
                                    <br>
                                    <input type="radio" name="q21" value="c"> would you do, were
                                    <br>
                                    <input type="radio" name="q21" value="d"> will you do, were
                                </li>
                                <li>
                                    Pete is very ___. He often buys presents and pays for our meals.
                                    <br>
                                    <input type="radio" name="q22" value="a"> confident
                                    <br>
                                    <input type="radio" name="q22" value="b"> generous
                                    <br>
                                    <input type="radio" name="q22" value="c"> reliable
                                    <br>
                                    <input type="radio" name="q22" value="d"> determined
                                </li>
                                <li>
                                    I ___ do gymnastics when i was younger.
                                    <br>
                                    <input type="radio" name="q23" value="a"> liked
                                    <br>
                                    <input type="radio" name="q23" value="b"> will
                                    <br>
                                    <input type="radio" name="q23" value="c"> used to
                                    <br>
                                    <input type="radio" name="q23" value="d"> did
                                </li>
                                <li>
                                    Can i give you ___ of advice?
                                    <br>
                                    <input type="radio" name="q24" value="a"> an
                                    <br>
                                    <input type="radio" name="q24" value="b"> piece of
                                    <br>
                                    <input type="radio" name="q24" value="c"> some
                                    <br>
                                    <input type="radio" name="q24" value="d"> one
                                </li>
                                <li>
                                    If the weather ___ fine, we ___ go out.
                                    <br>
                                    <input type="radio" name="q25" value="a"> will be, can
                                    <br>
                                    <input type="radio" name="q25" value="b"> is, would
                                    <br>
                                    <input type="radio" name="q25" value="c"> will be, will
                                    <br>
                                    <input type="radio" name="q25" value="d"> is, will
                                </li>
                                <li>
                                    I hope we ___ in touch when you start your new job.
                                    <br>
                                    <input type="radio" name="q26" value="a"> keep
                                    <br>
                                    <input type="radio" name="q26" value="b"> lose
                                    <br>
                                    <input type="radio" name="q26" value="c"> fall
                                    <br>
                                    <input type="radio" name="q26" value="d"> meet
                                </li>
                                <li>
                                    Lucy is ___ in Spanish and Italian and she speaks excellent English too.
                                    <br>
                                    <input type="radio" name="q27" value="a"> good
                                    <br>
                                    <input type="radio" name="q27" value="b"> fluent
                                    <br>
                                    <input type="radio" name="q27" value="c"> fast
                                    <br>
                                    <input type="radio" name="q27" value="d"> bad
                                </li>
                                <li>
                                    London is the city ___ I grew up.
                                    <br>
                                    <input type="radio" name="q28" value="a"> which
                                    <br>
                                    <input type="radio" name="q28" value="b"> that
                                    <br>
                                    <input type="radio" name="q28" value="c"> when
                                    <br>
                                    <input type="radio" name="q28" value="d"> where
                                </li>
                                <li>
                                    How many copies of your new novel ___ so far this year?
                                    <br>
                                    <input type="radio" name="q29" value="a"> are sold
                                    <br>
                                    <input type="radio" name="q29" value="b"> were sold
                                    <br>
                                    <input type="radio" name="q29" value="c"> have been sold
                                    <br>
                                    <input type="radio" name="q29" value="d"> had been sold
                                </li>
                                <li>
                                    I think it ___ soon. Just look at those black clouds!
                                    <br>
                                    <input type="radio" name="q30" value="a"> will rain
                                    <br>
                                    <input type="radio" name="q30" value="b"> is raining
                                    <br>
                                    <input type="radio" name="q30" value="c"> will be raining
                                    <br>
                                    <input type="radio" name="q30" value="d"> is going to rain
                                </li>
                                <li>
                                    You ___ pay for your tickets now. It is not necessary.
                                    <br>
                                    <input type="radio" name="q31" value="a"> should not
                                    <br>
                                    <input type="radio" name="q31" value="b"> must not
                                    <br>
                                    <input type="radio" name="q31" value="c"> do not have to
                                    <br>
                                    <input type="radio" name="q31" value="d"> can't
                                </li>
                                <li>
                                    We'll soon be very rich ___ something unexpectedly goes wrong.
                                    <br>
                                    <input type="radio" name="q32" value="a"> when
                                    <br>
                                    <input type="radio" name="q32" value="b"> unless
                                    <br>
                                    <input type="radio" name="q32" value="c"> if
                                    <br>
                                    <input type="radio" name="q32" value="d"> as soon as
                                </li>
                                <li>
                                    What ___ recently? You look exhausted.
                                    <br>
                                    <input type="radio" name="q33" value="a"> were you doing
                                    <br>
                                    <input type="radio" name="q33" value="b"> have you done
                                    <br>
                                    <input type="radio" name="q33" value="c"> have you been doing
                                    <br>
                                    <input type="radio" name="q33" value="d"> did you do
                                </li>
                                <li>
                                    I was late so by the time I ___, my friends ___ dinner.
                                    <br>
                                    <input type="radio" name="q34" value="a"> arrived, finished
                                    <br>
                                    <input type="radio" name="q34" value="b"> have arrived, have finished
                                    <br>
                                    <input type="radio" name="q34" value="c"> arrived, had finished
                                    <br>
                                    <input type="radio" name="q34" value="d"> had arrived, finished
                                </li>
                                <li>
                                    Learning irregular verbs is so easy. In fact, it’s a piece of ___.
                                    <br>
                                    <input type="radio" name="q35" value="a"> bread
                                    <br>
                                    <input type="radio" name="q35" value="b"> pie
                                    <br>
                                    <input type="radio" name="q35" value="c"> cake
                                    <br>
                                    <input type="radio" name="q35" value="d"> apple
                                </li>
                                <li>
                                    "When does the meeting start?" – He wants to know ___.
                                    <br>
                                    <input type="radio" name="q36" value="a"> when will the meeting start.
                                    <br>
                                    <input type="radio" name="q36" value="b"> when the meeting starts.
                                    <br>
                                    <input type="radio" name="q36" value="c"> when the meeting will start.
                                    <br>
                                    <input type="radio" name="q36" value="d"> when does the meeting start.
                                </li>
                                <li>
                                    I wish we ___ all our money on that new car. Now there’s nothing left.
                                    <br>
                                    <input type="radio" name="q37" value="a"> would spend
                                    <br>
                                    <input type="radio" name="q37" value="b"> spent
                                    <br>
                                    <input type="radio" name="q37" value="c"> hadn't spent
                                    <br>
                                    <input type="radio" name="q37" value="d"> haven't spent
                                </li>
                                <li>
                                    How can you ___ such bad behaviour from your students?
                                    <br>
                                    <input type="radio" name="q38" value="a"> get on with
                                    <br>
                                    <input type="radio" name="q38" value="b"> put on with
                                    <br>
                                    <input type="radio" name="q38" value="c"> come up with
                                    <br>
                                    <input type="radio" name="q38" value="d"> look up to
                                </li>
                                <li>
                                    Jack has ___ with his wife again.
                                    <br>
                                    <input type="radio" name="q39" value="a"> taken after
                                    <br>
                                    <input type="radio" name="q39" value="b"> fallen out
                                    <br>
                                    <input type="radio" name="q39" value="c"> come up
                                    <br>
                                    <input type="radio" name="q39" value="d"> come out
                                </li>
                                <li>
                                    I ___ on the way to work yesterday.
                                    <br>
                                    <input type="radio" name="q40" value="a"> stole my bag
                                    <br>
                                    <input type="radio" name="q40" value="b"> was stolen my bad
                                    <br>
                                    <input type="radio" name="q40" value="c"> had my bag stolen
                                    <br>
                                    <input type="radio" name="q40" value="d"> have my bag stolen
                                </li>
                            </ol>
                            <audio id="listening" src="/sound.mp3" controls controlsList="nodownload"></audio>
                            <h4>Complete the notes below</h4>
                            <h4>Write no more than two words and/or a number for each answer</h4>
                            <ol start="41" class="questions">
                                <li>Express train leaves at <input type="text" name="q41"></li>
                                <li>Nearest station is <input type="text" name="q42"></li>
                                <li>Number 706 bus goes to <input type="text" name="q43"></li>
                                <li>Number <input type="text" name="q44"> bus goes to station</li>
                                <li>Earlier bus leaves at <input type="text" name="q45"></li>
                            </ol>
                            <h4>Read the text and answer the questions</h4>
                            <div>
                                <p class="align-content-center">Making time for science</p>

                                <p>
                                    Chronobiology might sound a little futuristic – like something from a science
                                    fiction novel, perhaps – but it’s actually a field of study that concerns one of the
                                    oldest
                                    processes life on this planet has ever known: short-term rhythms of time and their
                                    effect on
                                    flora and fauna.
                                </p>
                                <p>
                                    This can take many forms. Marine life, for example, is influenced by tidal patterns.
                                    Animals tend to be active or inactive depending on the position of the sun or moon.
                                    Numerous creatures, humans included, are largely diurnal – that is, they like to
                                    come
                                    out
                                    during the hours of sunlight. Nocturnal animals, such as bats and possums, prefer to
                                    forage
                                    by night. A third group are known as crepuscular: they thrive in the lowlight of
                                    dawn
                                    and
                                    dusk and remain inactive at other hours.
                                </p>
                                <p>
                                    When it comes to humans, chronobiologists are interested in what is known as the
                                    circadian rhythm. This is the complete cycle our bodies are naturally geared to
                                    undergo
                                    within the passage of a twenty-four hour day. Aside from sleeping at night and
                                    waking
                                    during the day, each cycle involves many other factors such as changes in blood
                                    pressure
                                    and
                                    body temperature. Not everyone has an identical circadian rhythm. ‘Night people’,
                                    for
                                    example, often describe how they find it very hard to operate during the morning,
                                    but
                                    become alert and focused by evening. This is a benign variation within circadian
                                    rhythms
                                    known as a chronotype.
                                </p>
                                <br>
                                <br>
                                Do the following statements agree with the information given in text “Making time for
                                science”?
                                For questions 46-50 choose an option:
                                TRUE if the statement agrees with the information
                                FALSE if the statement contradicts the information
                                NOT GIVEN if there is no information on this
                                <ol start="46">
                                    <li>Chronobiology is the study of how living things have evolved over time.
                                        <select name="q46" id="q46">
                                            <option value="a">TRUE</option>
                                            <option value="b">FALSE</option>
                                            <option value="c">NOT GIVEN</option>
                                        </select>
                                    </li>
                                    <li>The rise and fall of sea levels affects how sea creatures behave.
                                        <select name="q47" id="q47">
                                            <option value="a">TRUE</option>
                                            <option value="b">FALSE</option>
                                            <option value="c">NOT GIVEN</option>
                                        </select></li>
                                    <li>Most animals are active during the daytime.
                                        <select name="q48" id="q48">
                                            <option value="a">TRUE</option>
                                            <option value="b">FALSE</option>
                                            <option value="c">NOT GIVEN</option>
                                        </select></li>
                                    <li>Circadian rhythms identify how we do different things on different days.
                                        <select name="q49" id="q49">
                                            <option value="a">TRUE</option>
                                            <option value="b">FALSE</option>
                                            <option value="c">NOT GIVEN</option>
                                        </select></li>
                                    <li>A ‘night person’ can still have a healthy circadian rhythm.
                                        <select name="q50" id="q50">
                                            <option value="a">TRUE</option>
                                            <option value="b">FALSE</option>
                                            <option value="c">NOT GIVEN</option>
                                        </select></li>
                                </ol>
                        </form>
                        <button type="button" class="screen01__btn" onclick="qFormSubmit()">Узнать результат</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="countdown">

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
    $('#listening').on('ended', function () {
        $('#listening').hide();
    });
    function getHash() {
        var queryString = window.location.search;
        var hash = queryString.split('hash=');
        if (hash[1]) {
            hash = hash[1];
        }
        var obj = hash.split('&');
        obj = obj[0];
        return obj;
    }
    function qFormSubmit() {
        var data = $('#qForm').serialize();
        data += ('&hash=' + getHash());
        $.ajax({
            url: '/check.php',
            type: "POST",
            data: data,
            dataType: 'json',
            success: function (res) {
                if (res.success) {
                    window.location.href = '/questions.php?hash=' + getHash();
                } else {
                    alert(res.error);
                }
            }
        });
    }
    $(document).ready(function () {
        var data = 'hash=' + getHash();
        $.ajax({
            url: '/start.php',
            type: "POST",
            data: data,
            dataType: 'json',
            success: function (res) {
                if (res.success) {
                    showTimer(res.seconds);
                }
            }
        });
    });

    function showTimer(seconds) {
        $('#countdown').show();
        setInterval(function () {
            seconds--;
            var minutes = Math.floor(seconds/60);
            var sec = seconds % 60;
            if (sec < 10) {
                var text = minutes + ':0' + sec;
            } else {
                var text = minutes + ':' + sec;
            }
            $('#countdown').text(text);
            if (seconds == 0) {
                qFormSubmit();
            }
        }, 1000);
    }
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

    });


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