@extends('admin_layout')
@section('title', 'Thêm Quảng Cáo') 
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
        <h4>Thêm quảng cáo</h4>
      </div>
      <div class="card-body">
      
        <form action="{{URL::to('/save-quangcao') }}" method="post" enctype="multipart/form-data"> 
          {{ csrf_field() }}
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên quảng cáo</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="tenquangcao">
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link quảng cáo</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="linkquangcao">
          </div>
        </div>
      
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ảnh</label>
          <div class="col-sm-12 col-md-7">
            <input type="file" class="form-control" name="anh_quangcao">
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