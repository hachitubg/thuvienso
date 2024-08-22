<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as user;
use Auth;
use Cookie;
use Session;
use Redirect;

class LoginController extends Controller
{
    function getlogin(){
    	return redirect('');
    }
    
    function postlogin(Request $request){
        $minutes = 30;
        
    	$username=$request->name;
    	$password=$request->password;
        
        $khachhang_login = user::where('name',$username)->get();
        
        $credentials = $request->only('name', 'password');
        if(\Auth::attempt($credentials)){
              Cookie::queue(Cookie::make('name',$username, $minutes));
              return redirect('');
    	} elseif(count($khachhang_login) > 0){
            if(\Hash::check($password,$khachhang_login->password)){
                Cookie::queue(Cookie::make('khachhang_login',$request->name, 60));
            } else {
                Session::flash('message', "Vui lòng kiểm tra lại tài khoản mật khẩu!");
                return Redirect::back();   
            }
        } else{
             Session::flash('message', "Vui lòng kiểm tra lại tài khoản mật khẩu!");
                return Redirect::back(); 
        }
    }
    	
    function kh_logout(){
        Cookie::queue(Cookie::forget('khachhang_login'));
        return redirect('kh_login');
    }
}
