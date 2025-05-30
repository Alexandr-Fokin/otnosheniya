<?php
/*
Template Name: Главная

*/

// … остальной код шаблона
?>

<?php get_header(''); ?>


<section class="header__section">
    <div class="header__section-top" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
        <div class="header__section-top-bg">
            <div class="header__section-img-cover">
                <img class="header__section-bg-img img-center" src="<?php echo the_field('header-photo-center') ?>" alt="">
            </div>
        </div>
        <div class="container">
            <h1 class="header__section-main-title default-title left-title">Отношения</h1>
        </div>
    </div>
    <div class="header__section-bottom" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
        <div class="container">
            <div class="header__section-descr default-descr">Возроди любовь и гармонию в паре за 4 дня. Разбери по цифрам себя и своего партнера — и пойми, как строить отношения, где есть поддержка, близость и доверие. Без упреков и недопониманий.</div>
            <a href="#tariff" class="header__section-btn default-btn">узнать больше</a>
        </div>
    </div>
</section>


<section class="for-you__section">
    <div class="container">
        <div class="for-you__inner">
            <h2 class="for-you__title default-title center-title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="000">Это для тебя, если:</h2>
            <div class="for-you__items">
                <div class="for-you__item item-1" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <div class="for-you__item-top">
                        <div class="for-you__item-top-num default-title left-title">1</div>
                        <div class="for-you__item-top-subtitle default-subtitle-small left-subtitle">Твои отношения уже не те, что были раньше</div>
                    </div>
                    <div class="for-you__item-bottom">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/for-you-img-1.svg" alt="" class="for-you__item-bottom-img">
                    </div>
                </div>

                <div class="for-you__item item-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                    <div class="for-you__item-top">
                        <div class="for-you__item-top-num default-title left-title">2</div>
                        <div class="for-you__item-top-subtitle default-subtitle-small left-subtitle">Тебе не хватает понимание со стороны партнера</div>
                    </div>
                    <div class="for-you__item-bottom">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/for-you-img-2.svg" alt="" class="for-you__item-bottom-img">
                    </div>
                </div>

                <div class="for-you__item item-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                    <div class="for-you__item-top">
                        <div class="for-you__item-top-num default-title left-title">3</div>
                        <div class="for-you__item-top-subtitle default-subtitle-small left-subtitle">Вы часто соритесь даже по пустякам и мелочам</div>
                    </div>
                    <div class="for-you__item-bottom">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/for-you-img-3.svg" alt="" class="for-you__item-bottom-img">
                    </div>
                </div>

                <div class="for-you__item item-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
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


<section class="tariff__section" id="tariff">
    <div class="container">
        <div class="tariff__inner">
            <h2 class="tariff__title default-title center-title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="00">Тарифы</h2>
            <div class="tariff__block" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <div class="tariff__block-sale" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
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
                    <div class="tariff__left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                        <h3 class="tariff__left-subtitle default-subtitle-big center-subtitle">Единый тариф</h3>
                        <p class="tariff__left-descr default-subtitle-small left-subtitle">Урок 1. Программа партнера по дате рождения</p>
                        <p class="tariff__left-descr default-subtitle-small left-subtitle">Урок 2. Причины претензий, обид и не пониманий</p>
                        <p class="tariff__left-descr default-subtitle-small left-subtitle">Урок 3. Почему мы перестаем понимать друг друга?</p>
                        <p class="tariff__left-descr default-subtitle-small left-subtitle">Урок 4. Какими должны быть здоровые отношения?</p>
                        <p class="tariff__left-descr default-subtitle-small left-subtitle">Курс "Отношения"</p>
                        <div class="tariff__left-price-block">
                            <p class="tariff__left-subtitle default-subtitle-big left-subtitle price-old">150€</p>
                            <p class="tariff__left-subtitle default-subtitle-big left-subtitle price-current">15€</p>
                            <a href="#" class="header__section-btn default-btn">Хочу курс!</a>
                        </div>
                    </div>
                    <div class="tariff_right" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                        <img src="<?php echo the_field('tariff-img') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="tariff__bonus-subtitle default-subtitle-big center-subtitle" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">БОНУСЫ</div>
            <div class="tariff__bonus-items">
                <div class="tariff__bonus-item default-subtitle-small" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">Подарок 1 - Формула 13% успешных людей</div>
                <div class="tariff__bonus-item default-subtitle-small" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Подарок 2 - Личный календарь благополучных дней</div>
            </div>
        </div>
    </div>
</section>


<section class="who__section" data-aos="fade-up" data-aos-duration="500" data-aos-delay="00">
    <div class="container">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/who-bg.svg" class="who-bg-img" alt="">
        <div class="who__inner">
            <h2 class="who__title default-title center-title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">Кто мы?</h2>
            <div class="who__items">
                <div class="who__item-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
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
                <div class="who__item-right" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                    <img class="who__item-img" src="<?php bloginfo('template_url'); ?>/assets/img/who-img.webp" alt="">
                </div>
            </div>

        </div>
    </div>

</section>


<section class="why__section">
    <div class="container">
        <div class="why__inner">
            <h2 class="why__title default-title left-title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="00">Зачем мы создали этот продукт?</h2>
            <div class="why__descr default-subtitle-small left-subtitle" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">Мы сделали этот продукт, чтобы каждый из вас мог применить науку Сюцай в своих отношениях — и наконец-то зажить по-настоящему в любви, понимании и гармонии. Чтобы вы увидели, почему вы сталкиваетесь с конфликтами, что мешает быть ближе, и как исправить это без упрёков, боли и обвинений.</div>
        </div>
    </div>
</section>




<section class="reviews__section default-section">
    <svg width="481" height="268" viewBox="0 0 481 268" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="313" cy="313" r="313" fill="white" fill-opacity="0.15" />
        <circle cx="313" cy="313" r="310.5" stroke="white" stroke-opacity="0.75" stroke-width="5" stroke-dasharray="20 15" />
    </svg>
    <div class="container">
        <div class="reviews__inner">
            <h2 class="reviews__title default-title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="00">Отзывы</h2>
            <!-- <p class="reviews__descr default-descr-black">Доверьтесь опыту и впечатлениям наших клиентов, чтобы убедиться в эффективности наших программ и подхода к работе.</p> -->
            <div class="reviews__audio" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <p class="reviews__descr default-descr">Отзыв можно послушать:</p>
                <audio controls="controls">
                    <source src="<?php bloginfo('template_url'); ?>/assets/mp3/audio-review.ogg" type="audio/ogg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
            <div class="reviews__swiper-box" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <div class="reviews__items swiper">
                    <div class="swiper-wrapper">
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r1.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r2.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r3.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r4.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r5.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r6.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r7.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r8.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r9.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r10.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r11.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r12.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r13.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r14.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r15.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r16.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r17.webp?v=1.2" alt="отзыв">
                        </div>
                        <div class="reviews__item swiper-slide">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/r18.webp?v=1.2" alt="отзыв">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="reviews__text-items" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                <div class="reviews__text-title">Другие отзывы:</div>
                <div class="reviews__text-item">
                    <p class="hidden">Дорогие мои наставники Василий и Инна. Хочу выразить глубокую признательность за вдохновляющее наставничество в области науки Сюцай.</p>
                    <p class="hidden"> Ваша экспертность , страсть к знанию и способность делиться ими со мной были для меня источником непередаваемой мотивации . Ваше терпение и тщательность в объяснении сложных ситуаций сделали учебный пресс захватывающим и понятным . Благодаря вам я поняла свои слабые и сильные стороны. Я открыла для себя новые горизонты ...</p>
                    <p>Дорогие мои наставники Василий и Инна. Хочу выразить глубокую признательность за вдохновляющее наставничество в области науки Сюцай.</p>
                    <p>Ваша экспертность , страсть к знанию и способность делиться ими со мной были для меня источником непередаваемой мотивации . Ваше терпение и тщательность в объяснении сложных ситуаций сделали учебный пресс захватывающим и понятным . Благодаря вам я поняла свои слабые и сильные стороны. Я открыла для себя новые горизонты , я стала уверенной в себе , я освоила новые навыки в общении с людьми . </p>
                    <p>Ваше наставничество оказало на меня глубокое влияние и ценный вклад в мое развитие . Спасибо большое за вдохновение и веру в мои способности .🙏❤️🎈🍾🎊🎉🍾🎈🍾</p>
                    <button class="reviews__text-item-more">Показать еще</button>
                </div>
                <div class="reviews__text-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <p class="hidden">Почему КОУЧИНГ через науку Сюцай, с парой Василий и Инна Кожемякины?!</p>
                    <p class="hidden">Приходя в Коучинге, для меня открылось совсем другое осознание себя, осознание своей программы через число сознания и число миссии. Поняла почему я так действую, реагирую и какие действия нужно делать чтобы мне выйти из свою субъективную реальность в объективную.</p>
                    <p class="hidden">Этот Коучинг - показал мне, для чего нужна дисциплина тела и ума, если хочешь реально что то изменить ...</p>
                    <p>Почему КОУЧИНГ через науку Сюцай, с парой Василий и Инна Кожемякины?!</p>
                    <p>Приходя в Коучинге, для меня открылось совсем другое осознание себя, осознание своей программы через число сознания и число миссии. Поняла почему я так действую, реагирую и какие действия нужно делать чтобы мне выйти из свою субъективную реальность в объективную.</p>
                    <p>Этот Коучинг - показал мне, для чего нужна дисциплина тела и ума, если хочешь реально что то изменить, создать, материализовать и ещё какие персональные и профессиональные компетенций нужно у себя нарабатывать чтобы достичь желаемого результата. В течение Коучинга - приходит понимание своих не осознанных действий и то что у тебя отсутствует личной власти прежде всего над самим собой, и почему очень важна - ДИСЦИПЛИНА?!</p>
                    <p>Рекомендую ТРЕНЕРОВ коучинга, пару ВАСИЛИЙ и ИННА КОЖЕМЯКИНЫ, потому что они очень явный пример того как придти к пониманию себя и объективного понимания друг друга и как вместе можно создать удивительные и во благо проекты и материализовать свои потенциал, который есть в каждом из нас.</p>
                    <p>Низкий поклон вам, Василий и Инна, что открыли и показывайте какая ценность является для нас, наше жизнь и почему нужно прожить её, осознанно!🌞♥️</p>
                    <button class="reviews__text-item-more">Показать еще</button>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="questions__section">
    <div class="container">
        <div class="questions__inner">
            <h2 class="questions__title default-title center-title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">Частые вопросы</h2>
            <div class="questions__items" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
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