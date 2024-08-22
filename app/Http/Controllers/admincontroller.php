<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as user;
use Cookie;
use Session;
use Redirect;
use DB;
use App\khachhang as khachhang;
use App\chitietsach;
use App\sach as sach;
use App\loaisach as loaisach;
use App\nhaxuatban as nhaxuatban;
use App\Qltv_Nganh; //Muốn sử dụng csdl thì phải use
use App\Qltv_Docgia;
use App\Qltv_Khoa;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Http\Requests\DocgiaCreateRequest; 
use Illuminate\Support\Facades\Storage;

class admincontroller extends Controller
{
    function getlogin(){
    	return View('admin.login');
    }
    function getkhachhang(){
        $listNganh = Qltv_Nganh::all();
        $listKhoa = Qltv_Khoa::all();
        return View('admin.adduser')
        ->with('listKhoa', $listKhoa)
        ->with('listNganh',$listNganh); 
    }
    function postkhachhang(Request $req){
        $khachhang=new user ;
        $khachhang->name=$req->txtusername;
        $khachhang->email=$req->email;
        $khachhang->password=bcrypt($req->PassWord);
        $khachhang->quyen_tk=$req->quyen_tk;
        $khachhang->khoa_id=$req->khoa_id;
        $khachhang->nganh_id=$req->nganh_id;

        $khachhang->save();
        
        return redirect('/kh_login')->with(['thongbao'=>'Tạo tài khoản thành công!']);
    }
    function getloaisach(){
        return View('admin.loaisach');
    }
    function postlogin(Request $request){
        
    	$username=$request->name;
   
    	$password=$request->password;

        
        $khachhang_login = user::where('name',$username)->get();
        
        $minutes = 30;
        $credentials = $request->only('name', 'password');

        if(\Auth::attempt($credentials)){
              Cookie::queue(Cookie::make('name',$username, $minutes));
   			return View('index.index');
    	}
    	elseif(count($khachhang_login)>0){
            if(\Hash::check($password,$khachhang_login->password)){
                Cookie::queue(Cookie::make('khachhang_login',$request->name, 60));
                return redirect('home');
            } else {
                Session::flash('message', "Vui lòng kiểm tra lại tài khoản mật khẩu!");
                return Redirect::back();   
            }
        }
        else{
             Session::flash('message', "Vui lòng kiểm tra lại tài khoản mật khẩu!");
                return Redirect::back(); 
        }
    
    }
    	
    function kh_logout(){
        Cookie::queue(Cookie::forget('khachhang_login'));
        Cookie::queue(Cookie::forget('name'));
        return redirect('kh_login');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $listNganh = Qltv_Nganh::all();
        $listKhoa = Qltv_Khoa::all();
        return view('qlkhachhang1.create')
            ->with('listKhoa', $listKhoa)
            ->with('listNganh',$listNganh);
    }

    public function store(DocgiaCreateRequest $request)
    {
        $docgia = new Qltv_Docgia();
        $docgia->madocgia = $request->madocgia;
        $docgia->tendocgia = $request->tendocgia;
        $docgia->chucvu = $request->chucvu;
        $docgia->gioitinh = $request->gioitinh;
        $docgia->namsinh = $request->namsinh;
        $docgia->diachi = $request->diachi;
        $docgia->sdt = $request->sdt;
        $docgia->email = $request->email;
        $docgia->quequan = $request->quequan;
        //Kiểm tra ảnh có rỗng không
        if(!empty($request->anh)){
            $docgia->anh = $request->anh;
        }
        $docgia->khoa_id = $request->khoa_id;
        $docgia->nganh_id = $request->nganh_id;
        if($request->hasFile('anh'))
        {
            $file = $request->anh;
            // Lưu tên hình vào column image
            $docgia->anh = $file->getClientOriginalName();
            
            // Chép file vào thư mục "uploads"
            $fileSaved = $file->storeAs('public/uploads', $docgia->anh);
        }

        $docgia->save();

        return redirect()->to('admin/login');
    }

    public function getNganhByKhoa($khoa_id)
    {
        $listNganh = Qltv_Nganh::where('makhoa', $khoa_id)->get();
        return response()->json($listNganh);
    }

}