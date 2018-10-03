<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\yeucaulienhe;
use App\uudai;

class khachhangController extends Controller
{
    //
    public function getdanhsach(){
    	$yeucaulienhe = yeucaulienhe::all();

    	return view('admin.khachhang.danhsach',['yeucaulienhe'=>$yeucaulienhe]);
    }

    public function getuudai(){
    	$uudai = uudai::all();

    	return view('admin.khachhang.uudai',['uudai'=>$uudai]);
    }
    

    public function getxoadanhsach($id){
    	$yeucaulienhe = yeucaulienhe::find($id);
    	$yeucaulienhe->delete();

    	return redirect('admin/khachhang/danhsach')->with('thongbao','Đã xóa thành công');
    }

    public function getxoauudai($id){
    	//echo "oke oke";
    	$uudai = uudai::find($id);
    	$uudai->delete();

    	return redirect('admin/khachhang/uudai')->with('thongbao','Đã xóa thành công');
    }

}
