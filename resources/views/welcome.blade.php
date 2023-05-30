<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Zhafira Alysandra AP</title>
    <meta name="description"
        content="Bersama ini kami mohon dengan hormat kepada bapak/ibu sekalian untuk dapat hadir dalam acara aqiqah putri kami.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    {{-- <img src="assets/img/logo/logo.png" alt=""> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header id="targetElement1" style="display: none;">
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                {{-- <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a> --}}
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="#about">About</a></li>

                                        <li><a href="#gallery">Gallery</a></li>
                                        <li><a href="#guest">Guest Book</a></li>
                                        <li><a href="#contact">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>

        <!-- Slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height hero-overly d-flex align-items-center"
                    data-background="/img/bg.jpg">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <center>
                                    <div class="hero__caption text-center d-flex align-items-center caption-bg">
                                        <div class="circle-caption">
                                            <span data-animation="fadeInUp" data-delay=".3s">
                                                @foreach ($desc as $item)
                                                    {{ $item->tanggal_acara }}
                                                @endforeach
                                            </span>
                                            <h1 data-animation="fadeInUp" data-delay=".5s">
                                                {{ $invite }}
                                            </h1>
                                            <p data-animation="fadeInUp" data-delay=".9s">
                                                we invite you
                                            </p>
                                            
                                        </div>
                                    </div>
                                    <button id="toggleButton" style="display: block;" class=" mt-5 p-5 btn" type="submit">Lihat Undangan</button>
                                </center>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Slider Area End-->
        <center>
            <button id="toggleButton2" style="display: block;" class=" mt-5 p-5 btn d-lg-none" type="submit">Lihat Undangan</button>
        </center>

        <!-- Our Story Start -->
        <div class="Our-story-area story-padding" id="about" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="story-img mb-100">
                            <img src="/img/10.jpg" class="story-imges" alt="">
                            <!-- shape flower -->
                            <div class="shape-flower-img">
                                <img src="assets/img/our_story/flower_top.png" class="flower-top" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="story-caption">

                            <img src="assets/img/our_story/flower_right.png" alt="">

                            @foreach ($desc as $item)
                                <h3>{{ $item->judul }}</h3>

                                <p class="story2">{!! $item->kata_pembuka !!}</p>

                                <p class="story2">Yang akan diselanggarakan pada:</p>

                                <p class="story2">
                                    <b>{{ $item->tanggal_acara }}</b>
                                    <br>
                                    <b>Pukul: {{ $item->jam_acara }}</b>
                                    <br>
                                    {!! $item->alamat !!}
                                </p>

                                <p class="story2">{!! $item->kata_penutup !!}</p>

                                <p class="story2">Kami Yang berbahagia</p>
                            @endforeach
                            @foreach ($more as $item2)
                                <h5>
                                    {{ $item2->yang_berbahagia }}
                                </h5>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            <!-- shape -->
            <div class="shape-flower d-none d-xl-block">
                <img src="assets/img/our_story/shape_left.png" class="flower1" alt="">
                <img src="assets/img/our_story/shape_right.png" class="flower2 " alt="">
            </div>
        </div>
        <!-- Our Story Ende -->


        <div class="service-area" id="targetElement3" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">
                        <div class="singl-services text-center">
                            @foreach ($bio as $b)
                                <div class="top-caption">
                                    <h4>Putri Kami</h4>
                                    <p>{{ $b->nama }}</p>
                                </div>
                                <div class="services-img">
                                    <img src="/img/11.jpeg" alt="" width="65%" height="100%" />
                                    <div class="back-flower">
                                        <img src="assets/img/service/services_flower1.png" alt="">
                                    </div>
                                </div>
                                <div class="bottom-caption">
                                    <p>Lahir Pada</p>
                                    <span>{{ $b->tanggal_lahir }}</span>
                                    <p>{{ $b->tempat_lahir }}</p>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
        </div>

        <!-- our Memories start -->
        <div class="our-memories-area section-padding2" id="gallery" style="display: none;">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <img src="assets/img/memories/section_tittle_flowre.png" alt="">
                            <h2>Galery</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-4">
                        <div class="memory">
                            <div class="memories-img">
                                <img src="/img/2.jpg" alt="">
                                <div class="menorie-icon" href="/img/1.jpg">
                                    <i class="ti-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="memory">
                            <div class="memories-img">
                                <img src="/img/10.jpg" alt="">
                                <div class="menorie-icon" href="/img/2.jpg">
                                    <i class="ti-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="memory">
                            <div class="memories-img">
                                <img src="/img/3.jpg" alt="">
                                <div class="menorie-icon" href="/img/3.jpg">
                                    <i class="ti-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="memory">
                            <div class="memories-img">
                                <img src="/img/4.jpg" alt="">
                                <div class="menorie-icon" href="/img/4.jpg">
                                    <i class="ti-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="memory">
                            <div class="memories-img">
                                <img src="/img/11.jpeg" alt="">
                                <div class="menorie-icon" href="/img/5.jpg">
                                    <i class="ti-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="memory">
                            <div class="memories-img">
                                <img src="/img/6.jpg" alt="">
                                <div class="menorie-icon" href="/img/6.jpg">
                                    <i class="ti-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Shape Img -->
            <div class="memories-shape d-none d-xl-block">
                <img src="assets/img/memories/left-img.png" class="memories-shape1" alt="">
                <img src="assets/img/memories/right-img.png" class="memories-shape2" alt="">
            </div>
        </div>
        <!-- our Memories End-->


        <!-- Contact form Start -->
        <div class="contact-form section-padding2 fix" id="guest" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                        <div class="form-wrapper">
                            <!-- section tittle -->
                            <div class="row ">
                                <div class="col-lg-12">
                                    <div class="section-tittle tittle-form text-center">
                                        <img src="assets/img/memories/section_tittle_flowre.png" alt="">
                                        <h2>say something</h2>
                                    </div>
                                </div>
                            </div>
                            <form id="contact-form" action="/send-email" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-box mb-30">
                                            <input value="{{ $invite }}" type="text" name="name"
                                                placeholder="Name" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-box message-icon mb-30">
                                            <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                                        </div>
                                        <div class="submit-info">
                                            <button class="btn2" type="submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Shape inner Flower -->
                            <div class="shape-inner-flower">
                                <img src="assets/img/flower/form-smoll-left.png" class="top1" alt="">
                                <img src="assets/img/flower/form-smoll-right.png" class="top2" alt="">
                                <img src="assets/img/flower/form-smoll-b-left.png"class="top3" alt="">
                                <img src="assets/img/flower/form-smoll-b-right.png"class="top4" alt="">
                            </div>
                            <!-- Shape outer Flower -->
                            <div class="shape-outer-flower">
                                <img src="assets/img/flower/from-top.png" class="outer-top" alt="">
                                <img src="assets/img/flower/from-bottom.png" class="outer-bottom" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact form End -->

    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-main footer-bg" id="contact" style="display: none;">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="#">
                                            {{-- <img src="assets/img/logo/logo2_footer.png" alt=""> --}}
                                        </a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1"></p>
                                            @foreach ($desc as $d)
                                                <p class="info2">{{ $d->alamat }}</p>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Instagram</h4>
                                </div>
                                <div class="instagram-gellay">
                                    <a href="https://www.instagram.com/zhafiraalyssandra/">
                                        <ul class="insta-feed">
                                            <li><img src="/img/2.jpg" alt=""></li>
                                            <li><img src="/img/10.jpg" alt=""></li>
                                            <li><img src="/img/3.jpg" alt=""></li>
                                            <li><img src="/img/4.jpg" alt=""></li>
                                            <li><img src="/img/11.jpeg" alt=""></li>
                                            <li><img src="/img/6.jpg" alt=""></li>
                                        </ul>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom aera -->
            <div class="footer-bottom-area footer-bg">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | Zhafira Alyssandra AP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    <script>
        const toggleButton = document.getElementById('toggleButton');
        const targetElement = document.getElementById('targetElement1');
        const toggleButton2 = document.getElementById('toggleButton2');

        toggleButton.addEventListener('click', function() {
            if (targetElement.style.display === 'none') {

                targetElement1.style.display = 'block';
                targetElement3.style.display = 'block';
                about.style.display = 'block';
                gallery.style.display = 'block';
                guest.style.display = 'block';
                contact.style.display = 'block';
                toggleButton.style.display = 'none';
                toggleButton2.style.display = 'none';
            }

            playAudio();
        });
        toggleButton2.addEventListener('click', function() {
            if (targetElement.style.display === 'none') {

                targetElement1.style.display = 'block';
                targetElement3.style.display = 'block';
                about.style.display = 'block';
                gallery.style.display = 'block';
                guest.style.display = 'block';
                contact.style.display = 'block';
                toggleButton.style.display = 'none';
                toggleButton2.style.display = 'none';
            }

            playAudio();
        });

        function playAudio() {
            var a = new Audio("/music/hadiah-tuhan.mp3");
            a.play();
        }
    </script>

</body>

</html>
