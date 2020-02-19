@extends('layouts.app')

@section('content')
@guest
      <div>
          <p> You dont have an account with us, would you like to sign up?</p>
      </div>

  @else
      <div class="jumbotron p-3 mb-2 bg-info text-white">
          <div class="container text-center">
              <h1>Tweeter</h1>
              <p>It is the people</p>
          </div>
      </div>

    <p> Welcome to your profile, {{Auth::user()->name}}!</p>


    <a href="/editProfile"> Edit Profile </a>

@foreach($profile as $bio)
@if(Auth::user()->id == $profile->user_id)
<p>{{$profile->biography}}</p>
@endif
@endforeach

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
<footer class="container-fluid text-center">
    <p>Tweeter © 2020</p>
  </footer>
@endguest
@endsection
