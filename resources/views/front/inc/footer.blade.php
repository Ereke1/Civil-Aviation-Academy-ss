    <footer id="footer">
        <div class="container">
            <div class="footer">
                <div class="footer__info">
                    <div class="info-block wow fadeInDown">
                        <h4>{{ __('Контакты') }}</h4>
                        <p> {{ __('Приемная комиссия Академии:') }}<br />
                            <a href="tel:87273469208">+7 (727) 346-92-08</a><br/>
                            {{ __('Канцелярия:') }}<br />
                            <a href="tel:87273469206">+7 (727) 346-92-06 (вн. 215)</a><br/>
                            {{ __('Бухгалтерия') }}:<br />
                            <a href="tel:87273469206">+7 (727) 346-92-06 (вн. 281)</a><br/>
                            {{ __('Лётно-тренажёрный центр') }}:<br />
                            <a href="tel:87273469206">+7 (727) 346-92-06 (вн. 206)</a><br/>
                            {{ __('Военная кафедра') }}:<br />
                            <a href="tel:87273469206">+7 (727) 346-92-06 (вн. 256)</a><br/>
                            {{ __('Центр обслуживания студентов:') }}<br />
                            <a href="tel:87273399929">+7 (727) 339-99-29</a><br/>
                            {{ __('Офис-регистратор:') }}<br />
                            <a href="tel:87273399699">+7 (727) 3399699 (вн. 278,279)</a><br/>
                            {{ __('Авиационный колледж:') }}<br />
                            <a href="tel:87273399899">+7 (727) 339-98-99,<br/> +7 (727) 346-92-06</a><br/>
                            {{ __('ул. Закарпатская, 44') }}
                            {{ __('050039, Алматы') }} <br />
                            {{ __('Республика Казахстан') }} </p>
                    </div>
                    <div class="info-block wow fadeInUp">
                        <h4>{{ __('Об Академии') }}</h4>
                        <a href="">{{ __('Руководство') }}</a>
                        <a href="">{{ __('Корпоративное управление') }}</a>
                        <a href="">{{ __('Учёный совет') }}</a>
                        <a href="">{{ __('Наука и цифровизация') }}</a>
                    </div>
                    <div class="info-block wow fadeInDown">
                        <h4>{{ __('Поступление') }}</h4>
                        <a href="">{{ __('Бакалавриат') }}</a>
                        <a href="">{{ __('Магистратура') }}</a>
                        <a href="">{{ __('Докторантура') }}</a>
                        <a href="">{{ __('Колледж') }}</a>
                    </div>
                    <div class="info-block last  wow fadeInUp">
                        <h4>{{ __('Присоединяйтесь') }}</h4>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_follow_toolbox last"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section id="bottom-bar">
        <div class="container">
            <div class="bottom-bar">
                <p style="font-size: 0.85vw; font-weight: lighter;">{{ __('© 1995 - 2022 Академия Гражданской Авиации') }}</p>
            </div>
        </div>
    </section>

    <!-- Javascript -->
    <script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/js/swiper-bundle.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
    <script>
        // Swiper Initialization
        let swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            autoplay: {
                delay: 4000,
            },
        });
    </script>
    <script type="text/javascript" src="/js/copajs.js"></script>
    <script type="text/javascript" src="/js/countTo.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="/js/wow.min.js"></script>
    <script type="text/javascript" src="/js/jquery.appear.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
    <script id="aioa-adawidget" src="https://www.skynettechnologies.com/accessibility/js/all-in-one-accessibility-js-widget-minify.js?colorcode=#b8860b&token=&position=top_right"></script>
    @if (Request::url() == URL::to('/') . '/enrollee/bachelor')
        <script src="/js/enrollee/bachelor.js"></script>
    @endif
    @if (Request::url() == URL::to('/') . '/enrollee/master')
        <script src="/js/enrollee/master.js"></script>
    @endif
    @if (Request::url() == URL::to('/') . '/enrollee/doctoral')
        <script src="/js/enrollee/doctoral.js"></script>
    @endif
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6154886463032954"></script> -->
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-634f98ee3660e716"></script>

    @yield('fancybox')
