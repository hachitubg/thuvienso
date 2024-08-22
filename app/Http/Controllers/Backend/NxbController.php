<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Qltv_Nxb; //Muốn sử dụng csdl thì phải use
use Illuminate\Support\Facades\DB; 
use App\Http\Requests\NxbCreateRequest; 

class NxbController extends Controller
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
        
        $list = Qltv_Nxb::paginate(10);
        $users= DB::table('qltv_nxb')->paginate(10); // Hiển thị Phân Trang
        return view('backend.nxb.index',['users' => $users])
            ->with('listNxb', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.nxb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NxbCreateRequest $request)
    {
        $nxb = new Qltv_Nxb();
        $nxb->manxb = $request->manxb;
        $nxb->tennxb = $request->tennxb;

        $nxb->save();

        return redirect()->to('admin/nhaxuatban');
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
        $nxb = Qltv_Nxb::find($id); //SELECT * from qltv_nxb where id='id'
        return view('backend.nxb.edit')
            ->with('nxb', $nxb);
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
        $nxb = Qltv_Nxb::find($id);
        $nxb->manxb = $request->manxb;
        $nxb->tennxb = $request->tennxb;
        
        $nxb->save();

        return redirect()->to('admin/nhaxuatban');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nxb= Qltv_Nxb::find($id);
        $nxb->delete();

        return redirect()->to('admin/nhaxuatban');
    }
    public function print()
    {
        $list = Qltv_Nxb::all();
        return view('backend.nxb.print')
            ->with('listNxb', $list);
    }
}
