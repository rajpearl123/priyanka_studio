@extends('web.layouts.app')

@section('content')
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('../assets/img/background/page-header-bg-2.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="images/4.png" alt="img">
            </div>
            <h2 class="wptb-item--title">Blog Details</h2>
        </div>
    </div>
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 pe-md-5">
                    <div class="blog-details-inner">
                        <div class="post-content">
                            <div class="post-header">
                                <h2 class="post-title">{{ $blog->title }}</h2>
                                <div class="wptb-item--meta d-flex align-items-center gap-4">
                                    @if($blog->show_author_date)
                                        <div class="wptb-item wptb-item--author">
                                            <a href="#"><i class="bi bi-pencil-square"></i> <span>{{ $blog->author }}</span></a>
                                        </div>
                                        <div class="wptb-item wptb-item--date">
                                            <a href="#"><i class="bi bi-calendar3"></i> <span>{{ \Carbon\Carbon::parse($blog->publish_date)->format('F d, Y') }}</span></a>
                                        </div>
                                    @endif
                                    <div class="wptb-item wptb-item--comments">
                                        <a href="#comments"><i class="bi bi-chat-square-text"></i> <span>{{ $blog->comments_count ?? '2k' }}</span></a>
                                    </div>
                                    <div class="wptb-item wptb-item--hits">
                                        <a href="#"><i class="bi bi-eye"></i> <span>{{ $blog->views_count ?? '1.38k' }}</span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="intro">
                                <p>{!! \Illuminate\Support\Str::limit(strip_tags($blog->content), 200) !!}</p>
                            </div>

                            <!-- Post Image -->
                            <figure class="block-gallery mt-4">
                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                            </figure>

                            <div class="fulltext">
                                <h4 class="widget-title">Project Concepts</h4>
                                <p>{!! $blog->content !!}</p>

                                <!-- Static list to match original template -->
                                <ul class="point-order">
                                    <li><i class="bi bi-check2-all"></i> The talent at Kimono runs wide and deep. Across many markets, geographies</li>
                                    <li><i class="bi bi-check2-all"></i> Our team members are some of the finest professionals in the industry</li>
                                    <li><i class="bi bi-check2-all"></i> Organized to deliver the most specialized service possible and enriched by the</li>
                                </ul>

                                <p>{!! $blog->content !!}</p>

                                <!-- Additional image (if available in the model, e.g., secondary_image) -->
                                @if($blog->secondary_image)
                                    <figure class="block-gallery mt-4">
                                        <a href="#"><img src="{{ asset($blog->secondary_image) }}" alt="{{ $blog->title }}" class="block-image"></a>
                                    </figure>
                                @endif

                                <p>{!! $blog->content !!}</p>

                                <div class="post-footer">
                                    <div class="post-share">
                                        <ul class="share-list">
                                            <li>Share:</li>
                                            <li class="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blogDetails', ['slug' => $blog->slug])) }}">Facebook</a></li>
                                            <li class="twitter"><a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blogDetails', ['slug' => $blog->slug])) }}&text={{ urlencode($blog->title) }}">Twitter</a></li>
                                            <li class="pinterest"><a href="https://pinterest.com/pin/create/button/?url={{ urlencode(route('blogDetails', ['slug' => $blog->slug])) }}&description={{ urlencode($blog->title) }}">Pinterest</a></li>
                                            <li class="instagram"><a href="#">Instagram</a></li>
                                            <li class="linkedin"><a href="https://www.linkedin.com/shareArticle?url={{ urlencode(route('blogDetails', ['slug' => $blog->slug])) }}&title={{ urlencode($blog->title) }}">Linkedin</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Comment List (Hardcoded as per request) -->
                                <div class="comments-area">
                                    <h3 class="comments-title">Comments</h3>
                                    <ul class="comment-list">
                                        <li class="comment even thread-even depth-1">
                                            <div class="commenter-block">
                                                <div class="comment-avatar">
                                                    <img alt="img" src="https://cdn.vectorstock.com/i/1000v/66/13/default-avatar-profile-icon-social-media-user-vector-49816613.jpg" class="avatar">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-author-name">Barret Simpson <span class="comment-date">January 29, 2023</span></div>
                                                    <div class="comment-author-comment">
                                                        <p>Lorem ipsum dolor sit amet, consectetur. Ut enim ad minima veniam quis nostrum exercitationem mosequatu autem.</p>
                                                        <span class="comment-reply"><a href="#" class="comment-reply-link">Reply</a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="children">
                                                <li class="comment even thread-even depth-2">
                                                    <div class="commenter-block">
                                                        <div class="comment-avatar">
                                                            <img alt="img" src="https://cdn.vectorstock.com/i/1000v/66/13/default-avatar-profile-icon-social-media-user-vector-49816613.jpg" class="avatar">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-author-name">Parker Ballinger <span class="comment-date">January 22, 2023</span></div>
                                                            <div class="comment-author-comment">
                                                                <p>Lorem ipsum dolor sit amet, consectetur. Ut enim ad minima veniam quis nostrum exercitationem mosequatu autem.</p>
                                                                <span class="comment-reply"><a href="#" class="comment-reply-link">Reply</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="comment odd thread-odd depth-1">
                                            <div class="commenter-block">
                                                <div class="comment-avatar">
                                                    <img alt="img" src="https://cdn.vectorstock.com/i/1000v/66/13/default-avatar-profile-icon-social-media-user-vector-49816613.jpg" class="avatar">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-author-name">Barret Simpson <span class="comment-date">January 01, 2023</span></div>
                                                    <div class="comment-author-comment">
                                                        <p>Lorem ipsum dolor sit amet, consectetur. Ut enim ad minima veniam quis nostrum exercitationem mosequatu autem.</p>
                                                        <span class="comment-reply"><a href="#" class="comment-reply-link">Reply</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="wptb-pagination-wrap">
                                        <ul class="pagination mt-0 justify-content-start">
                                            <li><span class="page-number current">1</span></li>
                                            <li><a class="page-number" href="#">2</a></li>
                                            <li>.....</li>
                                            <li><a class="page-number" href="#">5</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Make A Comment</h3>
                                    <form class="comment-form" action="" method="post">
                                        @csrf
                                        <p class="logged-in-as">Your email address will not be published. Required fields are marked *</p>
                                        <div class="form-container">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="Name*" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="E-mail*" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" placeholder="Text Here*" required=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="wptb-item--button">
                                                        <button type="submit" class="btn">
                                                            <span class="btn-wrap">
                                                                <span class="text-first">Make Comment</span>
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
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-3 col-md-4 p-md-0 mt-5 mt-md-0">
                    <div class="sidebar">
                        <div class="widget widget_block widget_search">
                            <form method="get" class="wp-block-search" action="">
                                <div class="wp-block-search__inside-wrapper">
                                    <input type="search" class="wp-block-search__input" name="search" value="" placeholder="Search" required="">
                                    <button type="submit" class="wp-block-search__button"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="widget widget_block">
                            <div class="wp-block-group__inner-container">
                                <h2 class="widget-title">Categories</h2>
                                <ul class="wp-block-categories-list wp-block-categories">
                                    @foreach(\App\Models\BlogCategory::all() as $category)
                                        <li class="cat-item"><a href="">{{ $category->name }}</a> <i class="bi bi-chevron-right"></i></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="widget widget_block">
                            <div class="wp-block-group__inner-container">
                                <h2 class="widget-title">Recent Posts</h2>
                                <ul class="wp-block-latest-posts__list wp-block-latest-posts">
                                    @foreach($relatedBlogs as $relatedBlog)
                                        <li>
                                            <div class="latest-posts-content">
                                                <h5><a href="{{ route('blogDetails', ['slug' => $relatedBlog->slug]) }}">{{ $relatedBlog->title }}</a></h5>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="widget widget_block">
                            <h2 class="widget-title">Archive</h2>
                            <ul class="wp-block-archive">
                                @foreach(\App\Models\Blog::selectRaw('DISTINCT YEAR(publish_date) as year, MONTH(publish_date) as month')
                                    ->orderBy('year', 'desc')
                                    ->orderBy('month', 'desc')
                                    ->get() as $archive)
                                    <li><a href="">{{ \Carbon\Carbon::create($archive->year, $archive->month)->format('F Y') }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget widget_block">
                            <h2 class="widget-title">Product Tag</h2>
                            <div class="wp-block-tag-list wp-block-tag">
                                @foreach(explode(',', $blog->tags ?? '') as $tag)
                                    <a href="" class="tag-cloud-link">{{ trim($tag) }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection