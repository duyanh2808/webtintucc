<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Requets;
use App\Models\binh_luan;
use Illuminate\Support\Facades\Redirect;
session_start(); 
use App\Models\danh_gia;
use App\Models\quang_cao;
use App\Models\roles;
use App\Models\videos;
use App\Models\tin_tuc;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('admin');
        }else{
            return Redirect::to('login-auth')->send();
        }
    }
    public function index(){
        $this->AuthLogin();
        return view('Admin.index');
    }
    
    // public function validation(Request $req){
    //     return $this->validate($req,[
    //         'admin_email' => 'required|email|max:255',

    //         'admin_name' => 'required|max:255',
    //         'admin_phone' => 'required|max:255',
    //         'admin_gioitinh'=> ['required','in:nam,nu'],
    //         'admin_password' => 'required|max:255'
    //     ]);
    // }
    // public function login_auth(){
    //     return view('Admin.auth.login_auth');
     
    // }
    // public function dashboard(Request $req){
    //     $this->validate($req,[
    //         'admin_email' => 'required|email|max:255',           
    //         'admin_password' => 'required|max:255'
    //     ]);
    //     $data = $req->all();    
    //     if(Auth::attempt(['admin_email' => $req->admin_email, 'admin_password' => $req-> admin_password]))    {
    //         // echo Auth::attempt(['admin_email' => $req->admin_email, 'admin_password' => $req-> admin_password]);
    //         return redirect('/admin');
    //     }
    //     else{
    //         return redirect('/login-auth')->with('message','Lỗiii đăng nhập');
    //     }
    // }
    // public function logout_auth(){
    //     Auth::logout();
    //     return redirect('/login-auth')->with('message','đăng xuất thành công');
    // }
    
    public function danhgia(){
        $this->AuthLogin();
        // $danhgia = DB::table('danh_gia')->get();
        // $manager_danhgia = View('admin.danh_gia')->with('danhgia', $danhgia);
        $all_rating = danh_gia::orderBy('Ma')->simplePaginate(5);
        return view('Admin.danh_gia')->with(compact('all_rating',$all_rating));
        // ->with('admin.danh_gia', $manager_danhgia);
    }
    public function detele_sao($id){
        $this->AuthLogin();
    
        $delete_sao = danh_gia::find($id);
      
        $delete_sao->delete();
      
        
        Session::put('message','Xóa thành công ');
        return redirect()->back();
    }
     public function binhluan(){
        $this->AuthLogin();
        $binhluan = binh_luan::with('tin_tuc')->where('Ma_traloi','=',0)->orderBy('Ma_binhluan','asc')->get();
     
        $traloi = binh_luan::where('Ma_traloi','>',0)->get();
        return view('admin.binhluan')->with(compact('binhluan','traloi'));
     }

    public function like(){
        $this->AuthLogin();
        $like = DB::table('like_or_dislike')->get();
        $manager_like = View('admin.like_or_dislike')->with('like',$like);
        return view('admin_layout')->with('admin.like_or_dislike',$manager_like);
    }

    //roles
    public function showroles(){
        $this->AuthLogin();
        $roles = roles::orderBy('id_roles','asc')->simplePaginate(1);
        return view('Admin.roles.showroles')->with(compact('roles'));
    } 
    public function delete_roles($id){
        $this->AuthLogin();
        $roles = roles::find($id);
      
        $roles->delete();
      
        
        Session::put('message','Xóa thành công ');
        return redirect()->back();
    }
    public function them_roles(){
        $this->AuthLogin();

         return View('Admin.roles.them_roles');
    }
    public function save_roles(Request $req){
        $data = $req->all();
        $roles = new roles();
        $roles->name = $data['tenroles'];
        
        $roles->save();

    
        Session::put('message','thêm roles thành công ');
        return redirect::to('showroles');
    }
    public function edit_roles($id){
        $this->AuthLogin();
        $edit_roles = roles::where('id_roles',$id)->get();
        return view('Admin.roles.edit_roles')->with(compact('edit_roles'));
    }
    // public function update_roles(Request $req,$id){
    
    //     $data = array();
        
    //     $data['name'] = $req->tenroles;
     

    //     DB::table('roles')->where('id_roles',$id)->update($data);
    //     Session::put('message','Sửa thành công ');
    //     return Redirect::to('showroles');
    // }
    public function update_roles(Request $req,$id){
        $this->AuthLogin();
        $data = array();
        $update_roles = roles::where('id_roles',$id)->first();
        $update_roles->name = $req['tenroles'];
        $update_roles->update($data);
        Session::put('message','Sửa thành công ');
        return Redirect::to('showroles');
    }
    public function traloi_binhluan(Request $req){
        $data = $req->all();
        $traloi = new binh_luan();
        $traloi->Noi_Dung = $data['binhluan'];
        $traloi->Ma_Tin_Tuc = $data['Ma_Tin_Tuc'];
        $traloi->Ma_traloi = $data['mabinhluan'];
        $traloi->Ten_binhluan = 'duy anh';
        $traloi->save();
    }

    //quảng cáo
    public function showquangcao(){
        $this->AuthLogin();
        $show_quangcao = quang_cao::orderBy('id_quangcao','asc')->get();
        return view('admin.quangcao.show_quangcao')->with(compact('show_quangcao'));
    }
    public function them_quangcao(){
        $this->AuthLogin();
        return view('admin.quangcao.them_quangcao');
    }
    public function save_quangcao(Request $req){
        $data = $req->all();
        $quang_cao = new quang_cao();
        $quang_cao->ten_quangcao = $data['tenquangcao'];
        $quang_cao->link_quangcao = $data['linkquangcao'];    
        $get_image = $req->file('anh_quangcao');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('assets/anh/quang/',$new_image);
           $quang_cao->anh_quangcao = $new_image;
          
        }
        $quang_cao->save();

      
        Session::put('message','thêm thành công ');
        return redirect::to('showquangcao');
    }
    public function edit_quangcao($id){
        $this->AuthLogin();
        $edit_quangcao = quang_cao::where('id_quangcao',$id)->get();
        return view('Admin.quangcao.edit_quangcao')->with(compact('edit_quangcao'));
    }
    
    public function update_quangcao(Request $req,$id){
       
        $data = array();
        $data['ten_quangcao'] = $req->tenquangcao;
        $data['link_quangcao'] = $req->linkquangcao;
        
        
        $get_image = $req->file('anh_quangcao');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('assets/anh/quang',$new_image);
            $data['anh_quangcao'] = $new_image;
            DB::table('quang_cao')->where('id_quangcao',$id)->update($data);
            Session::put('message','sửa thành công ');
            return Redirect::to('showquangcao');
        }
        DB::table('quang_cao')->where('id_quangcao',$id)->update($data);
        Session::put('message','sửa thành công ');
        return Redirect::to('showquangcao');
    }
    public function delete_quangcao($id){
        $this->AuthLogin();
        $qc = quang_cao::find($id);
        $qc_img = $qc->anh_quangcao;
        if($qc_img){
            $path = 'assets/anh/quang/'.$qc_img;
            unlink($path);
        }
        $qc->delete();
        Session::put('message','Xóa thành công ');
        return redirect()->back();
    }
}
