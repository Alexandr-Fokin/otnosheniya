<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <?php wp_head(); ?>
</head>

<body>
    <main class="slideout-panel" id="panel">
        <header class="header">
            <div class="header__top">
                <div class="header__inner">
                    <div class="header__top-upper">
                        <div class="header__upper-left">
                            <div class="header__upper-left-descr default-descr">Формат: Курс в записи</div>
                        </div>
                        <div class="add" style="display: none;">
                            <div class="add__title default-descr">Скидка в 90% актуальна 24 ч.</div>
                            <div id="timer">
                                <span id="hours"></span> :
                                <span id="minutes"></span> :
                                <span id="seconds"></span>
                            </div>
                            <!-- <div class="add__close"></div> -->
                        </div>
                        <div class="header__upper-right">
                            <div class="header__upper-right-descr default-descr">Старт: сразу после оплаты</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>