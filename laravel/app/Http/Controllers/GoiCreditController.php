<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCredit;
class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsgoicredit = GoiCredit::all();
       return  view('goicredit',compact('dsgoicredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('themmoi_goicredit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $goi_credit=new GoiCredit;
        $goi_credit-> ten_goi=$request->ten_goi;
        $goi_credit-> credit=$request->credit;
        $goi_credit-> so_tien=$request->so_tien;
        $goi_credit->save();
        return "Thêm thành công";
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
        $GoiCredit=GoiCredit::findOrFail($id);
        // $pageName='Linhvuc-update';GoiCredit
        return view('capnhat_goicredit',compact('GoiCredit'));
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
        $goi_credit=GoiCredit::find($id);
        $goi_credit->ten_goi=$request->ten_goi;
        $goi_credit->credit=$request->credit;
        $goi_credit->so_tien=$request->so_tien;

        $goi_credit->save();
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
        $GoiCredit=GoiCredit::find($id);
        $GoiCredit->forceDelete();
        return 'Xóa thành công';
    }
}
