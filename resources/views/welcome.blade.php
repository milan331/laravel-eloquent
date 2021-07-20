@extends('layout.app')

@section('title','welcome')

@section('body')

    <!-- for one to one  -->
    <!-- welcome {{$employee->name}} -->

    <!-- for one to many -->
    Welcome
    @foreach($employees as $employee) {{$employee->numbers}} @endforeach


@endsection