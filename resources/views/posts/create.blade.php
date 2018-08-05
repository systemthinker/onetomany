@extends('layouts.app')

@section('content')


    <form action="/posts" method="post">
        {{csrf_field()}}
        <input type="text" name="title" value="Enter Title">
        <input type="text" name="content" value="Enter Content">
        <input type="submit" name="submit" value="Submit">


    </form>



@stop