@extends('admin::layouts.master')
@section('title')
    <title>Category</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('admin::components.headerContent',['name' => 'Teacher', 'key' => 'List Teacher'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('teacher.create') }}" class="btn btn-success">ADD</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Mã NV</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Email</th>
                                <th scope="col">Trình độ</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $stt = 0 ?>
                            @if(isset($teachers))
                                @foreach($teachers as $data)
                                    <tr>
                                        <th scope="row">{{ $stt }}</th>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($data->description,20)}}</td>
                                        <td>
                                            <a href="{{ route('category.action',['id' => $data->id]) }}"
                                               class="{{ $data->status == 1 ? "btn btn-primary" : 'btn btn-default'}}"
                                            >
                                                {{ $data->status == 1 ? 'Show' : 'Not Show' }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('grade.edit',['id' => $data->id]) }}"
                                               class="btn btn-default">Edit</a>
                                            <a href=""
                                               data-url="{{ route('grade.delete',['id' => $data->id]) }}"
                                               class="btn btn-danger action-delete">Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $stt++; ?>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12 float-right">
                        {{ $teachers->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('vendors/sweetAlert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('admins/assets/delete.js') }}"></script>
@endsection