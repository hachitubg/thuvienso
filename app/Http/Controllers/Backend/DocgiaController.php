<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Qltv_Nganh; //Muốn sử dụng csdl thì phải use
use App\Qltv_Docgia;
use App\Qltv_Khoa;
use App\User;
use Illuminate\Support\Facades\DB; 
use App\Http\Requests\DocgiaCreateRequest; 
use Illuminate\Support\Facades\Storage;

class DocgiaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->cookie('name') != 'admin') {
            session()->flash('error', 'Bạn không có quyền truy cập trang này.');
            return redirect('');
        } 
        
        $list = User::where('quyen_tk', 2)->paginate(10);
        $users= DB::table('users')->paginate(10); // Hiển thị Phân Trang
        return view('backend.docgia.index',['users' => $users])
            ->with('listDocgia', $list);
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
        return view('backend.docgia.create')
            ->with('listKhoa', $listKhoa)
            ->with('listNganh',$listNganh);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect()->to('admin/docgia');
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
    public function edit($id) {
        $docgia = Qltv_Docgia::find($id); //SELECT * from qltv_docgia where id='id'
        $listNganh = Qltv_Nganh::all();
        $listKhoa = Qltv_Khoa::all();
        return view('backend.docgia.edit')
            ->with('listKhoa', $listKhoa)
            ->with('listNganh',$listNganh)
            ->with('docgia', $docgia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $docgia = Qltv_Docgia::find($id);
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
            //Xóa ảnh cũ để tránh rác
            Storage::delete('public/uploads/' . $docgia->anh);
            $file = $request->anh;
            // Lưu tên hình vào column image
            $docgia->anh = $file->getClientOriginalName();
            
            // Chép file vào thư mục "uploads"
            $fileSaved = $file->storeAs('public/uploads', $docgia->anh);
        }

        $docgia->save();

        return redirect()->to('admin/docgia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docgia= User::find($id);
        $docgia->delete();

        return redirect()->to('admin/docgia');
    }

    public function print()
    {
        $list = Qltv_Docgia::all();
        return view('backend.docgia.print')
            ->with('listDocgia', $list);
    }
}
