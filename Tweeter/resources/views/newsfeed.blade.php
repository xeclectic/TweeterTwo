@extends('layouts.app')

    @section('content') {{--QUESTION: where is this coming from?--}}
    @guest
        <p> You dont have an account with us, would you like to sign up?</p>
        {{-- UI TO ADD:: show link to register form--}}

    @else
        <p>{{Auth::user()->name}}</p>
        <a href="profile">Profile</a>

        @foreach ($tweets as $tweet)
            <p> {{$tweet->content}}</p>
            <p><strong>{{$tweet->author}}</strong></p>
        @endforeach


    <form action="/create" method="post">
        @csrf
        <input type="hidden" name="name" value={{Auth::user()->name}}>
        <br>
        <input type="hidden" name="id" value={{Auth::user()->id}}>
        <br>
        <input type="text" name="content" value="Body Text">
        <br>
        <input type="submit" name="add post" value="Publish">
    </form>

    @endguest
    @endsection
