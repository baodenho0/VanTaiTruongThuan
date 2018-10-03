 @extends('admin.layout.index')
 @section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin
                            <small>Đổi mật khẩu</small>
                        </h1>
                        @include('admin.layout.thongbao')
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{Route('doimatkhau')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Mật khẩu hiện tại</label>
                                <input type="password" class="form-control" value="" name="matkhau">
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu mới</label>
                                <input type="password" class="form-control" value="" name="matkhaumoi">
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu mới</label>
                                <input type="password" class="form-control" value="" name="nhaplai">
                            </div>
                            
                            <button type="submit" name="submit"class="btn btn-primary">Cập nhật</button>
                             <button type="reset" class="btn btn-default">Làm mới</button> 
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection