@extends('admin_layout')
@section('title', 'User') 
@section('duy')
    
 <!-- Main Content -->
 
    <section class="section">
      <div class="section-header">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="section-header-breadcrumb-content">
                                <h1>User</h1>
              {{-- <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#"><i class="fas fa-home"></i></a></div>
                <div class="breadcrumb-item"><a href="#">Tables</a></div>
                <div class="breadcrumb-item"><a href="#">Editable DataTables</a></div>
              </div> --}}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           
                        </div>
                    </div>
                </div>
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <?php
                $message = Session::get('message');
                if($message){
                  echo $message;
                  Session::put('message', null);
                }
                ?>
              <div class="card-header">
                <a href="{{URL::to('/themuser')}}"><button type="button" class="btn btn-info"><i class="bi bi-plus-square"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>THÊM
                </button></a>
              </div>
              <div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="mainTable" class="table table-striped">
                    <thead>
                      <tr>
                          {{-- <th></th> --}}
                        <th>Tên </th>
                        <th>Email</th>
                        <th>Ảnh</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th>Giới Tính</th>
                        <th>Author</th>
                        <th>Admin</th>
                        <th>User</th>
                  
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($admin as $key => $tt)
                        <form action="{{URL::to('/assign-roles')}}" method="POST">
                            @csrf
                      <tr>
                          {{-- <td><label class="i-check m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
                        <td>{{$tt->admin_name}}</td>
                        <td>{{$tt->admin_email}}
                           <input type="hidden" name="admin_email" value="{{$tt->admin_email}}">
                           <input type="hidden" name="admin_id" value="{{$tt->admin_id}}">
                        </td>
                        <td><img width="100px" height="100px" src="assets/anh/admin/{{$tt->admin_img}}" alt=""></td>
                        <td>{{$tt->admin_phone}}</td>
                        <td>{{substr($tt->admin_password,0,10)}}....</td>
                        <td>{{$tt->admin_gioitinh}}</td>
                        <td><input type="checkbox" name="author_role" {{$tt->hasRoles('author') ? 'checked' : ''}} ></td>
                        <td><input type="checkbox" name="admin_role" {{$tt->hasRoles('admin') ? 'checked' : ''}}></td>
                        <td><input type="checkbox" name="user_role" {{$tt->hasRoles('user') ? 'checked' : ''}}></td>
                       
                        <td>
                             <input type="submit" value="Phân quyền " class="btn btn-warning">
                             <a href="{{URL::to('/delete-user-roles/'.$tt->admin_id)}}" class="btn btn-secondary">Xóa User</a>
                             <a href="{{URL::to('/impersonate/'.$tt->admin_id)}}" class="btn btn-dark">Chuyển User</a>
                          {{-- <a href="{{URL::to('/edit-tintuc/'.$tt->Ma_Tin_Tuc)}}"><button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></button></a>
                          <a onclick="return confirm('bạn có muốn xóa không?')" href="{{URL::to('/detele-tin/'.$tt->Ma_Tin_Tuc)}}"><button type="button" class="btn btn-secondary"><i class="bi bi-trash"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></button></a> --}}
                        </td>
                      </tr>
                    </form>
                    @endforeach
                    </tbody>
                   
                  </table>
                  
                </div>
                
                <div class="card-footer text-right">
                  <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                      {!! $admin->links() !!}
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
        
  @endsection