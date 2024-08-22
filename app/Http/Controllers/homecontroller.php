<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide as slides;
use DB;
use App\khachhang as khachhang;
use App\chitietsach;
use App\danhmuc as danhmuc;
use App\Qltv_Theloai as theloai;
use App\Qltv_Nxb as nhaxuatban;
use App\Qltv_Sach as qlsach;
use App\loaisach as loaisach;
use App\sach as sach;
use Session;
use Illuminate\Support\Facades\Validator;

class homecontroller extends Controller
{
    function gethome() {
    	$sl=DB::table('quangcao')->where('maloaiquangcao', '=', 1)->get();
        $danhmuc=danhmuc::all();
        $ls=loaisach::all();
        $theloai = theloai::all();
        $nxb=nhaxuatban::all();
        $sach = qlsach::all();
        $sach_name = theloai::with('sach')->get();
    	return View('page.home',compact('sl','ls','danhmuc','theloai','nxb','sach','sach_name'));
    }
    
    function addusers() {
    	return View('admin.adduser');
    }

    function gettheloai($id,Request $req) {
        $id=$req->id;
        $theloai = theloai::all();
        $theloai1= theloai::find($id);
        $tentheloai = $theloai1->tentheloai;

        $theloai1 = $theloai1->toArray();

        $sach= qlsach::with('theloai')->where('theloai_id',$theloai1['id'])->get();

        $theloai_menu = theloai::all();
        $nganh_menu = nhaxuatban::all();

        $error = "";
        if(count($sach) == 0){
            $error="Không Tìm Thấy Sản Phẩm Nào Với Từ Khóa: \" {{$theloai1['tentheloai']}} \".Vui Lòng Tìm Kiếm Sản Phẩm Khác!";
            return View('page.danhmucsanpham.danhmucsach',compact('id','theloai','theloai1','sach','error', 'tentheloai', 'theloai_menu', 'nganh_menu'));
        } else {
            return View('page.danhmucsanpham.danhmucsach',compact('id','theloai','theloai1','sach','error', 'tentheloai', 'theloai_menu', 'nganh_menu'));
    	}
    }

    function getnganh($id,Request $req) {
        $id=$req->id;
        $theloai = nhaxuatban::all();
        $theloai1= nhaxuatban::find($id);
        $tentheloai = $theloai1->tennxb;

        $theloai1 = $theloai1->toArray();

        $sach= qlsach::with('theloai')->where('nxb_id',$theloai1['id'])->get();

        $error = "";

        $theloai_menu = theloai::all();
        $nganh_menu = nhaxuatban::all();
        return View('page.danhmucsanpham.danhmucsach',compact('id','theloai','theloai1','sach','error', 'tentheloai', 'theloai_menu', 'nganh_menu'));
    }

    function chitietsanpham(Request $request) {   
        $id=$request->id;
        $nxb=nhaxuatban::all();
        $sach=qlsach::find($id);
        $nxbs=qlsach::find($sach->nxb_id);
        $theloai = theloai::paginate(12);
        
        $nganh_sach=nhaxuatban::where('id',$sach->nxb_id)->first();
        $theloai_sach=theloai::where('id',$sach->theloai_id)->first();

        return View('page.sanpham.ctsanpham',compact('nxb','sach','nxbs','theloai','nganh_sach','theloai_sach'));
    }

    function pdf(Request $request) {
        $id=$request->id;
        $sach=qlsach::find($id);
        $pdf = $sach->link_pdf;
        $path = public_path('pdf/' . $pdf); // Đường dẫn tới file PDF
        return response()->file($path);
    }

    function timkiem(Request $req) {
      if(request('query')){

        $querys=request('query');

        $data=DB::table('sach')->where('tensach','LIKE','%'.$querys)->orWhere('tensach','LIKE',$querys.'%')->get();

        $output='<ul style="display:block;position:relative;background:white;z-index:1000;list-style-type: none;width:394px;">';
        
        foreach ($data as $row) {
            $output.="<a href=\"sanpham/$row->id\"><li><img src=\"http://localhost:8080/laravel/sachhay/public/image/anhsanpham/$row->anhbia\" style=\"width:50px;height:70px\">&nbsp;&nbsp;$row->tensach</li></a>";
        }
         $output.='</ul>';
         return response()->json([
            'success'   =>   $output
         ]);
      }
    }
    
    function timkiem_key(Request $req){
        $key=$req->key;
        $error = "";
        $sach=qlsach::where('tensach','LIKE','%'.$key.'%')->get();
        $theloai = theloai::paginate(12);
        $nxb=nhaxuatban::all();

        $tentheloai = "Tìm kiếm";

        $theloai_menu = theloai::all();
        $nganh_menu = nhaxuatban::all();

        if(count($sach)==0){ 
            $error="Không Tìm Thấy Sản Phẩm Nào Với Từ Khóa: \" $key \".Vui Lòng Tìm Kiếm Sản Phẩm Khác!";
            return view('page.sanpham.timkiem',compact('key','sach','theloai','error','nxb', 'tentheloai', 'theloai_menu', 'nganh_menu'));
        } else{   
            return view('page.sanpham.timkiem',compact('key','sach','theloai','error','nxb', 'tentheloai', 'theloai_menu', 'nganh_menu'));
       }
    }

    function openPDFFile($path){
        return response()->file($path);
    }

}