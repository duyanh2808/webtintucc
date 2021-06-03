@extends('admin_layout')
@section('title', 'Thêm user') 
@section('duy')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <?php
        $message = Session::get('message');
        if($message){
          echo $message;
          Session::put('message', null);
        }?>
        <h4>Thêm User</h4>
      </div>
      <div class="card-body">
      
        <form action="{{URL::to('/save-user') }}" method="post" enctype="multipart/form-data"> 
          {{ csrf_field() }}
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên </label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="admin_name">
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="admin_email">
          </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> phone</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="admin_phone">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="admin_password">
            </div>
        </div>  
        <div class="form-group row mb-4">
                    
          <label for="gender" class= "col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Giới tính:') }}</label>
  <div class="form-check form-check-inline" >
      <input class="form-check-input" type="radio" name="admin_gioitinh" value="nam">
      <label class="form-check-label" for="male">Nam</label>
  </div>
  <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="admin_gioitinh" value="nu">
      <label class="form-check-label" for="female">Nữ</label>
  </div>
   

</div>  
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ảnh</label>
          <div class="col-sm-12 col-md-7">
            <input type="file" class="form-control" name="admin_img">
          </div>
      </div>    
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
          <div class="col-sm-12 col-md-7">
            <button class="btn btn-primary">Thêm</button>
          </div>
        </div>
      
      </form>
      </div>
    </div>
  </div>
</div>
@endsection   