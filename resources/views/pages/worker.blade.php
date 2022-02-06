@extends('layouts.setting')
@section('title')
    Home
@endsection

@section('content')
    @auth
<div class="login" style="">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" alt="obr" style="width: 150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</span>
                    <span class="text-black-50">{{auth()->user()->email}}</span></div>
            </div>
            <div class="col-md-7 border-right">
                <div class="p-3 py-5">
                    @error('uzivatel_fk') <div style="color: red "><p>You was creating profile</p> </div>@enderror
                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}"></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="{{ auth()->user()->last_name }}" placeholder="surname"></div>
                    </div>
                    <form method="POST" action="{{route('worker.store')}}" id="add-profil" >
                        @csrf
                    <div class="row mt-3">
                        <input type="text" class="" style="display: none" placeholder="enter phone number" name="uzivatel_fk" value="{{auth()->user()->id}}">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="phone" class="form-control" placeholder="enter phone number" value=""></div>
                        <div class="col-md-12"><label class="labels">Address Line</label><input type="text" name="adresa" class="form-control" placeholder="enter address line 1" value=""></div>
                        <div class="col-md-12"><label class="labels">Postcode</label><input type="text"  name="postcode" class="form-control" placeholder="poscode" value=""></div>
                        <div class="col-md-12"><label class="labels">State</label><input type="text" name="state"  class="form-control" placeholder="State" value=""></div>
                        <div class="col-md-12"><label class="labels">Education</label><input type="text" name="education" class="form-control" placeholder="education" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label><input type="text" name="coutry" class="form-control" placeholder="country" value=""></div>
                        <div class="col-md-6"><label class="labels">State/Region</label><input type="text" name="region" class="form-control" value="" placeholder="state"></div>
                    </div>

                        <div class="mt-5 "><input  style="" class="btn btn-primary profile-button" type="submit"></div>
                    </form>
                </div>

            </div>


        </div>

    </div>
</div>

    @endauth
@endsection

