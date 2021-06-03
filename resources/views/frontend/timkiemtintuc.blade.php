@extends('frontend_layout')
@section('anh')
<main>
    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area pt-30 hero-padding">
        <div class="container">
            <div class="breadcrumb-bg  pt-115 pb-115" style="background-image:url({{URL::to('assets1/img/bg/bg-02.jpg')}})">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>Kết quả: {{$keywords}}</h1>
                            
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
                        @foreach ($search_tintuc as $key=> $ll)
                            
                        
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-25">
                            <div class="postbox">
                                <div class="post-img">
                                    <a href="{{URL::to('/chi-tiet-tintuc/'.$ll->Ma_Tin_Tuc)}}"><img height="300px" width="200px" src="{{URL::to('assets/anh/tintuc')}}/{{$ll->anh_tintuc}}" alt=""></a>
                                </div>
                                <div class="post-box-text mt-30">
                                    <div class="post-box-meta">
                                        <span class="post-box-cart1"><a href="#"><i class="far fa-calendar-alt"></i>{{$ll->ngay_dang}}</a></span>
                                    </div>
                                    <h4><a href="#">{{$ll->Tieu_De}}</a></h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    

                </div>
               
            </div>
        </div>
    </div>
    <!-- news-area-end -->

    <!-- breaking-news-area-start -->
   
    <!-- breaking-news-area-end -->
</main>
@endsection