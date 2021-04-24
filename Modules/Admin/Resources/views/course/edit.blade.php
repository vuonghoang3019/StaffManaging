@extends('admin::layouts.master')
@section('title')
    <title>Add course</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">
@endsection
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        @include('admin::components.headerContent',['name' => 'Course', 'key' => 'Edit Course'])
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('course.update',['id' => $courseEdit->id]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="name">Nhập tên khóa học</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                       placeholder="Nhập tên danh mục" name="name" value="{{ old('name',$courseEdit->name) }}">
                                @error('name')
                                <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Password">Chọn trình độ</label>
                                <select name="grade_id[]"
                                        class="form-control select2_init @error('grade_id') is-invalid @enderror"
                                        multiple>
                                    <option value=""></option>
                                    @foreach ($grades as $grade)
                                        <option value="{{ $grade->id }}" {{ $courseGrade->contains('id',$grade->id) ? 'selected' : '' }}
                                            {{ old('grade_id') }}>{{ $grade->name }}</option>
                                    @endforeach
                                </select>
                                @error('grade_id')
                                <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="description">Mô tả</label>
                                <textarea class="form-control " id="description" name="description"
                                          rows="3">{{ old('description',$courseEdit->description) }}</textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script src="{{ asset('admins/assets/js/add.js') }}"></script>
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
@endsection