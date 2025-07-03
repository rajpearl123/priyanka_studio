    @php $socialLinkInstagram = App\Models\SocialLinks::where('status', 0)->where('name', 'instagram')->first(); @endphp
    @php $socialLinkFacebook = App\Models\SocialLinks::where('status', 0)->where('name', 'facebook')->first(); @endphp
    @php $socialLinkTwitter = App\Models\SocialLinks::where('status', 0)->where('name', 'twitter')->first(); @endphp
    @php $socialLinkPinterest = App\Models\SocialLinks::where('status', 0)->where('name', 'pinterest')->first(); @endphp
    @php $socialLinkLinkdin = App\Models\SocialLinks::where('status', 0)->where('name', 'linkedin')->first(); @endphp
    @php $socialLinkBehance = App\Models\SocialLinks::where('status', 0)->where('name', 'behance')->first(); @endphp
    @php $websiteSetting = \App\Models\WebsiteSetting::first() @endphp


    @extends('web.layouts.app')
    @section('content')
        <main class="wrapper">
            <!-- Slider Section -->
            <section class="wptb-slider style2">
                <div class="swiper-container wptb-swiper-slider-two">
                    <!-- swiper slides -->
                    <div class="swiper-wrapper">
                        <!-- Slide Item -->
                        @foreach ($banners as $key => $banner)
                            <div class="swiper-slide">
                                <div class="wptb-slider--item">
                                    <div class="wptb-slider--image"
                                        style="background-image: url('{{ asset($banner->image) }}');"></div>
                                    <div class="wptb-slider--inner">


                                        <div class="wptb-heading">
                                            <div class="wptb-item--inner">
                                                <h1 class="wptb-item--title">{{ $banner->title }}
                                                </h1>
                                                <h6 class="wptb-item--subtitle">{{ $banner->subtitle }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End Slide Item -->

                        <!-- Slide Item -->
                        {{-- <div class="swiper-slide">
                            <div class="wptb-slider--item">
                                <div class="wptb-slider--image"
                                    style="background-image: url('{{ asset('assets/images/5.webp') }}');"></div>
                                <div class="wptb-slider--inner">

                                    <div class="wptb-heading">
                                        <div class="wptb-item--inner">
                                            <h1 class="wptb-item--title">Natasha Watson</h1>
                                            <h6 class="wptb-item--subtitle">Model</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Slide Item -->

                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="wptb-slider--item">
                                <div class="wptb-slider--image"
                                    style="background-image: url('{{ asset('assets/images/4.png') }}');"></div>
                                <div class="wptb-slider--inner">


                                    <div class="wptb-heading">
                                        <div class="wptb-item--inner">
                                            <h1 class="wptb-item--title">David Gill</h1>
                                            <h6 class="wptb-item--subtitle">Photographer</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End Slide Item -->
                    </div>
                </div>

                <!-- Bottom Pane -->
                <div class="wptb-bottom-pane justify-content-center">
                    <!-- pagination dots -->
                    <div class="wptb-swiper-dots style2">
                        <div class="swiper-pagination"></div>
                    </div>

                    <!-- Swiper Navigation -->
                    <div class="wptb-swiper-navigation style3">
                        <div class="wptb-swiper-arrow swiper-button-prev"></div>
                        <div class="wptb-swiper-arrow swiper-button-next"></div>
                    </div>
                </div>

            </section>

            <!-- About Priyanka
                         -->
            <section class="wptb-about-two">
                <div class="container">
                    <!-- Services -->
                    <div class="pd-bottom-100">
                        <div class="row">
                            <!-- Iconbox -->
                            <div class="col-md-3 wow fadeInLeft">
                                <div class="wptb-icon-box6 mb-md-0 active highlight">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--icon">
                                            <img src="{{ asset('assets/images/icon-1-2.svg') }}" alt="img">

                                        </div>
                                        <div class="wptb-item--holder">
                                            <h4 class="wptb-item--title"><a href="service-details.html">Wedding
                                                    Photography</a></h4>
                                            <p class="wptb-item--description">The talent at Priyanka runs wide range of
                                                services. Across many markets, geographies</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Iconbox -->
                            <div class="col-md-3 wow fadeInLeft">
                                <div class="wptb-icon-box6 mb-md-0">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--icon">
                                            <img src="{{ asset('assets/images/icon-2-2.svg') }}" alt="img">
                                        </div>
                                        <div class="wptb-item--holder">
                                            <h4 class="wptb-item--title"><a href="service-details.html">Drone
                                                    Cinematography</a></h4>
                                            <p class="wptb-item--description">The talent at Priyanka runs wide range of
                                                services. Across many markets, geographies</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Iconbox -->
                            <div class="col-md-3 wow fadeInLeft">
                                <div class="wptb-icon-box6 mb-md-0">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--icon">
                                            <img src="{{ asset('assets/images/icon-3-2.svg') }}" alt="img">
                                        </div>
                                        <div class="wptb-item--holder">
                                            <h4 class="wptb-item--title"><a href="service-details.html">Wedding
                                                    Cinematography</a></h4>
                                            <p class="wptb-item--description">The talent at Priyanka runs wide range of
                                                services. Across many markets, geographies</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Iconbox -->
                            <div class="col-md-3 wow fadeInLeft">
                                <div class="wptb-icon-box6 mb-md-0">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--icon">
                                            <img src="{{ asset('assets/images/icon-4-2.svg') }}" alt="img">
                                        </div>
                                        <div class="wptb-item--holder">
                                            <h4 class="wptb-item--title"><a href="service-details.html">Personal Portfolio
                                                    Shoo</a></h4>
                                            <p class="wptb-item--description">The talent at Priyanka runs wide range of
                                                services. Across many markets, geographies</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wptb-heading">
                        <div class="wptb-item--inner">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <h6 class="wptb-item--subtitle"><span>02 //</span> About Agency</h6>
                                    <h1 class="wptb-item--title">Priyanka captures <span>All of Your</span> <br> beautiful
                                        memories</h1>
                                </div>
                                <div class="col-lg-5 text-lg-end">
                                    <div class="wptb-item--button">
                                        <a href="about.html" class="btn btn-two creative text-uppercase">
                                            <span class="btn-wrap">
                                                <span class="text-first">Book us Now</span>
                                                <span class="text-second"><i class="bi bi-arrow-up-right"></i> <i
                                                        class="bi bi-arrow-up-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="wptb-image-single wow fadeInUp">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image position-relative">
                                        <img src="{{ asset('assets/images/3.png') }}" alt="img">

                                        <div class="wptb-item--button round-button">
                                            <a class="btn btn-two" href="about.html">
                                                <span class="btn-wrap">
                                                    <span class="text-first">Explore Us</span>
                                                    <span class="text-second"> <i class="bi bi-arrow-up-right"></i> <i
                                                            class="bi bi-arrow-up-right"></i> </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-6 ps-md-5 mt-4 mt-md-0">
                            <div class="wptb-about--text ps-md-5">
                                <h3>About Priyanka
                                </h3>
                                <p class="wptb-about--text-one">Priyanka photography Agency runs wide and deep. Across many
                                    markets, geographies & typologies, our team members</p>
                                <p>The talent at Priyanka runs wide range of services. Across many markets, geographies &
                                    typologies, our team members are some of the finest people of photographers in the
                                    industry wide and deep. From Across many markets, geographies
                                    & boundaries. Hire Priyanka in your event.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wptb-item-layer wptb-item-layer-two">
                    <img src="{{ asset('assets/images/texture-5.png') }}" alt="img">
                </div>
                <div class="wptb-item-layer wptb-item-layer-three">
                    <img src="{{ asset('assets/images/texture-4.png') }}" alt="img">
                </div>
            </section>

            <!-- Our Portfolio -->
            <section class="wptb-project">
                <div class="container">
                    <div class="wptb-heading">
                        <div class="wptb-item--inner text-center">
                            <h1 class="wptb-item--title"> Priyanka captures <span>All of Your</span> <br> beautiful
                                memories</h1>
                        </div>
                    </div>

                    <div class="effect-gradient has-radius">
                        <div class="grid gutter-10 clearfix">
                            <div class="grid-sizer"></div>
                            <div class="row">
                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/ring.jpg') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Ring Ceremony</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/wedding.jpeg') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Wedding Shot.</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/haldi1.jpg') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Haldi Shot.</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/1.avif') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Fashion next stage</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/5.webp') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Jenifer in green</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/6_2.jpg') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Sunflower Boho girl</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/ring.jpg') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Ring Ceremony</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/wedding.jpeg') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Wedding Shot.</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/haldi1.jpg') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Haldi Shot.</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/1.avif') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Fashion next stage</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/5.webp') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Jenifer in green</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid-item col-md-4">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/6_2.jpg') }}" alt="img">
                                            <a class="wptb-item--link" href="project-details.html"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a href="project-details.html">Sunflower Boho girl</a></h4>
                                                <p>By Jonathon Willson</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wptb-item--button text-center mt-5">
                        <a class="btn btn-two text-uppercase" href="project-general.html">
                            <span class="btn-wrap">
                                <span class="text-first">See All Projects</span>
                                <span class="text-second"> <i class="bi bi-arrow-up-right"></i> <i
                                        class="bi bi-arrow-up-right"></i> </span>
                            </span>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Agency Experience -->
            <section class="wptb-agency-experience bg-image pb-xl-0" style="background-image: url('images/bg-13.jpg');">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-8 mb-5 mb-lg-0">
                            <div class="wptb-heading">
                                <div class="wptb-item--inner">
                                    <h1 class="wptb-item--title lg mb-5">20 Amazing <br> <span
                                            class="text-outline">Photographers</span></h1>
                                    <p class="wptb-item--description">The talent at Priyanka runs wide range of services.
                                        Across many markets, geographies & typologies, our team members are some of the
                                        finest people of photographers in the industry wide and deep. From Across many
                                        markets,
                                        geographies & boundaries.</p>

                                    <div class="wptb-agency-experience--item">
                                        <span>15+</span> Years Experience
                                    </div>
                                </div>

                                <div class="wptb-image-single d-none d-xl-block wow fadeInUp">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ asset('assets/images/3.webp') }}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 ps-lg-5 mt-5">
                            <div class="wptb-counter1 style1 mr-bottom-100 wow skewIn">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--holder d-flex align-items-center">
                                        <div class="wptb-item--value"><span class="odometer" data-count="50"></span><span
                                                class="suffix">+</span></div>
                                        <div class="wptb-item--text">Professional Cameras</div>
                                    </div>
                                </div>
                            </div>

                            <div class="wptb-counter1 style1 mr-bottom-100 wow skewIn">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--holder d-flex align-items-center">
                                        <div class="wptb-item--value"><span class="odometer" data-count="90"></span><span
                                                class="suffix">+</span></div>
                                        <div class="wptb-item--text">Photography Props</div>
                                    </div>
                                </div>
                            </div>

                            <div class="wptb-counter1 style1 wow skewIn">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--holder d-flex align-items-center">
                                        <div class="wptb-item--value"><span class="odometer"
                                                data-count="300"></span><span class="suffix"></span></div>
                                        <div class="wptb-item--text">Events Covered</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonial -->
            <section class="wptb-testimonial-one testimonial-colored bg-image position-relative my-4"
                style="overflow: hidden;">

                <!-- YouTube Video Background -->
                <div class="video-background">
                    <iframe
                        src="https://www.youtube.com/embed/tyBJioe8gOs?autoplay=1&mute=1&controls=0&loop=1&playlist=tyBJioe8gOs&showinfo=0&modestbranding=1"
                        frameborder="0" allow="autoplay; muted" allowfullscreen>
                    </iframe>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="swiper-container swiper-testimonial">
                                <!-- swiper slides -->
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="wptb-testimonial1">
                                            <div class="wptb-item--inner">
                                                <div class="wptb-item--holder">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mr-bottom-25">
                                                        <div class="wptb-item--meta-rating">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>

                                                        <div class="wptb-item--icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="57"
                                                                height="45" viewBox="0 0 57 45" fill="none">
                                                                <path
                                                                    d="M51.5137 38.5537C56.8209 32.7938 56.2866 25.3969 56.2697 25.3125V2.8125C56.2697 2.06658 55.9734 1.35121 55.4459 0.823763C54.9185 0.296317 54.2031 0 53.4572 0H36.5822C33.48 0 30.9572 2.52281 30.9572 5.625V25.3125C30.9572 26.0584 31.2535 26.7738 31.781 27.3012C32.3084 27.8287 33.0238 28.125 33.7697 28.125H42.4266C42.3671 29.5155 41.9517 30.8674 41.22 32.0513C39.7913 34.3041 37.0997 35.8425 33.2156 36.6188L30.9572 37.0688V45H33.7697C41.5969 45 47.5678 42.8316 51.5137 38.5537ZM20.5566 38.5537C25.8666 32.7938 25.3294 25.3969 25.3125 25.3125V2.8125C25.3125 2.06658 25.0162 1.35121 24.4887 0.823763C23.9613 0.296317 23.2459 0 22.5 0H5.625C2.52281 0 0 2.52281 0 5.625V25.3125C0 26.0584 0.296316 26.7738 0.823762 27.3012C1.35121 27.8287 2.06658 28.125 2.8125 28.125H11.4694C11.41 29.5155 10.9945 30.8674 10.2628 32.0513C8.83406 34.3041 6.1425 35.8425 2.25844 36.6188L0 37.0688V45H2.8125C10.6397 45 16.6106 42.8316 20.5566 38.5537Z"
                                                                    fill="#D70006"></path>
                                                            </svg>
                                                        </div>
                                                    </div>

                                                    <p class="wptb-item--description"> “I have an amazing photography
                                                        session with team Priyanka photography agency, highly recommended.
                                                        They have amazing atmosphere in their studio. Iw’d love to visit
                                                        again”</p>
                                                    <div class="wptb-item--meta">
                                                        <div class="wptb-item--image">
                                                            <img src="{{ asset('assets/images/4_3.jpg') }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="wptb-item--meta-left">
                                                            <h4 class="wptb-item--title">Rachel Jackson</h4>
                                                            <h6 class="wptb-item--designation">New York</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wptb-testimonial1">
                                            <div class="wptb-item--inner">
                                                <div class="wptb-item--holder">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mr-bottom-25">
                                                        <div class="wptb-item--meta-rating">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>

                                                        <div class="wptb-item--icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="57"
                                                                height="45" viewBox="0 0 57 45" fill="none">
                                                                <path
                                                                    d="M51.5137 38.5537C56.8209 32.7938 56.2866 25.3969 56.2697 25.3125V2.8125C56.2697 2.06658 55.9734 1.35121 55.4459 0.823763C54.9185 0.296317 54.2031 0 53.4572 0H36.5822C33.48 0 30.9572 2.52281 30.9572 5.625V25.3125C30.9572 26.0584 31.2535 26.7738 31.781 27.3012C32.3084 27.8287 33.0238 28.125 33.7697 28.125H42.4266C42.3671 29.5155 41.9517 30.8674 41.22 32.0513C39.7913 34.3041 37.0997 35.8425 33.2156 36.6188L30.9572 37.0688V45H33.7697C41.5969 45 47.5678 42.8316 51.5137 38.5537ZM20.5566 38.5537C25.8666 32.7938 25.3294 25.3969 25.3125 25.3125V2.8125C25.3125 2.06658 25.0162 1.35121 24.4887 0.823763C23.9613 0.296317 23.2459 0 22.5 0H5.625C2.52281 0 0 2.52281 0 5.625V25.3125C0 26.0584 0.296316 26.7738 0.823762 27.3012C1.35121 27.8287 2.06658 28.125 2.8125 28.125H11.4694C11.41 29.5155 10.9945 30.8674 10.2628 32.0513C8.83406 34.3041 6.1425 35.8425 2.25844 36.6188L0 37.0688V45H2.8125C10.6397 45 16.6106 42.8316 20.5566 38.5537Z"
                                                                    fill="#D70006"></path>
                                                            </svg>
                                                        </div>
                                                    </div>

                                                    <p class="wptb-item--description"> “I have an amazing photography
                                                        session with team Priyanka photography agency, highly recommended.
                                                        They have amazing atmosphere in their studio. Iw’d love to visit
                                                        again”</p>
                                                    <div class="wptb-item--meta">
                                                        <div class="wptb-item--image">
                                                            <img src="{{ asset('assets/images/5_1.jpg') }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="wptb-item--meta-left">
                                                            <h4 class="wptb-item--title">Helen Jordan</h4>
                                                            <h6 class="wptb-item--designation">Chicago</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wptb-testimonial1">
                                            <div class="wptb-item--inner">
                                                <div class="wptb-item--holder">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mr-bottom-25">
                                                        <div class="wptb-item--meta-rating">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>

                                                        <div class="wptb-item--icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="57"
                                                                height="45" viewBox="0 0 57 45" fill="none">
                                                                <path
                                                                    d="M51.5137 38.5537C56.8209 32.7938 56.2866 25.3969 56.2697 25.3125V2.8125C56.2697 2.06658 55.9734 1.35121 55.4459 0.823763C54.9185 0.296317 54.2031 0 53.4572 0H36.5822C33.48 0 30.9572 2.52281 30.9572 5.625V25.3125C30.9572 26.0584 31.2535 26.7738 31.781 27.3012C32.3084 27.8287 33.0238 28.125 33.7697 28.125H42.4266C42.3671 29.5155 41.9517 30.8674 41.22 32.0513C39.7913 34.3041 37.0997 35.8425 33.2156 36.6188L30.9572 37.0688V45H33.7697C41.5969 45 47.5678 42.8316 51.5137 38.5537ZM20.5566 38.5537C25.8666 32.7938 25.3294 25.3969 25.3125 25.3125V2.8125C25.3125 2.06658 25.0162 1.35121 24.4887 0.823763C23.9613 0.296317 23.2459 0 22.5 0H5.625C2.52281 0 0 2.52281 0 5.625V25.3125C0 26.0584 0.296316 26.7738 0.823762 27.3012C1.35121 27.8287 2.06658 28.125 2.8125 28.125H11.4694C11.41 29.5155 10.9945 30.8674 10.2628 32.0513C8.83406 34.3041 6.1425 35.8425 2.25844 36.6188L0 37.0688V45H2.8125C10.6397 45 16.6106 42.8316 20.5566 38.5537Z"
                                                                    fill="#D70006"></path>
                                                            </svg>
                                                        </div>
                                                    </div>

                                                    <p class="wptb-item--description"> “I have an amazing photography
                                                        session with team Priyanka photography agency, highly recommended.
                                                        They have amazing atmosphere in their studio. Iw’d love to visit
                                                        again”</p>
                                                    <div class="wptb-item--meta">
                                                        <div class="wptb-item--image">
                                                            <img src="{{ asset('assets/images/6_3.jpg') }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="wptb-item--meta-left">
                                                            <h4 class="wptb-item--title">Helen Jordan</h4>
                                                            <h6 class="wptb-item--designation">New York</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Swiper Navigation -->
                                <div class="wptb-swiper-navigation style1">
                                    <div class="wptb-swiper-arrow swiper-button-prev"></div>
                                    <div class="wptb-swiper-arrow swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Blog Grid -->
            <section class="wptb-blog-grid-one pb-0">
                <DIV CLASS="container">
                    <DIV CLASS="WPTB-HEADING">
                        <DIV CLASS="WPTB-ITEM--INNER">
                            <DIV CLASS="ROW ALIGN-ITEMS-CENTER">
                                <DIV CLASS="COL-LG-6">
                                    <h6 class="wptb-item--subtitle"><span>04 //</span> Latest News</h6>
                                    <h1 class="wptb-item--title mb-0">Our Photography<br>
                                        <span>Related Blog</span>
                                    </h1>
                                </div>

                                <div class="col-lg-6">
                                    <p class="wptb-item--description">we’re deeply passionate <span>catch your lovely
                                            memories in cameras</span> and Convey your love for every moment of life as a
                                        whole.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wptb-blog--inner">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="wptb-blog-grid1 active highlight wow fadeInLeft">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <a href="blog-details.html" class="wptb-item-link"><img
                                                    src="{{ asset('assets/images/1_2.jpg') }}" alt="img"></a>
                                        </div>
                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--date">25 Sep 2023</div>
                                            <h4 class="wptb-item--title"><a href="blog-details.html">Beginners guide to
                                                    start your photography journey</a></h4>

                                            <div class="wptb-item--meta">
                                                <div class="wptb-item--author">By <a href="#">Ashton William</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="wptb-blog-grid1 wow fadeInLeft">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <a href="blog-details.html" class="wptb-item-link"><img
                                                    src="{{ asset('assets/images/2_2.jpg') }}" alt="img"></a>
                                        </div>
                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--date">22 Sep 2023</div>
                                            <h4 class="wptb-item--title"><a href="blog-details.html">Twenty photography
                                                    tips to
                                                    make photos amazing</a></h4>

                                            <div class="wptb-item--meta">
                                                <div class="wptb-item--author">By <a href="#">Olivia Rose</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="wptb-blog-grid1 wow fadeInLeft">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <a href="blog-details.html" class="wptb-item-link"><img
                                                    src="{{ asset('assets/images/3_2.jpg') }}" alt="img"></a>
                                        </div>
                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--date">22 Sep 2023</div>
                                            <h4 class="wptb-item--title"><a href="blog-details.html">What Norway is best
                                                    spots
                                                    For Photography</a></h4>

                                            <div class="wptb-item--meta">
                                                <div class="wptb-item--author">By <a href="#">Justin Burke</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section class="wptb-contact-form style1">
                <div class="wptb-item-layer both-version">
                    <img src="{{ asset('assets/images/texture-2.png') }}" alt="">
                    <img src="{{ asset('assets/images/texture-2-light.png') }}" alt="">
                </div>
                <div class="container">
                    <div class="wptb-form--wrapper">
                        <div class="wptb-heading">
                            <div class="wptb-item--inner text-center">
                                <h1 class="wptb-item--title"> Get In Touch</h1>
                                <div class="wptb-item--description"> Contact us for a great photography session & beautiful
                                    captured moments </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <form class="wptb-form" action="{{ route('contactUs-store') }}" method="POST">
                                    @csrf
                                    <div class="wptb-form--inner">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 mb-4">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Name*" required="">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-4">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="E-mail*" required="">
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 mb-4">
                                                <div class="form-group">
                                                    <input type="text" name="subject" class="form-control"
                                                        placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-12 mb-4">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" placeholder="Text"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-12">
                                                <div class="wptb-item--button text-center">
                                                    <button class="btn text-uppercase" type="submit">
                                                        <span class="btn-wrap">
                                                            <span class="text-first">Send Mail</span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="wptb-office-address mr-top-100">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="wptb-icon-box1 wow fadeInLeft">
                                    <div class="wptb-item--inner flex-start">
                                        <div class="wptb-item--icon"><i class="bi bi-globe"></i></div>
                                        <div class="wptb-item--holder">
                                            <h3 class="wptb-item--title">Our Website</h3>
                                            <p class="wptb-item--description">www.Priyanka photography.com
                                            </p>
                                            <a href="www.Priyankaphotography.com" class="wptb-item--link">Visit Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 px-md-5">
                                <div class="wptb-icon-box1 wow fadeInLeft">
                                    <div class="wptb-item--inner flex-start">
                                        <div class="wptb-item--icon"><i class="bi bi-phone"></i></div>
                                        <div class="wptb-item--holder">
                                            <h3 class="wptb-item--title">Book Us</h3>
                                            <p class="wptb-item--description">{{ $contactInfo->phone ?? 'N/A' }}</p>
                                            <a href="{{ $contactInfo->phone ?? 'N/A' }}" class="wptb-item--link">Call
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="wptb-icon-box1 wow fadeInLeft">
                                    <div class="wptb-item--inner flex-start">
                                        <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
                                        <div class="wptb-item--holder">
                                            <h3 class="wptb-item--title">Studio Address</h3>
                                            <p class="wptb-item--description">{!! $contactInfo->address1 ?? 'N/A' !!}</p>
                                            <a href="{{ $contactInfo->map1 }}" class="wptb-item--link">View Map</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Instagram -->
            <div class="wptb-instagram--gallery">
                <div class="wptb-item--inner d-flex align-items-center justify-content-center flex-wrap flex-md-nowrap">
                    <div class="wptb-item">
                        <div class="wptb-item--image">
                            <img src="{{ asset('assets/images/1_1.jpg') }}" alt="img">
                        </div>
                    </div>

                    <div class="wptb-item">
                        <div class="wptb-item--image">
                            <img src="{{ asset('assets/images/2_1.jpg') }}" alt="img">
                        </div>
                    </div>

                    <div class="wptb-item">
                        <div class="wptb-item--image">
                            <img src="{{ asset('assets/images/3_1.jpg') }}" alt="img">
                        </div>
                    </div>

                    <div class="wptb-item">
                        <div class="wptb-item--image">
                            <img src="{{ asset('assets/images/4_2.jpg') }}" alt="img">
                        </div>
                    </div>

                    <div class="wptb-item">
                        <div class="wptb-item--image">
                            <img src="{{ asset('assets/images/5_2.jpg') }}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="wptb-item--button">
                    <a class="btn btn-two" href="#">
                        <span class="btn-wrap">
                            <span class="text-first">Follow Us on Instagram</span>
                            <span class="text-second"> <i class="bi bi-instagram"></i> <i class="bi bi-instagram"></i>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </main>
    @endsection
