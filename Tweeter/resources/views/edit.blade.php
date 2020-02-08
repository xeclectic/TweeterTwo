@extends('layouts.app')

@section('content')

    <p>{{$tweets->content}}</p>
    <p><strong>{{$tweets->author}}</strong></p>

        <form action="/editTweet" method="post">
            @csrf
            <input type="hidden" name="name" value={{Auth::user()->name}}>
            <br>
            <input type="hidden" name="id" value={{Auth::user()->id}}>
            <br>
            <input type="text" name="content" value="">
            <br>
            <input type="submit" name="add post" value="Publish">
        </form>

@endsection
