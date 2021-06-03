@extends('frontend_layout')
@section('title', 'Trang Chủ')
@section('anh')
    
<main>
    
    <!-- hero-area-start -->
    <div class="hero-area hero-padding pt-50 pb-50">
        <div class="container">
            <div class="section-title mb-30">
                <h4>Tin Mới</h4>
            </div>
            <div class="row">
                @foreach ($tin as $key=>$t)
                <div class="col-xl-6 col-lg-6">
                    <div class="hero-wrapper mb-30">
                        <div class="hero-img pos-rel">
                            <a href="{{URL::to('/chi-tiet-tintuc/'.$t->Ma_Tin_Tuc,$t->Tieu_De)}}"><img height="650" src="assets/anh/tintuc/{{$t->anh_tintuc}}" alt=""></a>
                            <span class="post-cart">mới</span>
                            <div class="hero-text">
                                <div class="hero-meta">
                                    <span><a href="#"><i class="far fa-calendar-alt"></i> {{$t->ngay_dang}}</a></span>
                                    <span><i></i>Lượt xem: {{$t->Luot_Xem}}</span>
                                </div>
                                <h3><a href="{{URL::to('/chi-tiet-tintuc/'.$t->Ma_Tin_Tuc,Str::slug($t->Tieu_De))}}">{{$t->Tieu_De}}</a></h3>
                                <p>{!!substr( $t->Noi_Dung,0,300 )!!}...</p>
                                <a href="{{URL::to('/chi-tiet-tintuc/'.$t->Ma_Tin_Tuc,Str::slug($t->Tieu_De))}}"><span>Chi Tiết</span> <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                                    
                @endforeach
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        @foreach ($tintuc as $key=>$tt)
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-25">
                            <div class="postbox">
                                <div class="post-img">
                                    <a href="{{URL::to('/chi-tiet-tintuc/'.$tt->Ma_Tin_Tuc,Str::slug($tt->Tieu_De))}}"><img height="200" width="200" src="assets/anh/tintuc/{{$tt->anh_tintuc}}" alt=""></a>
                                </div>
                                <div class="post-box-text mt-30">
                                    <div class="post-box-meta">
                                        {{-- <span class="post-box-cart color-1"><a href="#">world</a></span> --}}
                                        <span class="post-box-cart1"><a href="{{URL::to('/chi-tiet-tintuc/'.$tt->Ma_Tin_Tuc,Str::slug($tt->Tieu_De))}}"><i class="far fa-calendar-alt"></i> {{$tt->ngay_dang}}</a></span>
                                    </div>
                                    <h4><a href="{{URL::to('/chi-tiet-tintuc/'.$tt->Ma_Tin_Tuc,Str::slug($tt->Tieu_De))}}">{{$tt->Tieu_De}}</a></h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-area-end -->
    <div class="hero-area pb-50">
        <div class="container">
            <div class="section-title mb-30">
                <h4>Góc Chuyên Gia</h4>
            </div>
            <div class="row">
                @foreach ($tintucc as $key=>$cc)
                    
                
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="hero-wrapper hero-04-wrapper mb-30">
                        <div class="hero-img pos-rel">
                            <a href="{{URL::to('/chi-tiet-tintuc/'.$cc->Ma_Tin_Tuc,Str::slug($cc->Tieu_De))}}"><img height="250px" width="250px" src="assets/anh/tintuc/{{$cc->anh_tintuc}}" alt=""></a>
                            
                            <span><a class="post-cart post-02-cart color-5" href="#">Góc chuyên gia</a></span>
                            <div class="hero-text">
                                <div class="hero-meta">
                                    <span><a href="#"><i class="far fa-user"></i>{{$cc->admin_name}}</a></span>
                                    <span><i class="far fa-calendar-alt"></i>{{$cc->ngay_dang}}</span>
                                </div>
                                <h3><a href="{{URL::to('/chi-tiet-tintuc/'.$cc->Ma_Tin_Tuc,Str::slug($cc->Tieu_De))}}">{{$cc->Tieu_De}}</a></h3>
                                {{-- <a href="#"><span>Read More</span> <i class="far fa-long-arrow-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
       <!-- banner-area-start -->
       <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="banner-2-img">
                        <a href="https://{{$quangcao1->link_quangcao}}"><img height="150px" width="700px"  src="{{URL::to('assets/anh/quang/'.$quangcao1->anh_quangcao)}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- <div>    
    <!-- add-area-start -->
    <div class="add-area pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="section-title mb-30">
                        <h4>Trending News</h4>
                    </div>
                    <div class="hero-sidebar arrow-active owl-carousel">
                        <div class="hero-post-item">
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t1.jpg" alt=""></a>
                                </div>
                                <div class="post-content fix">
                                    <h4><a href="#">DPL to return layer transfer system </a></h4>
                                    <span>Johnie D. Pena</span>
                                </div>
                            </div>
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t2.jpg" alt=""></a>
                                </div>
                                <div class="post-content fix">
                                    <h4><a href="#">Climate Disasters hildren face risk</a> </h4>
                                    <span>Johnie D. Pena</span>
                                </div>
                            </div>
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t3.jpg" alt=""></a>
                                </div>
                                <div class="post-content fix">
                                    <h4><a href="#">Will the real custo dians please stan </a>  </h4>
                                    <span>Johnie D. Pena</span>
                                </div>
                            </div>
                            <div class="post-sm-list fix">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t4.jpg" alt=""></a>
                                </div>
                                <div class="post-content fix">
                                    <h4><a href="#">Shun Malaysia, In dia’s palm oil </a>  </h4>
                                    <span>Johnie D. Pena</span>
                                </div>
                            </div>
                        </div>
                        <div class="hero-post-item">
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t1.jpg" alt=""></a>
                                </div>
                                <div class="post-content fix">
                                    <h4><a href="#">DPL to return layer transfer system </a></h4>
                                    <span>Johnie D. Pena</span>
                                </div>
                            </div>
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t2.jpg" alt=""></a>
                                </div>
                                <div class="post-content fix">
                                    <h4><a href="#">Climate Disasters hildren face risk</a> </h4>
                                    <span>Johnie D. Pena</span>
                                </div>
                            </div>
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t3.jpg" alt=""></a>
                                </div>
                                <div class="post-content fix">
                                    <h4><a href="#">Will the real custo dians please stan </a>  </h4>
                                    <span>Johnie D. Pena</span>
                                </div>
                            </div>
                            <div class="post-sm-list fix">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t4.jpg" alt=""></a>
                                </div>
                                <div class="post-content fix">
                                    <h4><a href="#">Shun Malaysia, In dia’s palm oil </a>  </h4>
                                    <span>Johnie D. Pena</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="section-title mb-30">
                        <h4>Latest News</h4>
                    </div>
                    <div class="arrow-active owl-carousel">
                        <div class="latest-news-wrapper">
                            <div class="latest-news-img pos-rel">
                                <a href="#"><img src="assets1/img/hero/news-01.jpg" alt=""></a>
                                <span class="news-cart">tech</span>
                            </div>
                            <div class="latest-news-text">
                                <h4><a href="#">Employeeas of Indian states to banks strike against</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete</p>
                            </div>
                        </div>
                        <div class="latest-news-wrapper">
                            <div class="latest-news-img pos-rel">
                                <a href="#"><img src="assets1/img/hero/news-01.jpg" alt=""></a>
                                <span class="news-cart">tech</span>
                            </div>
                            <div class="latest-news-text">
                                <h4><a href="#">Employeeas of Indian states to banks strike against</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="section-title mb-30">
                        <h4>Recent News</h4>
                    </div>
                    <div class="arrow-active owl-carousel">
                        <div class="recent-news-item">
                            <div class="recent-news-wrapper mb-20">
                                <div class="recent-news-img pos-rel">
                                    <a href="#"><img src="assets1/img/hero/rec-01.jpg" alt=""></a>
                                    <div class="recent-news-text">
                                        <span class="recent-cart color-5"><a href="#">history</a></span>
                                        <h5><a href="#">Influential quarter, workers’ igran ce hamper trade unionism</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-news-wrapper">
                                <div class="recent-news-img pos-rel">
                                    <a href="#"><img src="assets1/img/hero/rec-02.jpg" alt=""></a>
                                    <div class="recent-news-text">
                                        <span class="recent-cart color-6"><a href="#">world</a></span>
                                        <h5><a href="#">Bongo to co-produce Farooki’s ‘No Land’s Man’ there sesn</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="recent-news-item">
                            <div class="recent-news-wrapper mb-20">
                                <div class="recent-news-img pos-rel">
                                    <a href="#"><img src="assets1/img/hero/rec-01.jpg" alt=""></a>
                                    <div class="recent-news-text">
                                        <span class="recent-cart color-5"><a href="#">history</a></span>
                                        <h5><a href="#">Influential quarter, workers’ igran ce hamper trade unionism</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-news-wrapper">
                                <div class="recent-news-img pos-rel">
                                    <a href="#"><img src="assets1/img/hero/rec-02.jpg" alt=""></a>
                                    <div class="recent-news-text">
                                        <span class="recent-cart color-6"><a href="#">world</a></span>
                                        <h5><a href="#">Bongo to co-produce Farooki’s ‘No Land’s Man’ there sesn</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="section-title mb-30">
                        <h4>Join With Us</h4>
                    </div>
                    <div class="social-wrapper">
                        <div class="social-icon">
                            <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="twit" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="insta" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="pin" href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a class="google" href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                        <div class="banner-2-img mt-40">
                            <a href="#"><img src="assets1/img/banner/banner-02.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add-area-end -->
</div> --}}
  <!-- video-news-area-start -->
  <div class="video-news-area pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title section-2 mb-30">
                    <h4 class="f-left">Videos</h4>
           
                </div>
            </div>
        </div>
        <div class="row">
       
            <div class="col-xl-7 col-lg-7">
                <div class="hero-wrapper hero-02-wrapper mb-30">
                    <div class="hero-img pos-rel">
                        <a href="{{URL::to('/chi-tiet-tintuc/'.$tin1->Ma_Tin_Tuc,Str::slug($tin1->Tieu_De))}}"><img height="650" src="assets/anh/tintuc/{{$tin1->anh_tintuc}}" alt=""></a>
                        <span><a class="post-cart" href="#">{{$tin1->Ten_Loai}}</a></span>
                        <div class="hero-text">
                            <div class="hero-meta">
                                <span><a href="#"><i class="far fa-calendar-alt"></i>{{$tin1->ngay_dang}}</a></span>
                                <span><i class=""></i>Lượt xem: {{$tin1->Luot_Xem}}</span>
                            </div>
                            <h3><a href="{{URL::to('/chi-tiet-tintuc/'.$tin1->Ma_Tin_Tuc,Str::slug($tin1->Tieu_De))}}">{{$tin1->Tieu_De}}</a></h3>
                            <a href="{{URL::to('/chi-tiet-tintuc/'.$tin1->Ma_Tin_Tuc,Str::slug($tin1->Tieu_De))}}"><span>Chi Tiết</span> <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="col-xl-5 col-lg-5 mb-30">
                 @foreach ($video as $key=>$vi)
                <div class="hero-post-item news-post-item">
                  
                        
                    
                    <div class="post-sm-list fix mb-20">
                        <div class="post-sm-img f-left pos-rel">
                            <a href="#"><img src="{{URL::to('assets1/img/news/'.$vi->img_video)}}" alt=""></a>
                            <div class="news-video-icon " >
                                <a class="popup-video watch" type="button"  data-toggle="modal" data-target="#modal_video"
                                id="{{$vi->id_videos}}"><i class="far fa-play"></i></a>
                            </div>
                        </div>
                        <div class="post-2-content fix">
                            <span class="recent-cart color-7"><a href="#">VIDEOS</a></span>
                            <h4><a href="#">{{$vi->ten_video}}</a></h4>
                            <div class="post-content-meta">
                                <span><a class="meta-11" href="#"><i class=""></i> {{substr($vi->desc_video,0,50)}}</a></span>
                                
                            </div>
                        </div>
                    </div>
                 
                </div>
                 @endforeach 
            </div>
        </div>
    </div>
</div>
    <!-- news-02-area-start -->
    <div class="news-02-area pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title section-2 mb-30">
                        <h4 class="f-left">Tổng hợp</h4>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($xuhuong as $item)
                    
               
                <div class="col-xl-3 col-lg-6">
                    <div class="recent-news-wrapper mb-30">
                        <div class="recent-news-img pos-rel">
                            <a href="{{URL::to('/chi-tiet-tintuc/'.$item->Ma_Tin_Tuc,Str::slug($item->Tieu_De))}}"><img height="430"  src="assets/anh/tintuc/{{$item->anh_tintuc}}" alt=""></a>
                           
                            <div class="recent-news-text recent-news-02-text text-center">
                                <span class="recent-cart color-7"><a href="#">Xu hướng  </a></span>
                                <h5><a href="{{URL::to('/chi-tiet-tintuc/'.$item->Ma_Tin_Tuc,Str::slug($item->Tieu_De))}}">{{$item->Tieu_De}}</a></h5>
                                <div class="post-content-meta news-02-meta">
                                    <span><a class="meta-11 meta-22" href="#"><i class="far fa-clock"></i> {{$item->ngay_dang}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        @foreach ($ytuong as $yt)                                                    
                        <div class="col-xl-6">
                            <div class="recent-news-wrapper mb-30">
                                <div class="recent-news-img pos-rel">
                                    <a href="{{URL::to('/chi-tiet-tintuc/'.$yt->Ma_Tin_Tuc,Str::slug($yt->Tieu_De))}}"><img height="200" width="200" src="assets/anh/tintuc/{{$yt->anh_tintuc}}" alt=""></a>
                                    <div class="recent-news-text">
                                        <span class="recent-cart color-5"><a href="#">Ý tưởng</a></span>
                                        <h5><a href="{{URL::to('/chi-tiet-tintuc/'.$yt->Ma_Tin_Tuc,Str::slug($yt->Tieu_De))}}">{{$yt->Tieu_De}}</a></h5>
                                        <div class="post-content-meta news-02-meta">
                                            <span><a class="meta-11 meta-22" href="#"><i class="far fa-clock"></i>{{ $yt->ngay_dang }}</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    @foreach ($hanhtrinh as $ht)                    
                    <div class="recent-news-wrapper mb-30">
                        <div class="recent-news-img pos-rel">
                            <a href="{{URL::to('/chi-tiet-tintuc/'.$ht->Ma_Tin_Tuc,Str::slug($ht->Tieu_De))}}"><img height="430"  src="assets/anh/tintuc/{{$ht->anh_tintuc}}" alt=""></a>
                            <div class="recent-news-text recent-news-02-text text-center">
                                <span class="recent-cart color-8"><a href="#">Hành trình</a></span>
                                <h5><a href="{{URL::to('/chi-tiet-tintuc/'.$ht->Ma_Tin_Tuc,Str::slug($ht->Tieu_De))}}">{{$ht->Tieu_De}}</a></h5>
                                <div class="post-content-meta news-02-meta">
                                    <span><a class="meta-11 meta-22" href="#"><i class="far fa-clock"></i>{{$ht->ngay_dang}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- news-02-area-end -->

{{-- <div>   
    <!-- video-news-area-start -->
    <div class="video-news-area pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title section-2 mb-30">
                        <h4 class="f-left">Most Views News</h4>
                        <div class="news-button news-02-button f-right">
                            <a href="#">View All News</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="hero-wrapper hero-02-wrapper mb-30">
                        <div class="hero-img pos-rel">
                            <a href="#"><img src="assets1/img/hero/09.jpg" alt=""></a>
                            <span><a class="post-cart" href="#">musical</a></span>
                            <div class="hero-text">
                                <div class="hero-meta">
                                    <span><a href="#"><i class="far fa-calendar-alt"></i> 12 July 2018</a></span>
                                    <span><i class="far fa-comment"></i> (05)</span>
                                </div>
                                <h3><a href="#">Vehicles without valid fitness was docs can’t collect fuels ruspect dem clarifications from Italy</a></h3>
                                <a href="#"><span>Read More</span> <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 mb-30">
                    <div class="hero-post-item news-post-item">
                        <div class="post-sm-list fix mb-20">
                            <div class="post-sm-img f-left pos-rel">
                                <a href="#"><img src="assets1/img/hero/v1.jpg" alt=""></a>
                                <div class="news-video-icon">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=LTXD6XZXc3U"><i class="far fa-play"></i></a>
                                </div>
                            </div>
                            <div class="post-2-content fix">
                                <span class="recent-cart color-7"><a href="#">health</a></span>
                                <h4><a href="#">Bahurupi natya sangstha and  angan belgharia stage</a></h4>
                                <div class="post-content-meta">
                                    <span><a class="meta-11" href="#"><i class="far fa-user"></i> Kalima DJ</a></span>
                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="post-sm-list fix mb-20">
                            <div class="post-sm-img f-left pos-rel">
                                <a href="#"><img src="assets1/img/hero/v2.jpg" alt=""></a>
                                <div class="news-video-icon">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=LTXD6XZXc3U"><i class="far fa-play"></i></a>
                                </div>
                            </div>
                            <div class="post-2-content fix">
                                <span class="recent-cart color-2"><a href="#">travel</a></span>
                                <h4><a href="#">New demands mirror Cricket Australia’s 2017 gridlock</a></h4>
                                <div class="post-content-meta">
                                    <span><a class="meta-11" href="#"><i class="far fa-user"></i> Kalima DJ</a></span>
                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="post-sm-list fix mb-20">
                            <div class="post-sm-img f-left pos-rel">
                                <a href="#"><img src="assets1/img/hero/v3.jpg" alt=""></a>
                                <div class="news-video-icon">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=LTXD6XZXc3U"><i class="far fa-play"></i></a>
                                </div>
                            </div>
                            <div class="post-2-content fix">
                                <span class="recent-cart color-3"><a href="#">lifestyle</a></span>
                                <h4><a href="#">China offers tariff-free quota for 10m tonnes soybean</a></h4>
                                <div class="post-content-meta">
                                    <span><a class="meta-11" href="#"><i class="far fa-user"></i> Kalima DJ</a></span>
                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="post-sm-list fix">
                            <div class="post-sm-img f-left pos-rel">
                                <a href="#"><img src="assets1/img/hero/v4.jpg" alt=""></a>
                                <div class="news-video-icon">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=LTXD6XZXc3U"><i class="far fa-play"></i></a>
                                </div>
                            </div>
                            <div class="post-2-content fix">
                                <span class="recent-cart color-8"><a href="#">health</a></span>
                                <h4><a href="#">Bahurupi natya sangstha and  angan belgharia stage</a></h4>
                                <div class="post-content-meta">
                                    <span><a class="meta-11" href="#"><i class="far fa-user"></i> Kalima DJ</a></span>
                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video-news-area-start -->

    <!-- news-area-start -->
     <div class="news-area grey-2-bg pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title mb-30">
                        <h4>Lifestyle & Fashion</h4>
                    </div>
                    <div class="row">
                        <div class="news-02-active owl-carousel">
                            <div class="col-xl-12">
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
                            <div class="col-xl-12">
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
                            </div>
                            <div class="col-xl-12">
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
                            <div class="col-xl-12">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="section-title mb-30">
                        <h4>Newsletters</h4>
                    </div>
                    <div class="newsletter-wrapper" style="background-image:url(assets1/img/hero/news.jpg)">
                        <div class="newsletter-title">
                            <h4>Subscribe Out Newsletters</h4>
                            <h3>to get more news & update</h3>
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
            </div>
        </div>
    </div> 
    <!-- news-area-end -->

    <!-- news-03-area-start -->
    <div class="news-03-area pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 mb-30">
                    <div class="section-title mb-30">
                        <h4>Health & Food News</h4>
                    </div>
                    <div class="hero-sidebar arrow-active owl-carousel">
                        <div class="hero-post-item hero-post-item-2">
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t8.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1" href="#">Organic</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Bahurupi natya sangstha and  angan belgharia stage</a></h4>
                                </div>
                            </div>
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t9.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1 meta-2" href="#">lemon</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">DDhaka international folk fest 2019 to open on november</a></h4>
                                </div>
                            </div>
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t10.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1 meta-3" href="#">vegetables</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>
                                </div>
                            </div>
                            <div class="post-sm-list fix">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t11.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1 meta-4" href="#">technology</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="hero-post-item hero-post-item-2">
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t8.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1" href="#">Organic</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Bahurupi natya sangstha and  angan belgharia stage</a></h4>
                                </div>
                            </div>
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t9.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1 meta-2" href="#">lemon</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">DDhaka international folk fest 2019 to open on november</a></h4>
                                </div>
                            </div>
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t10.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1 meta-3" href="#">vegetables</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>
                                </div>
                            </div>
                            <div class="post-sm-list fix">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t11.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1 meta-4" href="#">technology</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4  col-lg-6">
                    <div class="section-title mb-30">
                        <h4>Fashion & Style</h4>
                    </div>
                    <div class="arrow-active owl-carousel">
                        <div class="hero-item mb-30">
                            <div class="hero-wrapper hero-03-wrapper">
                                <div class="hero-img pos-rel">
                                    <a href="#"><img src="assets1/img/hero/10.jpg" alt=""></a>
                                    <span><a class="post-cart" href="#">fashion</a></span>
                                    <div class="hero-text">
                                        <div class="hero-meta">
                                            <span><a href="#"><i class="far fa-calendar-alt"></i> 12 July 2018</a></span>
                                            <span><i class="far fa-comment"></i> (05)</span>
                                        </div>
                                        <h3><a href="#">Vehicles without valid fitness was
                                            can’t collect fuels ruspect</a></h3>
                                        <a href="#"><span>Read More</span> <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-sm-list fix mt-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t12.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1 meta-3" href="#">romantic</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="hero-item mb-30">
                            <div class="hero-wrapper hero-03-wrapper">
                                <div class="hero-img pos-rel">
                                    <a href="#"><img src="assets1/img/hero/10.jpg" alt=""></a>
                                    <span><a class="post-cart" href="#">fashion</a></span>
                                    <div class="hero-text">
                                        <div class="hero-meta">
                                            <span><a href="#"><i class="far fa-calendar-alt"></i> 12 July 2018</a></span>
                                            <span><i class="far fa-comment"></i> (05)</span>
                                        </div>
                                        <h3><a href="#">Vehicles without valid fitness was
                                            can’t collect fuels ruspect</a></h3>
                                        <a href="#"><span>Read More</span> <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-sm-list fix mt-20">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/t12.jpg" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <div class="post-content-meta">
                                        <span><a class="meta-1 meta-3" href="#">romantic</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-30">
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
                        <a href="#">News & Blog</a>
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
                        <a href="#"><img src="assets1/img/banner/banner-04.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news-03-area-end -->

    <!-- hero-area-start -->

    <!-- hero-area-end -->

    <!-- breaking-news-area-start -->
    <div class="breaking-news-area">
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
                                    <a href="#"><img src="assets1/img/hero/b2.jpg" alt=""></a>
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
                    <div class="col-xl-4 col-lg-6 col-md-6 d-none d-xl-block">
                        <div class="breaking-wrapper mb-20">
                            <div class="post-sm-list fix">
                                <div class="post-sm-img f-left">
                                    <a href="#"><img src="assets1/img/hero/b3.jpg" alt=""></a>
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
    </div>
    <!-- breaking-news-area-end -->
</div>     --}}
</main>
        <!-- Modal xem video-->
<div class="modal fade" id="modal_video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ten_video"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="link_video"></div>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>

        </div> --}}
      </div>
    </div>
  </div>
@endsection