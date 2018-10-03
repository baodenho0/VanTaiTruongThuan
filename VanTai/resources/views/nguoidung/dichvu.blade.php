@extends('nguoidung.index')
@section('noidung')

<div class="container">
					<!-- <div >DỊCH VỤ CỦA CHÚNG TÔI</div> -->
					<div>
					<hr>
					<h2 class="h4">Dịch vụ công ty TNHH <strong>Dịch Vụ Vận Tải Trường Thuận</strong></h2><br><br>
					@foreach($dichvu as $dv)
					{!!$dv->noidung!!}<br>
					@endforeach
				</div>
 
@endsection