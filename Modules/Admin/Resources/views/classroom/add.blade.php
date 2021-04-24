@extends('admin::layouts.master')
@section('title')
    <title>Add Classroom</title>
@endsection
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        @include('admin::components.headerContent',['name' => 'classroom', 'key' => 'Add classroom'])
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('classroom.store') }}" method="post">
                    @csrf
                    @include('admin::classroom.form')
                </form>
            </div>
        </section>
    </div>
@endsection
@section('js')

@endsection