@extends('layouts.app')

  @section('content')
  @guest
        <div>
            <p> You dont have an account with us, would you like to sign up?</p>
        </div>

    @else
        <div class="jumbotron p-3 mb-2 bg-success text-white">
            <div class="container text-center">
                <h1> The TREK</h1>
                <p>It is the people</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <p>{{Auth::user()->name}}</p>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a class="badge badge-success" href="profile">Profile</a>
                    <a class="badge badge-success" href="showUsers"> Users</a>
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
                        <input type="text" name="content" value="Say something">
                        <br>
                        <button type="submit" class="btn btn-success" name="addPost" value="Publish"> Publish</button>
                    </form>
                </div>
            </div>
        </div>
<br>
<br>
<br>
        @foreach ($tweets as $tweet)
            <div class="container">
                <div class="row card">
                    <img width="150" height="200"src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="..." class="img-fluid rounded float-left">
                    <div class="col-sm-4 col-md-6 col-lg-12 d-flex justify-content-center">
                        <p><strong>{{$tweet->author}}</strong></p>
                        </div>
                        <div class="col-sm-4 col-md-6 col-lg-12 d-flex justify-content-center">
                            <p>{{$tweet->content}}</p>
                        </div>
                        <div class="col-sm-4 col-md-6 col-lg-12 d-flex justify-content-center">
                            <a class="badge badge-success" href='/viewTweet/{{$tweet->id}}'> View</a><br>
                                    @if(Auth::user()->id == $tweet->user_id)
                                    <br>
                                    <a class="badge badge-success" href='/delete/{{$tweet->id}}'> Delete </a><br>
                                    <br>
                                    <a class="badge badge-success" href='/editTweet/{{$tweet->id}}'>Edit</a><br>
                                    @endif
                                </div>
                        <div class="col-sm-4 col-md-6 col-lg-12 d-flex justify-content-center">
                            <form action="/likePost/{{$tweet->id}}" method='post'>
                                @csrf
                                <div class="form-group">
                                <input type="hidden" name="id" value={{Auth::user()->id}}>
                                <input type="hidden" name="tweet_id" value={{$tweet->id}}>
                                </div>
                                {{-- <button type="submit" id="like" class="btn btn-success" name="like" value="Like">Like</button> --}}
                                </form>
                        </div>
                    </div>
                    <br>
        @endforeach

<footer class="container-fluid text-center">
  <p>Tweeter © 2020</p>
</footer>
@endguest
@endsection

