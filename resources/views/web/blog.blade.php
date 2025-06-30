   @extends('web.layouts.app')
   @section('content')
       <div class="wptb-page-heading">
           <div class="wptb-item--inner" style="background-image: url('../assets/img/background/page-header-bg-2.jpg');">
               <div class="wptb-item-layer wptb-item-layer-one">
                   <img src="images/4.png" alt="img">
               </div>
               <h2 class="wptb-item--title ">Blog</h2>
           </div>
       </div>
       <section class="wptb-blog-grid-one">
           <div class="container">

               <div class="row">
                   <div class="col-lg-4 col-sm-6">
                       <div class="wptb-blog-grid1 highlight wow fadeInLeft active"
                           style="visibility: visible; animation-name: fadeInLeft;">
                           <div class="wptb-item--inner">
                               <div class="wptb-item--image">
                                   <a href="{{ route('blogDetails') }}" class="wptb-item-link"><img src="images/1.jpg"
                                           alt="img"></a>
                               </div>
                               <div class="wptb-item--holder">
                                   <div class="wptb-item--date">25 Sep 2023</div>
                                   <h4 class="wptb-item--title"><a href="{{ route('blogDetails') }}">Beginners guide to start your
                                           photography journey</a></h4>

                                   <div class="wptb-item--meta">
                                       <div class="wptb-item--author">By <a href="#">Ashton William</a></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-4 col-sm-6">
                       <div class="wptb-blog-grid1 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                           <div class="wptb-item--inner">
                               <div class="wptb-item--image">
                                   <a href="{{ route('blogDetails') }}" class="wptb-item-link"><img src="images/2.jpg"
                                           alt="img"></a>
                               </div>
                               <div class="wptb-item--holder">
                                   <div class="wptb-item--date">22 Sep 2023</div>
                                   <h4 class="wptb-item--title"><a href="{{ route('blogDetails') }}">Twenty photography tips to
                                           make photos amazing</a></h4>

                                   <div class="wptb-item--meta">
                                       <div class="wptb-item--author">By <a href="#">Olivia Rose</a></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-4 col-sm-6">
                       <div class="wptb-blog-grid1 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                           <div class="wptb-item--inner">
                               <div class="wptb-item--image">
                                   <a href="{{ route('blogDetails') }}" class="wptb-item-link"><img src="images/3.jpg"
                                           alt="img"></a>
                               </div>
                               <div class="wptb-item--holder">
                                   <div class="wptb-item--date">22 Sep 2023</div>
                                   <h4 class="wptb-item--title"><a href="{{ route('blogDetails') }}">What Norway is best spots
                                           For Photography</a></h4>

                                   <div class="wptb-item--meta">
                                       <div class="wptb-item--author">By <a href="#">Justin Burke</a></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-4 col-sm-6">
                       <div class="wptb-blog-grid1 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                           <div class="wptb-item--inner">
                               <div class="wptb-item--image">
                                   <a href="{{ route('blogDetails') }}" class="wptb-item-link"><img src="images/4.jpg"
                                           alt="img"></a>
                               </div>
                               <div class="wptb-item--holder">
                                   <div class="wptb-item--date">22 Sep 2023</div>
                                   <h4 class="wptb-item--title"><a href="{{ route('blogDetails') }}">How I Take my cool Shots
                                           for my Wildlife Reels</a></h4>

                                   <div class="wptb-item--meta">
                                       <div class="wptb-item--author">By <a href="#">Justin Burke</a></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-4 col-sm-6">
                       <div class="wptb-blog-grid1 highlight wow fadeInLeft active"
                           style="visibility: visible; animation-name: fadeInLeft;">
                           <div class="wptb-item--inner">
                               <div class="wptb-item--image">
                                   <a href="{{ route('blogDetails') }}" class="wptb-item-link"><img src="images/5.jpg"
                                           alt="img"></a>
                               </div>
                               <div class="wptb-item--holder">
                                   <div class="wptb-item--date">25 Sep 2023</div>
                                   <h4 class="wptb-item--title"><a href="{{ route('blogDetails') }}">How you should prepare
                                           your studio before a shoot</a></h4>

                                   <div class="wptb-item--meta">
                                       <div class="wptb-item--author">By <a href="#">Ashton William</a></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-4 col-sm-6">
                       <div class="wptb-blog-grid1 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                           <div class="wptb-item--inner">
                               <div class="wptb-item--image">
                                   <a href="{{ route('blogDetails') }}" class="wptb-item-link"><img src="images/6.jpg"
                                           alt="img"></a>
                               </div>
                               <div class="wptb-item--holder">
                                   <div class="wptb-item--date">22 Sep 2023</div>
                                   <h4 class="wptb-item--title"><a href="{{ route('blogDetails') }}">Best cameras 2023 for
                                           travel photography</a></h4>

                                   <div class="wptb-item--meta">
                                       <div class="wptb-item--author">By <a href="#">Olivia Rose</a></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-4 col-sm-6">
                       <div class="wptb-blog-grid1 wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                           <div class="wptb-item--inner">
                               <div class="wptb-item--image">
                                   <a href="{{ route('blogDetails') }}" class="wptb-item-link"><img src="images/7.jpg"
                                           alt="img"></a>
                               </div>
                               <div class="wptb-item--holder">
                                   <div class="wptb-item--date">22 Sep 2023</div>
                                   <h4 class="wptb-item--title"><a href="{{ route('blogDetails') }}">Beginners guide to start
                                           your photography journey</a></h4>

                                   <div class="wptb-item--meta">
                                       <div class="wptb-item--author">By <a href="#">Justin Burke</a></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-4 col-sm-6">
                       <div class="wptb-blog-grid1 wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                           <div class="wptb-item--inner">
                               <div class="wptb-item--image">
                                   <a href="blog-detail.html" class="wptb-item-link"><img src="images/8.jpg"
                                           alt="img"></a>
                               </div>
                               <div class="wptb-item--holder">
                                   <div class="wptb-item--date">22 Sep 2023</div>
                                   <h4 class="wptb-item--title"><a href="{{ route('blogDetails') }}">Beginners guide to start
                                           new Born photography</a></h4>

                                   <div class="wptb-item--meta">
                                       <div class="wptb-item--author">By <a href="#">Justin Burke</a></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-4 col-sm-6">
                       <div class="wptb-blog-grid1 highlight wow fadeInLeft active"
                           style="visibility: hidden; animation-name: none;">
                           <div class="wptb-item--inner">
                               <div class="wptb-item--image">
                                   <a href="blog-detail.html" class="wptb-item-link"><img src="images/9.jpg"
                                           alt="img"></a>
                               </div>
                               <div class="wptb-item--holder">
                                   <div class="wptb-item--date">25 Sep 2023</div>
                                   <h4 class="wptb-item--title"><a href="blog-detail.html">Best wild photographs
                                           taken by our Photographers</a></h4>

                                   <div class="wptb-item--meta">
                                       <div class="wptb-item--author">By <a href="#">Ashton William</a></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="wptb-pagination-wrap text-center">
                   <ul class="pagination">
                       <li><a class="disabled page-number previous" href="#"><i class="bi bi-chevron-left"></i></a>
                       </li>
                       <li><span class="page-number current">1</span></li>
                       <li><a class="page-number" href="#">2</a></li>
                       <li><a class="page-number" href="#">3</a></li>
                       <li>.....</li>
                       <li><a class="page-number" href="#">9</a></li>
                       <li><a class="page-number next" href="#"><i class="bi bi-chevron-right"></i></a></li>
                   </ul>
               </div>
           </div>
       </section>
   @endsection
