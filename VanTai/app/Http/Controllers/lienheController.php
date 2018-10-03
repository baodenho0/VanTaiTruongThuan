<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\Requests;
use App\lienhe;

class lienheController extends Controller
{
    //
    public function getdanhsach(){
    	$lienhe = lienhe::all();

    	return view('admin.lienhe.danhsach',['lienhe'=>$lienhe]);
    }
    public function getthem(){
    	return view('admin.lienhe.them');
    }
    public function postthem(Request $request){
    	$this->validate($request,[
    		'noidung'=>'required|max:2000',
    	],[
    		'noidung.required'=>'Chưa nhập nội dung',
    		'noidung.max'=>'Chỉ được nhập tối đa 1000 ký tự',
    	]);
    	$lienhe = new lienhe();
    	$lienhe->noidung = $request->noidung;
    	$lienhe->save();

    	return redirect('admin/lienhe/them')->with('thongbao','Thêm thành công');
    }
    public function getsua($id){
    	$lienhe = lienhe::find($id);
    	return view('admin.lienhe.sua',['lienhe'=>$lienhe]);
    }
    public function postsua(Request $request,$id){
    	$this->validate($request,[
    		'noidung'=>'required|max:2000',
    	],[
    		'noidung.required'=>'Chưa nhập nội dung',
    		'noidung.max'=>'Chỉ được nhập tối đa 1000 ký tự',
    	]);
    	$lienhe = lienhe::find($id);
    	$lienhe->noidung = $request->noidung;
    	$lienhe->save();

    	return redirect('admin/lienhe/danhsach')->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$lienhe = lienhe::find($id);
    	$lienhe->delete();

    	return redirect('admin/lienhe/danhsach')->with('thongbao','Đã xóa thành công');
    }

}
