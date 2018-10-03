 @extends('admin.layout.index')
 @section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản trị
                            <small>Sửa</small>
                        </h1>
                        @include('admin.layout.thongbao')
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/quantri/sua" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Nhập mô tả</label>
                                <input type="text" class="form-control" value="{{$seo->description}}" name="description">
                            </div>
                            <div class="form-group">
                                <label>Nhập từ khóa</label>
                                <input type="text" class="form-control" value="{{$seo->keywords}}" name="keywords">
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