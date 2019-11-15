<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class QuanTriVienController extends Controller
{
	protected $redirectTo= 'linh-vuc';

    public function dangNhap()
    {
    	return view('dang-nhap');
    }

    public function xuLyDangNhap(Request $request)
    {
    	$ten_dang_nhap = $request->ten_dang_nhap;
    	$mat_khau = $request->mat_khau;

    	if(Auth::attempt(['ten_dang_nhap'=>$ten_dang_nhap, 'password' =>$mat_khau]))
    	{
    		return redirect()->route('trang-chu');
    	}
    	return "Đăng nhập thất bại";

    	/*$qtv = QuanTriVien::Where('ten_dang_nhap', $ten_dang_nhap)->first();
    	if($qtv==null)
    	{
    		return "Sai tên đăng nhập";
    	}

    	if(!Hash::check($mat_khau, $qtv->mat_khau))
    	{
    		return "Sai mật khẩu";
    	}
    	return "Đăng nhập thành công";
    	*/
    }

    public function layThongTin()
    {
    	return Auth::id();
    }

    public function dangXuat()
    {
    	Auth::logout();
    	return redirect()->route('dang-nhap');
    }
}
