<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Linhvuc;
class LinhvucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dslinhvuc = Linhvuc::all();
       return  view('ds_linh_vuc',compact('dslinhvuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('themmoi_linhvuc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linh_vuc = new  Linhvuc;
        $linh_vuc-> ten_linh_vuc =$request->ten_linh_vuc;
        $linh_vuc->save();
        return "Thêm mới thành công";

    }

    /**public function storeCapnhat(Request $request)
    {
        $linh_vuc = new  Linhvuc;
        $linh_vuc-> $Linhvuc->id =$request->ten_linh_vuc;
        $linh_vuc->save();
        return "Cập nhật thành công";

    }**/

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
        $Linhvuc=Linhvuc::findOrFail($id);
        // $pageName='Linhvuc-update';
        return view('capnhat_linhvuc',compact('Linhvuc'));
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
        $Linhvuc=Linhvuc::find($id);
        $Linhvuc->ten_linh_vuc=$request->ten_linh_vuc;

        $Linhvuc->save();
        return "Cập nhật thành công";
        //return  redirect('linhvuc');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Linhvuc=Linhvuc::find($id);
        $Linhvuc->forceDelete();
        return 'Xóa thành công';
        //return "Đã xóa thành công";   
    }
}
