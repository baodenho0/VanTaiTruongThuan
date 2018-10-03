<!-- Page Content -->
@extends('admin.layout.index')
@section('content')
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Bố cục</h1>
						
						@include('admin.layout.thongbao');
					</div>
					<!-- /.col-lg-12 -->
					<div class="bocuc">
						<div class="bocuc1">
							<form action="admin/bocuc/header" method="post" >
								
								{{csrf_field()}}
								<legend>Header</legend>

								<div class="form-group">
									<!-- <label for="">label</label> -->
									<div class="col-md-7">
										
										<input type="text" class="form-control" id="" placeholder="Thông tin" value="{{$bocuc->header_1}}" name="header_1"><br>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="" placeholder="link FB" value="{{$bocuc->header_2}}" name="header_2"><br>
										<input type="text" class="form-control" id="" placeholder="link G+" value="{{$bocuc->header_3}}" name="header_3"><br>
									</div>
								</div>
								<input type="submit" name="submit" class="btn btn-primary" value="Cập nhật"> 
							</form>
						</div>
						<div class="bocuc1">
							<form action="admin/bocuc/slide" method="POST"  enctype="multipart/form-data">
								<legend>Slide</legend>
								
								
								{{csrf_field()}}
								<div class="form-group">
									<!-- <label for="">label</label> -->
									<div class="col-md-11">
										<input type="file" class="form-control" id="" name="slide_1"  accept=".JPG, .PNG,.JPEG"><br>

										<input type="file" class="form-control" id="" name="slide_2" accept=".JPG, .PNG,.JPEG"><br>
										<input type="file" class="form-control" id=""  name="slide_3" accept=".JPG, .PNG,.JPEG"><br>
									</div>
								</div>
								<input type="submit" name="submit" class="btn btn-primary" value="Cập nhật" >
							</form>
						</div>
						<div class="bocuc1">
							<form action="admin/bocuc/main2" method="post" >
								<legend>Main_2</legend>
									{{csrf_field()}}
								<div class="form-group">
									<!-- <label for="">label</label> -->
									<div class="col-md-6">
										<input type="text" class="form-control" id="" placeholder="Nội dung 1" value="{{$bocuc->main2_1}}" name="main2_1"><br>
									</div>
									<div class="col-md-5">
										<input type="text" class="form-control" id="" placeholder="Nội dung 2" value="{{$bocuc->main2_2}}" name="main2_2"><br>
										
									</div>
								</div>
								<input type="submit" name="submit" class="btn btn-primary" value="Cập nhật" >
							</form>
						</div>
						<div class="bocuc1">
							<form action="admin/bocuc/main3" method="post" enctype="multipart/form-data">
								<legend>Main_3</legend>
								{{csrf_field()}}
								<div class="form-group">
									<!-- <label for="">label</label> -->
									<div class="col-md-9">
										<input type="text" class="form-control" id="" placeholder="Nội dung 1" value="{{$bocuc->main3_1}}" name="main3_1" ><br>

										<input type="text" class="form-control" id="" placeholder="Nội dung 2" value="{{$bocuc->main3_2}}" name="main3_2" ><br>
										<input type="text" class="form-control" id="" placeholder="Nội dung 3" value="{{$bocuc->main3_3}}" name="main3_3" ><br>
									</div>
									<div class="col-md-2">
										<input type="file" class="form-control" id="" name="main3h_1" accept=".JPG, .PNG,.JPEG"><br>

										<input type="file" class="form-control" id="" name="main3h_2" accept=".JPG, .PNG,.JPEG"><br>
										<input type="file" class="form-control" id="" name="main3h_3" accept=".JPG, .PNG,.JPEG"><br>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Cập nhật</button>
							</form>
						</div>

						<div class="bocuc1">
							<form action="admin/bocuc/bando" method="POST" ">
								<legend>Bản đồ</legend>
								{{csrf_field()}}
								<div class="form-group">
									<!-- <label for="">label</label> -->
									<div class="col-md-11">
										<input name="footer_1" type="text" class="form-control" id="" placeholder="Nhúng bản đồ" value="{{$bocuc->footer_1}}"><br>
									</div>
									
								</div>
								<button type="submit" class="btn btn-primary">Cập nhật</button>
							</form>
						</div>

						<div class="bocuc1">
							<form action="admin/bocuc/footer" method="POST" ">
								<legend>Footer</legend>
									{{csrf_field()}}
								<div class="form-group">
									<!-- <label for="">label</label> -->
									<div class="col-md-6">
										
										<textarea id="demo" class="form-control ckeditor" placeholder="Thông tin liên hệ" name="footer_2" >{{$bocuc->footer_2}}</textarea>

										<br>
									</div>
									<div class="col-md-5">
										<textarea id="demo" class="form-control ckeditor" placeholder="Thông tin thêm" name="footer_3" >{{$bocuc->footer_3}}</textarea>
										
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Cập nhật</button>
								
							</form>

						</div>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->
@endsection