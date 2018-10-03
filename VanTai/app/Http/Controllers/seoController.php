<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\seo;

class seoController extends Controller
{
    //
    public function getsua(){
    	$seo = seo::first();
    	return view('admin.quantri.seo',['seo'=>$seo]);
    }
    public function postsua(Request $request){
    	$this->validate($request,[
    		'description'=>'required',
    		'keywords'=>'required',
    	],[
    		'description.required'=>'Chưa nhập mô tả',
    		'keywords.required'=>'Chưa nhập từ khóa',
    	]);
    	$seo = seo::first();
    	$seo->description = $request->description;
    	$seo->keywords = $request->keywords;
    	$seo->save();

    	return redirect('admin/quantri/sua')->with('thongbao','Cập nhật thành công');


    }

}
