<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\Requests;
use App\dichvu;

class dichvuController extends Controller
{
    //
    public function getdanhsach(){
    	$dichvu = dichvu::all();

    	return view('admin.dichvu.danhsach',['dichvu'=>$dichvu]);
    }
    public function getthem(){
    	return view('admin.dichvu.them');
    }
    public function postthem(Request $request){
    	$this->validate($request,[
    		'noidung'=>'required|max:2000',
    	],[
    		'noidung.required'=>'Chưa nhập nội dung',
    		'noidung.max'=>'Chỉ được nhập tối đa 1000 ký tự',
    	]);
    	$dichvu = new dichvu();
    	$dichvu->noidung = $request->noidung;
    	$dichvu->save();

    	return redirect('admin/dichvu/them')->with('thongbao','Thêm thành công');
    }
    public function getsua($id){
    	$dichvu = dichvu::find($id);
    	return view('admin.dichvu.sua',['dichvu'=>$dichvu]);
    }
    public function postsua(Request $request,$id){
    	$this->validate($request,[
    		'noidung'=>'required|max:2000',
    	],[
    		'noidung.required'=>'Chưa nhập nội dung',
    		'noidung.max'=>'Chỉ được nhập tối đa 1000 ký tự',
    	]);
    	$dichvu = dichvu::find($id);
    	$dichvu->noidung = $request->noidung;
    	$dichvu->save();

    	return redirect('admin/dichvu/danhsach')->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$dichvu = dichvu::find($id);
    	$dichvu->delete();

    	return redirect('admin/dichvu/danhsach')->with('thongbao','Đã xóa thành công');
    }

}
