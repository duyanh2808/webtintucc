@extends('admin_layout')
@section('title', 'Sửa quảng cáo') 
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
        <h4>Thêm Quảng cáo</h4>
      </div>
      <div class="card-body">
      @foreach ($edit_quangcao as $eq)
          
      
        <form action="{{URL::to('/update-quangcao/'.$eq->id_quangcao) }}" method="post" enctype="multipart/form-data"> 
          {{ csrf_field() }}
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên quảng cáo</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="tenquangcao" value="{{$eq->ten_quangcao}}">
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link quảng cáo</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="linkquangcao" value="{{$eq->link_quangcao}}">
          </div>
        </div>
      
  
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ảnh</label>
            <div class="col-sm-12 col-md-7">
              <input type="file" class="form-control" name="anh_quangcao" >
              <img src="{{URL::to('assets/anh/quang/')}}/{{$eq->anh_quangcao}}" height="100" width="600" alt="">
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