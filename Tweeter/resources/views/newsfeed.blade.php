@extends('layouts.app')

    @section('content') {{--QUESTION: where is this coming from?--}}
    @guest
        <p> You dont have an account with us, would you like to sign up?</p>
        {{-- UI TO ADD:: show link to register form--}}

    @else
        <p>Welcome, {{Auth::user()->name}} </p>


        {{--Should I have made an "auhtor" column?--}}
    <form action="/create" method="post">
        @csrf
        <input type="text" name="user_id" value="user_id">
        <br>
        <input type="text" name="content" value="tweet">
        <br>
        <input type="submit" name="add post" value="create tweet">
    </form>

    @endguest
    @endsection
