<?php


namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
session_start(); 
use App\Models\tin_tuc;
use App\Models\loai_tin_tuc;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\DB as FacadesDB;
use App\Models\admin;
use App\Models\binh_luan;
use App\Models\quang_cao;
use App\Models\roles;
use App\Models\like_or_dislike;
use Illuminate\Support\Facades\Auth;


class indexController extends Controller
{
    public function AuthLogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('index');
        }else{
            return Redirect::to('login')->send();
        }
    }
    public function indexx(){
        // $news = DB::table('tin_tuc')->where('Ma_loai','LIKE','%9%')->orderby('Ma_Tin_Tuc','DESC')->get();
        $loai = DB::table('loai_tin_tuc')->orderby('Ma_Loai','DESC')->get();
        $tin = DB::table('tin_tuc')->orderby('Ma_Tin_Tuc', 'DESC')->limit(1)->get();
        $tintuc = DB::table('tin_tuc')->orderby('Ma_Tin_Tuc', 'DESC')->limit(4)->get();
        $tintucc = DB::table('tin_tuc')->join('admin','admin.admin_id','=','tin_tuc.admin_id')->where('Ma_Loai','4')->limit(3)->get();
        $xuhuong = DB::table('tin_tuc')->where('Ma_Loai','2')->limit(1)->get();
        $ytuong = DB::table('tin_tuc')->where('Ma_Loai','3')->limit(6)->get();
        $hanhtrinh = DB::table('tin_tuc')->where('Ma_Loai','1')->limit(1)->get();
        $video = DB::table('videos')->orderby('id_videos','DESC')->limit(4)->get();
        $quangcao = DB::table('quang_cao')->inRandomOrder()->first();
        $quangcao1 = DB::table('quang_cao')->inRandomOrder()->first();
        $tin1 = DB::table('tin_tuc')->join('loai_tin_tuc','loai_tin_tuc.Ma_Loai','=','tin_tuc.Ma_Loai')->inRandomOrder()->first();
        return View('frontend.indexx')->with('tin1',$tin1)->with('loai',$loai)->with('tin',$tin)->with('tintuc',$tintuc)->with('quangcao',$quangcao)
        ->with('quangcao1',$quangcao1)->with('ytuong',$ytuong)->with('tintucc',$tintucc)->with('xuhuong',$xuhuong)->with('hanhtrinh',$hanhtrinh)->with('video',$video);
    }
    public function timkiem(Request $req){
        $keywords = $req->keyword_submit;
        $loai = DB::table('loai_tin_tuc')->orderby('Ma_Loai','desc')->get();
        $search_tintuc = DB::table('tin_tuc')->where('Tieu_De','like','%'.$keywords.'%')->get();  
        $quangcao = DB::table('quang_cao')->inRandomOrder()->first();  
        return view('frontend.timkiemtintuc')->with('loai',$loai)->with('keywords',$keywords)->with('search_tintuc',$search_tintuc)->with('quangcao',$quangcao);
    }

    //mentor
    public function mentor(){
        $mentor = DB::table('mentor')->orderby('Ma_mentor', 'desc')->simplePaginate(6);
        $quangcao = DB::table('quang_cao')->inRandomOrder()->first();
        $tinxemnhieu = DB::table('tin_tuc')->join('loai_tin_tuc','loai_tin_tuc.Ma_Loai','=','tin_tuc.Ma_Loai')->orderby('Luot_Xem','desc')->limit(5)->get();

        $loai = DB::table('loai_tin_tuc')->orderby('Ma_Loai','desc')->get();
        return view('frontend.mentor')->with('loai',$loai)->with('mentor',$mentor)->with('quangcao',$quangcao)->with('tinxemnhieu',$tinxemnhieu); 
    }
    
    //startup
    public function startup(){
        $startup = DB::table('startup')->orderby('Ma_Startup','desc')->simplePaginate(6);
        $loai = DB::table('loai_tin_tuc')->orderby('Ma_Loai','desc')->get();
        $quangcao = DB::table('quang_cao')->inRandomOrder()->first();
        $quangcao2 = DB::table('quang_cao')->inRandomOrder()->first();
        return view('frontend.startup')->with('loai',$loai)->with('startup',$startup)->with('quangcao',$quangcao)->with('quangcao2',$quangcao2);
    }
    public function login(){
        return view('admin_login');
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
    
    public function dashboard(Request $req){
        $this->validate($req,[
            'admin_email' => 'required|email|max:255',           
            'admin_password' => 'required|max:255'
        ]);
        $data = $req->all();    
        if(Auth::attempt(['admin_email' => $req->admin_email, 'admin_password' => $req-> admin_password]))    {
            // echo Auth::attempt(['admin_email' => $req->admin_email, 'admin_password' => $req-> admin_password]);
            return redirect('/');
        }
        else{
            return redirect('/login')->with('message','Lỗiii đăng nhập');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    // public function autocomplete_ajax(Request $req){
    //     $data = $req->all();
    //     if($data['query']){
    //         $pro = tin_tuc::where('Tieu_De','LIKE','%'.$data['query'].'%')->get();

    //         $output = '<ul class="dropdown-menu" style="display:block; position:relative">';

    //         foreach($pro as $key=>$p){
    //             $output = '<li class="li_search_ajax"><a href="#">'.$p->Tieu_De.'</a></li> ';

    //         }
    //         $output = '</ul>';
    //         echo $output;
    //     }
    // }
    
    // public function like($id){
    //     $this->AuthLogin();
    //     $id_tt = $id;
    //     $admin_id = Auth::user()->admin_id;
    //     $like = new like_or_dislike();
    //     $like->Ma_Tin_Tuc = $id_tt;
    //     $like->admin_id = $admin_id;
    //     $like->like = 1;
    //     $like->save();
    //     Session::put('message','bạn đã like bài này ');
    //     return redirect()->back();
    // }
    function save_likedislike(Request $request){
        $this->AuthLogin();
        $data=new like_or_dislike();
        $data->Ma_Tin_Tuc=$request->post;
        $data->admin_id=$request->admin_id;
        if($request->type=='like'){
            $data->like=1;
        }else{
            $data->dislike=1;
        }
        $data->save();
        return response()->json([
            'bool'=>true
        ]);
    }
}

