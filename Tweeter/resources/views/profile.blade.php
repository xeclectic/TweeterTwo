@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
        <h1>Tweeter</h1>
        <p>It is the people</p>
    </div>
</div>
<p> Welcome to your profile, {{Auth::user()->name}}!</p>


<a href="/editProfile"> Edit Profile </a>

<p>create post </p>
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

@foreach($tweets as $tweet)
@if(Auth::user()->id == $tweet->user_id)
    <p>{{$tweet->author}}</p>
    <p>{{$tweet->content}}</p>
    <a href='/delete/{{$tweet->id}}'> Delete </a>
    <a href='/editTweet/{{$tweet->id}}'>Edit</a>
@endif
@endforeach
@endsection

<footer class="container-fluid text-center">
    <p>Tweeter © 2020</p>
  </footer>
