@php
    $websiteSetting = \App\Models\WebsiteSetting::first();
@endphp
@extends('web.layouts.app')
@section('title', $websiteSetting->name . ' | Contact Us')
@section('content')
    @php
        $banner = getBanner('contact_us');
    @endphp

    @php $socialLinkInstagram = App\Models\SocialLinks::where('status', 0)->where('name', 'instagram')->first(); @endphp
    @php $socialLinkFacebook = App\Models\SocialLinks::where('status', 0)->where('name', 'facebook')->first(); @endphp
    @php $socialLinkTwitter = App\Models\SocialLinks::where('status', 0)->where('name', 'twitter')->first(); @endphp
    @php $socialLinkPinterest = App\Models\SocialLinks::where('status', 0)->where('name', 'pinterest')->first(); @endphp
    @php $socialLinkLinkdin = App\Models\SocialLinks::where('status', 0)->where('name', 'linkedin')->first(); @endphp
    @php $socialLinkYoutube = App\Models\SocialLinks::where('status', 0)->where('name', 'Youtube')->first(); @endphp
    @php $websiteSetting = App\Models\WebsiteSetting::first(); @endphp




    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('images/page-header-bg-2.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('assets/images/4.png') }}" alt="img">
            </div>
            <h2 class="wptb-item--title ">Contact Us</h2>
        </div>
    </div>
    <section class="wptb-contact-form style1 bg-image-2"
        style="background-image: url('{{ asset('assets/images/bg-9.jpg') }}')">
        <div class="wptb-item-layer both-version">
            <img src="{{ asset('assets/texture-2.png') }}" alt="">
            <img src="{{ asset('assets/texture-2-light.png') }}" alt="">
        </div>
        <div class="container">
            <div class="wptb-form--wrapper">
                <div class="wptb-heading">
                    <div class="wptb-item--inner text-center">
                        <h1 class="wptb-item--title"> Get In Touch</h1>
                        <div class="wptb-item--description"> Contact us for a great photography session &amp; beautiful
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
                                            <input type="text" name="name" class="form-control" placeholder="Name*"
                                                required="">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 mb-4">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail*"
                                                required="">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12 mb-4">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Text"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12">
                                        <div class="wptb-item--button text-center">
                                            <button class="btn" type="submit">
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
                        <div class="wptb-icon-box1 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-globe"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Our Website</h3>
                                    <p class="wptb-item--description">www.priyankaphotography.com</p>
                                    <a href="www.priyankaphotography.com" class="wptb-item--link">Visit Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 px-md-5">
                        <div class="wptb-icon-box1 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-phone"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Book Us</h3>
                                    <p class="wptb-item--description">{{ $contactInfo->phone ?? 'N/A' }}</p>
                                    <a href="{{ $contactInfo->phone ?? 'N/A' }}" class="wptb-item--link">Call Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="wptb-icon-box1 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
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
@endsection
