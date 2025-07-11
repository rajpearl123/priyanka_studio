@php
    $websiteSetting = \App\Models\WebsiteSetting::first();
    $banner = getBanner('photo_gallery');
@endphp

@extends('web.layouts.app')

@section('content')
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ $banner && $banner->banner_img ? asset('uploads/page_banners/' . $banner->banner_img) : asset('assets/web-assets/images/circle-cameras-film_23-2147852399.jpg') }}'); background-size: cover;">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('images/4.png') }}" alt="img">
            </div>
            <h2 class="wptb-item--title">Gallery</h2>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="wptb-project--inner">
                <div class="wptb-heading">
                    <div class="wptb-item--inner text-center">
                        <h1 class="wptb-item--title">
                            <span>Priyanka captures All of Your beautiful memories</span>
                        </h1>
                    </div>
                </div>

                <div class="has-radius effect-tilt">
                    <div class="portfolio-filters-content">
                        <div class="filters-button-group">
                            <button class="button is-checked" data-filter="*">All</button>
                            @foreach($galleryCategories as $category)
                                <button class="button" data-filter=".{{ Str::slug($category->name) }}">{{ $category->name }}</button>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-3 gutter-30 clearfix" style="position: relative;">
                        <div class="grid-sizer"></div>
                        @foreach($gallery as $item)
                            <div class="grid-item {{ $item->category ? Str::slug($item->category->name) : '' }}"
                                 style="position: absolute; left: {{ $loop->iteration % 3 == 1 ? '0%' : ($loop->iteration % 3 == 2 ? '33.33%' : '66.6599%') }}; top: {{ floor(($loop->iteration - 1) / 3) * 602.316 }}px;">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <img src="{{ $item->image ? asset($item->image) : asset('images/placeholder.jpg') }}" alt="{{ $item->title ?? 'Gallery Image' }}">
                                    </div>
                                    <div class="wptb-item--holder">
                                        <div class="wptb-item--meta">
                                            <h4><a href="">{{ $item->title ?? 'Untitled' }}</a></h4>
                                            <p>By {{ $item->author ?? 'Priyanka Photography' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="wptb-pagination-wrap text-center">
                    {{ $gallery->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Initialize Isotope
                var $grid = $('.grid').isotope({
                    itemSelector: '.grid-item',
                    percentPosition: true,
                    masonry: {
                        columnWidth: '.grid-sizer',
                        gutter: 30
                    }
                });

                // Filter items on button click
                $('.filters-button-group').on('click', 'button', function() {
                    var filterValue = $(this).attr('data-filter');
                    $grid.isotope({ filter: filterValue });
                    $('.filters-button-group button').removeClass('is-checked');
                    $(this).addClass('is-checked');
                });

                // Layout Isotope after images are loaded
                $grid.imagesLoaded().progress(function() {
                    $grid.isotope('layout');
                });
            });
        </script>
    @endpush
@endsection