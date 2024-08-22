<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Qltv_Theloai;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TheloaiCreateRequest;
use Illuminate\Support\Facades\Storage;

class TheloaiController extends Controller
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
        
        $list = Qltv_Theloai::paginate(10);
        $users= DB::table('qltv_theloai')->paginate(10); // Hiển thị Phân Trang
        return view('backend.theloai.index',['users' => $users])
            ->with('listTheloai', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.theloai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TheloaiCreateRequest $request)
    {
        $theloai = new Qltv_Theloai();
        $theloai->matheloai = $request->matheloai;
        $theloai->tentheloai = $request->tentheloai;

        $theloai->save();

        return redirect()->to('admin/theloaisach');
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
        $theloai = Qltv_Theloai::find($id); //SELECT * from qltv_theloai where id='id'
        return view('backend.theloai.edit')
            ->with('theloai', $theloai);
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
        $theloai = Qltv_Theloai::find($id);
        $theloai->matheloai = $request->matheloai;
        $theloai->tentheloai = $request->tentheloai;
        
        $theloai->save();

        return redirect()->to('admin/theloaisach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theloai= Qltv_Theloai::find($id);
        $theloai->delete();

        return redirect()->to('admin/theloaisach');
    }
    public function print()
    {
        $list = Qltv_Theloai::all();
        return view('backend.theloai.print')
            ->with('listTheloai', $list);
    }
}
