@extends('admin_layout')
@section('title', 'Thêm tin tức') 
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
        <h4>Tin Tức</h4>
      </div>
      <div class="card-body">
      
        <form action="{{URL::to('/save-tin') }}" method="post" enctype="multipart/form-data"> 
          {{ csrf_field() }}
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tiêu Đề</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="tieude">
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tóm Tắt</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="tomtat">
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nội Dung</label>
          <div class="col-sm-12 col-md-7">
            <textarea name="noidung" id="ckeditor2" cols="30" rows="10"></textarea>
          </div>
        </div>
      
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Từ Khóa</label>
          <div class="col-sm-12 col-md-7">
            <textarea  name="tukhoa" id="cheditor1" cols="30" rows="10"></textarea>
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ảnh</label>
          <div class="col-sm-12 col-md-7">
            <input type="file" class="form-control" name="anh_tintuc">
          </div>
        </div>

        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">tag</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" data-role="tagsinput" name="tag">
          </div>
        </div>


        <div class="form-group">
          <label>Mã Loại</label>
          <select name="maloai" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
            @foreach ($loaitin as $key => $lt)           
            <option  class="form-control"  value="{{$lt->Ma_Loai}}">{{$lt->Ten_Loai}}</option>          
            @endforeach 
          </select>
        </div>
        <div class="form-group">
          <label>Mã User</label>
          <select name="mauser" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
            @foreach ($user as $key => $u)           
            <option  class="form-control"  value="{{$u->admin_id}}">{{$u->admin_name}}</option>          
            @endforeach 
          </select>
        </div>

        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ngày đăng</label>
          <div class="col-sm-12 col-md-7">
            <input type="date" class="form-control" name="ngay_dang">
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





{{-- <div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>THÊM TIN TỨC</h4>
      </div>
      <div class="card-body">
         
          <form action="{{URL::to('/save-tin') }}" method="post"> 
              {{ csrf_field() }}
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên Loại</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="tenloai">
          </div>            
        </div>
        
        <div class="form-group">
          <label>jQuery Selectric</label>
          <select class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
            @foreach ($loaitin as $key => $lt)           
            <option class="form-control" value="{{$lt->Ma_Loai}}">{{$lt->Ten_Loai}}</option>          
            @endforeach 
          </select>
        </div>
        
        
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
          <div class="col-sm-12 col-md-7">
            <button type="submit" class="btn btn-primary" name="themloai">Thêm</button>
          </div>
      </form>
        </div>
      </div>
    </div>
  </div>
</div> --}}