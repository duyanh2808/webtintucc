<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\roles;
use DB;
use Session;

use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
session_start(); 
use App\Models\tin_tuc;
use App\Models\loai_tin_tuc;
use App\Models\danh_gia;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function AuthLogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('admin');
        }else{
            return Redirect::to('login-auth')->send();
        }
    }
    public function showuser(){
        $this->AuthLogin();
        $admin = admin::with('roles')->orderBy('admin_id','DESC')->simplePaginate(5);
        return view('Admin.Users.ShowUser')->with(compact('admin'));
    }
    public function assign_roles(Request $req){
        if(Auth::id() == $req->admin_id ){
            return redirect()->back()->with('message','bạn không được phân quyền chính mình');
        }
        $user = admin::where('admin_email', $req->admin_email)->first();
        $user->roles()->detach();
        if($req->author_role){
            $user->roles()->attach(roles::where('name','author')->first());
        }
        if($req->admin_role){
            $user->roles()->attach(roles::where('name','admin')->first());
        }
        if($req->user_role){
            $user->roles()->attach(roles::where('name','user')->first());
        }
        return redirect()->back()->with('message','cấp quyền thành công');
    }
    public function delete_user_roles($id){
        if(Auth::id() == $id ){
            return redirect()->back()->with('message','bạn khong được xóa chính mình');
        }
        $admin = admin::find($id);
        $img = $admin->admin_img;
        if($img){
            $path = 'assets/anh/admin/'.$img;
            unlink($path);
        }
        if($admin){
            $admin->roles()->detach();
            $admin->delete();
        }
        return redirect()->back()->with('message','Xóa user thành công');
    }   
    public function themuser(){
        return view('admin.Users.themuser');
    }
    public function save_user(Request $req){
        $data = $req->all();
        $admin = new admin();
        $admin->admin_name = $data['admin_name'];
        $admin->admin_email = $data['admin_email'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_gioitinh = $data['admin_gioitinh'];
        $admin->admin_password= md5($data['admin_password']);
        $get_image = $req->file('admin_img');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('assets/anh/admin/',$new_image);
           $admin->admin_img = $new_image;
          
        }
        $admin->save();

        $admin->roles()->attach(roles::where('name','user')->first());
        Session::put('message','thêm user thành công ');
        return redirect::to('showuser');
    }
     public function impersonate($id){
        $user = admin::where('admin_id',$id)->first();
        if($user){
            session()->put('impersonate',$user->admin_id);
        }
        return redirect('/showuser');
     }
     public function impersonate_destroy(){
        session()->forget('impersonate');
        return redirect('/admin');
     }
}
