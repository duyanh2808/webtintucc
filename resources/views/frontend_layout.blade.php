
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from www.devsnews.com/template/ekagoz/ekagoz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 05:06:16 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="csrf-token" content="{{csrf_token}}"> --}}
        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="{{URL::to('assets1/img/favicon.ico')}}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{URL::to('assets1/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets1/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets1/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets1/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets1/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets1/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets1/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets1/css/slick.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets1/css/main.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets1/css/responsive.css')}}">

    </head>
    <body>

        <!-- header-start -->
		<header>
            <div class="header-top-area blue-bg d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-12 col-md-12">
                           <div class="header-wrapper">
                               <div class="header-info mr-40 f-left">
                                   <h5>Khởi Nghiệp</h5>
                               </div>
                               <div class="header-text">
                                   <ul class="breaking-active owl-carousel">
                                       <li><a> <marquee>“Hãy theo đuổi đam mê của bạn chứ không phải là tiền. Tiền cuối cùng sẽ tự tìm đến bạn” – Tony Hsieh</marquee>“Hãy theo đuổi đam mê của bạn chứ không phải là tiền. Tiền cuối cùng sẽ tự tìm đến bạn” – Tony Hsieh</a></li>
                                   </ul>
                               </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 d-flex align-items-center">
                            <div class="header-top-right f-right  d-none d-xl-block">
                                @if(Auth::check())
                                <a href=""> <img style="  background: #456BD9;
                                    border: 0.1875em solid #0F1C3F;
                                    border-radius: 50%;
                                    box-shadow: 0.375em 0.375em 0 0 rgba(15, 28, 63, 0.125);
                                   " width="50px" height="50px" alt="image" src="{{URL::to('assets/anh/admin')}}/<?php
                                    $name = Auth::user()->admin_img;
                                    if($name){
                                      echo $name;
                                     
                                    }
                                    ?>"></a>
                               <a > Chào {{Auth::user()->admin_name}}</a>|
                                <a href="{{URL::to('/logout')}}">Logout</a>
                                @else
                              <a href="{{URL::to('/login')}}"> <i class="fa fa-user"></i> Đăng nhập</a>|
                                <a href="{{URL::to('/register-auth')}}">Đăng Ký</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle-area pt-10 pb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 d-flex align-items-center">
                            <div class="logo">
                                <a href="index.html"><img src="{{URL::to('assets1/img/logo/logo11.png')}}" alt="" /></a>
                            </div>
                        </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="header-banner text-right d-none d-lg-block">
                                    <a href="https://{{$quangcao->link_quangcao}}" style="top: 50px"><center><img  height="100px" width="700px" src="{{URL::to('assets/anh/quang/'.$quangcao->anh_quangcao)}}" alt="" /></a></center>
                                </div>
                            </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-menu-area d-none d-lg-block">
                <div class="container">
                    <div class="menu-bg grey-bg position-relative">
                        <div class="row">
                            <div class="col-xl-8 col-lg-10 position-static">
                                
                                <div class="main-menu f-left">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="{{URL::to('/')}}">home</a></li>
                                            @foreach ($loai as $key => $l)
                                       
                                            <li class="static"><a href="{{URL::to('/loai-tin/'.$l->Ma_Loai,Str::slug($l->Ten_Loai))}}">{{$l->Ten_Loai}}</a></li>
                                            @endforeach
                                            <li class="static"><a href="{{URL::to('/mentor')}}">Mentor</a></li>
                                            <li class="static"><a href="{{URL::to('/startup')}}">Startup</a></li>
                                            <li class="static"><a href="{{URL::to('/life-videos')}}">Videos</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="search-icon f-left d-none d-lg-block">
                                    <a href="#" data-toggle="modal"  data-target="#search-modal" ><i class="fas fa-search" ></i></a>
                                </div>
                                
                            </div>
                            <div id="clock" class="smallfont col-md-3" style="    text-align: right;
                            color: #182229;
                            font-weight: bold;"><h1>Thứ 3 ngày 1 / 06 / 2021 01:39:47</h1></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="extra-info extra-info-left">
                <div class="close-icon">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index.html">
                        <img src="assets1/img/logo/white.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                        <p>+(090) 8765 86543 85</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                        <p>example.mail@hum.com</p>
                    </div>
                </div>
                <div class="instagram">
                    <a href="#">
                        <img src="assets1/img/portfolio/p1.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="assets1/img/portfolio/p2.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="assets1/img/portfolio/p3.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="assets1/img/portfolio/p4.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="assets1/img/portfolio/p5.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="assets1/img/portfolio/p6.jpg" alt="">
                    </a>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </header>
        <!-- header-start -->

        @yield('anh')
      
    <!-- banner-area-end -->
        <!-- footer-area-start -->
        <footer>
            <div class="footer-area blue-bg pt-165">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="footer-wrapper mb-30">
                                <h3 class="footer-title">Về Chúng Tôi </h3>
                                <div class="footer-text">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system and expound the actual teachings of the great explorer of the truth the master-builder.</p>
                                </div>
                                <div class="social-icon footer-icon">
                                    <a class="fb" href="https://www.facebook.com/profile.php?id=100009018546284"><i class="fab fa-facebook-f"></i></a>
                                  
                                    <a class="insta" href="https://www.instagram.com/dinhduyanh11/?hl=en"><i class="fab fa-instagram"></i></a>
                                   
                                    <a class="google" href="/duyanhdinh82@gmail.com"><i class="fab fa-google-plus-g"></i></a>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            {{-- <div class="footer-wrapper pl-30 mb-30">
                                <h3 class="footer-title">Information</h3>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="#">About Company</a></li>
                                        <li><a href="#">Latest News</a></li>
                                        <li><a href="#">Recent News</a></li>
                                        <li><a href="#">Meet With Us</a></li>
                                        <li><a href="#">Needs A Job ?</a></li>
                                        <li><a href="#">What We Do ?</a></li>
                                        <li><a href="#">Report Our News ?</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="footer-wrapper pl-25 mb-30">
                                <h3 class="footer-title"><Label>Loại Tin</Label></h3>
                                <div class="footer-link">
                                    <ul>
                                        @foreach ($loai as $key=>$ltin)
                                        <li><a href="{{URL::to('/loai-tin/'.$ltin->Ma_Loai,Str::slug($ltin->Ten_Loai))}}">{{$ltin->Ten_Loai}}</a></li>

                                        @endforeach
                                        <li><a href="{{URL::to('/mentor')}}">Mentor</a></li>
                                        <li><a href="{{URL::to('/startup')}}">Startup</a></li>
                                        <li><a href="{{URL::to('/life-videos')}}">Videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-5">
                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-5">
                            <div class="footer-wrapper mb-30">
                                <h3 class="footer-title">Liên Hệ</h3>
                                <ul class="footer-info">
                                    <li><span><i class="far fa-map-marker-alt"></i> 21 Trần Cảnh-Phường Cẩm Thượng-TP Hải Dương</span></li>
                                    <li><span><i class="far fa-envelope-open"></i> duyanhdinh82@gmail.com</span></li>
                                    <li><span><i class="far fa-phone"></i> +84 969845389</span></li>
                                    <li><span><i class="far fa-paper-plane"></i> www.duyanh.net</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="footer-bottom-area mt-45 pt-25 pb-25 footer-border-top">
                        <div class="row">
                            <div class="col-xl-8 col-lg-12 offset-xl-2">
                                <div class="footer-bottom-link text-center">
                                    <a href="#">About Us</a>
                                    <a href="#">Latest News</a>
                                    <a href="#">Contact Us</a>
                                    <a href="#">Popular News</a>
                                    <a href="#">Payment Type</a>
                                    <a href="#">News Type</a>
                                    <a href="#">Information</a>
                                    <a href="#">My Account</a>
                                    <a href="#"> Setting & Privacy</a>
                                </div>
                                <div class="copyright text-center">
                                    <p>Copyright <i class="far fa-copyright"></i> 2019, <a href="#">eKagoz</a> News Magazine PSD Template. All rights reserved. Design By <a href="#">BDevs</a></p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->

         <!-- Modal Search -->
         <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" autocomplete="off"  action="{{URL::to('/tim-kiem')}}">
                        {{ csrf_field() }}
                        <input type="text" name="keyword_submit" id="keywords" placeholder="nhập....">
                      
                        <button type="submit" name="search_items">
                            <i class="fa fa-search"></i>
                          
                        </button>
                        {{-- <div id="search_ajax"></div> --}}
                    </form>
                </div>
            </div>
        </div>



		<!-- JS here -->
        <script src="{{URL::to('assets1/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/popper.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/owl.carousel.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/slick.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/jquery.meanmenu.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/ajax-form.js')}}"></script>
        <script src="{{URL::to('assets1/js/wow.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/jquery.counterup.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/waypoints.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{URL::to('assets1/js/plugins.js')}}"></script>
        <script src="{{URL::to('assets1/js/main.js')}}"></script>
        <script src="{{URL::to('assets1/js/like.js')}}"></script>
        {{-- <script type="text/javascript">
        
            var Ma_Tin_Tuc = 0;
            $('.Like').on('click' , function(event) {
                event.preventDefault();
                Ma_Tin_Tuc = event.target.parentNode.parentNode.dataset['Ma_Tin_Tuc'];
                var isLike = event.target.previousElementSibling == null;
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    method : "POST",
                    url : "{{url('likeee')}}",
                    data:{Ma_Tin_Tuc:Ma_Tin_Tuc,  isLike:isLike, _token: _token  }
                })
                .done(function(){
                    event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'Đã like' : 'Like' :
                    event.target.innerText == 'Dislike' ? 'ooooo dislike' : 'Dislike';
                    if(isLike) {
                        event.target.nextElementSibling.innerText = 'Dislike';
                    }else{
                        event.target.previousElementSibling.innerText = 'Like';
                    }
                });

            });

        </script> --}}

        <script type="text/javascript">

            $(document).on('click','#saveLikeDislike',function(){
                var _post=$(this).data('post');
                var _type=$(this).data('type');
                var _admin_id=$(this).data('admin_id')
                var vm=$(this);
                // Run Ajax
                $.ajax({
                    url:"{{ url('save-likedislike') }}",
                    type:"post",
                    dataType:'json',
                    data:{
                        post:_post,
                        type:_type,
                        admin_id: _admin_id,
                        _token:"{{ csrf_token() }}"
                    },
                    beforeSend:function(){
                        vm.addClass('disabled');
                    },
                    success:function(res){
                        if(res.bool==true){
                            vm.removeClass('disabled').addClass('active');
                            vm.removeAttr('id');
                            var _prevCount=$("."+_type+"-count").text();
                            _prevCount++;
                            $("."+_type+"-count").text(_prevCount);
                        }
                    }   
                });
            });
        </script>

        <script type="text/javascript">
            function remove_background(ma){
                for(var count = 1; count <= 5; count++)
                {
                    $('#'+ ma+'-'+count ).css('color','#ccc');
                }
            }
            //hover chuột đánh giá sao 
            $(document).on('mouseenter','.list-inline-item', function(){
                var index = $(this).data("index");
                
                var ma = $(this).data("ma");
                
                    // alert(index);
                    // alert(Ma_Tin_Tuc);
                remove_background(ma);
                for( var count = 1; count<=index; count++){
                    $('#'+ma+'-'+count).css('color', '#ffcc00');
                }   
        
            });
            //nhả chuột không đánh giá 
            $(document).on('mouseenter','.list-inline-item', function(){
                var index = $(this).data("index");
                
                var ma = $(this).data("ma");
                var rating = $(this).data("rating");
              
                remove_background(ma);
                for( var count = 1; count<=rating; count++){
                    $('#'+ma+'-'+count).css('color', '#ffcc00');
                }   
        
            }); 
            //click đánh giá sao
            $(document).on('click', '.list-inline-item', function (){
                var index = $(this).data("index");
                var ma = $(this).data("ma");
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{url('insert_rating')}}",
                    method:"POST",            
                    data:{'index':index,'ma':ma,'_token':_token},
                    // console.log(index);
                    success:function(data)
                    {
                        if(data == 'done')
                        {
                            alert("Bạn đã đánh giá "+index+"trên 5");
        
                        }
                        else{
                            alert("Lỗi đánh giá");
                        }
                    }    
                });
            });         
        </script>
        <script type="text/javascript">
  
            $(document).on('click','.watch', function(){
              var id_videos = $(this).attr('id');
             console.log(id_videos);
              var _token = $('input[name="_token"]').val();
              $.ajax({
                url:"{{url('/watch-video')}}",
                method:"POST",
                dataType:"JSON",
                data:{id_videos:id_videos,_token:_token},
                success:function(data){
                  $('#ten_video').html(data.ten_video);
                  $('#link_video').html(data.link_video);
                }
              });
            });
          </script>
        <script type="text/javascript">
        $(document).ready(function(){
            load_binhluan();
        
            function load_binhluan(){
                var Ma_Tin_Tuc = $('.binhluan_tintuc_id').val();
            //alert(Ma_Tin_Tuc)
            var _token = $('input[name="_token"]').val();
                $.ajax({
                url:"{{url('/load-binhluan')}}",
                method:"POST",
               
                data:{Ma_Tin_Tuc:Ma_Tin_Tuc,_token:_token},
                success:function(data){
                 $('#show_binhluan').html(data);
                }
              });
            }
            $('.gui-binhluan').click(function(){
                var Ma_Tin_Tuc = $('.binhluan_tintuc_id').val();
                var Noi_Dung = $('.Noi_Dung').val();
                var Ten_binhluan = $('.Ten_binhluan').val();
              
              
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{url('/gui-binhluan')}}",
                    method:"POST",
               
                    data:{Ma_Tin_Tuc:Ma_Tin_Tuc,Noi_Dung:Noi_Dung,Ten_binhluan:Ten_binhluan,_token:_token},
                    success:function(data){
                        
                      
                        $('#notify_binhluan').html('<p class="text text-success">Đã gửi bình luận</p>');
                        load_binhluan();
                        $('#notify_binhluan').fadeOut(2000);
                        $('.Ten_binhluan').val('');
                        $('.Noi_Dung').val('');
                }
              });
            });
        });
        </script>

<script type="text/javascript">
    function refrClock() {
        var d = new Date();
        var s = d.getSeconds();
        var m = d.getMinutes();
        var h = d.getHours();
        var day = d.getDay();
        var date = d.getDate();
        var month = d.getMonth();
        var year = d.getFullYear();
        var days = new Array("Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");
        var months = new Array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
        var am_pm;
        if (s < 10) { s = "0" + s }
        if (m < 10) { m = "0" + m }
        if (h > 12) { h -= 12; am_pm = "Chiều" }
        else { am_pm = "Sáng" }
        if (h < 10) { h = "0" + h }
        document.getElementById("clock").innerHTML = days[day] + " ngày " + date + " / " + months[month] + " / " + year + " " + h + ":" + m + ":" + s;
        setTimeout("refrClock()", 1000);
    }
    refrClock();
</script>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="rblWxtEM"></script>
          
        
        <script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
        {{-- <script type="text/javascript">
          $('#keywords').keyup(function(){
            var query = $(this).val();

            if(query != '')
            {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{url('/autocomplete-ajax')}}",
                    method: "POST";
                    data:{query:query,_token:_token},
                    success:function(data){
                        $('#search_ajax').fadeIn();
                        $('#search_ajax').html(data);
                    }
                });
            }else{
                $('#search_ajax').fadeOut(); 
            }
          });
          $(document).on('click','.li_search_ajax',function(){
              $('#keywords').val($(this).text());
              $('#search_ajax').fadeOut();
          })
        </script> --}}
    </body>

<!-- Mirrored from www.devsnews.com/template/ekagoz/ekagoz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 05:06:49 GMT -->
</html>