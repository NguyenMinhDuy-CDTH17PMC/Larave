<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cauhoi;
use App\Linhvuc;
class CauhoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$dsLinhVuc= Linhvuc::all();
        $linhVuc=LinhVuc::all();
        $dscauhoi = Cauhoi::all();
        return view('cauhoi',compact('dscauhoi','linhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dslinhvuc = Linhvuc::all();

        return view('themmoi_cauhoi',compact('dslinhvuc'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cau_hoi = new  Cauhoi;
        $cau_hoi-> noidung =$request->noidung;
        $cau_hoi-> linh_vuc_id =$request->linh_vuc_id;
        $cau_hoi-> phuong_an_a =$request->phuong_an_a;
        $cau_hoi-> phuong_an_b =$request->phuong_an_b;
        $cau_hoi-> phuong_an_c =$request->phuong_an_c;
        $cau_hoi-> phuong_an_d =$request->phuong_an_d;
        $cau_hoi-> dap_an =$request->dap_an;
        $cau_hoi->save();
        //return "Thêm mới thành công";
        return redirect()->route('cauhoi.danhsach');
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
        $linhvuc = Linhvuc::all();
         $cauhoi=cauhoi::findOrFail($id);
        // $pageName='Linhvuc-update';
        return view('capnhat_cauhoi',compact('cauhoi','linhvuc'));

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
        $Cauhoi=Cauhoi::find($id);
        $linhvuc = Linhvuc::all();
        $Cauhoi->noidung=$request->noidung;
        $Cauhoi->Linhvuc->ten_linh_vuc=$request->ten_linh_vuc;
        $Cauhoi->phuong_an_a=$request->phuong_an_a;
        $Cauhoi->phuong_an_b=$request->phuong_an_b;
        $Cauhoi->phuong_an_c=$request->phuong_an_c;
        $Cauhoi->phuong_an_d=$request->phuong_an_d;
        $Cauhoi->dap_an=$request->dap_an;

        $Cauhoi->save();
        //return  view('capnhat_cauhoi',compact('cauHoi'));
        //return  redirect('cauhoi');
         return "Cập nhật thành công";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Cauhoi=Cauhoi::find($id);
        $Cauhoi->forceDelete();
        return "Xóa thành công";
    }
}
