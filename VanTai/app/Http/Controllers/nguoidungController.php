<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\bocuc;
use App\gioithieu;
use App\dichvu;
use App\lienhe;
use App\seo;
use App\uudai;
use App\yeucaulienhe;




class nguoidungController extends Controller
{
    //
  

    
    public function ran(&$x,&$y,&$z){
        $x=rand(0,5);
        $y=rand(0,5);
        $z= $x+$y;
    }

    public function getindex(){
    	$bocuc = bocuc::first();
        $seo = seo::first();
        $data['bocuc'] = $bocuc;
        $data['seo'] = $seo;
    	return view('nguoidung.trangchu',$data);
    }

    public function getgioithieu(){
    	$bocuc = bocuc::first();
        $seo = seo::first();
    	$gioithieu = gioithieu::all();
        $data['bocuc'] = $bocuc;
        $data['seo'] = $seo;
        $data['gioithieu'] = $gioithieu;
        
    	return view('nguoidung.gioithieu',$data);
    }

    public function getdichvu(){
    	$bocuc = bocuc::first();
        $seo = seo::first();
    	$dichvu = dichvu::all();
        $data['bocuc'] = $bocuc;
        $data['seo'] = $seo;
        $data['dichvu'] = $dichvu;
    	return view('nguoidung.dichvu',$data);
    }

    public function getlienhe(){
    	$bocuc = bocuc::first();
        $seo = seo::first();
    	$lienhe = lienhe::all();
        $data['bocuc'] = $bocuc;
        $data['seo'] = $seo;
        $data['lienhe'] = $lienhe;
       
       $this->ran($abc->a,$abc->b,$abc->c);
        $data['a']= $abc->a;
        $data['b']= $abc->b;
        $data['c']= $abc->c;
       
    	return view('nguoidung.lienhe',$data);
    }

    public function postuudai(Request $request){
        $this->validate($request,[
            'link'=>'required|min:5|max:50',

        ],[
            'link.required'=>'Chưa nhập email hoặc số điện thoại',
            'link.min'=>'Email hoặc số điện thoại không hợp lệ',
            'link.max'=>'Email hoặc số điện thoại không hợp lệ',
        ]);
        $uudai = new uudai;
        $uudai->noidung = $request->link;
        $uudai->save();

        return redirect(route('index')."#uu-dai")->with('thongbao','Đăng ký thành công');

    }

    public function postyeucaulienhe(Request $request){
      
        $this->validate($request,[
            'hoten'=>'required|min:3|max:50',
            'email'=>'required|min:3|max:50',
            'sdt'=>'required|min:7|max:20',
            'diachi'=>'required|min:3|max:1000',
            'kq' => 'required|same:c',

           
        ],[
            'hoten.required'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'email.required'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'sdt.required'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'diachi.required'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'hoten.min'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'email.min'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'sdt.min'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'diachi.min'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'hoten.max'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'email.max'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'sdt.max'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'diachi.max'=>'Vui lòng nhập đầy đủ và chính xác các thông tin',
            'kq.required'=>'Chưa nhập kết quả',
            'kq.same'=>'Kết quả không chính xác',

        ]);
        $yeucaulienhe = new yeucaulienhe;
        $yeucaulienhe->hoten = $request->hoten;
        $yeucaulienhe->email = $request->email;
        $yeucaulienhe->sdt = $request->sdt;
        $yeucaulienhe->diachi = $request->diachi;
        $yeucaulienhe->tieude = $request->tieude;
        $yeucaulienhe->noidung = $request->noidung;
        $yeucaulienhe->save();

        return redirect(route('lienhe')."#van-tai-truong-thuan")->with('thongbao','Gửi thành công');
    }

}
