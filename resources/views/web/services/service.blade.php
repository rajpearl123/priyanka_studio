    @extends('web.layouts.app')
    @section('content')
        <div class="wptb-page-heading">
            <div class="wptb-item--inner" style="background-image: url('../assets/img/background/page-header-bg-2.jpg');">
                <div class="wptb-item-layer wptb-item-layer-one">
                    <img src="{{asset('assets/images/4.png')}}" alt="img">
                </div>
                <h2 class="wptb-item--title ">{{ $title }}</h2>
            </div>
        </div>
        <section class="blog-details">
            <div class="container">
                <div class="row">

                    <!-- Service Navigation List -->
                    <div class="col-lg-4 col-md-4 pe-md-5">
                        <div class="sidebar">
                            <div class="sidenav">
                                <ul class="side_menu">
                                    <li class="menu-item active">
                                        <a href="{{ route('services', 'studio_photography') }}"
                                            class="d-flex align-items-center justify-content-between">
                                            <span>
                                                Studio Photography
                                            </span>
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('services', 'wedding_photography') }}"
                                            class="d-flex align-items-center justify-content-between">
                                            <span>
                                                Wedding Photography
                                            </span>
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('services', 'newborn_photography') }}"
                                            class="d-flex align-items-center justify-content-between">
                                            <span>
                                                Newborn Photography
                                            </span>
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('services', 'indoor_photography') }}"
                                            class="d-flex align-items-center justify-content-between">
                                            <span>
                                                Indoor Photography
                                            </span>
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('services', 'outdoor_photography') }}"
                                            class="d-flex align-items-center justify-content-between">
                                            <span>
                                                Outdoor Photography
                                            </span>
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-8 col-md-8 mb-5 mb-md-0 ps-md-0">
                        <div class="blog-details-inner">
                            <div class="post-content">

                                <!-- Post Image -->
                                <figure class="block-gallery mb-4">
                                    <img src="{{asset('assets/images/5.webp')}}" alt="img">
                                </figure>

                                <div class="post-header">
                                    <h1 class="post-title">{{ $title }}</h1>
                                </div>
                                <div class="fulltext">
                                    <p> The talent at Priyanka runs wide and deep. Across many markets, geographies &amp;
                                        typologies, our team members are some of the finest professionals in the industry
                                        wide and deep. Across many markets, geographies and typologies,
                                        our team members are some of the finest.</p>

                                    <!-- Start Section -->
                                    <h4 class="widget-title">Service Steps</h4>
                                    <p>The talent at Priyanka runs wide and deep. Across many markets, geographies &amp;
                                        typologies, our team members are some of the finest professionals in the industry
                                        wide and deep. </p>

                                    <ul class="point-order">
                                        <li><i class="bi bi-check2-all"></i> The talent at Priyanka runs wide and deep.
                                            Across many markets, geographies</li>
                                        <li><i class="bi bi-check2-all"></i> Our team members are some of the finest
                                            professionals in the industry</li>
                                        <li><i class="bi bi-check2-all"></i> Organized to deliver the most specialized
                                            service possible and enriched by the</li>
                                    </ul>

                                    <p>The talent at Priyanka runs wide and deep. Across many markets, geographies &amp;
                                        typologies, our team members are some of the finest professionals in the industry
                                        wide and deep. Across many markets, geographies and typologies,
                                        our team members are some of the finest.</p>
                                    <p>The talent at Priyanka runs wide and deep. Across many markets, geographies &amp;
                                        typologies, our team members are some of the finest professionals in the industry
                                        wide and deep. Across many markets, geographies and typologies,
                                        our team members are some of the finest.The talent at kimora runs wide and deep.
                                        Across many markets, geographies &amp; typologies, our team members are some of the
                                        finest professionals in the industry wide and deep.
                                        Across many markets, geographies and typologies, our team members are some of the
                                        finest.</p>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    @endsection
