@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4 pt-2 pb-5">
            <form action="{{route('admin.profile.update',$data)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ tên</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="avatar" class="form-label">Hình ảnh</label>
                    <div class="mb-3">
                        <img src="{{$data->avatar}}" width="150px" height="150px" style="margin-bottom: 10px">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="avatar" class="form-label">Email</label>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="avatar" class="form-label">Địa chỉ</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="address" name="address" value="{{$data->address}}">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
