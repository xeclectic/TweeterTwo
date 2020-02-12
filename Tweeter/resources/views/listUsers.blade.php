@extends('layouts.app')

@php
    function checkFollowed($userToCheck, $follows){
        foreach ($follows as $follow){
            if($follow->followed == $userToCheck){
                return true;
            }
            return false;
        }
    }
@endphp

@section('content')
    @foreach($users as $user)
        <p>{{$user->name}}</p>
    @if(checkFollowed($user->name, $follows)) {{--check if logged in user is following user...--}}
        <p>Already Following</p> {{--return--}}
            @else {{--otherwise--}}
                <form action="" method="post"> {{--show them a form to follow user--}}
                @csrf
                <input type="submit" value="Follow">
    @endif
    @endforeach
@endsection
