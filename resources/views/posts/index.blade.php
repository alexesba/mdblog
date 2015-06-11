@extends('layouts.application')

@section('content')
<!-- main start -->
<!-- ================ -->
<div class="main col-md-8">
    @foreach($posts as $post)
            @include('posts.post')
    @endforeach
    @include('shared.pagination')
</div>
@stop

@section('sidebar')
    @include('shared.sidebar')
@stop
