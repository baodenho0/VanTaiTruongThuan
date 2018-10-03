<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\login;

class dangnhapController extends Controller
{
    //
    public function getdangnhapadmin(){
    	return view('admin.login');
    }

    public function postdangnhapadmin(Request $request){
    	 $this->validate($request,[
    	 	'taikhoan'=>'required',
    	 	'matkhau'=>'required',
    	 ],[
    	 	'taikhoan.required'=>'Chưa nhập tài khoản',
    	 	'matkhau.required'=>'Chưa nhập mật khẩu',
    	 ]);
    	 if(Auth::attempt(['username'=>$request->taikhoan,'password'=>$request->matkhau])){
    	 	return redirect('admin/admin');
    	 }
    	 else{

    	 	return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
    	 }
    	

    }

    public function getdangxuat(){
    	Auth::logout();
    	return redirect('admin/dangnhap');
    }
    // public function test(){
    // 	$test = new login;
    // 	$test->username = 'admin';
    // 	$test->password = bcrypt('admin1');
    // 	$test->save();
    // 	echo "oke";
    // }

   
}
