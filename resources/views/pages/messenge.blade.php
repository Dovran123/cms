@extends('layouts.setting')
@section('title')
    Messenge
@endsection

@section('content')
    @foreach($messenge as $item)
        @if(auth()->user()->user_type == "Administrator" || ($item->user->name == auth()->user()->name ))
    <div class="messenge">
        <div class="toast show">
            <div class="toast-header">
                <strong class="me-3">{{$item->name}} {{$item->last_name}}  {{$item->email}}</strong> <p class="me-auto" style="padding-top: 15px"> for {{$item->user->name}} {{$item->user->last_name}} </p>
                <form   method="POST" action="/letter/{{$item->id}}" >
                    @csrf
                    @method('DELETE')
                <button  type="submit" class="" onclick="" data-bs-dismiss="toast"><i style="color: red" class="fad fa-trash-alt"></i></button>
                </form>
            </div>
            <div class="toast-body">
                <p>{{$item->text}}</p>
            </div>
        </div>
    </div>
        @endif
        @endforeach

@endsection
