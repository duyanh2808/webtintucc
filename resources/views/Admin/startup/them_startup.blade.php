@extends('admin_layout')
@section('title', 'Thêm startup') 
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
        <h4>Thêm Quảng Cáo</h4>
      </div>
      <div class="card-body">
      
        <form action="{{URL::to('/save-startup') }}" method="post" enctype="multipart/form-data"> 
          {{ csrf_field() }}
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên Startup</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="tenstartup">
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Địa Chỉ</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="diachi">
          </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Website</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="website">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Liên Hệ</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="diachi">
            </div>
        </div>
       
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ảnh</label>
          <div class="col-sm-12 col-md-7">
            <input type="file" class="form-control" name="avatar">
          </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mô Tả</label>
            <div class="col-sm-12 col-md-7">
              <textarea name="mota" id="cheditor1" cols="30" rows="10"></textarea>
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