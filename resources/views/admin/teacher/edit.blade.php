@extends('admin.layouts.master')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Cập nhật giáo viên</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.teacher.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$model->email}}">
                                @error('email')
                                <span style="color: red;font-size: 14px">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$model->name}}">
                                @error('name')
                                <span style="color: red;font-size: 14px">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Bộ môn</label>
                                <select class="form-control" id="type" name="subjects_id">
                                    <option selected disabled value="{{$model->subjects_id}}">{{$model->subjects?->name}}</option>
                                    @foreach($subjects as $subject)
                                        @if($subject->id == $model->id)
                                            <option disabled value="{{$subject->id}}">{{$subject->name}}</option>
                                        @else
                                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('subjects_id')
                                <span style="color: red;font-size: 14px">{{ $message }}</span>
                                @enderror
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

