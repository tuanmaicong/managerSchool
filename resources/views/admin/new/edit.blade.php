@extends('admin.layouts.master')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Chi tiết bài viết</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                    @if(\Illuminate\Support\Facades\Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                <form method="post" action="{{route('admin.news.update',$model)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="subject" class="form-label">Tiêu đề</label>
                                <input type="text" class="form-control" id="subject" name="subject" value="{{$model->subject}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="content" class="form-label">Nội dung</label><br>
                                <textarea name="content" id="content" class="col-md-12" rows="10" >{{$model->content}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="image" class="form-label">Hình ảnh</label><br>
                                <img src="{{asset($model->image)}}" width="300px" height="150px" class="mb-3">
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Danh mục chung</label>
                                <select class="form-control" id="type" name="categories_id">
                                    <option disabled selected value="{{$model->categories_id}}">{{$model->categories?->name}}</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Danh mục chi tiết</label>
                                <select class="form-control" id="type" name="sub_categories_id">
                                    <option disabled selected value="{{$model->sub_categories_id}}">{{$model->sub_categories?->name}}</option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                    @endforeach
                                </select>
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

