   @extends('web.layouts.app')
   @section('content')
       <div class="wptb-page-heading">
           <div class="wptb-item--inner" style="background-image: url('../assets/img/background/page-header-bg-2.jpg');">
               <div class="wptb-item-layer wptb-item-layer-one">
                   <img src="{{ asset('assets/images/4.png') }}" alt="img">
               </div>
               <h2 class="wptb-item--title ">About Us</h2>
           </div>
       </div>
       <section class="wptb-about-one bg-image-2">
           <div class="container">
               <div class="row">
                   <div class="col-xl-8">
                       <div class="row">
                           <div class="col-md-6">
                               <div class="wptb-image-single wow fadeInUp"
                                   style="visibility: visible; animation-name: fadeInUp;">
                                   <div class="wptb-item--inner">
                                       <div class="wptb-item--image">
                                           <img src="{{ asset('assets/images/1.jpg') }}" alt="img">
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="col-md-6 ps-md-0 mt-5">
                               <div class="wptb-about--text">
                                   <p class="wptb-about--text-one mb-4">{{ $section->title ?? 'Default Title' }}</p>
                                   <p>{{ $section->description ?? 'Default Description' }}</p>
                               </div>
                           </div>
                       </div>

                       @php
                           $op_data = json_decode($section->operation_data, true);
                       @endphp

                       <div class="row wptb-about-funfact">
                           @foreach ($op_data as $item)
                               <div class="col-md-6 mb-4 mb-md-0">
                                   <div class="wptb-counter1 style1 pd-right-60 wow skewIn animated"
                                       style="visibility: visible;">
                                       <div class="wptb-item--inner">
                                           <div class="wptb-item--holder d-flex align-items-center">
                                               <div class="wptb-item--value flex-shrink-0">
                                                   <span class="odometer odometer-auto-theme"
                                                       data-count="{{ $item['op_data'] }}">
                                                       <div class="odometer-inside">
                                                           @foreach (str_split($item['op_data']) as $digit)
                                                               <span class="odometer-digit">
                                                                   <span class="odometer-digit-spacer">8</span>
                                                                   <span class="odometer-digit-inner">
                                                                       <span class="odometer-ribbon">
                                                                           <span class="odometer-ribbon-inner">
                                                                               <span
                                                                                   class="odometer-value">{{ $digit }}</span>
                                                                           </span>
                                                                       </span>
                                                                   </span>
                                                               </span>
                                                           @endforeach
                                                       </div>
                                                   </span>
                                                   <span class="suffix">+</span>
                                               </div>
                                               <div class="wptb-item--text">{{ $item['op_title'] }}</div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           @endforeach
                       </div>


                   </div>

                   <div class="col-xl-4 ps-xl-5 mt-5 mt-xl-0 d-none d-xl-block">
                       <div class="wptb-image-single wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                           <div class="wptb-item--inner">
                               <div class="wptb-item--image">
                                   <img src="{{ asset('assets/images/2.jpg') }}" alt="img">
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               {{-- <div class="wptb-item-layer wptb-item-layer-one">
                   <img src="{{ asset('assets/images/light-1.png') }}" alt="img">
               </div> --}}
           </div>
       </section>

       <section class="wptb-faq-one bg-image pb-0" style="background-color:#000;">
           <div class="container">

               <div class="row">
                   <div class="col-lg-6">
                       <div class="wptb-heading">
                           <div class="wptb-item--inner">
                               <h1 class="wptb-item--title mb-lg-0">Why Choose Us</h1>
                           </div>
                       </div>

                       {{-- <div class="wptb-accordion wptb-accordion2 wow fadeInUp"
                           style="visibility: visible; animation-name: fadeInUp;">
                           <div class="wptb--item">
                               <h6 class="wptb-item-title"><span>priyanka Missions</span> <i class="plus bi bi-plus"></i>
                                   <i class="minus bi bi-dash"></i>
                               </h6>
                               <div class="wptb-item--content" style="display: none;">
                                   Our business consulting programs helps to break the performance of your business down
                                   into customers and product groups so you know exactly which customers or product groups
                                   are working.
                               </div>
                           </div>

                           <div class="wptb--item">
                               <h6 class="wptb-item-title"><span>priyanka Photography Features</span> <i
                                       class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                               <div class="wptb-item--content">
                                   Our business consulting programs helps to break the performance of your business down
                                   into customers and product groups so you know exactly which customers or product groups
                                   are working.
                               </div>
                           </div>

                           <div class="wptb--item active">
                               <h6 class="wptb-item-title"><span>Why We are Best Photographers</span> <i
                                       class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                               <div class="wptb-item--content" style="display: block;">
                                   Our business consulting programs helps to break the performance of your business down
                                   into customers and product groups so you know exactly which customers or product groups
                                   are working.
                               </div>
                           </div>
                       </div> --}}

                       <div class="wptb-accordion wptb-accordion2 wow fadeInUp"
                           style="visibility: visible; animation-name: fadeInUp;">
                           @foreach ($items as $item)
                               <div class="wptb--item {{ $loop->first ? 'active' : '' }}">
                                   <h6 class="wptb-item-title">
                                       <span>{{ $item->title }}</span>
                                       <i class="plus bi bi-plus"></i>
                                       <i class="minus bi bi-dash"></i>
                                   </h6>
                                   <div class="wptb-item--content">
                                       {{ $item->content }}
                                   </div>
                               </div>
                           @endforeach
                       </div>

                       <div class="wptb-agency-experience--item text-white">
                           <span>15+</span> Years Experience
                       </div>
                   </div>

                   <div class="col-lg-6">
                       <div class="wptb-image-single wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                           <div class="wptb-item--inner">
                               <div class="wptb-item--image">
                                   <img src="{{ asset('assets/images/3.png') }}" alt="img">
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   @endsection
