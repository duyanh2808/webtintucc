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


class authController extends Controller
{
    public function register_auth(){
        return view('Admin.auth.register_auth');
    }
    public function register(Request $req){
        $this->validation($req);
        $data = $req->all();
        $admin = new admin();
        $admin->admin_email = $data['admin_email'];
        $admin->admin_name = $data['admin_name'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_gioitinh = $data['admin_gioitinh'];
        $admin->admin_password = md5($data['admin_password']);
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
        return redirect('/register-auth')->with('message','Đăng ký thành công');
    }
    public function validation(Request $req){
        return $this->validate($req,[
            'admin_email' => 'required|email|max:255',

            'admin_name' => 'required|max:255',
            'admin_phone' => 'required|max:255',
            'admin_gioitinh'=> ['required','in:nam,nu'],
            'admin_password' => 'required|max:255'
        ]);
    }
    public function login_auth(){
        return view('Admin.auth.login_auth');
     
    }
    public function login_au(Request $req){
        $this->validate($req,[
            'admin_email' => 'required|email|max:255',           
            'admin_password' => 'required|max:255'
        ]);
        $data = $req->all();    
        if(Auth::attempt(['admin_email' => $req->admin_email, 'admin_password' => $req-> admin_password]))    {
            // echo Auth::attempt(['admin_email' => $req->admin_email, 'admin_password' => $req-> admin_password]);
            return redirect('/admin');
        }
        else{
            return redirect('/login-auth')->with('message','Lỗiii đăng nhập');
        }
    }
    public function logout_auth(){
        Auth::logout();
        return redirect('/login-auth')->with('message','đăng xuất thành công');
    }
}
