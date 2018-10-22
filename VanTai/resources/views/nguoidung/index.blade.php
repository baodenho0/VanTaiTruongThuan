<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Công Ty TNHH Dịch Vụ Vận Tải Trường Thuận</title>
		<base href="{{asset('')}}">
		<meta name="description" content="{{$seo->description}}" />
		<meta name="keywords" content="{{$seo->keywords}}" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="vantai_asset/css/bootstrap.min.css">
		<link rel="stylesheet" href="vantai_asset/css/index.css">
		{{-- <script src='https://www.google.com/recaptcha/api.js'></script> --}}

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="content">
			<div class="header" >
				<div class="container">
					<div class="row ">
					<div class="col-md-2 bocuc1">
						<a href="{{route('index')}}">
						<img src="upload/logo.jpg" alt="vận tải trường thuận" class="logo">
						</a>
					</div>
					<div class="col-md-10">
						<div class="row bocuc1">
							<div class="col-md-10 col-sm-10">{{$bocuc->header_1}}</div>
							<div class="col-md-2 col-sm-2">
								<div id="link">
									<a href="{{$bocuc->header_2}}" class="fa fa-facebook">FB</a>
									<a href="{{$bocuc->header_3}}" class="fa fa-google">G+</a>
								</div>
							</div>
						</div>
						<div>
							<nav class="navbar navbar-default bocuc_navbar" role="navigation">
								<div class="container-fluid">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header nonefloat">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										 <a class="navbar-brand" href="{{route('index')}}"><h1 class="hh1">Công ty TNHH Dịch Vụ <strong class="strong">Vận Tải Trường Thuận</strong></h1></a> 
									</div>
							
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse navbar-ex1-collapse">
										
										
										<ul class="nav navbar-nav navbar-right ">
											<li><a href="{{route('index')}}">TRANG CHỦ</a></li>
											<li><a href="{{route('gioithieu')}}#van-tai-truong-thuan">GIỚI THIỆU</a></li>
											<li><a href="{{route('dichvu')}}#van-tai-truong-thuan">DỊCH VỤ</a></li>
										
											<li><a href="{{route('lienhe')}}#van-tai-truong-thuan">LIÊN HỆ</a></li>
											
										</ul>
									</div><!-- /.navbar-collapse -->
								</div>
							</nav>
						</div>
					</div>
					</div>

				</div>
			</div>

			<div class="main">
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
					
					<div class="carousel-inner">
						<div class="item">
							<img   class="slide" alt="Dịch vụ vận tải trường thuận 1" src="upload/slide/{{$bocuc->slide_1}}">
							
						</div>
						<div class="item">
							<img  class="slide"  alt="Dịch vụ vận tải trường thuận 2" src="upload/slide/{{$bocuc->slide_2}}">
							
						</div>
						<div class="item active">
							<img  class="slide" alt="Dịch vụ vận tải trường thuận 3" src="upload/slide/{{$bocuc->slide_3}}">
							
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>

			<div class="main_2">
				<div class="main2_html">
					<h2><div id="van-tai-truong-thuan" class="chu_1">{{$bocuc->main2_1}}</div></h2>
					<h2><div class="chu_2">{{$bocuc->main2_2}} </div></h2>
				</div>
			</div>

			<div class="">
				@yield('noidung');
			</div>


			<div class="footer">
				<hr>
				<div class="">
					<div class="span8">
						{!!$bocuc->footer_1!!}
					</div>

					<div class="container footer_2">
						<div class="row">
							<div class="col-sm-4">
								<h4 class="B">Liên Hệ</h4>
								<div class="">
									{{$bocuc->footer_2}}

								</div>
								</div>
								<div class="col-sm-4">
									<h4 class="B">Đăng ký nhận ưu đãi</h4>
									@include('admin.layout.thongbao')
									<div id="uu-dai" class="content text-sm">
										<form action="{{Route('uudai')}}" method="post"> 
										<div class="input-group">
											{{csrf_field()}}
											<input name="link" type="text" class="form-control" placeholder="Nhập email hoặc số điện thoại">
											<span class="input-group-btn">
												<button name="sublink" class="btn btn-default" type="submit
												">Đăng ký</button>
											</span>
											 
										</div><br></form> 
										<div ><p>Nếu bạn muốn nhận tất cả các thông tin giảm giá, ưu đãi hãy đăng ký email hoặc số điện thoại của bạn vào ô trên.</p></div>
									</div>
								</div>
								<div class="col-sm-4">
									<h4 class="B">Thông tin</h4>
									<div class="">
										{{$bocuc->footer_3}}
									</div>
								</div>
							</div>
						</div>
					<div class="chu_2"><h3>Bản quyền © 2018 của<strong> Vận Tải Trường Thuận</strong> Việt Nam. Mọi thông tin đăng lại vui lòng trích dẫn từ website này.<h3></div>
				</div>
			</div>

		</div>

		<!-- jQuery -->
		<script src="vantai_asset/js/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="vantai_asset/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 	
	</body>
</html>