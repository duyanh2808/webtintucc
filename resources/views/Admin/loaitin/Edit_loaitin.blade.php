@extends('admin_layout')
@section('title', 'Sửa loại tin') 
@section('duy')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>SỬA TIN TỨC</h4>
        </div>
        <div class="card-body">
            <?php
            $message = Session::get('message');
            if($message){
              echo $message;
              Session::put('message', null);
            }
            ?>
            @foreach ($Edit_loaitin as $key =>$edit)
                
            
            <form action="{{URL::to('/update-loai-tin/'.$edit->Ma_Loai) }}" method="post"> 
                {{ csrf_field() }}
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên Loại</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" value="{{$edit->Ten_Loai}}" class="form-control" name="tenloai">
            </div>
          </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button type="submit" class="btn btn-primary" name="sualoai">sửa</button>
            </div>
        </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection    