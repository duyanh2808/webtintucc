@extends('admin_layout')
@section('title', 'Sửa startup') 
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
        <h4>Sửa Startup</h4>
      </div>
      <div class="card-body">
      @foreach ($Edit_startup as $es)
          
     
        <form action="{{URL::to('/update-startup/'.$es->Ma_Startup) }}" method="post" enctype="multipart/form-data"> 
          {{ csrf_field() }}
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên Startup</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="tenstartup" value="{{$es->Ten_Startup}}">
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Địa Chỉ</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="diachi" value="{{$es->Dia_Chi}}">
          </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Website</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="website" value="{{$es->Website}}">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Liên Hệ</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="lienhe" value="{{$es->Lien_He}}">
            </div>
        </div>
       
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ảnh</label>
          <div class="col-sm-12 col-md-7">
            <input type="file" class="form-control" name="avatar" >
            <img src="{{URL::to('assets/anh/startup/')}}/{{$es->Avatar}}" height="100" width="100" alt="">
          </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mô Tả</label>
            <div class="col-sm-12 col-md-7">
              <textarea name="mota" id="cheditor1" cols="30" rows="10">{{$es->Mo_Ta}}</textarea>
            </div>
          </div>
        
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
          <div class="col-sm-12 col-md-7">
            <button class="btn btn-primary">Sửa</button>
          </div>
        </div>
      
      </form>
      @endforeach
      </div>
    </div>
  </div>
</div>
@endsection   