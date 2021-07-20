@extends('layout.app')

@section('title','')

@section('body')

    {{'Songs are everything'}}

    @foreach($songs as $song)
        {{$song->title}}
    @endforeach    

@endsection