@php $websiteSetting = App\Models\WebsiteSetting::first(); @endphp

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="Priyanka Studio">
    <meta name="author" content="">
    <!-- Favicon and touch Icons -->
    <link href="{{ asset('assets/images/logo1.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/img/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('assets/img/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('assets/img/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

    <!-- Page Title -->
    <title>Priyanka Studio</title>

    <!-- Styles Include -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

</head>


<body class="light">
    <div class="pointer bnz-pointer" id="bnz-pointer"></div>



    <!-- Main Header -->
    @include('web.layouts.header')
    <!-- End Main Header -->
    @yield('content')

    <!-- Mobile Responsive Menu -->
    <div class="mr_menu" data-lenis-prevent="">
        <button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
        <div class="logo"></div>
        <!-- Keep this div empty. Logo will come here by JavaScript -->

        <h6>Menu</h6>
        <div class="mr_navmenu"></div>
        <!-- Keep this div empty. Menu will come here by JavaScript -->

        <h6>Contact Us</h6>
        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description"><a href="mailto:kimocare@gmail.com">kimocare@gmail.com</a></p>
                </div>
            </div>
        </div>

        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description"><a href="contact-1.html">28 Street, New York, USA</a></p>
                </div>
            </div>
        </div>

        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description"><a href="tel:+98765432122811">+9517401214</a></p>
                </div>
            </div>
        </div>

        <h6>Find Our Page</h6>
        <div class="social-box">
            <ul>
                <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a></li>
                <li><a href="https://www.behance.com/"><i class="bi bi-behance"></i></a></li>
                <li><a href="https://www.youtube.com/"><i class="bi bi-youtube"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="aside_info_wrapper" data-lenis-prevent="">
        <button class="aside_close">Close <i class="bi bi-x-lg"></i></button>

        <div class="aside_logo logo">
            <a href="index.html" class="light_logo"><img src="images/logo1.png" alt="logo"></a>
            <a href="index.html" class="dark_logo"><img src="images/logo1.png" alt="logo"></a>
        </div>

        <div class="aside_info_inner">

            <h6>// Instagram</h6>
            <div class="insta-logo">
                <i class="bi bi-instagram"></i> studio_Priyanka

            </div>
            <div class="wptb-instagram--gallery">
                <div class="wptb-item--inner d-flex align-items-center justify-content-center flex-wrap">
                    <div class="wptb-item">
                        <div class="wptb-item--image">
                            <img src="images/6_1.jpg" alt="img">
                        </div>
                    </div>

                    <div class="wptb-item">
                        <div class="wptb-item--image">
                            <img src="images/7.jpg" alt="img">
                        </div>
                    </div>

                    <div class="wptb-item">
                        <div class="wptb-item--image">
                            <img src="images/8.jpg" alt="img">
                        </div>
                    </div>

                    <div class="wptb-item">
                        <div class="wptb-item--image">
                            <img src="images/9.jpg" alt="img">
                        </div>
                    </div>

                    <div class="wptb-item">
                        <div class="wptb-item--image">
                            <img src="images/10.jpg" alt="img">
                        </div>
                    </div>

                    <div class="wptb-item">
                        <div class="wptb-item--image">
                            <img src="images/11.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>


            <div class="wptb-icon-box1 style2">
                <div class="wptb-item--inner flex-start">
                    <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                    <div class="wptb-item--holder">
                        <p class="wptb-item--description"><a
                                href="mailto:kimocare@gmail.com">priyankastudio1984@gmail.com</a></p>
                    </div>
                </div>
            </div>

            <div class="wptb-icon-box1 style2">
                <div class="wptb-item--inner flex-start">
                    <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
                    <div class="wptb-item--holder">
                        <p class="wptb-item--description"><a href="contact-1.html">Flat no-07, Uday Raj plaza, Road,
                                Pakri Ka Pul, Sector H, Ashiyana, Lucknow, Uttar Pradesh</a></p>
                    </div>
                </div>
            </div>

            <div class="wptb-icon-box1 style2">
                <div class="wptb-item--inner flex-start">
                    <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                    <div class="wptb-item--holder">
                        <p class="wptb-item--description"><a href="tel:+98765432122811">+9517401214</a></p>
                    </div>
                </div>
            </div>

            <h6>// Follow Us</h6>
            <div class="social-box style-square">
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a></li>
                    <li><a href="https://www.behance.com/"><i class="bi bi-behance"></i></a></li>
                    <li><a href="https://www.youtube.com/"><i class="bi bi-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal Search -->
    {{-- <div class="search-modal">
        <div class="modal fade" id="modalSearch">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="search_overlay">
                        <form class="credential-form" method="post">
                            <div class="form-group">
                                <input type="text" name="search" class="keyword form-control"
                                    placeholder="Search Here">
                            </div>
                            <button type="submit" class="btn-search">
                                <span class="text-first"> <i class="bi bi-arrow-right"></i> </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Main Wrapper-->

    <!-- Footer -->
    @include('web.layouts.footer')

    <div class="totop">
        <a href="#"><i class="bi bi-chevron-up"></i></a>
    </div>


    <!-- Core JS -->
    <!-- Core JS -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<!-- Framework -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- WOW Scroll Effect -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>

<!-- Swiper Slider -->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-gl.min.js') }}"></script>

<!-- Odometer Counter -->
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/odometer.js') }}"></script>

<!-- Projects -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- <script src="../plugins/isotope/jquery.hoverdir.js"></script>-->
<script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>
<script src="{{ asset('assets/js/isotope-init.js') }}"></script>

<!-- Fancybox -->
<script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>

<!-- Flatpickr -->
<script src="{{ asset('assets/js/flatpickr.min.js') }}"></script>

<!-- Nice Select -->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

<!-- Cursor Effect -->
<script src="{{ asset('assets/js/cursor-effect.js') }}"></script>

<!-- Theme Custom JS -->
<script src="{{ asset('assets/js/theme.js') }}"></script>



</body>

</html>
