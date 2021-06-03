<?php
namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
session_start(); 
use App\Models\danh_gia;
use App\Models\mentor;
use App\Models\startup;
use Illuminate\Support\Facades\Auth;

class mentorController extends Controller
{
    public function AuthLogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('admin');
        }else{
            return Redirect::to('login-auth')->send();
        }
    }
    public function showmentor(){
        $this->AuthLogin();
        $showmentor = DB::table('mentor')->simplePaginate(5);
        $manager_showmentor = View('admin.mentor.showmentor')->with('showmentor', $showmentor);
        
        return view('admin_layout')->with('admin.mentor.showmentor', $manager_showmentor);
    }
    public function themmentor(){
        $this->AuthLogin();
        
        return View('Admin.mentor.them_mentor');
    }
    public function save_mentor(Request $req){
        $this->AuthLogin();
        $data = array();
        $data['Ten_mentor'] = $req->tenmentor;
        $data['Chuc_vu'] = $req->chucvu;
        $data['gioi_thieu'] = $req->gioithieu;
       
        $get_image = $req->file('anh_mentor');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('assets/anh/mentor',$new_image);
            $data['anh_mentor'] = $new_image;
            DB::table('mentor')->insert($data);
            Session::put('message','Thêm thành công ');
            return Redirect::to('showmentor');
        }

        DB::table('mentor')->insert($data);
        Session::put('message','Thêm thành công ');
        return Redirect::to('showmentor');
    }
    public function edit_mentor($id){
        $this->AuthLogin();
      
        $Edit_mentor = DB::table('mentor')->where('Ma_mentor',$id)->get();
        $manager_Edit_mentor = View('admin.mentor.edit_mentor')->with('Edit_mentor', $Edit_mentor);
        
        return view('admin_layout')->with('admin.mentor.edit_mentor', $manager_Edit_mentor);
    }
    public function update_mentor(Request $req,$id){
        $this->AuthLogin();
        $data = array();
        $data['Ten_mentor'] = $req->tenmentor;
        $data['Chuc_vu'] = $req->chucvu;
        $data['gioi_thieu'] = $req->gioithieu;
       
        $get_image = $req->file('anh_mentor');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('assets/anh/mentor',$new_image);
            $data['anh_mentor'] = $new_image;
            DB::table('mentor')->where('Ma_mentor',$id)->update($data);
            Session::put('message','sửa thành công ');
            return Redirect::to('showmentor');
        }
        DB::table('mentor')->where('Ma_mentor',$id)->update($data);
        Session::put('message','sửa thành công ');
        return Redirect::to('showmentor');
    }
    public function delete_mentor($id){
        $this->AuthLogin();
        $mentor = mentor::find($id);
        $post_img = $mentor->anh_mentor;
        if($post_img){
            $path = 'assets/anh/mentor/'.$post_img;
            unlink($path);
        }
        $mentor->delete();
      
        
        Session::put('message','Xóa mentor thành công ');
        return redirect()->back();
    }
}
