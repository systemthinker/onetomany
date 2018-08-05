@extends('layouts.app')

@section('content')

    <form action="/posts/{{$post->id}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" value="{{$post->title}}">
        <input type="text" name="content" value="{{$post->content}}">
        <input type="submit" name="submit" value="Edit">


    </form>



@stop
