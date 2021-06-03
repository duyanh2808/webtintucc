@extends('frontend_layout')
@section('title', 'Mentor')
@section('anh')
<main>
    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area pt-30 hero-padding">
        <div class="container">
            <div class="breadcrumb-bg  pt-115 pb-115" style="background-image:url(assets1/img/bg/bg-04.jpg)">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>Mentor</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="index.html">home</a></li>
                                <li><span>Mentor</span></li>
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
                <div class="col-xl-8">
                    <div class="row">
                        @foreach ($mentor as $mt)
                            
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-wrapper text-center mb-35">
                                <div class="team-img">
                                    <img height="350" src="{{URL::to('assets/anh/mentor')}}/{{$mt->anh_mentor}}" alt="">
                                    {{-- <div class="team-icon">
                                        <div class="team-icon-inner">
                                            <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="twit" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="insta1" href="#"><i class="fab fa-instagram"></i></a>
                                            <a class="youtub" href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="team-text">
                                    <h4>{{$mt->Ten_mentor}}</h4>
                                    <span>{{$mt->Chuc_vu}}</span>
                                </div>
                            </div>
                        </div>
                       
                        @endforeach
                    </div>
                    {!! $mentor->links() !!}
                </div>
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="catagory-sidebar">
                        <div class="hero-sidebar-item mb-60">
                           <div class="section-title mb-30">
                               <h4>Tin xem nhiều</h4>
                           </div>
                           <div class="hero-sidebar arrow-active owl-carousel">
                               <div class="hero-post-item hero-post-item-2">
                                   @foreach ($tinxemnhieu as $xn)
                                   <div class="post-sm-list fix mb-20">
                                       <div class="post-sm-img f-left">
                                           <a href="{{URL::to('/chi-tiet-tintuc/'.$xn->Ma_Tin_Tuc,Str::slug($xn->Tieu_De))}}"><img height="50" width="50" src="{{URL::to('assets/anh/tintuc')}}/{{$xn->anh_tintuc}}" alt=""></a>
                                       </div>
                                       <div class="post-2-content fix">
                                           <div class="post-content-meta">
                                               <span><a class="meta-1 meta-3" href="#">{{$xn->Ten_Loai}}</a></span>
                                               <span><a href="">Lượt Xem: {{$xn->Luot_Xem}}</a></span>
                                               <p>
                                               <span><a class="meta-11" href="#"><i class="far fa-clock"></i>{{$xn->ngay_dang}}</a></span>
                                               </p>            
                                           </div>
                                           <h4><a href="{{URL::to('/chi-tiet-tintuc/'.$xn->Ma_Tin_Tuc,Str::slug($xn->Tieu_De))}}">{!! $xn->Tieu_De !!}</a></h4>
                                       </div>
                                   </div>
                                   @endforeach
                                
                                   
                               </div>
                              
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news-area-end -->

    <!-- subscribe-area-start -->
    
    <!-- subscribe-area-end -->

    <!-- breaking-news-area-start -->
    {{-- <div class="breaking-news-area">
        <div class="container">
            <div class="breaking-bg grey-bg">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="breaking-wrapper mb-20">
                            <div class="post-sm-list fix">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets/img/hero/b1.jpg" alt=""></a>
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