@extends('layouts.app')

@section('content')

<p>{{$profile->biography}}</p>
<p><strong>{{$profile->name}}</strong></p>

{{--eventually this will get the bio to show--}}

    <form action="/updateBio" method="post">
        @csrf
        <input type="hidden" name="name" value={{Auth::user()->name}}>
        <br>
        <input type="hidden" name="id" value={{Auth::user()->id}}>
        <br>
        <input type="text" name="biography" value="">
        <br>
        <input type="submit" name="addPost" value="Update">
    </form>
@endsection
