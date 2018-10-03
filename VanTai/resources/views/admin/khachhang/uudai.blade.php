 @extends('admin.layout.index')
 @section('content')

 

         <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Ưu đãi
                            <small>Danh sách</small>
                        </h1>
                        @include('admin.layout.thongbao')
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Nội dung</th>
                                
                                <th>Xóa</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($uudai as $gt)
                            <tr class="odd gradeX" align="center">
                                <td>{{$gt->id}}</td>
                                <td>{{$gt->noidung}}</td>
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khachhang/xoauudai/{{$gt->id}}"> Xóa</a></td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection