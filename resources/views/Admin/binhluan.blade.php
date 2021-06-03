@extends('admin_layout')
@section('title', 'Bình luận') 
@section('duy')
    
 <!-- Main Content -->
 
    <section class="section">
      <div class="section-header">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="section-header-breadcrumb-content">
                                <h1>Bình Luận</h1>
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
               
              </div>
              <div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="mainTable" class="table table-striped">
                    <div id="notify_traloi"></div>
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Tên bình luận</th>
                        <th>Mã Tin Tức</th>
                        <th>Nội Dung</th>
                        <th>Ngày bình luận </th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($binhluan as $key => $bl)
                      <tr>
                        <td>{{$bl->Ma_binhluan}}</td>
                        <td>{{$bl->Ten_binhluan}}</td>
                        <td><a href="{{URL::to('/chi-tiet-tintuc/'.$bl->Ma_Tin_Tuc,Str::slug($bl->Tieu_De))}}">{{$bl->Ma_Tin_Tuc}}</a></td>
                        <td>{{$bl->Noi_Dung}}
                            <style type="text/css">
                            ul.list_ul li{
                                font-family: 'Patrick Hand', cursive;
                                color: #800000;
                                list-style-type: decimal-leading-zero;
                            }
                            </style>
                            <ul class="list_ul">
                                @foreach ($traloi as $key=>$tl)
                                @if ($tl->Ma_traloi==$bl->Ma_binhluan)
                                    <li>Trả lời: {{$tl->Noi_Dung }}
                                    <p>ngày trả lời : {{$tl->created_at}}</p></li>
                                    
                                @endif
                                   
                                @endforeach
                                
                            </ul>
                        <br><textarea name="" class="form-control traloi_{{$bl->Ma_binhluan}}" id="" rows="3"></textarea>
                        <br><button class="btn btn-secondary btn-xs btn-traloi" data-matintuc="{{$bl->Ma_Tin_Tuc}}" data-mabinhluan="{{$bl->Ma_binhluan}}">Trả Lời</button>
                        </td>
                        <td>{{$bl->created_at}}</td>
                        <td>
                         
                          <a onclick="return confirm('bạn có muốn xóa không?')" href="#"><button type="button" class="btn btn-secondary"><i class="bi bi-trash"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></button></a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                   
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i
            class="fa fa-spin fa-cog"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
                <div class="setting-panel-header">Theme Customizer</div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Theme Layout</h6>
                    <div class="selectgroup layout-color w-50">
                        <label> <span class="control-label p-r-20">Light</span>
                            <input type="radio" name="custom-switch-input" value="1"
                            class="custom-switch-input" checked> <span
                            class="custom-switch-indicator"></span>
                        </label>
                    </div>
                    <div class="selectgroup layout-color  w-50">
                        <label> <span class="control-label p-r-20">Dark&nbsp;</span>
                            <input type="radio" name="custom-switch-input" value="2"
                            class="custom-switch-input"> <span
                            class="custom-switch-indicator"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Colors</h6>
                <div class="sidebar-setting-options">
                    <ul class="sidebar-color list-unstyled mb-0">
                        <li title="white" class="active">
                            <div class="white"></div>
                        </li>
                        <li title="blue">
                            <div class="blue"></div>
                        </li>
                        <li title="coral">
                            <div class="coral"></div>
                        </li>
                        <li title="purple">
                            <div class="purple"></div>
                        </li>
                        <li title="allports">
                            <div class="allports"></div>
                        </li>
                        <li title="barossa">
                            <div class="barossa"></div>
                        </li>
                        <li title="fancy">
                            <div class="fancy"></div>
                        </li>
                    </ul>
                </div>
    
            </div>
            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Theme Colors</h6>
                <div class="theme-setting-options">
                    <ul class="choose-theme list-unstyled mb-0">
                        <li title="white" class="active">
                            <div class="white"></div>
                        </li>
                        <li title="blue">
                            <div class="blue"></div>
                        </li>
                        <li title="coral">
                            <div class="coral"></div>
                        </li>
                        <li title="purple">
                            <div class="purple"></div>
                        </li>
                        <li title="allports">
                            <div class="allports"></div>
                        </li>
                        <li title="barossa">
                            <div class="barossa"></div>
                        </li>
                        <li title="fancy">
                            <div class="fancy"></div>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Layout Options</h6>
                <div class="theme-setting-options">
                    <label> <span class="control-label p-r-20">Compact
                            Sidebar Menu</span> <input type="checkbox"
                        name="custom-switch-checkbox" class="custom-switch-input"
                        id="mini_sidebar_setting"> <span
                        class="custom-switch-indicator"></span>
                    </label>
                </div>
            </div>
            <div class="mt-3 mb-3 align-center">
                <a href="#"
                    class="btn btn-icon icon-left btn-outline-primary btn-restore-theme">
                    <i class="fas fa-undo"></i> Restore Default
                </a>
            </div>
        </div>
    </div>
        
  @endsection