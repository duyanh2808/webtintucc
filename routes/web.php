<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\loaitinController;
use App\Http\Controllers\mentorController;
use App\Http\Controllers\startupController;
use App\Http\Controllers\tintucController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\videoController;
use App\Models\videos;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//frontend
Route::get('/',[indexController::class,'indexx']);
Route::post('/tim-kiem',[indexController::class,'timkiem']);
Route::get('/mentor',[indexController::class,'mentor']);
Route::get('/startup',[indexController::class,'startup']);
Route::get('/tag/{tags}',[tintucController::class,'tag']);
// Route::post('/autocomplete-ajax',[indexController::class,'autocomplete_ajax']);
//trang loại tin
Route::get('/loai-tin/{id}/{Ten_Loai}',[loaitinController::class,'showloaitin']);

//trang chi tiết
Route::get('/chi-tiet-tintuc/{id}/{Tieu_De}',[tintucController::class,'chitiettintuc']);


//ADMIN
Route::get('/login', [indexController::class,'login']);
Route::post('/admin-index',[indexController::class, 'dashboard']);
Route::get('/admin',[AdminController::class, 'index'])->middleware('auth.roles');
Route::get('/logout',[indexController::class, 'logout']);
//loại tin tức
Route::get('/loai',[loaitinController::class, 'loai']);
Route::get('/themloai', [loaitinController::class,'themloai']);
route::post('/save-loai-tin',[loaitinController::class, 'save_loai_tin']);
route::get('/edit-loaitin/{id}',[loaitinController::class, 'edit_loaitin']);
route::post('/update-loai-tin/{id}',[loaitinController::class,'update_loaitin']);
route::get('/detele-loaitin/{id}',[loaitinController::class,'detele_loaitin']);
//đánh giá
Route::get('/danhgia',[AdminController::class,'danhgia']);
Route::get('/binhluan',[AdminController::class,'binhluan']);
Route::get('/like',[AdminController::class,'like']);
Route::post('/insert_rating',[tintucController::class,'insert_rating']);
Route::get('/detele-sao/{id}',[AdminController::class, 'detele_sao']);
//tin tức
Route::get('/tintuc',[tintucController::class,'tin']);
Route::get('/themtintuc',[tintucController::class,'themtintuc']);
Route::post('/save-tin',[tintucController::class,'save_tin']);
Route::get('/edit-tintuc/{id}',[tintucController::class,'edit_tin']);
Route::post('/update-tin/{id}',[tintucController::class,'update_tinn']);
Route::get('/detele-tin/{id}',[tintucController::class,'detele_tin']);
//mentor
Route::get('/showmentor',[mentorController::class,'showmentor']);
Route::get('/them-mentor',[mentorController::class,'themmentor']);
Route::post('/save-mentor',[mentorController::class,'save_mentor']);
Route::get('/edit-mentor/{id}',[mentorController::class,'edit_mentor']);
Route::post('/update-mentor/{id}',[mentorController::class,'update_mentor']);
Route::get('/delete-mentor/{id}',[mentorController::class,'delete_mentor']);
//Startup
Route::get('/showstartup',[startupController::class,'showstartup']);
Route::get('/them-startup',[startupController::class,'them_startup']);
Route::post('/save-startup',[startupController::class,'save_startup']);
Route::get('/edit-startup/{id}',[startupController::class,'edit_startup']);
Route::post('/update-startup/{id}',[startupController::class,'update_startup']);
Route::get('/delete-startup/{id}',[startupController::class,'delete_startup']);
//video
Route::get('/video',[videoController::class,'video']);
Route::post('select-video',[videoController::class,'select_video']);
Route::post('insert-video',[videoController::class,'insert_video']);
Route::post('update-video',[videoController::class,'update_video']);
Route::post('detele-video',[videoController::class,'detele_video']);
Route::get('/life-videos',[videoController::class,'life_videos']);
Route::post('/watch-video',[videoController::class,'watch_video']);
Route::post('/update-video-img',[videoController::class,'update_video_img']);

//Authentication roles
Route::get('/register-auth',[authController::class,'register_auth']);
Route::get('/login-auth',[authController::class,'login_auth']);
Route::post('/register',[authController::class,'register']);
Route::post('/login-au',[authController::class,'login_au']);
Route::get('/logout-auth',[authController::class,'logout_auth']);

//USERS
Route::get('/showuser',[UserController::class,'showuser']);
Route::post('/assign-roles',[UserController::class,'assign_roles']);
Route::get('/delete-user-roles/{id}',[UserController::class,'delete_user_roles']);
Route::get('/themuser',[UserController::class,'themuser'])->middleware('auth.roles');
Route::post('/save-user',[UserController::class,'save_user']);
Route::get('/impersonate/{id}',[UserController::class,'impersonate']); 
Route::get('/impersonate-destroy',[UserController::class,'impersonate_destroy']); 
// Route::group(['middleware' => 'auth.roles'],function(){
//     Route::get('/themtintuc',[tintucController::class,'themtintuc']);
//     

// });

//role
Route::get('/showroles',[AdminController::class,'showroles']);
Route::get('/delete-roles/{id}',[AdminController::class,'delete_roles']);
Route::get('/them-roles',[AdminController::class,'them_roles']);
Route::post('/save-roles',[AdminController::class,'save_roles']);
Route::get('/edit-roles/{id}',[AdminController::class,'edit_roles']);
Route::post('/update-roles/{id}',[AdminController::class,'update_roles']);

//bình luận
Route::post('/load-binhluan',[tintucController::class,'load_binhluan']);
Route::post('/gui-binhluan',[tintucController::class,'gui_binhluan']);
Route::post('/traloi-binhluan',[AdminController::class,'traloi_binhluan']);


//quảng cáo
Route::get('/showquangcao',[AdminController::class,'showquangcao']);
Route::get('/them-quangcao',[AdminController::class,'them_quangcao']);
Route::post('/save-quangcao',[AdminController::class,'save_quangcao']);
Route::get('/edit-quangcao/{id}',[AdminController::class,'edit_quangcao']);
Route::post('/update-quangcao/{id}',[AdminController::class,'update_quangcao']);
Route::get('/delete-quangcao/{id}',[AdminController::class,'delete_quangcao']);

//like
// Route::get('/like/{id}',[indexController::class,'like']);
// Route::get('dislike/{id}',function($id){
//     $dislike = DB::table('like_or_dislike')->where('Ma_Tin_Tuc',$id)->delete();
//         return back()->with('message','bạn đã không thích bài này ');
//     });
// Route::post('likeee' ,[tintucController::class,'postlike'])->name('likee');
Route::post('save-likedislike',[indexController::class,'save_likedislike']);