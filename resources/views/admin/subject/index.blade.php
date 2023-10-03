@extends('admin.layouts.master')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Danh sách môn học</h1>
        <div class="card-header py-3">
            <button class="btn btn-primary"><a class="m-0 font-weight-bold text-white"
                                               href="{{route('admin.subject.create')}}">Thêm mới môn học</a>
            </button>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên môn học</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('admin.subject.edit',$item)}}"><i class="far fa-edit"></i>Sửa</a>
                                    <button class="btn btn-danger"
                                            onclick="if(confirm('Bạn có chắc muốn xóa?')){
                                                document.getElementById('item-{{$item->id}}').submit();
                                            }"><i class="fa fa-trash"></i>
                                    </button>

                                    <form action="{{route('admin.subject.destroy',$item)}}" id="item-{{$item->id}}"
                                          method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('styles')
    <link href="{{asset('be/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@push('script')
    <!-- Page level plugins -->
    <script src="{{asset('be/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('be/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('be/js/demo/datatables-demo.js')}}"></script>
@endpush
