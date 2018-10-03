@extends('nguoidung.index')
@section('noidung')
<div  class="container">

	<!-- <div >DỊCH VỤ CỦA CHÚNG TÔI</div> -->
	<div>
		<hr>
		<h2 class="h4">Liên hệ công ty TNHH <strong>Dịch Vụ Vận Tải Trường Thuận</strong></h2><br><br>
		@foreach($lienhe as $lh)
			{!!$lh->noidung!!}<br>
		@endforeach
	</div>
	<div>
		<form action="{{route('yeucaulienhe')}}" method="POST" class="form-horizontal" >
			{{csrf_field()}}
			<div class="form-group">
				<legend><h4>Gởi yêu cầu liên hệ</h4></legend>
			</div>
			@include('admin.layout.thongbao')
			<div class="row">
				<div class="form-group">
					<div class="col-md-5 col-xs-6">
						<input type="text" class="form-control " id="exampleFormControlInput1" name="hoten" placeholder="Họ tên">
					</div>
					<div class="col-md-5 col-xs-6">
						<input type="email" class="form-control " id="exampleFormControlInput1" name="email" placeholder="Email@gmail.com">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-5 col-xs-6">
						<input type="text" class="form-control" id="exampleFormControlInput1" name="sdt" placeholder="Điện thoại">
					</div>
					<div class="col-md-5 col-xs-6">
						<input type="text" class="form-control" id="exampleFormControlInput1" name="diachi" placeholder="Địa chỉ">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10  ">
						<input type="text" class="form-control " id="exampleFormControlInput1" name="tieude" placeholder="Tiêu đề">
					</div>

				</div>
				<div class="form-group">
					<div class="col-md-10  ">

						<textarea class="form-control " id="exampleFormControlTextarea1" name="noidung" rows="4"placeholder="Nội dung"></textarea>
					</div>
				</div>
				


				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" class="btn btn-primary">Gửi liên hệ</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection