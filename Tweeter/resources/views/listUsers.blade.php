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
        @if(checkFollowed($user->id, $follows))
        <p>Already Following</p>
            @else
                <form action="/followUsers" method="post">
                    @csrf
                    <input type="hidden" name="id" value={{Auth::user()->id}}>
                    <input type="hidden" name="followed" value={{$user->name}}>
                    <input type="submit" value="Follow">
                </form>
        @endif
    @endforeach
@endsection
