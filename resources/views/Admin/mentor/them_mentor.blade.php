@extends('admin_layout')
@section('title', 'Thêm mentor') 
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
        <h4>Thêm Mentor</h4>
      </div>
      <div class="card-body">
      
        <form action="{{URL::to('/save-mentor') }}" method="post" enctype="multipart/form-data"> 
          {{ csrf_field() }}
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên Mentor</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="tenmentor">
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Chức Vụ</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="chucvu">
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Giới Thiệu</label>
          <div class="col-sm-12 col-md-7">
            <textarea name="gioithieu" id="" cols="30" rows="10"></textarea>
          </div>
        </div>
      
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ảnh</label>
          <div class="col-sm-12 col-md-7">
            <input type="file" class="form-control" name="anh_mentor">
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