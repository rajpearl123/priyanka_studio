@php
    $websiteSetting = \App\Models\WebsiteSetting::first();
    $banner = getBanner('photo_gallery');
    
@endphp
   @extends('web.layouts.app')
   @section('content')
       <div class="wptb-page-heading">
           <div class="wptb-item--inner" style="background-image: url('{{ $banner && $banner->banner_img ? asset('uploads/page_banners/' . $banner->banner_img) : asset('assets/web-assets/images/circle-cameras-film_23-2147852399.jpg') }}'); background-size: cover;">
               <div class="wptb-item-layer wptb-item-layer-one">
                   <img src="images/4.png" alt="img">
               </div>
               <h2 class="wptb-item--title ">Gallery </h2>
           </div>
       </div>
       <section>
           <div class="container">
               <div class="wptb-project--inner">
                   <div class="wptb-heading">
                       <div class="wptb-item--inner text-center">

                           <h1 class="wptb-item--title"> <span> Priyanka captures All of Your beautiful memories</span></h1>
                       </div>
                   </div>

                   <div class="has-radius effect-tilt">
                       <div class="portfolio-filters-content">
                           <div class="filters-button-group">
                               <button class="button is-checked" data-filter="*">All </button>
                               <button class="button" data-filter=".fashion">Fashion</button>
                               <button class="button" data-filter=".lifestyle">Lifestyle</button>
                               <button class="button" data-filter=".nature">Nature</button>
                               <button class="button" data-filter=".studio">Studio</button>
                               <button class="button" data-filter=".potrait">Portrait</button>
                           </div>
                       </div>

                       <div class="grid grid-3 gutter-30 clearfix" style="position: relative; height: 1806.95px;">
                           <div class="grid-sizer"></div>
                           <div class="grid-item fashion lifestyle"
                               style="position: absolute; left: 0%; top: 0px; will-change: transform; transform: perspective(1400px) rotateX(0deg) rotateY(0deg);">
                               <div class="wptb-item--inner">
                                   <div class="wptb-item--image">
                                       <img src="images/1.jpg" alt="img">
                                   </div>

                                   <div class="wptb-item--holder">
                                       <div class="wptb-item--meta">
                                           <h4><a href="project-details.html">Bright Boho Sunshine</a></h4>
                                           <p>By Jonathon Willson</p>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="grid-item fashion potrait"
                               style="position: absolute; left: 33.33%; top: 0px; will-change: transform; transform: perspective(1400px) rotateX(0deg) rotateY(0deg);">
                               <div class="wptb-item--inner">
                                   <div class="wptb-item--image">
                                       <img src="images/2.jpg" alt="img">
                                   </div>

                                   <div class="wptb-item--holder">
                                       <div class="wptb-item--meta">
                                           <h4><a href="project-details.html">California Fall Collection 2023</a></h4>
                                           <p>By Jonathon Willson</p>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="grid-item nature"
                               style="position: absolute; left: 66.6599%; top: 0px; will-change: transform; transform: perspective(1400px) rotateX(0deg) rotateY(0deg);">
                               <div class="wptb-item--inner">
                                   <div class="wptb-item--image">
                                       <img src="images/3.jpg" alt="img">
                                   </div>

                                   <div class="wptb-item--holder">
                                       <div class="wptb-item--meta">
                                           <h4><a href="project-details.html">Brown girl next door</a></h4>
                                           <p>By Jonathon Willson</p>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="grid-item studio fashion" style="position: absolute; left: 0%; top: 602.316px;">
                               <div class="wptb-item--inner">
                                   <div class="wptb-item--image">
                                       <img src="images/4.jpg" alt="img">
                                   </div>

                                   <div class="wptb-item--holder">
                                       <div class="wptb-item--meta">
                                           <h4><a href="project-details.html">Fashion next stage</a></h4>
                                           <p>By Jonathon Willson</p>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="grid-item fashion potrait"
                               style="position: absolute; left: 33.33%; top: 602.316px; will-change: transform; transform: perspective(1400px) rotateX(0deg) rotateY(0deg);">
                               <div class="wptb-item--inner">
                                   <div class="wptb-item--image">
                                       <img src="images/5.jpg" alt="img">
                                   </div>

                                   <div class="wptb-item--holder">
                                       <div class="wptb-item--meta">
                                           <h4><a href="project-details.html">Jenifer in green</a></h4>
                                           <p>By Jonathon Willson</p>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="grid-item nature studio"
                               style="position: absolute; left: 66.6599%; top: 602.316px; will-change: transform; transform: perspective(1400px) rotateX(0deg) rotateY(0deg);">
                               <div class="wptb-item--inner">
                                   <div class="wptb-item--image">
                                       <img src="images/6.jpg" alt="img">
                                   </div>

                                   <div class="wptb-item--holder">
                                       <div class="wptb-item--meta">
                                           <h4><a href="project-details.html">Sunflower Boho girl</a></h4>
                                           <p>By Jonathon Willson</p>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="grid-item lifestyle potrait" style="position: absolute; left: 0%; top: 1204.63px;">
                               <div class="wptb-item--inner">
                                   <div class="wptb-item--image">
                                       <img src="images/7.jpg" alt="img">
                                   </div>

                                   <div class="wptb-item--holder">
                                       <div class="wptb-item--meta">
                                           <h4><a href="project-details.html">Iceland girl</a></h4>
                                           <p>By Jonathon Willson</p>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="grid-item nature"
                               style="position: absolute; left: 33.33%; top: 1204.63px; will-change: transform;">
                               <div class="wptb-item--inner">
                                   <div class="wptb-item--image">
                                       <img src="images/8.jpg" alt="img">
                                   </div>

                                   <div class="wptb-item--holder">
                                       <div class="wptb-item--meta">
                                           <h4><a href="project-details.html">Summer sadness</a></h4>
                                           <p>By Jonathon Willson</p>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="grid-item potrait" style="position: absolute; left: 66.6599%; top: 1204.63px;">
                               <div class="wptb-item--inner">
                                   <div class="wptb-item--image">
                                       <img src="images/9.jpg" alt="img">
                                   </div>

                                   <div class="wptb-item--holder">
                                       <div class="wptb-item--meta">
                                           <h4><a href="project-details.html">Summer sadness</a></h4>
                                           <p>By Jonathon Willson</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="wptb-pagination-wrap text-center">
                   <ul class="pagination justify-content-center">
                       <li><a class="disabled page-number previous" href="#"><i class="bi bi-chevron-left"></i></a>
                       </li>
                       <li><span class="page-number current">01</span></li>
                       <li><a class="page-number" href="#">02</a></li>
                       <li><a class="page-number" href="#">03</a></li>
                       <li>.....</li>
                       <li><a class="page-number" href="#">09</a></li>
                       <li><a class="page-number next" href="#"><i class="bi bi-chevron-right"></i></a></li>
                   </ul>
               </div>
           </div>
       </section>
   @endsection
