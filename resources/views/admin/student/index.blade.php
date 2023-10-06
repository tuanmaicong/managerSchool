@extends('admin.layouts.master')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Danh sách học sinh</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Họ tên</th>
                            <th>Ảnh</th>
                            <th>Địa chỉ</th>
                            <th>Lớp</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>
                                    <img src="{{$item->avatar}}" width="100px" height="100px">
                                </td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->classrooms?->name}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('admin.student.edit',$item)}}">Edit</a>
                                    <button class="btn btn-danger" onclick="if(confirm('Ban co chac muon xoa')){
                                        document.getElementById('item-{{$item->id}}').submit();
                                    }">Delete
                                    </button>
                                    <form action="{{route('admin.student.destroy',$item)}}" method="post"
                                          id="item-{{$item->id}}">
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
        {{$data->links()}}
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
