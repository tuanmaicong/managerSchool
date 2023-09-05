@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4 pt-2 pb-5">
            <form action="{{route('admin.profile.update',$data)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="avatar" class="form-label">Avatar</label>
                    <div class="mb-3">
                        <img src="{{asset($data->avatar)}}" width="150px" height="150px" style="margin-bottom: 10px">
                        <input type="file" class="form-control" id="avatar" name="avatar">
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
