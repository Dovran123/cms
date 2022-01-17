@extends('layouts.setting')
@section('title')
    Home
@endsection
@Auth
@section('content')
@foreach ($worker as $item)
    @if(auth()->user()->user_type == "Administrator" || ($item->user->name == auth()->user()->name ))
    <div class="container">
        <ul style="background-color: #ffffff;margin-top: 20px;list-style: none;height: 50px">
            <li style="height: 2px; display: flex;font-size: 20px ; justify-content: space-between;padding: 10px">
        <a class="" style="font-size: 20px ; text-decoration: none; color: black" href="/worker/{{$item->id}}">{{$item->user->name}}  {{$item->user->last_name}}</a> <p> {{$item->created_at}}</p>
        </li>
        </ul>
    </div>
    @endif
@endforeach
@endsection
@endAuth
