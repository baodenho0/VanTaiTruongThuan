<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\bocuc;

class bocucController extends Controller
{
    //
    public function getbocuc(){
    	$bocuc = bocuc::first();
    	
    	return view('admin.bocuc.bocuc',['bocuc'=>$bocuc]);
    }

    public function postheader(Request $request){
    
    	 //$bocuc =bocuc::first();
    	 $this->validate($request,[
    	 	'header_1'=>'required',
    	 	'header_2'=>'required',
    	 	'header_3'=>'required',
    		
    	 ],[
    	 	'header_1.required'=>'Chưa nhập Header - Thông tin',
    	 	//'header_1.unique'=>'Thông tin bị trùng',
    	 	'header_2.required'=>'Chưa nhập Header - Link FB',
    	 	//'header_2.unique'=>'Link FB trùng',
    	 	'header_3.required'=>'Chưa nhập Header - Link G+',
    	 	//'header_3.unique'=>'Link G+ bị trùng',
    		

    	 ]);

    	 $bocuc = bocuc::first();
    	 $bocuc->header_1= $request->header_1;
    	 $bocuc->header_2= $request->header_2;
    	 $bocuc->header_3= $request->header_3;
    	 $bocuc->save();

    	 return redirect('admin/bocuc/bocuc')->with('thongbao','Cập nhật thành công Header');
		}

	public function postmain2(Request $request){
			 

			  $this->validate($request,[
			  	'main2_1'=>'required',
			  	'main2_2'=>'required',

			 ],[
			 	'main2_1.required'=>'Chưa nhập Main_2 - Thông tin 1',
			 	'main2_2.required'=>'Chưa nhập Main_2 - Thông tin 2',
			  	
			  ]);

			 $main2 = bocuc::first();
			 

			 $main2->main2_1 = $request->main2_1;
			 $main2->main2_2 = $request->main2_2;
			 $main2->save();

			return redirect('admin/bocuc/bocuc')->with('thongbao','Cập nhật thành công Main_2');

		}

	public function postmain3(Request $request){
		$this->validate($request,[
			'main3_1'=>'required',
			'main3_2'=>'required',
			'main3_3'=>'required',

		],[
			'main3_1.required'=>'Chưa nhập Main_3 - Nội dung 1',
			'main3_2.required'=>'Chưa nhập Main_3 - Nội dung 2',
			'main3_3.required'=>'Chưa nhập Main_3 - Nội dung 3',
		]);
		$main3 = bocuc::first();

		if($request->hasFile('main3h_1') ||$request->hasFile('main3h_2') ||$request->hasFile('main3h_3') )
		{

			$this->validate($request,[
			'main3h_1'=>'required|mimes:jpg,jpeg,png',
			'main3h_2'=>'required|mimes:jpg,jpeg,png',
			'main3h_3'=>'required|mimes:jpg,jpeg,png',
		],[
			'main3h_1.required'=>'Chưa có Main_3 - hình 1',
			'main3h_2.required'=>'Chưa có Main_3 - hình 2',
			'main3h_3.required'=>'Chưa có Main_3 - hình 3',
			'main3h_1.mimes'=>'Chỉ được upload file .jpeg . jpg .png',
			'main3h_2.mimes'=>'Chỉ được upload file .jpeg . jpg .png',
			'main3h_3.mimes'=>'Chỉ được upload file .jpeg . jpg .png',
		]);
		
		$main3h_1 = $request->file('main3h_1');
		$main3h_1_name = str_random(4)."-".$main3h_1->getClientOriginalName();
		unlink('upload/main3h/'.$main3->main3h_1);
		$main3h_1->move('upload/main3h',$main3h_1_name);

		$main3h_2 = $request->file('main3h_2');
		$main3h_2_name = str_random(4)."-".$main3h_2->getClientOriginalName();
		unlink('upload/main3h/'.$main3->main3h_2);
		$main3h_2->move('upload/main3h',$main3h_2_name);

		$main3h_3 = $request->file('main3h_3');
		$main3h_3_name = str_random(4)."-".$main3h_3->getClientOriginalName();
		unlink('upload/main3h/'.$main3->main3h_3);
		$main3h_3->move('upload/main3h',$main3h_3_name);

		
		$main3->main3h_1 = $main3h_1_name;
		$main3->main3h_2 = $main3h_2_name;
		$main3->main3h_3 = $main3h_3_name;
			
		}


		 
		 $main3->main3_1 = $request->main3_1;
		 $main3->main3_2 = $request->main3_2;
		 $main3->main3_3 = $request->main3_3;
		 $main3->save();

		return redirect('admin/bocuc/bocuc')->with('thongbao','Cập nhật thành công Main_3');
	}

	public function postbando(Request $request){
		//echo $request->footer_1;
		$this->validate($request,[
			'footer_1'=>'required',
		],[
			'footer_1.required'=>'Chưa nhập Bản đồ - Nhúng bản đồ',
		]);

		$bando = bocuc::first();
		$bando->footer_1 = $request->footer_1;
		$bando->save();

		return redirect('admin/bocuc/bocuc')->with('thongbao','Cập nhật thành công Bản đồ');
	}

	public function postfooter(Request $request){
		// echo $request->footer_1;
		// echo $request->footer_2;
		$this->validate($request,[
			'footer_2'=>'required',
			'footer_3'=>'required',
		],[
			'footer_2.required'=>'Chưa nhập Footer - Thông tin 1',
			'footer_3.required'=>'Chưa nhập Footer - Thông tin 2',
		]);

		$footer = bocuc::first();
		$footer->footer_2 = $request->footer_2;
		$footer->footer_3 = $request->footer_3;
		$footer->save();

		return redirect('admin/bocuc/bocuc')->with('thongbao','Cập nhật thành công Footer');
	}

	public function postslide(Request $request){
		$this->validate($request,[
			'slide_1'=>'required|mimes:jpg,jpeg,png',
			'slide_2'=>'required|mimes:jpg,jpeg,png',
			'slide_3'=>'required|mimes:jpg,jpeg,png',
		],[
			'slide_1.required'=>'Chưa có Slide - hình 1',
			'slide_2.required'=>'Chưa có Slide - hình 2',
			'slide_3.required'=>'Chưa có Slide - hình 3',
			'slide_1.mimes'=>'Chỉ được upload file .jpeg . jpg .png',
			'slide_2.mimes'=>'Chỉ được upload file .jpeg . jpg .png',
			'slide_3.mimes'=>'Chỉ được upload file .jpeg . jpg .png',
		]);
		$slide =bocuc::first();
		$slide_1 = $request->file('slide_1');
		$slide_1_name = str_random(4)."-".$slide_1->getClientOriginalName();
		unlink('upload/slide/'.$slide->slide_1);
		$slide_1->move('upload/slide',$slide_1_name);

		$slide_2 = $request->file('slide_2');
		$slide_2_name = str_random(4)."-".$slide_2->getClientOriginalName();
		unlink('upload/slide/'.$slide->slide_2);
		$slide_2->move('upload/slide',$slide_2_name);

		$slide_3 = $request->file('slide_3');
		$slide_3_name = str_random(4)."-".$slide_3->getClientOriginalName();
		unlink('upload/slide/'.$slide->slide_3);
		$slide_3->move('upload/slide',$slide_3_name);

		
		$slide->slide_1 = $slide_1_name;
		$slide->slide_2 = $slide_2_name;
		$slide->slide_3 = $slide_3_name;


		$slide->save();

		return redirect('admin/bocuc/bocuc')->with('thongbao','Cập nhật thành công Slide');

	}
}
