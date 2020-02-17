@extends('layouts.app')

@section('content')
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
@endsection
