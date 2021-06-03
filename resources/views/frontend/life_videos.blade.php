@extends('frontend_layout')
@section('title', 'Videos')
@section('anh')
<main>

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area pt-30 hero-padding">
        <div class="container">
            <div class="breadcrumb-bg  pt-115 pb-115" style="background-image:url(assets1/img/bg/bg-02.jpg)">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>Videos</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="index.html">home</a></li>
                                <li><span>Videos</span></li>
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
                    @foreach ($all_videos as $key=>$vid)          
                   
                    <div class="row">
                      
                        <div class="col-xl-5 col-lg-6 mb-30">
                        <form action="">
                            @csrf         
                            <div class="lifestyle-img">
                                <a><img src="{{URL::to('assets1/img/news/'.$vid->img_video)}}" width="300" height="250" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 mb-30">
                            <div class="lifestyle-text lifestyle-04-text">
                              
                                <h4><a href="#">{{$vid->ten_video}}</a></h4>
                                <p>{{$vid->desc_video}}</p>
                                {{-- <div class="post-content-meta"> --}}
                                    <button type="button" class="btn btn-primary watch" data-toggle="modal" data-target="#modal_video"
                                    id="{{$vid->id_videos}}">
                                        Xem Videos
                                    </button>                               
                                 {{-- </div> --}}
                            </div>
                        </div>
                     </form>
                    </div>
                {{-- </form> --}}
                    @endforeach
                    
                            {!! $all_videos->links() !!}
                          
                    {{-- <div class="banner-2-img mt-25 mb-60">
                        <a href="#"><img src="assets/img/banner/004.jpg" alt=""></a>
                    </div> --}}
               
                    {{-- <div class="banner-2-img mt-25 mb-60">
                        <a href="#"><img src="assets/img/banner/003.jpg" alt=""></a>
                    </div>
                    --}}
                    
                </div>
                <div class="col-xl-4 col-lg-4 mb-30">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- news-area-end -->

    <!-- breaking-news-area-start -->
    
    <!-- breaking-news-area-end -->



</main>
<!-- Modal xem video-->
<div class="modal fade" id="modal_video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ten_video"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            
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