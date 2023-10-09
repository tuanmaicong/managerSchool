@extends('admin.layouts.master')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Chi tiết liên hệ</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Tiêu đề</label>
                            <h5>{{$model->subject}}</h5>
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên người gửi</label>
                                <input disabled type="text" class="form-control" id="name" name="name"
                                       value="{{$model->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Email</label>
                                <input disabled type="text" class="form-control" id="name" name="name"
                                       value="{{$model->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Số điện thoại</label>
                                <input disabled type="text" class="form-control" id="name" name="name"
                                       value="{{$model->phone_number}}">
                            </div>
                            <div class="mb-3">
                                <label for="describe" class="form-label">Nội dung</label><br>
                                <textarea disabled cols="70" rows="10">{{$model->message}}</textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger"
                            onclick="if(confirm('Bạn có chắc muốn xóa?')){
                                                document.getElementById('item-{{$model->id}}').submit();
                                            }"><i class="fa fa-trash"></i>
                    </button>
                    <form action="{{route('admin.contact.destroy',$model->id)}}" id="item-{{$model->id}}"
                          method="post">
                        @csrf
                        @method('DELETE')
                    </form>
            </div>
        </div>

    </div>
@endsection

@push('styles')

@endpush
@push('script')

@endpush

