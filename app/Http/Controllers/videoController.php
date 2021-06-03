<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Requets;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Redirect;
session_start(); 
use App\Models\videos;
use Illuminate\Support\Facades\Auth;

class videoController extends Controller
{
    public function AuthLogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('admin');
        }else{
            return Redirect::to('login-auth')->send();
        }
    }
    public function video(){
        $this->AuthLogin();
        return view('Admin.video');
    }
    public function insert_video(Request $req){
        $data = $req->all();
        $video = new videos();
        // $sub_link = substr($data['link_video'],15);
        $video->ten_video = $data['ten_video'];
        $video->link_video = $data['link_video'];
        $video->desc_video = $data['desc_video'];
        $get_image = $req->file('file');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('assets/anh/videos/',$new_image);
            $video->img_video = $new_image; 
        }
        $video->save();
    }
    public function update_video(Request $req){
        $data = $req->all();
        $id_videos = $data['id_videos'];
        $video_editt = $data['video_editt'];
        $video_check = $data['video_check'];
        $video = videos::find($id_videos);
        if($video_check == 'ten_video') {
            $video->ten_video = $video_editt;
        }elseif($video_check == 'link_video'){
            $video->link_video = $video_editt;
        }else{
            $video->desc_video = $video_editt;
        }
        $video->save();
    }
    public function update_video_img(Request $req){
        $get_image = $req->file('file');
        $id_videos = $req->id_videos;
        if($get_image){
            $video = videos::find($id_videos);
            unlink('assets/anh/videos/'.$video->img_video);
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('assets/anh/videos/',$new_image);
            $video->img_video = $new_image; 
        }
        $video->save();
    }
    public function detele_video(Request $req){
        $data = $req->all();
        $id = $data['id'];
        $video = videos::find($id);
        $video->delete();
    }
    public function select_video(Request $req){
        $video = videos::orderBy('id_videos','DESC')->get();
        $video_count = $video->count();
        $output = '<form>
                        '.csrf_field().'

                        <table id="mainTable" class="table table-striped">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Tên video</th>
                        <th> Ảnh </th>
                        <th>Link video</th>
                        <th>Nội dung </th>
                        
                        <th>Demo video</th>
                        <th> action </th>
                      </tr>
                    </thead>
                    <tbody>
        ';
        if($video_count>0){
            $i = 0;
            foreach($video as $key => $vid){
                $i++;
                $output.='
                <tr>
                <td>'.$i.'</td>
                <td contenteditable data-id_videos="'.$vid->id_videos.'" data-video_type="ten_video" class="video_editt" id="ten_video_'.$vid->id_videos.'">'.($vid->ten_video).'</td>
                <td>
                <img src="'.url('assets/anh/videos/'.$vid->img_video).'" class="img-thumbnail" width="220" height="220"> 
                <input type="file" class="file_img_video" data-id_videos="'.$vid->id_videos.'" id="file-video-'.$vid->id_videos.'" name="file" accept="image/*">
                </td>
                <td contenteditable data-id_videos="'.$vid->id_videos.'" data-video_type="link_video" class="video_editt" id="link_video_'.$vid->id_videos.'">'.$vid->link_video.'</td>  
                <td contenteditable data-id_videos="'.$vid->id_videos.'" data-video_type="desc_video" class="video_editt" id="desc_video_'.$vid->id_videos.'">'.substr($vid->desc_video,0,50).'...</td>   
                             
                
                <td>
                <iframe width="250" height="250" src="https://www.youtube.com/embed/'.$vid->link_video.'" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; 
                    autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </td>
                <td> <button type="button" data-id="'.$vid->id_videos.'" class="btn btn-xs btn-primary btn-delete-video"     background-color: #f00;> xóa</button>
              </tr>
                '   ;
            } 

        }else{
                $output.='
            <tr>
                <td colspan="4">chưa có video  </td>
            </tr>
            ';
        }
        $output.='      </tbody>
        </div>
        </table>';
        echo $output;
    }
    public function life_videos(){
        $loai = DB::table('loai_tin_tuc')->orderby('Ma_Loai','desc')->get();
        $all_videos = DB::table('videos')->simplePaginate(4);
        $quangcao = DB::table('quang_cao')->inRandomOrder()->first();

        return view('frontend.life_videos')->with('loai',$loai)->with('all_videos',$all_videos)->with('quangcao',$quangcao);
    }
    public function watch_video(Request $req){
        $id_videos = $req->id_videos;
        $video = videos::find($id_videos);
        $output['ten_video'] = $video->ten_video;
        $output['link_video'] ='   <iframe width="100%" height="350" src="https://www.youtube.com/embed/'.$video->link_video.'" 
            title="YouTube video player" frameborder="0" allow="accelerometer; 
            autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';


        
        echo json_encode($output);
    }
}
