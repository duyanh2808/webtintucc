<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Requets;
use App\Models\binh_luan;
use Illuminate\Support\Facades\Redirect;
session_start(); 
use App\Models\tin_tuc;
use App\Models\loai_tin_tuc;
use App\Models\danh_gia;
use App\Models\like_or_dislike;
use Illuminate\Support\Facades\Auth;


class tintucController extends Controller
{
    public function AuthLogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('admin');
        }else{
            return Redirect::to('login-auth')->send();
        }
    }
    public function tin(){
        $this->AuthLogin();
        $tin = DB::table('tin_tuc')->orderby('Ma_Tin_Tuc','asc')->simplePaginate(50);
        $manager_tin = View('admin.tintuc.tintuc')->with('tintuc', $tin);
        
        return view('admin_layout')->with('admin.tintuc', $manager_tin);
    }   
    public function themtintuc(){
        $this->AuthLogin();
        // $loaitin = loai_tin_tuc::all();
        $loaitin = DB::table('Loai_tin_tuc')->orderby('Ma_Loai','desc')->get();
        $user = DB::table('admin')->orderby('admin_id','desc')->get();
        return View('Admin.tintuc.them_tintuc')->with('loaitin',$loaitin )->with('user',$user);
    }
    public function save_tin(Request $req){
        $this->AuthLogin();
        $data = array();
        $data['Tieu_De'] = $req->tieude;
        $data['Tom_Tat'] = $req->tomtat;
        $data['Noi_Dung'] = $req->noidung;
        $data['Ma_Loai'] = $req->maloai;
        $data['Tu_khoa'] = $req->tukhoa;
        $data['admin_id'] = $req->mauser;
        $data['ngay_dang'] = $req->ngay_dang;
        $data['tag'] = $req->tag;
        $get_image = $req->file('anh_tintuc');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('assets/anh/tintuc',$new_image);
            $data['anh_tintuc'] = $new_image;
            DB::table('tin_tuc')->insert($data);
        Session::put('message','Thêm  tin thành công ');
        return Redirect::to('tintuc');
        }

        DB::table('tin_tuc')->insert($data);
        Session::put('message','Thêm  tin thành công ');
        return Redirect::to('tintuc');
    }
    public function detele_tin($id){
        $this->AuthLogin();
        $post = tin_tuc::find($id);
        $post_img = $post->anh_tintuc;
        if($post_img){
            $path = 'assets/anh/tintuc/'.$post_img;
            unlink($path);
        }
        $post->delete();
      
        
        Session::put('message','Xóa tin thành công ');
        return redirect()->back();
    }

    public function edit_tin($id){
        $this->AuthLogin();
        $loaitin = DB::table('Loai_tin_tuc')->orderby('Ma_Loai','desc')->get();
        $user = DB::table('admin')->orderby('admin_id','asc')->get();
        $Edit_tin = DB::table('tin_tuc')->where('Ma_Tin_Tuc',$id)->get();
        $manager_Edit_tin = View('admin.tintuc.editTinTuc')->with('Edit_tin', $Edit_tin)->with('loaitin',$loaitin)->with('user',$user);
        
        return view('admin_layout')->with('admin.tintuc.editTinTuc', $manager_Edit_tin);
    }


    public function update_tinn(Request $req,$id){
        $data = array();
        $data['Tieu_De'] = $req->Tieu_De;
        $data['Tom_Tat'] = $req->Tom_Tat;
        $data['Noi_Dung'] = $req->Noi_Dung;
        $data['Ma_Loai'] = $req->Ma_Loai;
        $data['Tu_khoa'] = $req->Tu_khoa;
        $data['ngay_dang'] = $req->ngay_dang;
        $data['tag'] = $req->tag;
        $get_image = $req->file('anh_tintuc');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('assets/anh/tintuc',$new_image);
            $data['anh_tintuc'] = $new_image;
            DB::table('tin_tuc')->where('Ma_Tin_Tuc',$id)->update($data);
        Session::put('message','cập nhật  tin thành công ');
        return Redirect::to('tintuc');
        }
        DB::table('tin_tuc')->where('Ma_Tin_Tuc',$id)->update($data);
            Session::put('message','cập nhật lthành công ');
             return Redirect::to('tintuc');
    
    }
    // public function update_tin(Request $req,$id_tin){
    //     $this->AuthLogin();
    //     $data = array();
    //     $data['Tieu_De'] = $req->tieude;
    //     $data['Tom_Tat'] = $req->tomtat;
    //     $data['Noi_Dung'] = $req->noidung;
    //     $data['Ma_Loai'] = $req->maloai;
    //     $data['Tu_khoa'] = $req->tukhoa;
    //     $data['Ma_User'] = $req->mauser;
    //     $get_image = $req->file('anh_tintuc');
    //     if($get_image){
    //         $get_name_image = $get_image->getClientOriginalName();
    //         $name_image = current(explode('.',$get_name_image));
    //         $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
    //         $get_image->move('assets/anh/tintuc',$new_image);
    //         $data['anh_tintuc'] = $new_image;
    //         DB::table('tin_tuc')->where('Ma_Tin_Tuc',$id_tin)->update($data);
    //     Session::put('message','cập nhật  tin thành công ');
    //     return Redirect::to('tintuc');
    //     }
    //     DB::table('tin_tuc')->where('Ma_Tin_Tuc',$id_tin)->update($data);
    //     Session::put('message','cập nhật lthành công ');
    //     return Redirect::to('tintuc');

    // }

    //frontend
    
    public function chitiettintuc($id){
      
        $loai = DB::table('loai_tin_tuc')->orderby('Ma_Loai','desc')->get();  
        $tin_name = DB::table('tin_tuc')->where('tin_tuc.Ma_Tin_Tuc',$id)->first();
        $chitiet = tin_tuc::join('loai_tin_tuc','loai_tin_tuc.Ma_Loai','=','tin_tuc.Ma_Loai')
        ->join('admin','admin.admin_id','=','tin_tuc.admin_id')->where('tin_tuc.Ma_Tin_Tuc',$id)->get();
        $tin = DB::table('tin_tuc')->join('loai_tin_tuc','loai_tin_tuc.Ma_Loai','=','tin_tuc.Ma_Loai')
        ->join('admin','admin.admin_id','=','tin_tuc.admin_id')->orderby('Ma_Tin_Tuc', 'DESC')->limit(3)->get();
        $tintuc = DB::table('tin_tuc')->where('Ma_Tin_Tuc',$id)->first();
        $quangcao = DB::table('quang_cao')->inRandomOrder()->first();
        $Luot_Xem = $tintuc->Luot_Xem;
        $tinxemnhieu = DB::table('tin_tuc')->join('loai_tin_tuc','loai_tin_tuc.Ma_Loai','=','tin_tuc.Ma_Loai')->orderby('Luot_Xem','desc')->limit(5)->get();

        DB::table('tin_tuc')->where('Ma_Tin_tuc',$id)->update(['Luot_Xem'=>$Luot_Xem + 1]);
        // $loai_name = DB::table('loai_tin_tuc')->where('loai_tin_tuc.Ma_Loai',$id)->first();

        foreach($chitiet as $key => $chit){
            $id_loai = $chit->Ma_Loai;
            $Ma_Tin_Tuc = $chit->Ma_Tin_Tuc;
        }
            $rating = danh_gia::where('Ma_Tin_Tuc',$Ma_Tin_Tuc)->avg('Sao');
            $rating = round($rating);
            
        $related = DB::table('tin_tuc')->join('loai_tin_tuc','loai_tin_tuc.Ma_Loai','=','tin_tuc.Ma_Loai')
        ->where('loai_tin_tuc.Ma_Loai',$id_loai)->whereNotIn('tin_tuc.Ma_Tin_Tuc',[$id])->limit(3)->get();

        return view('frontend.chitiettintuc')->with('loai',$loai)->with('chitiet',$chitiet)->with('tin',$tin)->with('tinxemnhieu',$tinxemnhieu)
        ->with('related',$related)->with('tintuc',$tintuc)->with('rating',$rating)->with('tin_name',$tin_name)->with('quangcao',$quangcao)
        ;
        // ->with('Luot_Xem',$Luot_Xem);
    }

    public function insert_rating(Request $req){
        $data = $req->all();
        $rating = new danh_gia();        
        $rating->Ma_Tin_Tuc = $data['ma'];
        $rating->Sao = $data['index'];  
        $rating->save();
        echo'done'; 
    }
    public function load_binhluan(Request $req){
        $Ma_Tin_Tuc = $req->Ma_Tin_Tuc;
        $binhluan = binh_luan::where('Ma_Tin_Tuc',$Ma_Tin_Tuc)->where('Ma_traloi','=',0)->get();
        $traloi = binh_luan::where('Ma_traloi','>',0)->get();
        $output ='';
        foreach($binhluan as $key => $bl){
            $output.= '
            <li>
            <div class="comments-box">
          
            <div class="comments-avatar">
                 <img src="'.url('assets1/img/layout/111.jpg').'" alt="">
            </div>
            <div class="comments-text">
                <div class="avatar-name">
                    <h5>'.$bl->Ten_binhluan.'</h5>
                    <span>'.$bl->created_at .'</span>
                    <a class="reply" href="#"><i class="fas fa-reply"></i></a>
                </div>
                <p>'.$bl->Noi_Dung.'</p>
            </div>
        </div>
        </li><p></P>
        ';
            foreach($traloi as $tl){
                if($tl->Ma_traloi==$bl->Ma_binhluan){

                    $output.=' <li class="children" style="    background: antiquewhite;">
                    <div class="comments-box">
                        <div class="comments-avatar">
                            <img height="90px" width="90px" src="'.url('assets1/img/layout/5.png').'" alt="">
                        </div>
                        <div class="comments-text">
                            <div class="avatar-name">
                                <h5>Duy Anh</h5>
                                <span>'.$tl->created_at.'</span>
                                
                            </div>
                            <p>'.$tl->Noi_Dung.'</p>
                        </div>
                    </div>
                </li> <p></p>
                    ';
                }
            }
     
         
        }
        echo $output;
    }
    public function gui_binhluan(Request $req){
        $Ma_Tin_Tuc = $req->Ma_Tin_Tuc;
        $Ten_binhluan = $req->Ten_binhluan;
        $Noi_Dung = $req->Noi_Dung;
// $Ngay_Tao = $req->Ngay_Tao;
        $binh_luan = new binh_luan();
        $binh_luan->Ten_binhluan = $Ten_binhluan;
        $binh_luan->Noi_Dung = $Noi_Dung;
        $binh_luan->Ma_Tin_Tuc = $Ma_Tin_Tuc;
     //   $binh_luan->created_at = date("D-m-y H:i:s");
        $binh_luan->Ma_traloi = 0;
        // date_default_timezone_get('UTC');
        // $binh_luan->Ngay_Tao = date("Y-m-d H:i:s");
        // echo Carbon::now('Asia/Ho_Chi_Minh'); 
    //    $binh_luan->Ngay_Tao = $Ngay_Tao;
    $binh_luan->touch();
        $binh_luan->save(); 

    }
    // public function time(){
    //     $time = Carbon::now();
    //     echo Carbon::now('Asia/Ho_Chi_Minh');
    // }
    public function tag(Request $req, $tags){
        $loai = DB::table('loai_tin_tuc')->orderby('Ma_Loai','desc')->get();  
        //$tin_name = DB::table('tin_tuc')->where('tin_tuc.Ma_Tin_Tuc',$id)->first();
       // $chitiet = DB::table('tin_tuc')->join('loai_tin_tuc','loai_tin_tuc.Ma_Loai','=','tin_tuc.Ma_Loai')
       // ->join('admin','admin.admin_id','=','tin_tuc.admin_id')->where('tin_tuc.Ma_Tin_Tuc',$id)->get();
        $tin = DB::table('tin_tuc')->join('loai_tin_tuc','loai_tin_tuc.Ma_Loai','=','tin_tuc.Ma_Loai')
        ->join('admin','admin.admin_id','=','tin_tuc.admin_id')->orderby('Ma_Tin_Tuc', 'DESC')->limit(3)->get();
        $quangcao = DB::table('quang_cao')->inRandomOrder()->first();
        $tag = str_replace("-","",$tags);
       $tintuc_tag = tin_tuc::where('Tieu_De','LIKE','%'.$tag.'%')->orWhere('tag','LIKE','%'.$tag.'%')->get();
        return view('frontend.tags')->with('loai',$loai)->with('tin',$tin)->with('tags',$tags)
   ->with('quangcao',$quangcao)->with('tintuc_tag',$tintuc_tag)
        ;
    }

//     public function postlike(Request $req){
//         $Ma_Tin_Tuc = $req['Ma_Tin_Tuc'];
//         $is_like = $req['isLike'] == 'true';
//         $update = false;
//         $tin_tuc = tin_tuc::find($Ma_Tin_Tuc);
// dd($tin_tuc);
//         if(!$tin_tuc){
//             return null;
//         }

//         $user = Auth::user()->admin_id;
//         $like = $user->like_or_dislike()->where('Ma_Tin_Tuc',$Ma_Tin_Tuc)->first();
//         if($like){
//             $already_like =  $like->Like;
//             $update = true;
//             if($already_like == $is_like){
//                 $like->delete();
//                 return null;
//             }
//         }else{
//             $like = new like_or_dislike();
//         }
//         $like->Like = $is_like;
//         $like->admin_id = $user->admin_id;
//         $like->Ma_Tin_Tuc = $Ma_Tin_Tuc->Ma_Tin_Tuc;
        
//         if($update){
//             $like->update();
//         }else{
//             $like->save();
//         }
//         return null;
//     }
  
}
