<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Requets;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Redirect;
session_start(); 

class loaitinController extends Controller
{
    public function AuthLogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('admin');
        }else{
            return Redirect::to('login-auth')->send();
        }
    }
    public function loai(){
        $this->AuthLogin();
        $loaitin = DB::table('loai_tin_tuc')->simplePaginate(3);
        $manager_loaitin = View('admin.loaitin.loaitin')->with('loaitin', $loaitin);
        
        return view('admin_layout')->with('admin.loaitin.loaitin', $manager_loaitin);
    }
     public function themloai(){
        $this->AuthLogin();
         return View('Admin.loaitin.them_loai');
    }
    public function save_loai_tin(Request $req){
        $this->AuthLogin();
        $data = array();
        $data['Ten_Loai'] = $req->tenloai;
        DB::table('loai_tin_tuc')->insert($data);
        Session::put('message','Thêm loại tin thành công ');
        return Redirect::to('loai');
    }
    public function edit_loaitin($id){
        $this->AuthLogin();
        $Edit_loaitin = DB::table('loai_tin_tuc')->where('Ma_Loai',$id)->get();
        $manager_Edit = View('admin.loaitin.Edit_loaitin')->with('Edit_loaitin', $Edit_loaitin);
        
        return view('admin_layout')->with('admin.loai.tin.Edit_loaitin', $manager_Edit);
    }
    public function update_loaitin(Request $req,$id){
        $this->AuthLogin();
        $data = array();
        $data['Ten_Loai'] = $req->tenloai;
        DB::table('loai_tin_tuc')->where('Ma_Loai',$id)->update($data);
        Session::put('message','Sửa loại tin thành công ');
        return Redirect::to('loai');
    }
    public function detele_loaitin($id){
        $this->AuthLogin();
        DB::table('loai_tin_tuc')->where('Ma_Loai',$id)->delete();
        Session::put('message','Xóa loại tin thành công ');
        return Redirect::to('loai');
    }
    

    //frontend

    public function showloaitin($id){
        $loai = DB::table('loai_tin_tuc')->orderby('Ma_Loai','desc')->get();
        $loai_by_id = DB::table('tin_tuc')->join('loai_tin_tuc','tin_tuc.Ma_Loai','=','loai_tin_tuc.Ma_Loai')->where('tin_tuc.Ma_Loai',$id)->simplePaginate(6);
        $loai_name = DB::table('loai_tin_tuc')->where('loai_tin_tuc.Ma_Loai',$id)->first();
        $tinmoi = DB::table('tin_tuc')->join('loai_tin_tuc','loai_tin_tuc.Ma_Loai','=','tin_tuc.Ma_Loai')->orderby('ngay_dang','desc')->limit(5)->get();
       // dd($loai_by_id);
        $quangcao = DB::table('quang_cao')->inRandomOrder()->first();

        return view('frontend.showloaitin')->with('loai',$loai)->with('tinmoi',$tinmoi)->with('loai_by_id',$loai_by_id)->with('loai_name',$loai_name)->with('quangcao',$quangcao);
    }
}
