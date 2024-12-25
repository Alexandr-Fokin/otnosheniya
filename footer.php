<footer class="footer" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
    <div class="container">
        <div class="footer__inner">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/footer-bg.svg" alt="" class="footer__bg">
            <div class="footer__left">
                <a href="https://kojemeakin.com/consultation/" target="_blank">Наши услуги</a>
            </div>
            <div class="footer__center">
                <div class="footer__logo">
                    <a href="<?php echo get_permalink(6); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/footer-logo.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="footer__right">
                <a href="https://kojemeakin.com/contacts/" target="_blank">Контакты</a>
            </div>


        </div>
    </div>

</footer>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>
<script>
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 350,
        'tolerance': 70
    });

    function close(eve) {
        eve.preventDefault();
        slideout.close();
        document.getElementById('panel').classList.toggle('hide');
        document.querySelector('#menu-left-products').classList.remove('active');
        document.querySelector('#menu-left-more').classList.remove('active');
    }

    slideout
        .on('beforeopen', function() {
            this.panel.classList.add('panel-open');
        })
        .on('open', function() {
            this.panel.addEventListener('click', close);
        })
        .on('beforeclose', function() {
            this.panel.classList.remove('panel-open');
            this.panel.removeEventListener('click', close);
        });

    // Toggle button
    document.querySelector('.header__btn-menu').addEventListener('click', function() {
        slideout.toggle();
        document.getElementById('panel').classList.toggle('hide')
    });

    document.querySelector('#menu .menu-mob__close-btn').addEventListener('click', function() {
        slideout.toggle();
        document.getElementById('panel').classList.toggle('hide');
        document.querySelector('#menu-left-products').classList.remove('active');
        document.querySelector('#menu-left-more').classList.remove('active');
    });
</script>

<div id="popup__form" class="popup__block" style="display: none">
    <section class="form__section" id="form-section">
        <div class="container">
            <div class="form__inner">
                <div class="form__block">
                    <div class="form__block-inner">
                        <div class="form__block-title">Пример модального окна</div>
                        <div class="form__block-descr">Пример описания для модальных окон</div>
                        <?php echo do_shortcode('[contact-form-7 id="20" title="Контактная форма 1"]') ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

<?php wp_footer(); ?>

</html>