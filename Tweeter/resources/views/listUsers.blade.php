@extends('layouts.app')

@php
     function checkFollowed($followingUser, $follows){
         foreach ($follows as $follow){
             if($follow->followed == $followingUser){
                 return true;
             }
             return false;
         }
     }
@endphp

@section('content')
    @foreach($users as $user)
        <p>{{$user->name}}</p>

            @if(checkFollowed($user->id, $follows))
                <p>Already Following</p>
                {{-- <a href='/unfollow/{{$follows->id}}'> Unfollow </a> --}}
                <form action="/unfollow" method="post">
                @csrf
                <input type="hidden" name="id" value={{$user->id}}>
                {{-- <input type="hidden" name="followed" value={{$follows->id}}> --}}
                <input type="submit" value="unfollow">
                </form>
            @else
                <form action="/followUsers" method="post">
                    @csrf
                    <input type="hidden" name="id" value={{Auth::user()->id}}>
                    <input type="hidden" name="userId" value={{$user->id}}>
                    <input type="submit" value="Follow">
                </form>
                <br>
        @endif
    @endforeach
@endsection
