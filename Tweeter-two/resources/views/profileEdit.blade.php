@extends('layouts.app')

@section('content')

@if(Auth::user()->id == $profile->user_id)
    <p>{{$profile->biography}}</p>

{{--eventually this will get the bio to show--}}

    <form action="/updateBio" method="post">
        @csrf
        <input type="hidden" name="name" value={{Auth::user()->name}}>
        <br>
        <input type="hidden" name="id" value={{Auth::user()->id}}>
        <br>
        <input type="text" name="bio" value="biography">
        <br>
        <input type="submit" name="addPost" value="Update">
    </form>
    @endif
@endsection
