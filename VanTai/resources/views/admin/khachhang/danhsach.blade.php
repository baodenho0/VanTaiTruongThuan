 @extends('admin.layout.index')
 @section('content')

 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Liên hệ
                            <small>Danh sách</small>
                        </h1>
                        @include('admin.layout.thongbao')
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($yeucaulienhe as $lh)
                            <tr class="odd gradeX" align="center">
                                <td>{{$lh->id}}</td>
                                <td>{{$lh->hoten}}</td>
                                <td>{{$lh->email}}</td>
                                <td>{{$lh->sdt}}</td>
                                <td>{{$lh->diachi}}</td>
                                <td>{{$lh->tieude}}</td>
                                <td>{{$lh->noidung}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khachhang/xoadanhsach/{{$lh->id}}"> Xóa</a></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection