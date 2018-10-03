 @extends('admin.layout.index')
 @section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dịch vụ
                            <small>Thêm</small>
                        </h1>
                        @include('admin.layout.thongbao')
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/dichvu/them" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Nhập nội dung</label>
                                <textarea id="demo"class="form-control ckeditor" rows="3" name="noidung"></textarea>
                            </div>
                            
                            <button type="submit" name="submit"class="btn btn-default">Thêm</button>
                            {{-- <button type="reset" class="btn btn-default">Làm mới</button> --}}
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection