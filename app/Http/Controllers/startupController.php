<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Requets;
use App\Models\startup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
session_start(); 
class startupController extends Controller
{
    public function AuthLogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('admin');
        }else{
            return Redirect::to('login-auth')->send();
        }
    }
    public function showstartup(){
        $this->AuthLogin();
        $showstartup = DB::table('startup')->simplePaginate(5);
        $manager_showstartup = View('admin.startup.showstartup')->with('showstartup', $showstartup);
        
        return view('admin_layout')->with('admin.startup.showstartup', $manager_showstartup);
    }
    public function them_startup(){
        $this->AuthLogin();
        
        return View('Admin.startup.them_startup');
    }
    public function save_startup(Request $req){
        $this->AuthLogin();
        $data = array();
        
        $data['Ten_Startup'] = $req->tenstartup;
        $data['Dia_Chi'] = $req->diachi;
        $data['Website'] = $req->website;
        $data['Lien_He'] = $req->lienhe;
        $data['Mo_Ta'] = $req->mota;
        $get_image = $req->file('avatar');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('assets/anh/startup',$new_image);
            $data['Avatar'] = $new_image;
            DB::table('startup')->insert($data);
        Session::put('message','Thêm thành công ');
        return Redirect::to('showstartup');
        }

        DB::table('startup')->insert($data);
        Session::put('message','Thêm thành công ');
        return Redirect::to('showstartup');
    }
    public function edit_startup($id){
        $this->AuthLogin();
      
        $Edit_startup = DB::table('startup')->where('Ma_Startup',$id)->get();
        $manager_Edit_startup = View('admin.startup.edit_startup')->with('Edit_startup', $Edit_startup);
        
        return view('admin_layout')->with('admin.startup.edit_startup', $manager_Edit_startup);
    }
    public function update_startup(Request $req,$id){
        $this->AuthLogin();
        $data = array();
        
        $data['Ten_Startup'] = $req->tenstartup;
        $data['Dia_Chi'] = $req->diachi;
        $data['Website'] = $req->website;
        $data['Lien_He'] = $req->lienhe;
        $data['Mo_Ta'] = $req->mota;
        $get_image = $req->file('avatar');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('assets/anh/startup',$new_image);
            $data['Avatar'] = $new_image;
            DB::table('startup')->where('Ma_Startup',$id)->update($data);
        Session::put('message','Sửa thành công ');
        return Redirect::to('showstartup');
        }

        DB::table('startup')->where('Ma_Startup',$id)->update($data);
        Session::put('message','Sửa thành công ');
        return Redirect::to('showstartup');
    }
    public function delete_startup($id){
        $this->AuthLogin();
        $starup = startup::find($id);
        $img = $starup->Avatar;
        if($img){
            $path = 'assets/anh/startup/'.$img;
            unlink($path);
        }
        $starup->delete();
      
        
        Session::put('message','Xóa statup thành công ');
        return redirect()->back();
    }
}
