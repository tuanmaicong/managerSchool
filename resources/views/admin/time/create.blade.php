@extends('admin.layouts.master')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Thêm mới ca học</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.times.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên ca học</label>
                                <input type="text" class="form-control" id="name" name="name">
                                @error('name')
                                <span style="color: red;font-size: 14px">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="time_start" class="form-label">Thời gian bắt đầu</label>
                                <input type="time" class="form-control" id="time_start" name="time_start">
                                @error('time_start')
                                <span style="color: red;font-size: 14px">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="time_end" class="form-label">Thời gian kết thúc</label>
                                <input type="time" class="form-control" id="time_end" name="time_end">
                                @error('time_end')
                                <span style="color: red;font-size: 14px">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('styles')

@endpush
@push('script')

@endpush

