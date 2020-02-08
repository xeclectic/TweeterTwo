@extends('layouts.app')
@php
    function checkfollowing($userToCheck, $follows){
        foreach ($follows as $follow){
            if($follow->followed == $userToCheck){
                return true;
            }
        }
        return false;
    }
@endphp

@section('content')
    @foreach ($users as $user)
        <p>{{$user ->name}} </p>
        @if (checkFollowing($user->name, $follows))
            <p> already following </p>
            @else
            <form action="/followUser" method="post">
            @csrf
            <input type="submit" value="Follow">

        @endif

    @endforeach

@endsection
