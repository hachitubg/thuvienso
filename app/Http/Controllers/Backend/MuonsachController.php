<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Qltv_Muonsach; //Muốn sử dụng csdl thì phải use
use App\Qltv_Thuthu;
use App\Qltv_Docgia;
use App\Qltv_Sach;
use Carbon\Carbon;
use App\Notice;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB; 
use App\Http\Requests\MuonsachCreateRequest; 


class MuonsachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = <<<EOT
        SELECT ms.id, ms.mamuon, ms.ngaymuon, ms.hantra, ms.soluong, ms.ngaytra, ms.tinhtrang, 
            dg.tendocgia, dg.chucvu, dg.gioitinh, dg.namsinh, dg.diachi, dg.sdt, dg.email, dg.quequan,
            tt.tenthuthu, tt.mathuthu, tt.chucvu, tt.gioitinh, tt.namsinh, tt.diachi, tt.sdt, tt.email, tt.quequan,
            s.tensach, s.tentacgia, tl.tentheloai, xb.tennxb
        FROM qltv_muonsach ms
        JOIN qltv_docgia dg ON dg.id = ms.docgia_id
        JOIN qltv_thuthu tt ON tt.id = ms.thuthu_id
        JOIN qltv_sach s ON s.id = ms.sach_id
        JOIN qltv_theloai tl ON tl.id = s.theloai_id
        JOIN qltv_nxb xb ON xb.id = s.nxb_id
        GROUP BY ms.id, ms.mamuon, ms.ngaymuon, ms.hantra, ms.soluong, ms.ngaytra, ms.tinhtrang,
            dg.tendocgia, dg.chucvu, dg.gioitinh, dg.namsinh, dg.diachi, dg.sdt, dg.email, dg.quequan,
            tt.tenthuthu, tt.mathuthu, tt.chucvu, tt.gioitinh, tt.namsinh, tt.diachi, tt.sdt, tt.email, tt.quequan,
            s.tensach, s.tentacgia, tl.tentheloai, xb.tennxb
EOT; //chuỗi có xuống dòng
        // Raw SQL

        $list = DB::select($sql); // Phân trang cho dữ liệu
        //$users= DB::table('qltv_muonsach'); // Hiển thị Phân Trang
        return view('backend.muonsach.index')
            ->with('listMuonsach', $list);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listDocgia = Qltv_Docgia::all();
        $listThuthu = Qltv_Thuthu::all();
        $listSach = Qltv_Sach::all();
        return view('backend.muonsach.create')
            ->with('listDocgia', $listDocgia)
            ->with('listThuthu', $listThuthu)
            ->with('listSach', $listSach);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MuonsachCreateRequest $request)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $muonsach = new Qltv_Muonsach();
        $muonsach->mamuon      = $request->mamuon;
        $muonsach->soluong = $request->soluong; // 2 | 20
        $muonsach->hantra = $request->hantra;
        $muonsach->ngaymuon = $dt->toDateTimeString();
        $muonsach->ngaytra = $dt->addDays($request->hantra);// lấy ngày mượn hiện tại cộng với hạn trả ra ngày trả
        //$muonsach->ngaytra = Carbon::now();
        $muonsach->tinhtrang    = '0';
        $muonsach->thuthu_id    = $request->thuthu_id;
        $muonsach->docgia_id       = $request->docgia_id;
        $muonsach->sach_id       = $request->sach_id;
        $muonsach->save();
        return redirect()->to('admin/muonsach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $sql = <<<EOT
        SELECT   dg.id, dg.madocgia, dg.tendocgia, dg.chucvu, dg.gioitinh, dg.namsinh, dg.diachi, dg.sdt, dg.email, dg.quequan,
            COUNT(*) as TongSoSach
        FROM qltv_muonsach ms
        JOIN qltv_docgia dg ON dg.id = ms.docgia_id
        GROUP BY dg.id, dg.madocgia, dg.tendocgia, dg.chucvu, dg.gioitinh, dg.namsinh, dg.diachi, dg.sdt, dg.email, dg.quequan
EOT; //chuỗi có xuống dòng
        // Raw SQL
        $listMuonsach = DB::select($sql);
        //dd($listOrders);
        return view('backend.muonsach.show')
            ->with('listMuonsach', $listMuonsach);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $muonsach = Qltv_Muonsach::find($id);
        $listThuthu = Qltv_Thuthu::all();
        $listDocgia = Qltv_Docgia::all();
        $listSach   = Qltv_Sach::all();
        return view('backend.muonsach.edit')
            ->with('listThuthu', $listThuthu)
            ->with('listDocgia', $listDocgia)
            ->with('listSach',$listSach)
            ->with('muonsach', $muonsach);
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
        $muonsach = Qltv_Muonsach::find($id);
        $muonsach->mamuon      = $request->mamuon;
        $muonsach->ngaymuon      = $request->ngaymuon;
        $muonsach->hantra      = $request->hantra;
        $muonsach->soluong       = $request->soluong;
        $muonsach->ngaytra      = $request->ngaytra;
        $muonsach->tinhtrang    = $request->tinhtrang;
        $muonsach->thuthu_id    = $request->thuthu_id;
        $muonsach->docgia_id       = $request->docgia_id;
        $muonsach->sach_id       = $request->sach_id;
        $muonsach->save();
        return redirect()->to('admin/muonsach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $muonsach= Qltv_Muonsach::find($id);
        $muonsach->delete();

        return redirect()->route('backend.muonsach.index');
    }
    public function print()
    {
        $sql = <<<EOT
        SELECT ms.id, ms.mamuon, ms.ngaymuon, ms.hantra, ms.soluong, ms.ngaytra, ms.tinhtrang, 
            dg.tendocgia, dg.chucvu, dg.gioitinh, dg.namsinh, dg.diachi, dg.sdt, dg.email, dg.quequan,
            tt.tenthuthu, tt.mathuthu, tt.chucvu, tt.gioitinh, tt.namsinh, tt.diachi, tt.sdt, tt.email, tt.quequan,
            s.tensach, s.tentacgia, tl.tentheloai, xb.tennxb
        FROM qltv_muonsach ms
        JOIN qltv_docgia dg ON dg.id = ms.docgia_id
        JOIN qltv_thuthu tt ON tt.id = ms.thuthu_id
        JOIN qltv_sach s ON s.id = ms.sach_id
        JOIN qltv_theloai tl ON tl.id = s.theloai_id
        JOIN qltv_nxb xb ON xb.id = s.nxb_id
        GROUP BY ms.id, ms.mamuon, ms.ngaymuon, ms.hantra, ms.soluong, ms.ngaytra, ms.tinhtrang,
            dg.tendocgia, dg.chucvu, dg.gioitinh, dg.namsinh, dg.diachi, dg.sdt, dg.email, dg.quequan,
            tt.tenthuthu, tt.mathuthu, tt.chucvu, tt.gioitinh, tt.namsinh, tt.diachi, tt.sdt, tt.email, tt.quequan,
            s.tensach, s.tentacgia, tl.tentheloai, xb.tennxb
EOT; //chuỗi có xuống dòng
        // Raw SQL
        $listMuonsach = DB::select($sql);
        //dd($listOrders);
        return view('backend.muonsach.print')
            ->with('listMuonsach', $listMuonsach);
        // $list = Qltv_Muonsach::all();
        // return view('backend.muonsach.print')
        //     ->with('listMuonsach', $list);
    }
    public function printdg(){
        $sql = <<<EOT
        SELECT   dg.id, dg.madocgia, dg.tendocgia, dg.chucvu, dg.gioitinh, dg.namsinh, dg.diachi, dg.sdt, dg.email, dg.quequan,
            COUNT(*) as TongSoSach
        FROM qltv_muonsach ms
        JOIN qltv_docgia dg ON dg.id = ms.docgia_id
        GROUP BY dg.id, dg.madocgia, dg.tendocgia, dg.chucvu, dg.gioitinh, dg.namsinh, dg.diachi, dg.sdt, dg.email, dg.quequan
EOT; //chuỗi có xuống dòng
        // Raw SQL
        $listMuonsach = DB::select($sql);
        //dd($listOrders);
        return view('backend.muonsach.printdg')
            ->with('listMuonsach', $listMuonsach);
    }
}
