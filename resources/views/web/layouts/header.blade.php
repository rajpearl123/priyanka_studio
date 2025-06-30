<header class="header color-fixed">
        <!-- Lower Bar -->
        <div class="header-inner">
            <div class="container-fluid pe-0">
                <div class="d-flex align-items-center justify-content-between">
                    <!-- Left Part -->
                    <div class="header_left_part d-flex align-items-center">
                        <div class="logo">
                            <a href="index.html" class="light_logo"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                            <a href="index.html" class="dark_logo"><img src="{{ asset('assets/images/logo1.png') }}" alt="logo"></a>
                        </div>
                    </div>

                    <!-- Center Part -->
                    <div class="header_center_part d-none d-xl-block">
                        <div class="mainnav">
                            <ul class="main-menu">
                                <li class="menu-item active"><a href="index.html">Home</a></li>
                                <li class="menu-item"><a href="{{ route('about_us') }}">About Us</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu" data-lenis-prevent="">
                                        <li class="menu-item"><a href="services.html">Wedding</a></li>
                                        <li class="menu-item"><a href="events.php">Events</a></li>
                                        <li class="menu-item"><a href="video-production.php">Video Production</a></li>
                                        <li class="menu-item"><a href="kids-photography.php">Kids Photography</a></li>
                                        <li class="menu-item"><a href="trends.php">Others</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li class="menu-item"><a href="{{ route('blog') }}">Blogs</a></li>
                                <li class="menu-item"><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Part -->
                    <div class="header_right_part d-flex align-items-center">
                        <div class="aside_open wptb-element">
                            <div class="aside-open--inner">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        {{-- <div class="header_search wptb-element">
                            <a href="#" class="modal_search_icon" data-bs-toggle="modal" data-bs-target="#modalSearch"><i class="bi bi-search"></i></a>
                        </div> --}}

                        <button type="button" class="mr_menu_toggle wptb-element d-xl-none">
                                <i class="bi bi-list"></i>
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </header>