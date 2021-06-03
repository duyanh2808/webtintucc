@extends('admin_layout')
@section('title', 'Videos') 
@section('duy')
    
 <!-- Main Content -->
 
    <section class="section">
      <div class="section-header">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="section-header-breadcrumb-content">
                                <h1>Video</h1>
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
                 <form> 
                    {{ csrf_field() }}
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên Video</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control ten_video" name="ten_video">
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link Video</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control link_video" name="link_video">
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> mô tả video</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control desc_video " name="desc_video">
                      </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Hình ảnh video</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="file" class="form-control" name="file" id="file_img_video" accept="image/*">
                    </div>
                </div>
                      <button type="button" name="add_video" class="btn btn-primary btn-add-video">Thêm</button>
                    </div>
                  </div>
                
                </form>
                <div id="notify"></div>
            <div>
              </div>
              <div class="card-body">
             


                <div id="video_load"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
<div class="modal fade" id="video_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">VIDEO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            {{-- <span aria-hidden="true">&times;</span> --}}
          </button>
        </div>
        <div class="modal-body">
          XEM VIDEO
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          
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