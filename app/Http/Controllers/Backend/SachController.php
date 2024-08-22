<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Qltv_Sach;
use App\Qltv_Nxb;
use App\Qltv_Theloai;
use App\Http\Requests\SachCreateRequest;
use Illuminate\Support\Facades\Storage;

class SachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->cookie('name') != 'admin') {
            session()->flash('error', 'Bạn không có quyền truy cập trang này.');
            return redirect('');
        }

        $list = Qltv_Sach::orderBy('id', 'desc')->paginate(10); // Phân trang và sắp xếp theo ngày insert giảm dần
        $users = DB::table('qltv_sach')->orderBy('id', 'desc')->paginate(10); // Hiển thị phân trang và sắp xếp theo ngày insert giảm dần

        return view('backend.sach.index', ['users' => $users])
        ->with('listSach', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listTheloai = Qltv_Theloai::all();
        $listNxb = Qltv_Nxb::all();
        return view('backend.sach.create')
            ->with('listTheloai', $listTheloai)
            ->with('listNxb', $listNxb);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SachCreateRequest $request){
        $sach = new Qltv_Sach();
        $sach->masach       = $request->masach;
        $sach->tensach      = $request->tensach;
        $sach->tentacgia    = $request->tentacgia;
        $sach->theloai_id   = $request->theloai_id;
        $sach->nxb_id       = $request->nxb_id;

        if($request->has('trangthaisach')) {
            $sach->trangthaisach = 1; // Còn Sách
        } else {
            $sach->trangthaisach = 2; // Hết Sách
        }

        if($request->hasFile('anh')) {
            $file = $request->file('anh');

            // Tạo tên file duy nhất hoặc lấy tên gốc
            $fileName = time() . '_' . $file->getClientOriginalName();
            $sach->anh = $fileName;

            // Đường dẫn tuyệt đối đến thư mục bạn muốn lưu file
            $absolutePath = 'C:/xampp/htdocs/quanlythuvien/public/storage/uploads'; // Thay thế bằng đường dẫn thực tế của bạn

            // Tạo thư mục nếu chưa tồn tại
            if (!file_exists($absolutePath)) {
                mkdir($absolutePath, 0777, true);
            }

            // Di chuyển file đến thư mục với đường dẫn tuyệt đối
            $file->move($absolutePath, $fileName);
        }

        if($request->hasFile('file_sach')) {
            $file = $request->file('file_sach');

            // Tạo tên file duy nhất hoặc lấy tên gốc
            $fileName = time() . '_' . $file->getClientOriginalName();
            $sach->link_pdf = $fileName;

            // Đường dẫn tuyệt đối đến thư mục bạn muốn lưu file
            $absolutePath = 'C:/xampp/htdocs/quanlythuvien/public/pdf'; // Thay thế bằng đường dẫn thực tế của bạn

            // Tạo thư mục nếu chưa tồn tại
            if (!file_exists($absolutePath)) {
                mkdir($absolutePath, 0777, true);
            }

            // Di chuyển file đến thư mục với đường dẫn tuyệt đối
            $file->move($absolutePath, $fileName);
        }

        $sach->noidung = $request->noidungsach;
        $sach->namxuatban = $request->namxuatban;

        $sach->save();

        return redirect()->to('admin/sach')->with(['thongbao'=> $request->tensach . ' đã được thêm vào hệ thống']);
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
        $sach = Qltv_Sach::find($id);
        $listTheloai = Qltv_Theloai::all();
        $listNxb = Qltv_Nxb::all();
        return view('backend.sach.edit')
            ->with('listTheloai', $listTheloai)
            ->with('listNxb', $listNxb)
            ->with('sach', $sach);
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
        $sach = Qltv_Sach::find($id);
        $sach->masach       = $request->masach;
        $sach->tensach      = $request->tensach;
        $sach->tentacgia    = $request->tentacgia;
        $sach->theloai_id   = $request->theloai_id;
        $sach->nxb_id       = $request->nxb_id;

        if($request->has('trangthaisach')) {
            $sach->trangthaisach = 1; // Còn Sách
        } else {
            $sach->trangthaisach = 2; // Hết Sách
        }

        if($request->hasFile('anh')) {
            $file = $request->file('anh');

            // Tạo tên file duy nhất hoặc lấy tên gốc
            $fileName = time() . '_' . $file->getClientOriginalName();
            $sach->anh = $fileName;

            
            // Đường dẫn tuyệt đối đến file cần xóa
            $filePath = 'C:/xampp/htdocs/quanlythuvien/public/storage/uploads/' . $sach->anh;

            // Kiểm tra nếu file tồn tại và xóa nó
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            // Đường dẫn tuyệt đối đến thư mục bạn muốn lưu file
            $absolutePath = 'C:/xampp/htdocs/quanlythuvien/public/storage/uploads'; // Thay thế bằng đường dẫn thực tế của bạn

            // Tạo thư mục nếu chưa tồn tại
            if (!file_exists($absolutePath)) {
                mkdir($absolutePath, 0777, true);
            }

            // Di chuyển file đến thư mục với đường dẫn tuyệt đối
            $file->move($absolutePath, $fileName);
        }

        if($request->hasFile('file_sach')) {

            // Đường dẫn tuyệt đối đến file cần xóa
            $filePath = 'C:/xampp/htdocs/quanlythuvien/public/pdf' . $sach->file_sach;

            // Kiểm tra nếu file tồn tại và xóa nó
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $file = $request->file('file_sach');

            // Tạo tên file duy nhất hoặc lấy tên gốc
            $fileName = time() . '_' . $file->getClientOriginalName();
            $sach->link_pdf = $fileName;

            // Đường dẫn tuyệt đối đến thư mục bạn muốn lưu file
            $absolutePath = 'C:/xampp/htdocs/quanlythuvien/public/pdf'; // Thay thế bằng đường dẫn thực tế của bạn

            // Tạo thư mục nếu chưa tồn tại
            if (!file_exists($absolutePath)) {
                mkdir($absolutePath, 0777, true);
            }

            // Di chuyển file đến thư mục với đường dẫn tuyệt đối
            $file->move($absolutePath, $fileName);
        }
        
        $sach->noidung = $request->noidungsach;
        $sach->namxuatban = $request->namxuatban;

        $sach->save();

        return redirect()->to('admin/sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sach= Qltv_Sach::find($id);
        $sach->delete();

        return redirect()->to('admin/sach');
    }
    public function print()
    {
        $list = Qltv_Sach::all();
        return view('backend.sach.print')
            ->with('listSach', $list);
    }
}
