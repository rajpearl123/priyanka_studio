@php
    $websiteSetting = \App\Models\WebsiteSetting::first();
    $banner = getBanner('blogs');
@endphp
@extends('web.layouts.app')

@section('content')
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ $banner && $banner->banner_img ? asset('uploads/page_banners/' . $banner->banner_img) : asset('assets/web-assets/images/circle-cameras-film_23-2147852399.jpg') }}'); background-size: cover;">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="images/4.png" alt="img">
            </div>
            <h2 class="wptb-item--title">Blog</h2>
        </div>
    </div>

    <section class="wptb-blog-grid-one">
        <div class="container">
            <div class="row">
                @foreach($blog as $index => $post)
                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-blog-grid1 {{ $index % 3 == 0 ? 'highlight active' : '' }} wow fadeInLeft"
                             style="visibility: {{ $index < 6 ? 'visible' : 'hidden' }}; animation-name: {{ $index < 6 ? 'fadeInLeft' : 'none' }};">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="{{ route('blogDetails', ['slug' => $post->slug]) }}" class="wptb-item-link">
                                        <img src="{{ asset($post->image) }}" alt="{{ $post->title }}">
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
                                    @if($post->show_author_date)
                                        <div class="wptb-item--meta">
                                            <div class="wptb-item--author">By <a href="#">{{ $post->author }}</a></div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="wptb-pagination-wrap text-center">
                {{ $blog->links('vendor.pagination.custom') }}
            </div>
        </div>
    </section>
@endsection