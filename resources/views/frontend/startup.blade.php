@extends('frontend_layout')
@section('title', 'Startup')
@section('anh')
<main>

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area pt-30 hero-padding">
        <div class="container">
            <div class="breadcrumb-bg  pt-115 pb-115" style="background-image:url(assets1/img/bg/bg-05.jpg)">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>Startup</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="index.html">home</a></li>
                                <li><span>Startup</span></li>
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
            
                @foreach ($startup as $st)
                <div class="row">
                    <div class="col-xl-5 col-lg-6 mb-30">
                        <div class="lifestyle-img">
                            <a ><img height="300" width="250" src="assets/anh/startup/{{$st->Avatar}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 mb-30">
                        <div class="lifestyle-text lifestyle-04-text">
                           
                            <h4><a>{{$st->Ten_Startup}}</a></h4>
                            <hr>
                            <div class="post-content-meta">
                                <span><a class="meta-11" > Giới Thiệu:</a></span>
                                <span><a class="meta-11">{!!$st->Mo_Ta!!}</a></span>
                            </div><hr class="hrrrr">
                            <div class="post-content-meta">
                                <span><a class="meta-11"> Địa Chỉ:</a></span>
                                <span><a class="meta-11">{{$st->Dia_Chi}}</a></span>
                            </div><hr class="hrrrr">
                            <div class="post-content-meta">
                                <span><a class="meta-11"> Liên Hệ:</a></span>
                                <span><a class="meta-11">{{$st->Lien_He}}</a></span>
                            </div><hr class="hrrrr">
                            <div class="post-content-meta">
                                <span><a class="meta-11" > Website:</a></span>
                                <span><a  href="{{$st->Website}}" >{{$st->Website}}</a></span>
                            </div>
                        </div>
                    </div> 
                    </div>
               
 
                <hr class="hrrrr">
                @endforeach
                {!! $startup->links() !!}
                    <div class="banner-2-img mt-25 mb-60">
                        <a href="https://{{$quangcao2->link_quangcao}}"><img height="150px" width="700px"  src="{{URL::to('assets/anh/quang/'.$quangcao2->anh_quangcao)}}" alt=""></a>
                    </div>
                    {{-- <div class="row">
                        <div class="col-xl-5 col-lg-6 mb-30">
                            <div class="lifestyle-img">
                                <a href="#"><img src="assets1/img/news/40.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 mb-30">
                            <div class="lifestyle-text lifestyle-04-text">
                                <span class="recent-cart color-3"><a href="#">travel</a></span>
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
                    <div class="banner-2-img mt-25 mb-60">
                        <a href="#"><img src="assets1/img/banner/003.jpg" alt=""></a>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="lifestyle-wrapper mb-30">
                                <div class="lifestyle-img">
                                    <a href="#"><img src="assets1/img/lifestyle/01.jpg" alt=""></a>
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
                                    <a href="#"><img src="assets/img/lifestyle/02.jpg" alt=""></a>
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
                        </div>
                    </div>
                    <div class="row mt-25">
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-25">
                            <div class="postbox">
                                <div class="post-img">
                                    <a href="#"><img src="assets/img/news/45.jpg" alt=""></a>
                                </div>
                                <div class="post-box-text mt-30">
                                    <div class="post-box-meta">
                                        <span class="post-box-cart color-1"><a href="#">computer</a></span>
                                        <span class="post-box-cart1"><a href="#"><i class="far fa-calendar-alt"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Five days on, hackers yet be traced brought unde</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-25">
                            <div class="postbox">
                                <div class="post-img">
                                    <a href="#"><img src="assets/img/news/46.jpg" alt=""></a>
                                </div>
                                <div class="post-box-text mt-30">
                                    <div class="post-box-meta">
                                        <span class="post-box-cart color-2"><a href="#">mobile</a></span>
                                        <span class="post-box-cart1"><a href="#"><i class="far fa-calendar-alt"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Five days on, hackers yet to be traced brought unde</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-25">
                            <div class="postbox">
                                <div class="post-img">
                                    <a href="#"><img src="assets/img/news/47.jpg" alt=""></a>
                                </div>
                                <div class="post-box-text mt-30">
                                    <div class="post-box-meta">
                                        <span class="post-box-cart color-3"><a href="#">computer</a></span>
                                        <span class="post-box-cart1"><a href="#"><i class="far fa-calendar-alt"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Five days on, hackers yet be traced brought unde</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                
                
            </div>
        
    </div>
    <!-- news-area-end -->


</main>
@endsection