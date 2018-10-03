<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\gioithieu;

class gioithieuController extends Controller
{
    //
    public function getdanhsach(){
    	$gioithieu = gioithieu::all();

    	return view('admin.gioithieu.danhsach',['gioithieu'=>$gioithieu]);
    }
    public function getthem(){
    	return view('admin.gioithieu.them');
    }
    public function postthem(Request $request){
    	$this->validate($request,[
    		'noidung'=>'required|max:2000',
    	],[
    		'noidung.required'=>'Chưa nhập nội dung',
    		'noidung.max'=>'Chỉ được nhập tối đa 1000 ký tự',
    	]);
    	$gioithieu = new gioithieu();
    	$gioithieu->noidung = $request->noidung;
    	$gioithieu->save();

    	return redirect('admin/gioithieu/them')->with('thongbao','Thêm thành công');
    }
    public function getsua($id){
    	$gioithieu = gioithieu::find($id);
    	return view('admin.gioithieu.sua',['gioithieu'=>$gioithieu]);
    }
    public function postsua(Request $request,$id){
    	$this->validate($request,[
    		'noidung'=>'required|max:2000',
    	],[
    		'noidung.required'=>'Chưa nhập nội dung',
    		'noidung.max'=>'Chỉ được nhập tối đa 1000 ký tự',
    	]);
    	$gioithieu = gioithieu::find($id);
    	$gioithieu->noidung = $request->noidung;
    	$gioithieu->save();

    	return redirect('admin/gioithieu/danhsach')->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$gioithieu = gioithieu::find($id);
    	$gioithieu->delete();

    	return redirect('admin/gioithieu/danhsach')->with('thongbao','Đã xóa thành công');
    }
}
