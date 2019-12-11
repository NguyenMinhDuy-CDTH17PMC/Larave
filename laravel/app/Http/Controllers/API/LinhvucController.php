<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Linhvuc;

class LinhvucController extends Controller
{
    public function index()
    {
    	return Linhvuc::all();
    }

    public function layDanhSach()
    {
    	$listLinhVuc=Linhvuc::all()->random(4);
    	$result=[
    		'success' =>true,
    		'data' =>$listLinhVuc
    	];
    	return response()->json($result);
    }
}
