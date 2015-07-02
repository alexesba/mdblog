@extends('layouts.application')

@section('content')
    <h1>All posts</h1>
    <a href="{{route('admin.posts.create')}}">add Post</a>
@stop
