@extends('nguoidung.index')
@section('noidung')

<div class="container">
					<!-- <div >DỊCH VỤ CỦA CHÚNG TÔI</div> -->
					<div>
					<hr>
					<h2 class="h4">Giới thiệu công ty TNHH <strong>Dịch Vụ Vận Tải Trường Thuận</strong></h2><br><br>
					@foreach($gioithieu as $gt)
						{!!$gt->noidung!!}<br>
					@endforeach
				</div>

@endsection