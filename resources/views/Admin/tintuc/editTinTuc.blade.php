@extends('admin_layout')
@section('title', 'Sửa tin tức') 
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
        <h4>Sửa tin</h4>
      </div>
      <div class="card-body">
      @foreach ($Edit_tin as $et)
          
      
        <form action="{{URL::to('/update-tin/'.$et->Ma_Tin_Tuc) }}" method="POST" enctype="multipart/form-data"> 
          {{ csrf_field() }}
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tiêu Đề</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="Tieu_De" value="{{$et->Tieu_De}}">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tóm Tắt</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="Tom_Tat" value="{{ $et->Tom_Tat }}">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nội Dung</label>
            <div class="col-sm-12 col-md-7" >
               
              <textarea name="Noi_Dung" id="cheditor1" cols="30" rows="10">{{$et->Noi_Dung}}</textarea>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Từ Khóa</label>
            <div class="col-sm-12 col-md-7" >
               
              <textarea name="Tu_khoa" id="ckeditor3" cols="35" rows="11">{{$et->Tu_Khoa}}</textarea>
            </div>
          </div>

          
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">tag</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" data-role="tagsinput" name="tag" value="{{$et->tag}}">
          </div>
        </div>

          <div class="form-group">
            <label>Mã Loại</label>
            <select name="Ma_Loai" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
              @foreach ($loaitin as $key => $lt)   
                  @if($lt->Ma_Loai==$et->Ma_Loai)        
              <option selected  class="form-control"  value="{{$lt->Ma_Loai}}">{{$lt->Ten_Loai}}</option>
              @else
              <option  class="form-control"  value="{{$lt->Ma_Loai}}">{{$lt->Ten_Loai}}</option>
              @endif
              @endforeach 
            </select>
          </div>
          <div class="form-group">
            <label>Mã User</label>
            <select name="mauser" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
              @foreach ($user as $key => $u)      
                @if($u->admin_id==$et->admin_id)      
              <option selected class="form-control"  value="{{$u->admin_id}}">{{$u->admin_name}}</option>   
              @else       
              <option  class="form-control"  value="{{$u->admin_id}}">{{$u->admin_name}}</option> 
              @endif
              @endforeach 
            </select>
          </div>
         
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ảnh</label>
            <div class="col-sm-12 col-md-7">
              <input type="file" class="form-control" name="anh_tintuc" >
              <img src="{{URL::to('assets/anh/tintuc/')}}/{{$et->anh_tintuc}}" height="100" width="100" alt="">
            </div>
          </div>
         
  
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ngày đăng</label>
            <div class="col-sm-12 col-md-7">
              <input type="date" class="form-control" name="ngay_dang" value="{{$et->ngay_dang}}">
            </div>
          {{-- <div class="form-group">
            <label>Mã User</label>
            <select name="mauser" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
              @foreach ($user as $key => $u)           
                @if($u->Ma_User==$et->Ma_User)        
                  <option selected  class="form-control"  value="{{$u->Ma_User}}">{{$u->Ho_Ten}}</option>
                @else
                  <option  class="form-control"  value="{{$u->Ma_User}}">{{$u->Ho_Ten}}</option>
                @endif
              @endforeach 
            </select>
          </div> --}}
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">cập nhật </button>
            </div>
          </div>
        
      </form>
      @endforeach
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