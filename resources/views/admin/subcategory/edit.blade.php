@extends('admin.layouts.master')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Cập nhật danh mục</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.subcategory.update',$model)}}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên danh mục con</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{$model->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="categories_id" class="form-label">Danh mục cha</label><br>
                                <select name="categories_id">
                                    <option selected value="{{$model->categories_id}}">{{$model->categories->name}}
                                    @foreach($categories as $item)
                                        @if($item->id == $model->categories_id)
                                            <option value="{{$item->id}}" style="display: none">{{$item->name}}
                                        @else
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endif
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

