@extends('home')
@section('css')
<!-- third party css -->
        <link href= "{{asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href= "{{asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href= "{{asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href= "{{asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
@endsection
@section('js')
<!-- third party js -->
        <script src= "{{asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src= "{{asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src= "{{asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script type="text/javascript">
		    $(document).ready(function() {
		    $("#nguoichoi-datatable").DataTable({
		        language: {
		            paginate: {
		                previous: "<i class='mdi mdi-chevron-left'>",
		                next: "<i class='mdi mdi-chevron-right'>"
		            }
		        },
		        drawCallback: function() {
		            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
		        }
		    });
		});
        </script>

@endsection
@section('maincontent')
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4  class="header-title" style="font-family: Tahoma">DANH SÁCH NGƯỜI CHƠI</h4>
            <a href="{{route('nguoichoi.themmoi')}}" type="button" class="btn btn-warning waves-effect waves-light">Thêm mới người chơi <i class="mdi mdi-pen-plus"></i></a>
            

            <table id="nguoichoi-datatable" class="table dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ẢNH ĐẠI DIỆN</th>
                        <th>ĐIỂM CAO NHẤT</th>
                        <th>CREDIT</th>
                        <th>Update</th>
                    </tr>
                </thead>
            
            
                <tbody>
                    @foreach( $nguoichoi as $nguoichoi)
                    <tr>
                        <td>{{$Nguoichoi->id}}</td>
                        <td>{{$Nguoichoi->ten_dang_nhap}}</td>
                        <td>{{$Nguoichoi->mat_khau}}</td>
                        <td>{{$Nguoichoi->email}}</td>
                        <td>{{$Nguoichoi->anh_dai_dien}}</td>
                        <td>{{$Nguoichoi->diem_cao_nhat}}</td>
                        <td>{{$Nguoichoi->credit}}</td>
                        <td> <a href="{{route('nguoichoi.capnhat',$nguoichoi->id)}} "><button type="button" class="btn btn-purple waves-effect waves-light"><i class="mdi mdi-settings"></i></button></a>
                        <a href="{{route('nguoichoi.xoa',$nguoichoi->id)}} "><button type="button" class="btn btn-danger waves-effect waves-light"><i class=" fas fa-trash-alt"></i></button></a>
                        </td>
                    </tr>
                    @endforeach</td>
                    </tr>
				<tbody>
            </table>

        </div> <!-- end card body-->
    </div> <!-- end card -->
</div><!-- end col-->
</div>
                <!-- end row-->
@endsection
