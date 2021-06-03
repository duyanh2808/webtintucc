
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Oct 2020 11:14:43 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Đăng nhập Admin Auth</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="http://radixtouch.in/templates/snkthemes/grexsan/source/light/assets/css/app.min.css">
  <link rel="stylesheet" href="http://radixtouch.in/templates/snkthemes/grexsan/source/light/assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="http://radixtouch.in/templates/snkthemes/grexsan/source/light/assets/css/style.css">
  <link rel="stylesheet" href="http://radixtouch.in/templates/snkthemes/grexsan/source/light/assets/css/components.css">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href='http://radixtouch.in/templates/snkthemes/grexsan/source/light/assets/img/favicon.ico' />
</head>

<body class="background-image-body">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand login-brand-color">
            	<img alt="image" src="http://radixtouch.in/templates/snkthemes/grexsan/source/light/assets/img/logo.png" />
              Grexsan
            </div>
            <div class="card card-auth">
              <div class="card-header card-header-auth">
                <h4>login Auth</h4>
              </div>
              <?php
              $message = Session::get('message');
              if($message){
                echo $message;
                Session::put('message', null);
              }
              ?>
              <div class="card-body">
                <form method="POST" action="{{URL::to('/login-au')}}" class="needs-validation" novalidate="">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="admin_email" placeholder="Tài Khoản" required autofocus>
                    {{-- <div class="invalid-feedback">
                      Please fill in your email
                    </div> --}}
                  </div>
                  {{-- <div class="form-group">
                    <label for="ten">Tên </label>
                    <input id="ten" type="ten" class="form-control" name="admin_name" placeholder="Điền Tên" required autofocus>
                    
                  </div> --}}
                  {{-- <div class="form-group">
                    <label for="phone">Phone</label>
                    <input id="phone" type="phone" class="form-control" name="admin_phone" placeholder="Điền Phone" required autofocus>
}
                  </div> --}}
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>                    
                    </div>
                    <input id="password" type="password" class="form-control" name="admin_password" placeholder="Mật Khẩu" required>
                    {{-- <div class="invalid-feedback">
                      please fill in your password
                    </div> --}}
                  </div>
                  {{-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> --}}
                  <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-block btn-auth-color" tabindex="4">
                      Đăng Nhập
                    </button>
                  </div>
                </form>
                
                <div class="text-center mt-4 mb-3">
                  <a href="/register-auth"> <div class="text-job text-muted">Đăng Ký Auth</div></a>
                </div>
                {{-- <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>
                  </div>
                </div> --}}
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="http://radixtouch.in/templates/snkthemes/grexsan/source/light/auth-register.html">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="http://radixtouch.in/templates/snkthemes/grexsan/source/light/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="http://radixtouch.in/templates/snkthemes/grexsan/source/light/assets/js/scripts.js"></script>
 
</body>


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Oct 2020 11:14:43 GMT -->
</html>