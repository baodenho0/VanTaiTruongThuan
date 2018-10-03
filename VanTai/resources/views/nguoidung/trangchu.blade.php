@extends('nguoidung.index')
@section('noidung')

<div class="container main_3">
					<!-- <div >DỊCH VỤ CỦA CHÚNG TÔI</div> -->
					<hr>
					<div  class="col-xs-12  col-md-4 "><a href="{{route('dichvu')}}#van-tai-truong-thuan"><img class="thumbnail slide"  src="upload/main3h/{{$bocuc->main3h_1}}" alt="vận tải trường thuận 1">
						{{$bocuc->main3_1}}
					</a></div>
					<div  class="col-xs-12  col-md-4 "><a href="{{route('dichvu')}}#van-tai-truong-thuan"><img class="thumbnail slide"  src="upload/main3h/{{$bocuc->main3h_2}}" alt="vận tải trường thuận 2">{{$bocuc->main3_2}}</a></div>
					<div  class="col-xs-12  col-md-4 "><a href="{{route('dichvu')}}#van-tai-truong-thuan"><img class="thumbnail slide"  src="upload/main3h/{{$bocuc->main3h_3}}" alt="vận tải trường thuận 3">{{$bocuc->main3_3}}</a></div>

				</div>

@endsection