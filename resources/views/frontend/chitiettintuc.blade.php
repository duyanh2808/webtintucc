@extends('frontend_layout')
@section('title', $tin_name->Tieu_De)   
@section('anh')
<main>
    <!-- news-area-start -->
    <div class="news-area hero-padding pt-80 pb-50" >
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="layout-wrapper mb-30">
                        <?php
                        $message = Session::get('message');
                        if($message){
                          echo $message;
                          Session::put('message', null);
                        }
                        ?>
                        @foreach ($chitiet as $key=>$ct)
                            
                        
                       
                        <div class="lifestyle-wrapper mb-55">
                            <div class="lifestyle-text lifestyle-02-text">
                      
                                        {{-- <span class="recent-cart color-3 mr-20">{{$loai_name->Ten_Loai}}</span>  --}}
                                   
                                   {{-- <span class="recent-cart color-3 mr-20">{{$loainame->Ten_Loai}}</span>  --}}
                                                                      
   
                                   {{-- <a href="#" class="Like">{{ Auth::user()->like_or_dislike()->where('Ma_Tin_Tuc', $ct->Ma_Tin_Tuc)->first() ? Auth::user()->like_or_dislike()->where('Ma_Tin_Tuc', $ct->Ma_Tin_Tuc)->first()->Like == 1 ? 'Đã like' : 'Like' : 'Like' }}</a>
                                   <a href="#" class="Like">{{ Auth::user()->like_or_dislike()->where('Ma_Tin_Tuc', $ct->Ma_Tin_Tuc)->first() ? Auth::user()->like_or_dislike()->where('Ma_Tin_Tuc', $ct->Ma_Tin_Tuc)->first()->Like == 0 ? 'Đã dislike' : 'Dislike' : 'dislike' }}</a> --}}
     
                                <span class="recent-cart color-3 mr-20">{{$ct->Ten_Loai}}</span> 
                                <span class="post-box-cart1 mr-20"><a href="#"><i class="far fa-user"></i>{{$ct->admin_name}}</a></span>
                                <span class="post-box-cart1 mr-20"><a href="#"><i class="far fa-clock"></i> {{$ct->ngay_dang}}</a></span>
                                <span class="post-box-cart1 mr-20"><a href="#">Lượt Xem: {{$tintuc->Luot_Xem + 1 }} </a></span>
                                {{-- <span class="recent-cart color-2 mr-20"><a href="{{URL::to('/like/'.$ct->Ma_Tin_Tuc)}}"><i class="far fa-thumbs-up"></i>Thích</a></span>
                                <span class="recent-cart color-2 mr-20"><a href="{{URL::to('/dislike/'.$ct->Ma_Tin_Tuc)}}"><i class="far fa-thumbs-down"></i>Không thích</a></span>  --}}
                                <h1>{{$ct->Tieu_De}}</h1>
                                <p>{{$ct->Tom_Tat}}</p>
                                <p>{!!$ct->Noi_Dung!!}</p>
                            </div>
                        </div>
                        <div class="layout-img mb-30">
                            <img src="{{URL::to('assets/anh/tintuc')}}/{{$ct->anh_tintuc}}" alt="">
                        </div>
                     
                        <div class="layout-content mt-25 mb-50">
                            <p>{!! $ct->Tu_Khoa !!}</p>
                        </div>  
                        <div class="row">
                            <div class="col-xl-8 col-lg-7 col-md-6">
                                <div class="blog-post-tag">
                                    <span>Tags : </span>
                                    @php
                                    $tag = $ct->tag;
                                    $tag = explode(",",$tag); 
                                    
                                    @endphp  
                                    @foreach ($tag as $tag)
                                    <a href="{{URL::to('/tag/'.$tag)}}">
                                      {{$tag}}
                                    </a>
                                    @endforeach  
                                    
                               
                                </div>
                            </div>            
                            <span style="padding: 10px 10px" title="Likes" id="saveLikeDislike" data-type="like" data-post="{{ $ct->Ma_Tin_Tuc}}" data-admin_id="{{$ct->admin_id}}" class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold">
                                Like
                                <span class="like-count">{{ $ct->likes() }}</span>
                            </span>
                            <span style="padding: 10px 10px" title="Dislikes" id="saveLikeDislike" data-type="dislike" data-type="dislike" data-post="{{ $ct->Ma_Tin_Tuc}}"  data-admin_id="{{$ct->admin_id}}" class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold">
                                Dislike
                             <span class="dislike-count">{{ $ct->dislikes() }}</span>
                            </span>
                                    
                        </div>
                        <center>  
                        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                    </center>  <div class="author mt-55 mb-55 fix">
                            <div class="author-img f-left">
                                
                            </div>
                            <div class="author-text fix">
                                <h4>Đánh Giá Sao    </h4>
                               <ul class="list-inline" title="Average Rating">
                                @for ($count = 1;$count <= 5; $count++)
                                    @php
                                         if ($count<=$rating) {
                                         $color = 'color:#ffcc00';
                                     }   
                                     else {
                                         $color = 'color:#ccc'; 
                                     }
                                    @endphp
                                
                                 <li title="đánh giá sao"
                                    id="{{$ct->Ma_Tin_Tuc}}-{{$count}}"
                                    data-index="{{$count}}"
                                    data-ma="{{$ct->Ma_Tin_Tuc}}"
                                    data-rating="{{$rating}}"
                                    class="list-inline-item"
                                    style="cursor: pointer; {{$color}}; font-size:30px;">
                                    &#9733;
                                </li>
                                @endfor
                               </ul>
                            </div>
                        </div>                                                      
                        
             
                        
                     
                        <div class="post-comments">
                            <div class="section-title mb-30">
                                <h4>Bình Luận</h4>
                            </div>
                            <div class="latest-comments">
                                <ul>
                                    
                                        <form >
                                            @csrf
                                             <input type="hidden" name="binhluan_tintuc_id" class="binhluan_tintuc_id" value="{{$ct->Ma_Tin_Tuc}}">
                                            <div id="show_binhluan"></div>
                                       
                                    </form>
                                  
                                    {{-- <li class="children">
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="assets/img/layout/02.png" alt="">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Julias Roy</h5>
                                                    <span>19th May 2018</span>
                                                    <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation
                                                    ullamco laboris nisi ut aliquip.</p>
                                            </div>
                                        </div>
                                    </li> --}}

                                    {{-- <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="assets/img/layout/03.png" alt="">

                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Arista Williamson</h5>
                                                    <span>19th May 2018</span>
                                                    <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation
                                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="post-comments-form">
                            <div class="section-title mb-30">
                                <h4>Viết Bình Luận</h4>
                            </div>
                            <form id="contacts-form" class="conatct-post-form" >
                                
                                {{-- <input type="hidden" name="Ngay_Tao" class="Ngay_Tao" "> --}}
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-name">
                                            <input type="text" class="Ten_binhluan" placeholder="Bạn Tên....">
                                        </div>
                                    </div>
                                   
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-message">
                                            <textarea name="Noi_Dung" class="Noi_Dung" id="Noi_Dung" cols="30" rows="10" placeholder="Nội Dung...."></textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="col-xl-12">
                                        <button class="gui-binhluan" type="button">Gửi</button>
                                    </div>
                                 
                                </div>
                                <div id="notify_binhluan"></div>
                            </form>
                        </div>

                        @endforeach
                    </div>

                    <div class="row mb-30">
                        <div class="col-xl-12 mb-30">
                            <div class="section-title mb-30">
                                <h4>Tin Liên Quan</h4>
                            </div>
                            <div class="row">
                                <div class="news-active owl-carousel">
                                    @foreach ($related as $key=>$rel)                                                                           
                                    <div class="col-xl-12">
                                        <div class="postbox">
                                            <div class="post-img">
                                                <a href="{{URL::to('/chi-tiet-tintuc/'.$rel->Ma_Tin_Tuc,Str::slug($rel->Tieu_De))}}"><img height="200" width="200" src="{{URL::to('assets/anh/tintuc')}}/{{$rel->anh_tintuc}}" alt=""></a>
                                            </div>
                                            <div class="post-box-text mt-30">
                                                <div class="post-box-meta">
                                                    <span class="post-box-cart1"><a href="#"><i class="far fa-clock"></i> {{$rel->ngay_dang}}</a></span>
                                                </div>
                                                <h4><a href="{{URL::to('/chi-tiet-tintuc/'.$rel->Ma_Tin_Tuc,Str::slug($rel->Tieu_De))}}">{{$rel->Tieu_De}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>





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
                        {{-- <div class="hero-sidebar-item mb-60">
                            <div class="section-title mb-30">
                                <h4>Recommended</h4>
                            </div>
                            <div class="hero-sidebar arrow-active owl-carousel">
                                <div class="hero-post-item hero-post-item-2">
                                    @foreach ($tin as $key=>$rel)
                                    <div class="post-sm-list fix mb-20">
                                        <div class="post-sm-img f-left">
                                            <a href="{{URL::to('/chi-tiet-tintuc/'.$rel->Ma_Tin_Tuc)}}"><img src="{{URL::to('assets/anh/tintuc')}}/{{$rel->anh_tintuc}}" alt=""></a>
                                        </div>
                                        <div class="post-2-content fix">
                                            <div class="post-content-meta">
                                                <span><a class="meta-1 meta-3" href="#">{{$rel->Ten_Loai}}</a></span>
                                                <span><a class="meta-11" href="#"><i class="far fa-clock"></i>{{$rel->ngay_dang}}</a></span>
                                            </div>
                                            <h4><a href="#">{!!substr($rel->Noi_Dung,0,100)!!}...</a></h4>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>   
                            </div>
                        </div> --}}
                        {{-- <div class="newsletter mb-60">
                            <div class="section-title mb-30">
                                <h4>Newsletters</h4>
                            </div>
                            <div class="newsletter-wrapper" style="background-image:url(assets/img/hero/news.jpg)">
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
                        </div> --}}
                        <div class="popular-tag-sidebar">
                            <div class="section-title mb-30">
                                <h4>các Loại Bài</h4>
                            </div>
                            <div class="popular-tag">
                                @foreach ($loai as $key => $l)
                                <a href="{{URL::to('/loai-tin/'.$l->Ma_Loai,Str::slug($l->Ten_Loai))}}">{{$l->Ten_Loai}}</a>
                               @endforeach
                                <a href="#">Travel</a>
                                <a href="#">Lifestyle</a>
                                <a href="#">Gaming</a>
                            </div>
                            <div class="banner-2-img mt-30">
                                <a href="#"><img src="assets/img/banner/002.jpg" alt=""></a>
                            </div>
                        </div>

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
