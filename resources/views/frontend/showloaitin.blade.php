@extends('frontend_layout')
@section('title', $loai_name->Ten_Loai)
@section('anh')
<main>
    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area pt-30 hero-padding">
        <div class="container">
            <div class="breadcrumb-bg  pt-115 pb-115" style="background-image:url({{URL::to('assets1/img/bg/bg-02.jpg')}})">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>{{$loai_name->Ten_Loai}}</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="">home</a></li>
                                <li><span>{{$loai_name->Ten_Loai}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- news-area-start -->
    <div class="news-area pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="row mb-30">
                        @foreach ($loai_by_id as $key=> $ll)
                            
                        
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-25">
                            <div class="postbox">
                                <div class="post-img">
                                    <a href="{{URL::to('/chi-tiet-tintuc/'.$ll->Ma_Tin_Tuc,Str::slug($ll->Tieu_De))}}"><img height="200" width="200" src="{{URL::to('assets/anh/tintuc')}}/{{$ll->anh_tintuc}}" alt=""></a>
                                </div>
                                <div class="post-box-text mt-30">
                                    <div class="post-box-meta">
                                        <span class="post-box-cart1"><a href="#"><i class="far fa-calendar-alt"></i>{{$ll->ngay_dang}}</a></span>
                                    </div>
                                    <h4><a href="{{URL::to('/chi-tiet-tintuc/'.$ll->Ma_Tin_Tuc,Str::slug($ll->Tieu_De))}}">{{$ll->Tieu_De}}</a></h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    {!! $loai_by_id->links() !!}
                    <hr>
                    <div class="row">
                        {{-- <div class="col-xl-6 col-lg-6">
                            <div class="lifestyle-wrapper mb-30">
                                <div class="lifestyle-img">
                                    <a href="#"><img src="{{URL::to('assets1/img/lifestyle/01.jpg')}}" alt=""></a>
                                </div>
                                <div class="lifestyle-text">
                                    <span class="recent-cart color-5"><a href="#">history</a></span>
                                    <h4><a href="#">Cotton import from USA to soar was American traders predict</a></h4>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
                                    <div class="post-content-meta">
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-comment"></i> (03)</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="lifestyle-wrapper mb-30">
                                <div class="lifestyle-img">
                                    <a href="#"><img src="assets1/img/lifestyle/02.jpg" alt=""></a>
                                </div>
                                <div class="lifestyle-text">
                                    <span class="recent-cart color-3"><a href="#">history</a></span>
                                    <h4><a href="#">Pay Disparity Pry teachers threaten boycott tests, close schools</a></h4>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
                                    <div class="post-content-meta">
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-comment"></i> (03)</a></span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="banner-2-img mt-25 mb-60">
                        <a href="#"><img src="assets1/img/banner/004.jpg" alt=""></a>
                    </div>
                    {{-- <div class="row">
                        <div class="col-xl-5 col-lg-6 mb-30">
                            <div class="lifestyle-img">
                                <a href="#"><img src="assets1/img/news/40.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 mb-30">
                            <div class="lifestyle-text lifestyle-04-text">
                                <span class="recent-cart color-5"><a href="#">travel</a></span>
                                <h4><a href="#">Cotton import from USA to soar was American traders predict</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
                                <div class="post-content-meta">
                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    <span><a class="meta-11" href="#"><i class="far fa-comment"></i> (03)</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 mb-30">
                            <div class="lifestyle-img">
                                <a href="#"><img src="assets1/img/news/41.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 mb-30">
                            <div class="lifestyle-text lifestyle-04-text">
                                <span class="recent-cart color-2"><a href="#">tech</a></span>
                                <h4><a href="#">Cotton import from USA to soar was American traders predict</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
                                <div class="post-content-meta">
                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    <span><a class="meta-11" href="#"><i class="far fa-comment"></i> (03)</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 mb-30">
                            <div class="lifestyle-img">
                                <a href="#"><img src="assets1/img/news/42.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 mb-30">
                            <div class="lifestyle-text lifestyle-04-text">
                                <span class="recent-cart color-4"><a href="#">fashion</a></span>
                                <h4><a href="#">Cotton import from USA to soar was American traders predict</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
                                <div class="post-content-meta">
                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    <span><a class="meta-11" href="#"><i class="far fa-comment"></i> (03)</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 mb-30">
                            <div class="lifestyle-img">
                                <a href="#"><img src="assets1/img/news/43.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 mb-30">
                            <div class="lifestyle-text lifestyle-04-text">
                                <span class="recent-cart color-1"><a href="#">computer</a></span>
                                <h4><a href="#">Cotton import from USA to soar was American traders predict</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
                                <div class="post-content-meta">
                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    <span><a class="meta-11" href="#"><i class="far fa-comment"></i> (03)</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 mb-30">
                            <div class="lifestyle-img">
                                <a href="#"><img src="assets1/img/news/53.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 mb-30">
                            <div class="lifestyle-text lifestyle-04-text">
                                <span class="recent-cart color-7"><a href="#">computer</a></span>
                                <h4><a href="#">Cotton import from USA to soar was American traders predict</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
                                <div class="post-content-meta">
                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    <span><a class="meta-11" href="#"><i class="far fa-comment"></i> (03)</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 mb-30">
                            <div class="lifestyle-img">
                                <a href="#"><img src="assets1/img/news/52.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 mb-30">
                            <div class="lifestyle-text lifestyle-04-text">
                                <span class="recent-cart color-8"><a href="#">fashion</a></span>
                                <h4><a href="#">Cotton import from USA to soar was American traders predict</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
                                <div class="post-content-meta">
                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    <span><a class="meta-11" href="#"><i class="far fa-comment"></i> (03)</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 mb-30">
                            <div class="lifestyle-img">
                                <a href="#"><img src="assets1/img/news/51.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 mb-30">
                            <div class="lifestyle-text lifestyle-04-text">
                                <span class="recent-cart color-7"><a href="#">computer</a></span>
                                <h4><a href="#">Cotton import from USA to soar was American traders predict</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
                                <div class="post-content-meta">
                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    <span><a class="meta-11" href="#"><i class="far fa-comment"></i> (03)</a></span>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="catagory-sidebar">
                        
                       <div class="hero-sidebar-item mb-60">
                            <div class="section-title mb-30">
                                <h4>Tin mới</h4>
                            </div>
                            <div class="hero-sidebar arrow-active owl-carousel">
                                <div class="hero-post-item hero-post-item-2">
                                    @foreach ($tinmoi as $xn)
                                    <div class="post-sm-list fix mb-20">
                                        <div class="post-sm-img f-left">
                                            <a href="{{URL::to('/chi-tiet-tintuc/'.$xn->Ma_Tin_Tuc,Str::slug($xn->Tieu_De))}}"><img height="50" width="50" src="{{URL::to('assets/anh/tintuc')}}/{{$xn->anh_tintuc}}" alt=""></a>
                                        </div>
                                        <div class="post-2-content fix">
                                            <div class="post-content-meta">
                                                <span><a class="meta-1 meta-3" href="#">{{$xn->Ten_Loai}}</a></span>
                                                <span><a class="meta-11" href="#"><i class="far fa-clock"></i>{{$xn->ngay_dang}}</a></span>
                                                <p>
                                                {{-- <span><a class="meta-11" href="#"><i class="far fa-clock"></i>{{$xn->ngay_dang}}</a></span> --}}
                                                </p>            
                                            </div>
                                            <h4><a href="{{URL::to('/chi-tiet-tintuc/'.$xn->Ma_Tin_Tuc,Str::slug($xn->Tieu_De))}}">{!! $xn->Tieu_De !!}</a></h4>
                                        </div>
                                    </div>
                                    @endforeach
                                 
                                    
                                </div>
                               
                            </div>
                        </div>
                        {{-- <div class="newsletter mb-60">
                            <div class="section-title mb-30">
                                <h4>Newsletters</h4>
                            </div>
                            <div class="newsletter-wrapper" style="background-image:url(assets1/img/hero/news.jpg)">
                                <div class="newsletter-title">
                                    <h4>Subscribe Out Newsletters</h4>
                                    <h3>to get more news &amp; update</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
                                </div>
                                <form id="newsletter-form" action="#">
                                    <input type="text" placeholder="Enter your name ">
                                        <input type="email" placeholder="Enter your email">
                                        <div class="contacts-us-form-button text-center">
                                        <div class="newsletter-button">
                                            <button>Subscribe Now</button>
                                        </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                        <div class="popular-tag-sidebar">
                            <div class="section-title mb-30">
                                <h4>Popular Tags</h4>
                            </div>
                            <div class="popular-tag">
                                <a href="#">Newspaper</a>
                                <a href="#">Magazine</a>
                                <a href="#">Papers</a>
                                <a href="#">Fashion</a>
                                <a href="#">Lifestyle</a>
                                <a href="#">Gym</a>
                                <a href="#">News &amp; Blog</a>
                                <a href="#">Sports</a>
                                <a href="#">Music</a>
                                <a href="#">Shopping</a>
                                <a href="#">Swmming</a>
                                <a href="#">Organic</a>
                                <a href="#">Techonology</a>
                                <a href="#">Travel</a>
                                <a href="#">Lifestyle</a>
                                <a href="#">Gaming</a>
                            </div>
                            <div class="banner-2-img mt-30">
                                <a href="#"><img src="assets/img/banner/002.jpg" alt=""></a>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news-area-end -->

    <!-- breaking-news-area-start -->
    {{-- <div class="breaking-news-area">
        <div class="container">
            <div class="breaking-bg grey-bg">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="breaking-wrapper mb-20">
                            <div class="post-sm-list fix">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/b1.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1" href="#">arts</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Bahurupi natya sangst angan belhari stae</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="breaking-wrapper mb-20">
                            <div class="post-sm-list fix">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets/img/hero/b2.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1 meta-2" href="#">lifestryle</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Dhaka international folk 2019 to november</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 d-md-none d-lg-none d-xl-block">
                        <div class="breaking-wrapper mb-20">
                            <div class="post-sm-list fix">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets/img/hero/b3.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1 meta-3" href="#">tech</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Big firm products worst plastic litter report</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- breaking-news-area-end -->
</main>
@endsection