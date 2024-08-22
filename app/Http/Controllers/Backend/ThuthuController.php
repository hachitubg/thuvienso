<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Qltv_Nganh; //Muốn sử dụng csdl thì phải use
use App\Qltv_Thuthu;
use App\Qltv_Khoa;
use Illuminate\Support\Facades\DB; 
use App\Http\Requests\ThuthuCreateRequest; 
use Illuminate\Support\Facades\Storage;

class ThuthuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Qltv_Thuthu::paginate(10);
        $users= DB::table('qltv_thuthu')->paginate(10); // Hiển thị Phân Trang
        return view('backend.thuthu.index',['users' => $users])
            ->with('listThuthu', $list);
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
        return view('backend.thuthu.create')
            ->with('listKhoa', $listKhoa)
            ->with('listNganh',$listNganh);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThuthuCreateRequest $request)
    {
        $thuthu = new Qltv_Thuthu();
        $thuthu->mathuthu = $request->mathuthu;
        $thuthu->tenthuthu = $request->tenthuthu;
        $thuthu->chucvu = $request->chucvu;
        $thuthu->gioitinh = $request->gioitinh;
        $thuthu->namsinh = $request->namsinh;
        $thuthu->diachi = $request->diachi;
        $thuthu->sdt = $request->sdt;
        $thuthu->email = $request->email;
        $thuthu->quequan = $request->quequan;
        //Kiểm tra ảnh có rỗng không
        if(!empty($request->anh)){
            $thuthu->anh = $request->anh;
        }
        $thuthu->khoa_id = $request->khoa_id;
        $thuthu->nganh_id = $request->nganh_id;
        if($request->hasFile('anh'))
        {
            $file = $request->anh;
            // Lưu tên hình vào column image
            $thuthu->anh = $file->getClientOriginalName();
            
            // Chép file vào thư mục "uploads"
            $fileSaved = $file->storeAs('public/uploads', $thuthu->anh);
        }

        $thuthu->save();

        return redirect()->to('admin/thuthu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thuthu = Qltv_Thuthu::find($id); //SELECT * from qltv_thuthu where id='id'
        $listNganh = Qltv_Nganh::all();
        $listKhoa = Qltv_Khoa::all();
        return view('backend.thuthu.edit')
            ->with('listKhoa', $listKhoa)
            ->with('listNganh',$listNganh)
            ->with('thuthu', $thuthu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $thuthu = Qltv_Thuthu::find($id);
        $thuthu->mathuthu = $request->mathuthu;
        $thuthu->tenthuthu = $request->tenthuthu;
        $thuthu->chucvu = $request->chucvu;
        $thuthu->gioitinh = $request->gioitinh;
        $thuthu->namsinh = $request->namsinh;
        $thuthu->diachi = $request->diachi;
        $thuthu->sdt = $request->sdt;
        $thuthu->email = $request->email;
        $thuthu->quequan = $request->quequan;
        //Kiểm tra ảnh có rỗng không
        if(!empty($request->anh)){
            $thuthu->anh = $request->anh;
        }
        $thuthu->khoa_id = $request->khoa_id;
        $thuthu->nganh_id = $request->nganh_id;
        if($request->hasFile('anh'))
        {
            //Xóa ảnh cũ để tránh rác
            Storage::delete('public/uploads/' . $thuthu->anh);
            $file = $request->anh;
            // Lưu tên hình vào column image
            $thuthu->anh = $file->getClientOriginalName();
            
            // Chép file vào thư mục "uploads"
            $fileSaved = $file->storeAs('public/uploads', $thuthu->anh);
        }

        $thuthu->save();

        return redirect()->to('admin/thuthu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thuthu= Qltv_Thuthu::find($id);
        $thuthu->delete();

        return redirect()->to('admin/thuthu');
    }
    public function print()
    {
        $list = Qltv_Thuthu::all();
        return view('backend.thuthu.print')
            ->with('listThuthu', $list);
    }
}
