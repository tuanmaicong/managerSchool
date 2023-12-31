@extends('admin.layouts.master')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Danh sách tài khoản</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button class="btn btn-primary"><a class="m-0 font-weight-bold text-white"
                                                   href="{{route('admin.users.create')}}">Thêm mới tài khoản</a>
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Têm</th>
                            <th>Email</th>
                            <th>Quyền</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->role?->name}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('admin.users.edit',$item)}}">Edit</a>
                                    <button class="btn btn-danger" onclick="if(confirm('Ban co chac muon xoa')){
                                        document.getElementById('item-{{$item->id}}').submit();
                                    }">Delete
                                    </button>
                                    <form action="{{route('admin.users.destroy',$item)}}" method="post"
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

