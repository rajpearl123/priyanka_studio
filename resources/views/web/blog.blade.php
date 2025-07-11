@php
    $websiteSetting = \App\Models\WebsiteSetting::first();
    $banner = getBanner('blogs');
@endphp

@extends('web.layouts.app')

@section('content')
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ $banner && $banner->banner_img ? asset('uploads/page_banners/' . $banner->banner_img) : asset('assets/web-assets/images/circle-cameras-film_23-2147852399.jpg') }}'); background-size: cover;">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('images/4.png') }}" alt="img">
            </div>
            <h2 class="wptb-item--title">Blog</h2>
        </div>
    </div>

    <section class="wptb-blog-grid-one">
        <div class="container">
            <div class="wptb-project--inner">
                <div class="portfolio-filters-content">
                    <div class="filters-button-group text-center mb-4">
                        <a href="{{ route('blog') }}" class="button {{ !$categorySlug ? 'is-checked' : '' }}" data-filter="*">All</a>
                        @foreach($blogCategories as $category)
                            <a href="{{ route('blog', $category->name) }}" class="button {{ $categorySlug === $category->name ? 'is-checked' : '' }}" data-filter=".{{ Str::slug($category->name) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="row blog-grid">
                    @forelse($blog as $index => $post)
                        <div class="col-lg-4 col-sm-6 blog-item {{ $post->category ? Str::slug($post->category->name) : '' }}">
                            <div class="wptb-blog-grid1 {{ $index % 3 == 0 ? 'highlight active' : '' }} wow fadeInLeft"
                                 style="visibility: {{ $index < 6 ? 'visible' : 'hidden' }}; animation-name: {{ $index < 6 ? 'fadeInLeft' : 'none' }};">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <a href="{{ route('blogDetails', ['slug' => $post->slug]) }}" class="wptb-item-link">
                                            <img src="{{ $post->image ? asset( $post->image) : asset('images/placeholder.jpg') }}" alt="{{ $post->title }}">
                                        </a>
                                    </div>
                                    <div class="wptb-item--holder">
                                        <div class="wptb-item--date">
                                            {{ \Carbon\Carbon::parse($post->publish_date)->format('d M Y') }}
                                        </div>
                                        <h4 class="wptb-item--title">
                                            <a href="{{ route('blogDetails', ['slug' => $post->slug]) }}">
                                                {{ $post->title }}
                                            </a>
                                        </h4>
                                        @if($post->category)
                                            <div class="wptb-item--category">
                                                <a href="{{ route('blog', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
                                            </div>
                                        @endif
                                        @if($post->show_author_date)
                                            <div class="wptb-item--meta">
                                                <div class="wptb-item--author">By <a href="#">{{ $post->author }}</a></div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>No blog posts found.</p>
                        </div>
                    @endforelse
                </div>

                <div class="wptb-pagination-wrap text-center">
                    {{ $blog->appends(['category' => $categorySlug])->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Initialize Isotope
                var $grid = $('.blog-grid').isotope({
                    itemSelector: '.blog-item',
                    layoutMode: 'fitRows',
                    percentPosition: true
                });

                // Filter items on button click (client-side)
                $('.filters-button-group').on('click', 'button', function(e) {
                    e.preventDefault(); // Prevent default link behavior for client-side filtering
                    var filterValue = $(this).attr('data-filter');
                    $grid.isotope({ filter: filterValue });
                    $('.filters-button-group a').removeClass('is-checked');
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
