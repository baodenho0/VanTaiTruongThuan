<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\login;
use Illuminate\Support\Facades\Auth;

class doimatkhauController extends Controller
{
    //
    public function getdoimatkhau(){
    	
    	return view('admin/doimatkhau');
       
    }
    public function postdoimatkhau(Request $request){
    	$this->validate($request,[
    		'matkhau'=>'required',
    		'matkhaumoi'=>'required',
    		'nhaplai'=>'required',
    	],[
    		'matkhau.required'=>'Chưa nhập mật khẩu',
    		'matkhaumoi.required'=>'Chưa nhập mật khẩu mới',
    		'nhaplai.required'=>'Chưa nhập lại mật khẩu',
    	]);
    	if($request->matkhaumoi != $request->nhaplai){
    		return redirect(Route('doimatkhau'))->with('thongbao','Mật khẩu nhập lại không trùng khớp');
    	}
    	else{
    		$matkhau = login::first();
            if(Auth::attempt(['username'=>$matkhau->username,'password'=>$request->matkhau])){
               
               // 
               $matkhau->password = bcrypt($request->matkhaumoi);
                $matkhau->save();

                return redirect(Route('logout'))->with('thongbao','Đổi mật khẩu thành công');
            }
            else {
                return redirect(Route('doimatkhau'))->with('thongbao','Mật khẩu cũ không chính xác');
            }
        }
    }

}
