@extends('admin.layouts.master')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Danh sách bài viết</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button class="btn btn-primary"><a class="m-0 font-weight-bold text-white"
                                                   href="{{route('admin.news.create')}}">Thêm mới bài viết</a>
                </button>
            </div>
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <th>Tiêu đề</th>
                            <th>Hình ảnh</th>
                            <th>Danh mục</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td class="col-md-1">{{$item->id}}</td>
                                <td class="col-md-2">{{$item->subject}}</td>
                                <td class="col-md-1">
                                    <img src="{{asset($item->image)}}" width="100px" height="50px">
                                </td>
                                <td class="col-md-3">{{$item->sub_categories?->name}}</td>
                                <td class="col-md-3">
                                    <a class="btn btn-primary" href="{{route('admin.news.edit',$item)}}">Chi tiết</a>
                                    <button class="btn btn-danger" onclick="if(confirm('Ban co chac muon xoa')){
                                        document.getElementById('item-{{$item->id}}').submit();
                                    }">Delete
                                    </button>
                                    <form action="{{route('admin.news.destroy',$item)}}" method="post"
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

