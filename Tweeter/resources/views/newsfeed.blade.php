@extends('layouts.app')

    @section('content')
    @guest
        <p> You dont have an account with us, would you like to sign up?</p>
        {{-- UI TO ADD:: show link to register form--}}

    @else
        <p>{{Auth::user()->name}}</p>
        <a href="profile">Profile</a>
        <a href="showUsers"> Users</a>

        @foreach ($tweets as $tweet)
            <p> {{$tweet->content}}</p>
            <p><strong>{{$tweet->author}}</strong></p>
            <a href='/viewTweet/{{$tweet->id}}'> View</a>
            <form action="/likePost/{{$tweet->id}}" method='post'>
                @csrf
                <input type="hidden" name="id" value={{Auth::user()->id}}>
                <br>
                <input type="hidden" name="tweet_id" value={{$tweet->id}}>
                <br>
                <input type="submit" name="like" value="Like">

        @if(Auth::user()->id == $tweet->user_id) {{--logged in user id should be equal to the tweets user_id--}}
            <a href='/delete/{{$tweet->id}}'> Delete </a> {{--delete tweet with the id selected with the a-tag--}}
            <br>
            <a href='/editTweet/{{$tweet->id}}'>Edit</a>
            <br>

        @endif
        @endforeach


    <form action="/create" method="post">
        @csrf
        <input type="hidden" name="name" value={{Auth::user()->name}}>
        <br>
        <input type="hidden" name="id" value={{Auth::user()->id}}>
        <br>
        <input type="text" name="content" value="Body Text">
        <br>
        <input type="submit" name="addPost" value="Publish">
    </form>

    @endguest
    @endsection
