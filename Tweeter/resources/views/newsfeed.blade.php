@extends('layouts.app')
<link >

  @section('content')
  @guest
        <div>
            <p> You dont have an account with us, would you like to sign up?</p>
        </div>
    @else
        <div class="jumbotron">
            <div class="container text-center">
                <h1>Tweeter</h1>
                <p>It is the people</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <p>{{Auth::user()->name}}</p>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="profile">Profile</a>
                    <a href="showUsers"> Users</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-6 col-lg-12">
                    <form action="/create" method="post">
                        @csrf
                        <input type="hidden" name="name" value={{Auth::user()->name}}>
                        <br>
                        <input type="hidden" name="id" value={{Auth::user()->id}}>
                        <br>
                        <input type="text" name="content" value="Body Text">
                        <br>
                        <button type="submit" class="btn btn-primary" name="addPost" value="Publish"> Publish</button>
                    </form>
                </div>
            </div>
        </div>

        @foreach ($tweets as $tweet)
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-6 col-lg-12 d-flex justify-content-center">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <p><strong>{{$tweet->author}}</strong></p>
                            </div>
                            <div class="panel-footer">
                                <p>{{$tweet->content}}</p>
                                <a href='/viewTweet/{{$tweet->id}}'> View</a>
                                    <form action="/likePost/{{$tweet->id}}" method='post'>
                                        @csrf
                                        <div class="form-group">
                                        <input type="hidden" name="id" value={{Auth::user()->id}}>
                                        <input type="hidden" name="tweet_id" value={{$tweet->id}}>
                                        </div>
                                        <button type="submit" class="btn btn-light" name="like" value="Like">Like</button>
                                        </form>
                                @if(Auth::user()->id == $tweet->user_id)
                                    <a href='/delete/{{$tweet->id}}'> Delete </a>
                                    <a href='/editTweet/{{$tweet->id}}'>Edit</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

<footer class="container-fluid text-center">
  <p>Tweeter © 2020</p>
</footer>
@endguest
@endsection
