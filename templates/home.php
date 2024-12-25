<?php
/*
Template Name: Главная

*/

// … остальной код шаблона
?>

<?php get_header(''); ?>


<section class="header__section">
    <div class="header__section-top" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
        <div class="header__section-top-bg" >
            <div class="header__section-img-cover">
                <img class="header__section-bg-img img-left" src="<?php echo the_field('header-photo-left') ?>" alt="">
            </div>
            <div class="header__section-img-cover">
                <img class="header__section-bg-img img-center" src="<?php echo the_field('header-photo-center') ?>" alt="">
            </div>
            <div class="header__section-img-cover">
                <img class="header__section-bg-img img-right" src="<?php echo the_field('header-photo-right') ?>" alt="">
            </div>
        </div>
        <div class="container">
            <h1 class="header__section-main-title default-title left-title">Отношения</h1>
        </div>
    </div>
    <div class="header__section-bottom" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
        <div class="container">
            <div class="header__section-descr default-descr">Возроди любовь и гармонию в отношениях за 4 урока! Узнай, каквосстановить прежнюю связь и построить крепкие отношения,используя цифры, которые влияют на тебя и твоего партнера.Получи ключи к счастливым отношениям</div>
            <a href="<?php echo get_permalink(12); ?>" class="header__section-btn default-btn">узнать больше</a>
        </div>
    </div>
</section>


<section class="for-you__section">
    <div class="container">
        <div class="for-you__inner">
            <h2 class="for-you__title default-title center-title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="000">Это для тебя, если:</h2>
            <div class="for-you__items" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <div class="for-you__item item-1">
                    <div class="for-you__item-top">
                        <div class="for-you__item-top-num default-title left-title">1</div>
                        <div class="for-you__item-top-subtitle default-subtitle-small left-subtitle">Твои отношения уже не те, что были раньше</div>
                    </div>
                    <div class="for-you__item-bottom">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/for-you-img-1.svg" alt="" class="for-you__item-bottom-img">
                    </div>
                </div>

                <div class="for-you__item item-2">
                    <div class="for-you__item-top">
                        <div class="for-you__item-top-num default-title left-title">2</div>
                        <div class="for-you__item-top-subtitle default-subtitle-small left-subtitle">Тебе не хватает понимание со стороны партнера</div>
                    </div>
                    <div class="for-you__item-bottom">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/for-you-img-2.svg" alt="" class="for-you__item-bottom-img">
                    </div>
                </div>

                <div class="for-you__item item-3">
                    <div class="for-you__item-top">
                        <div class="for-you__item-top-num default-title left-title">3</div>
                        <div class="for-you__item-top-subtitle default-subtitle-small left-subtitle">Вы часто соритесь даже по пустякам и мелочам</div>
                    </div>
                    <div class="for-you__item-bottom">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/for-you-img-3.svg" alt="" class="for-you__item-bottom-img">
                    </div>
                </div>

                <div class="for-you__item item-4">
                    <div class="for-you__item-top">
                        <div class="for-you__item-top-num default-title left-title">4</div>
                        <div class="for-you__item-top-subtitle default-subtitle-small left-subtitle">Тут будет что-то еще в 3 строки, чтобы красивее</div>
                    </div>
                    <div class="for-you__item-bottom">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/for-you-img-4.svg" alt="" class="for-you__item-bottom-img">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="result__section">
    <div class="container">
        <div class="result__inner">
            <h2 class="result__title default-title left-title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="00">Твой результат за 4 урока</h2>
            <div class="result__items" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <div class="result__item item-1 item-text default-subtitle-small left-subtitle">Научишься понимать своего партнера</div>
                <img src="<?php echo the_field('result-1-1') ?>" alt="" class="result__item item-2 item-img">
                <img src="<?php echo the_field('result-1-2') ?>" alt="" class="result__item item-3 item-img">
                <div class="result__item item-4 item-text default-subtitle-small left-subtitle">Наладишь близкий контакт с партнером и окружающими</div>
                <img src="<?php echo the_field('result-2-1') ?>" alt="" class="result__item item-5 item-img">
                <img src="<?php echo the_field('result-2-2') ?>" alt="" class="result__item item-6 item-img">
                <div class="result__item item-7 item-text default-subtitle-small left-subtitle">Узнаешь себя лучше и какие цифры на тебя влияют</div>
                <img src="<?php echo the_field('result-3-1') ?>" alt="" class="result__item item-8 item-img">
                <img src="<?php echo the_field('result-3-2') ?>" alt="" class="result__item item-9 item-img">
                <div class="result__item item-10 item-text default-subtitle-small left-subtitle">Получишь разбор по твоей дате рождения</div>
                <img src="<?php echo the_field('result-4-1') ?>" alt="" class="result__item item-11 item-img">
                <img src="<?php echo the_field('result-4-2') ?>" alt="" class="result__item item-12 item-img">
            </div>
        </div>
    </div>
</section>

<section class="tariff__section">
    <div class="container">
        <div class="tariff__inner">
            <h2 class="tariff__title default-title center-title">Тарифы</h2>
            <div class="tariff__block">
                <div class="tariff__block-sale">
                    <div class="add" style="display: none;">
                        <div class="add__title default-descr">Скидка в 90% актуальна 24 ч.</div>
                        <div id="timer">
                            <span id="hours1"></span> :
                            <span id="minutes1"></span> :
                            <span id="seconds1"></span>
                        </div>
                        <!-- <div class="add__close"></div> -->
                    </div>
                </div>
                <div class="tariff__block-bottom">
                    <div class="tariff__left">
                        <h3 class="tariff__left-subtitle default-subtitle-big center-subtitle">Единый тариф</h3>
                        <p class="tariff__left-descr default-subtitle-small left-subtitle">Урок 1. Программа партнера по дате рождения</p>
                        <p class="tariff__left-descr default-subtitle-small left-subtitle">Урок 2. Причины претензий, обид и не пониманий</p>
                        <p class="tariff__left-descr default-subtitle-small left-subtitle">Урок 3. Почему мы перестаем понимать друг друга?</p>
                        <p class="tariff__left-descr default-subtitle-small left-subtitle">Урок 4. Какими должны быть здоровые отношения?</p>
                    </div>
                    <div class="tariff_right">
                        <img src="<?php echo the_field('tariff-img') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="tariff__bonus-subtitle default-subtitle-big center-subtitle">БОНУСЫ</div>
            <div class="tariff__bonus-items">
                <div class="tariff__bonus-item default-subtitle-small">Подарок 1 - Формула 13% успешных людей</div>
                <div class="tariff__bonus-item default-subtitle-small">Подарок 2 - Личный календарь благополучных дней</div>
            </div>
        </div>
    </div>
</section>


<section class="who__section">
    <div class="container">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/who-bg.svg" class="who-bg-img" alt="">
        <div class="who__inner">
            <h2 class="who__title default-title center-title">Кто мы?</h2>
            <div class="who__items">
                <div class="who__item-left">
                    <h3 class="who__item-subtitle default-subtitle-big left-subtitle">Василий & Инна<br><span>КОЖЕМЯКИНЫ</span></h3>
                    <ul class="who__item-list">
                        <li>Дипломированные мастера науки Сюцай</li>
                        <li>Бизнес коучи MINI-MBA</li>
                        <li>Владельцы собственных бизнесов</li>
                        <li>200+ Мастер классов и выступлений</li>
                        <li>Более 1200+ консультаций</li>
                        <li>Более 17 млн человек в cоц. cетях</li>
                        <li>Более 100 предпринимателей выросли под нашим руководством</li>
                    </ul>
                </div>
                <div class="who__item-right">
                    <img class="who__item-img" src="<?php bloginfo('template_url'); ?>/assets/img/who-img.webp" alt="">
                </div>
            </div>

        </div>
    </div>

</section>


<section class="why__section">
    <div class="container">
        <div class="why__inner">
            <h2 class="why__title default-title left-title">Зачем мы создали этот продукт?</h2>
            <div class="why__descr default-subtitle-small left-subtitle">Lorem ipsum <span>dolor sit amet</span>, consectetur adipiscing elit. Pellentesque in sollicitudin erat, vitae pellentesque nulla. Nullam luctus ullamcorper cursus. <span>Phasellus venenatis</span> ultricies est, in fermentum nisi. Nullam iaculis rutrum dolor, id feugiat justo elementum nec. Morbi semper cursus mollis. Nunc mollis nulla est, quis sollicitudin lorem ultrices non. Suspendisse vel turpis dapibus tortor maximus placerat condimentum in sem. <span>Sed eleifend, sapien vel</span> efficitur aliquet, lacus ex auctor dolor, sed interdum lorem dolor pellentesque nisl. </div>
        </div>
    </div>
</section>

<section class="reviews__section">
    <div class="container">
        <div class="reviews__inner">
            <div class="reviews__top">
                <h2 class="reviews__title default-title left-title">Наши отзывы</h2>
                <div class="reviews__btns">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="reviews__bottom">
                <div class="reviews__bottom-items swiper">
                    <div class="swiper-wrapper">
                        <div class="reviews__bottom-item swiper-slide">
                            <img class="fancybox-open-img" src="<?php echo the_field('review-1') ?>" alt="">
                        </div>
                        <div class="reviews__bottom-item swiper-slide">
                            <img class="fancybox-open-img" src="<?php echo the_field('review-2') ?>" alt="">
                        </div>
                        <div class="reviews__bottom-item swiper-slide">
                            <img class="fancybox-open-img" src="<?php echo the_field('review-3') ?>" alt="">
                        </div>
                        <div class="reviews__bottom-item swiper-slide">
                            <img class="fancybox-open-img" src="<?php echo the_field('review-4') ?>" alt="">
                        </div>
                        <div class="reviews__bottom-item swiper-slide">
                            <img class="fancybox-open-img" src="<?php echo the_field('review-5') ?>" alt="">
                        </div>
                        <div class="reviews__bottom-item swiper-slide">
                            <img class="fancybox-open-img" src="<?php echo the_field('review-6') ?>" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="questions__section">
    <div class="container">
        <div class="questions__inner">
            <h2 class="questions__title default-title center-title">Частые вопросы</h2>
            <div class="questions__items">
                <div class="questions__item">
                    <div class="questions__item-top-white default-subtitle-big left-subtitle">Как будет проходить курс?</div>
                    <div class="questions__item-bottom-white default-descr left-descr" style="display: none;">
                        <p></p>Курс пройдет в закрытом Телеграм-канале. <br>
                        Где вас ждут 5 записанных уроков и 2 бонуса, которые мы обещали вам специально для более глубокого погружения! <br>
                        Так же после курса у вас будет возможность получить онлайн разбор от наших экспертов!
                    </div>
                </div>
                <div class="questions__item">
                    <div class="questions__item-top-white default-subtitle-big left-subtitle">Какие есть способы оплаты?</div>
                    <div class="questions__item-bottom-white default-descr left-descr" style="display: none;">
                        <p>В зависимости от вашего местоположения, доступны следующие способы оплаты:</p>
                        <ul>
                            <li>Дебетовые и кредитные карты: Visa, Mastercard, MIR</li>
                            <li>PayPal</li>
                            <li>Банковские переводы в EUR и USD</li>
                            <li>Криптовалюта</li>
                        </ul>
                        <p>Опции для оплаты банковскими картами и через PayPal будут доступны на странице подтверждения оплаты. Для получения реквизитов для банковских переводов или криптовалюты, пожалуйста, свяжитесь с нами напрямую.</p>
                    </div>
                </div>
                <div class="questions__item">
                    <div class="questions__item-top-white default-subtitle-big left-subtitle">Что делать, если не могу оплатить?</div>
                    <div class="questions__item-bottom-white default-descr left-descr" style="display: none;">Напишите в нашу <a href="https://t.me/Anastassya_C">тех. поддержку</a></div>
                </div>
                <div class="questions__item">
                    <div class="questions__item-top-white default-subtitle-big left-subtitle">Что будет происходить после того как я оплачу курс?</div>
                    <div class="questions__item-bottom-white default-descr left-descr" style="display: none;">
                        <p>После оплаты вы получите письмо на ваш email, где будут указаны:</p>
                        <ul>
                            <li>Ссылка на ваш личный кабинет</li>
                            <li>Пароль для доступа</li>
                        </ul>
                    </div>
                </div>
                <div class="questions__item">
                    <div class="questions__item-top-white default-subtitle-big left-subtitle">На сколько у меня будет доступ к курсу?</div>
                    <div class="questions__item-bottom-white default-descr left-descr" style="display: none;">
                        <p>Курс будет доступен вам до тех пор, пока вы сами не покинете закрытый канал</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>