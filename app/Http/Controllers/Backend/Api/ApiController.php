<?php

namespace App\Http\Controllers\Backend\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{
    public function getProductCount(){
        //raw sql
        $data = DB::select('SELECT COUNT(*) as SoLuong FROM qltv_sach');
        //return redirect(); -> trả về HTML
        //return view(); -> trả về HTML
        return response()->json(array(
            'code' => 200, //HTTP status code 200, 201, 301, 302, 303
            'data' => $data,
        ));
    }
    public function getDocgiaCount(){
        //raw sql
        $data = DB::select('SELECT COUNT(*) as SoLuong FROM qltv_docgia');
        //return redirect(); -> trả về HTML
        //return view(); -> trả về HTML
        return response()->json(array(
            'code' => 200, //HTTP status code 200, 201, 301, 302, 303
            'data' => $data,
        ));
    }
    public function getMuonsachCount(){
        //raw sql
        $data = DB::select('SELECT COUNT(*) as SoLuong FROM qltv_muonsach');
        //return redirect(); -> trả về HTML
        //return view(); -> trả về HTML
        return response()->json(array(
            'code' => 200, //HTTP status code 200, 201, 301, 302, 303
            'data' => $data,
        ));
    }
    public function getThuthuCount(){
        //raw sql
        $data = DB::select('SELECT COUNT(*) as SoLuong FROM qltv_thuthu');
        //return redirect(); -> trả về HTML
        //return view(); -> trả về HTML
        return response()->json(array(
            'code' => 200, //HTTP status code 200, 201, 301, 302, 303
            'data' => $data,
        ));
    }
    public function getStatiticsCategoryProductCount() {
        // raw sql
        $data = DB::select('
            SELECT tl.tentheloai AS TenLoaiSach, COUNT(*) AS SoLuong
            FROM qltv_sach s
            JOIN qltv_theloai tl ON s.theloai_id = tl.id
            GROUP BY tl.tentheloai
            ORDER BY COUNT(*) DESC;
        ');
        return response()->json(array(
            'code'  => 200, // HTTP status code 200, 201, 301, 302, 303, 404, 500...
            'data' => $data,
        ));
    }
}
