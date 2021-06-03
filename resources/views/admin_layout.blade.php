
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Oct 2020 11:07:30 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{csrf_token()}}">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{URL::to('assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{URL::to('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::to('assets/css/components.css')}}">
  <link rel="stylesheet" href="{{URL::to('assets/bundles/bootstrap-social/bootstrap-social.css')}}">
  <link rel="stylesheet" href="{{URL::to('assets/bundles/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap-tagsinput.css')}}">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href='{{URL::to('assets/img/favicon.ico')}}' />
  
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"><i
                  class="fas fa-bars"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                  <i class="fas fa-expand"></i>
                </a>
            </li>
            <li>
              <div class="search-group">
                <span class="nav-link nav-link-lg" id="search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </span>
                <input type="text" class="search-control" placeholder="search" aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
       
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="{{URL::to('assets/anh/admin')}}/<?php
              $name = Auth::user()->admin_img;
              if($name){
                echo $name;
               
              }
              ?>" class="user-img-radious-style">
              <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Hello  <?php
                $name = Auth::user()->admin_name;
                if($name){
                  echo $name;
                 
                }
                 ?></div>
             {{-- <a href="profile.html" class="dropdown-item has-icon">
                <i ></i> Profile
              </a>
              <a href="timeline.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a> --}}
              <a href="{{URL::to('/impersonate-destroy')}}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> DỪNG QUYỀN 
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{URL::to('/logout-auth')}}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">
              <img alt="image" src="{{URL::to('assets/img/logo.png')}}" class="header-logo" />
              <span class="logo-name">Admin</span>
            </a>
          </div>
          <ul class="sidebar-menu">
          	<li class="dropdown active" style="display: block;">
          		 <div class="sidebar-profile">
	                 <div class="siderbar-profile-pic">
	                     <img src="{{URL::to('assets/anh/admin')}}/<?php
                        $name = Auth::user()->admin_img;
                        if($name){
                          echo $name;
                         
                        }
                        ?>" class="profile-img-circle box-center" alt="User Image">
	                 </div>
	                 <div class="siderbar-profile-details">
	                     <div class="siderbar-profile-name">    
                        <?php
                        $name = Auth::user()->admin_name;
                        if($name){
                          echo $name;
                         
                        }
                        ?></div>
	                     <div class="siderbar-profile-position">Manager </div>
	                 </div>
	                 <div class="sidebar-profile-buttons">
	                     <a class="tooltips waves-effect waves-block toggled" href="profile.html" data-toggle="tooltip" title="" data-original-title="Profile">
	                         <i class="fas fa-user sidebarQuickIcon"></i>
	                     </a>
	                     <a class="tooltips waves-effect waves-block" href="email-inbox.html" data-toggle="tooltip" title="" data-original-title="Mail">
	                         <i class="fas fa-envelope sidebarQuickIcon"></i>
	                     </a>
	                     <a class="tooltips waves-effect waves-block" href="chat.html" data-toggle="tooltip" title="" data-original-title="Chat">
                        <i class="fas fa-comment-dots  sidebarQuickIcon"></i>
	                     </a>
	                     <a class="tooltips waves-effect waves-block" href="" data-toggle="tooltip" title="" data-original-title="Logout">
                        <i class="fas fa-share-square sidebarQuickIcon"></i>
	                     </a>
	                 </div>
                 </div>
             </li>
            <li class="menu-header">MENU</li>
            
            <li><a class="nav-link" href="{{url('/admin')}}" ><i class="fas fa-boxes"></i><span>Trang Chủ</span></a></li>
           
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-align-left"></i><span>Tables</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('/loai')}}">Loại tin</a></li>
                <li><a class="nav-link" href="{{url('/showuser')}}">user</a></li>
                <li><a class="nav-link" href="{{url('/danhgia')}}">Đánh giá</a></li>
                <li><a class="nav-link" href="{{url('/video')}}">Videos</a></li>
                <li><a class="nav-link" href="{{url('/binhluan')}}">Bình luận</a></li>
                <li><a class="nav-link" href="{{url('/like')}}">Like</a></li>
                <li><a class="nav-link" href="{{url('/tintuc')}}">Tin Tức</a></li>
                <li><a class="nav-link" href="{{url('/showmentor')}}">Mentor</a></li>
                <li><a class="nav-link" href="{{url('/showstartup')}}">Startup</a></li>
                <li><a class="nav-link" href="{{url('/showroles')}}">Roles</a></li>
                <li><a class="nav-link" href="{{url('/showquangcao')}}">Quảng Cáo</a></li>
                
              </ul>
            </li>
            {{-- <li><a class="nav-link" href="" ><i class="fas fa-boxes"></i><span>dừng quyền </span></a></li> --}}
           
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
@yield('duy')
		{{-- <div class="settingSidebar">
			<a href="javascript:void(0)" class="settingPanelToggle"> <i
				class="fa fa-spin fa-cog"></i>
			</a>
			<div class="settingSidebar-body ps-container ps-theme-default">
				<div class=" fade show active">
					<div class="setting-panel-header">Theme Customizer</div>
					<div class="p-15 border-bottom">
						<h6 class="font-medium m-b-10">Theme Layout</h6>
						<div class="selectgroup layout-color w-50">
							<label> <span class="control-label p-r-20">Light</span>
								<input type="radio" name="custom-switch-input" value="1"
								class="custom-switch-input" checked> <span
								class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="selectgroup layout-color  w-50">
							<label> <span class="control-label p-r-20">Dark&nbsp;</span>
								<input type="radio" name="custom-switch-input" value="2"
								class="custom-switch-input"> <span
								class="custom-switch-indicator"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Sidebar Colors</h6>
					<div class="sidebar-setting-options">
						<ul class="sidebar-color list-unstyled mb-0">
							<li title="white" class="active">
								<div class="white"></div>
							</li>
							<li title="blue">
								<div class="blue"></div>
							</li>
							<li title="coral">
								<div class="coral"></div>
							</li>
							<li title="purple">
								<div class="purple"></div>
							</li>
							<li title="allports">
								<div class="allports"></div>
							</li>
							<li title="barossa">
								<div class="barossa"></div>
							</li>
							<li title="fancy">
								<div class="fancy"></div>
							</li>
						</ul>
					</div>
		
				</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Theme Colors</h6>
					<div class="theme-setting-options">
						<ul class="choose-theme list-unstyled mb-0">
							<li title="white" class="active">
								<div class="white"></div>
							</li>
							<li title="blue">
								<div class="blue"></div>
							</li>
							<li title="coral">
								<div class="coral"></div>
							</li>
							<li title="purple">
								<div class="purple"></div>
							</li>
							<li title="allports">
								<div class="allports"></div>
							</li>
							<li title="barossa">
								<div class="barossa"></div>
							</li>
							<li title="fancy">
								<div class="fancy"></div>
							</li>
							
						</ul>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Layout Options</h6>
					<div class="theme-setting-options">
						<label> <span class="control-label p-r-20">Compact
								Sidebar Menu</span> <input type="checkbox"
							name="custom-switch-checkbox" class="custom-switch-input"
							id="mini_sidebar_setting"> <span
							class="custom-switch-indicator"></span>
						</label>
					</div>
				</div>
				<div class="mt-3 mb-3 align-center">
					<a href="#"
						class="btn btn-icon icon-left btn-outline-primary btn-restore-theme">
						<i class="fas fa-undo"></i> Restore Default
					</a>
				</div>
			</div>
		</div> --}}
	  </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="#">Snkthemes</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{URL::to('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{URL::to('assets/bundles/echart/echarts.js')}}"></script>
  
  <script src="{{URL::to('assets/bundles/chartjs/chart.min.js')}}"></script>
  <script src="{{URL::to('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{URL::to('assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{URL::to('assets/js/scripts.js')}}"></script>
  <script src="{{URL::to('assets/bundles/jquery.sparkline.min.js')}}"></script>
  <script src="{{URL::to('assets/ckeditor/ckeditor.js')}}"></script>
  <script src="{{URL::to('assets/js/bootstrap-tagsinput.min.js')}}"></script>
  <script>
    CKEDITOR.replace('cheditor1');
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor2');
    CKEDITOR.replace('ckeditor3');
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
    load_video();
    function load_video(){
      $.ajax({
        url:"{{url('/select-video')}}",
        method: "POST",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        },
       
        success:function(data){
          $('#video_load').html(data);
        }
      });
    }
    $(document).on('click','.btn-add-video',function(){
      var ten_video = $('.ten_video').val();
      var link_video = $('.link_video').val();
      var desc_video = $('.desc_video').val();
      // var _token = $('input[name="_token"]').val();

      var from_data = new FormData();
      from_data.append("file" , document.getElementById("file_img_video").files[0]);
      from_data.append("ten_video",ten_video);
      from_data.append("link_video",link_video);
      from_data.append("desc_video",desc_video);
        $.ajax({
          url:"{{url('/insert-video')}}",
          method:"POST",
          // data:{ten_video:ten_video,link_video:link_video,desc_video:desc_video,_token:_token},
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        },
        data:from_data,

        contentType:false,
        cache:false,
        processData:false,
        
          success:function(data){
            load_video();

            $('#notify').html('<span class="text text-success">Đã thêm thành công</span>');
          }
        });
    });  
    $(document).on('blur','.video_editt', function(){
      var video_type = $(this).data('video_type');
        var id_videos = $(this).data('id_videos');
        // alert(video_type);
        // alert(id);
        if(video_type =='ten_video'){
          var video_editt = $('#'+video_type+'_'+id_videos).text();
          var video_check = video_type;
        }else if(video_type == 'link_video'){
          var video_editt = $('#'+video_type+'_'+id_videos).text();
          var video_check = video_type;
        }else if(video_type == 'desc_video'){
          var video_editt = $('#'+video_type+'_'+id_videos).text();
          var video_check = video_type;
        }else {
          var video_editt = $('#'+video_type+'_'+id_videos).text();
          var video_check = video_type;
        }
        $.ajax({
          url:"{{url('/update-video')}}",
          method:"POST",
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
             data:{video_check:video_check, video_editt:video_editt, id_videos:id_videos},
          //    contentType:false,
          // cache:false,
          // processData:false,
          success:function(data){
          load_video();

          $('#notify').html('<span class="text text-success">sửa thành công</span>');
          }
        });
    });
    $(document).on('click','.btn-delete-video',function(){
      var id = $(this).data('id');
      // var _token = $('input[name="_token"]').val();
      // if(confirm(bạn có muốn xóa?)){
        $.ajax({
          url:"{{url('/detele-video')}}",
          method:"POST",
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{id:id},
          success:function(data){
            load_video();

            $('#notify').html('<span class="text text-success">xóa thành công</span>');
          }
        });
      // }
    });  
    $(document).on('change','.file_img_video',function(){
      var id_videos = $(this).data('id_videos');
      var image = document.getElementById("file-video-"+id_videos).files[0];

      var from_data = new FormData();
      from_data.append("file" , document.getElementById("file-video-"+id_videos).files[0]);
      from_data.append("id_videos",id_videos);
   
        $.ajax({
          url:"{{url('/update-video-img')}}",
          method:"POST",
          // data:{ten_video:ten_video,link_video:link_video,desc_video:desc_video,_token:_token},
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        },
        data:from_data,

        contentType:false,
        cache:false,
        processData:false,
        
          success:function(data){
            load_video();

            $('#notify').html('<span class="text text-success">Đã sửa ảnh thành công</span>');
          }
        });
    });  
  });
  
  </script>
<script type="text/javascript">
  $('.btn-traloi').click(function(){
    var mabinhluan = $(this).data('mabinhluan');
    var binhluan = $('.traloi_'+mabinhluan).val();
    
    var Ma_Tin_Tuc = $(this).data('matintuc');
    
    $.ajax({
          url:"{{url('/traloi-binhluan')}}",
          method:"POST",
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{binhluan:binhluan,mabinhluan:mabinhluan,Ma_Tin_Tuc:Ma_Tin_Tuc},
          success:function(data){
            $('.traloi_'+mabinhluan).val('');
            $('#notify_traloi').html('<span class="text text-success">trả lời bình luận thành công</span>');
          }
        });
  });
</script>
  {{-- <script type="text/javascript">
  
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
  </script> --}}
</body>


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Oct 2020 11:08:54 GMT -->
</html>