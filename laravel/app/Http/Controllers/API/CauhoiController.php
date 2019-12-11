<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cauhoi;

class CauhoiController extends Controller
{
    public function index()
    {
    	return Cauhoi::all();
    }

    public function layCauHoi(Request $request)
    {
    	$linh_vuc_id=$request->Request('linh_vuc');
    	$cauHoi=Cauhoi::where('linh_vuc_id',$linh_vuc_id)->get()->random(4);
    	$request=[
    		'success' =>true,
    		'data' =>$cauHoi
    	];
    	return response()->json($request);
    }
}
