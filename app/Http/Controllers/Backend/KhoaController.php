<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Qltv_Khoa; //Muốn sử dụng csdl thì phải use
use Illuminate\Support\Facades\DB; 
use App\Http\Requests\KhoaCreateRequest; 

class KhoaController extends Controller
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
        
        $list = Qltv_Khoa::paginate(10);
        $users= DB::table('qltv_khoa')->paginate(10); // Hiển thị Phân Trang
        return view('backend.khoa.index',['users' => $users])
            ->with('listKhoa', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.khoa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $khoa = new Qltv_Khoa();
        $khoa->makhoa = $request->makhoa;
        $khoa->tenkhoa = $request->tenkhoa;

        $khoa->save();

        return redirect()->to('admin/khoa');
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
        $khoa = Qltv_Khoa::find($id); //SELECT * from qltv_khoa where id='id'
        return view('backend.khoa.edit')
            ->with('khoa', $khoa);
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
        $khoa = Qltv_Khoa::find($id);
        $khoa->makhoa = $request->makhoa;
        $khoa->tenkhoa = $request->tenkhoa;
        
        $khoa->save();

        return redirect()->to('admin/khoa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $khoa= Qltv_Khoa::find($id);
        $khoa->delete();

        return redirect()->to('admin/khoa');
    }
    public function print()
    {
        $list = Qltv_Khoa::all();
        return view('backend.khoa.print')
            ->with('listKhoa', $list);
    }
}
