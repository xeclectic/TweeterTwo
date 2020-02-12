@extends('layouts.app')

@section('content')

<p>{{$tweets->content}}</p>
<p><strong>{{$tweets->author}}</strong></p>
{{--Create comment form--}}

        <form action="/comment" method="post">
            @csrf
            <input type="hidden" name="tweet_id" value={{$tweets->id}}>
            <br>
            <input type="hidden" name="id" value={{Auth::user()->id}}>
            <br>
            <input type="text" name="content" value="Body Text">
            <br>
            <input type="submit" name="add post" value="Publish">
        </form>
@php
   $comments = $tweets->comment;
@endphp
   @foreach($comments as $comment)
   <p>{{$comment->content}}</p>
 <p><strong>{{Auth::user()->name}}</strong></p>
 @if(Auth::user()->id == $comment->user_id) {{--logged in user id should be equal to the tweets user_id--}}
            <a href='/deleteComment/{{$comment->id}}'> Delete </a>
    @endif
    @endforeach

        {{-- <p>{{$comment = $tweets->comment}}</p>
<p><strong>{{Auth::user()->name}}</strong></p> --}}

@endsection
