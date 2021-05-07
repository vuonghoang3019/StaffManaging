@extends('admin::layouts.master')
@section('title')
    <title>Edit Schedule</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">
@endsection
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        @include('admin::components.headerContent',['name' => 'Schedule  ', 'key' => 'Edit Schedule'])
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('schedule.update',['id' => $scheduleEdit->id ]) }}" method="post">
                @csrf
                @include('admin::schedule.form')
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
@endsection
