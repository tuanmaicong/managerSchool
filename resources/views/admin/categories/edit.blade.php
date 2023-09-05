@extends('layouts.master')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Sửa danh mục</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.category.update',$model)}}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{$model->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="describe" class="form-label">Mô tả</label>
                                <input type="text" class="form-control" id="describe" name="describe"
                                       value="{{$model->describe}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('styles')

@endpush
@push('script')

@endpush

