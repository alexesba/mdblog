@extends('layouts.application')

@section('content')
    <h3>Adding new Post</h3>
    {!! Former::populate($post) !!}
            {!! Former::text('title')->required() !!}
            {!! Former::textarea('body')->required() !!}
            {!! Editor::view() !!}
    {!! Former::close() !!}
@stop
