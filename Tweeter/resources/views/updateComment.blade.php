@extends('layouts.app')
@section('content')

    <p>{{$comments->content}}</p>
    <p><strong>{{$comments->author}}</strong></p>

        <form action="/updateComment/{{$comments->id}}" method="post">
            @csrf
            <input type="text" name="content" value="">
            <br>
            <input type="submit" name="add post" value="Publish">
        </form>
@endsection
