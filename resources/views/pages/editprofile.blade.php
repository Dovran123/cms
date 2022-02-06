@extends('layouts.setting')
@section('title')
    Home
@endsection

@section('content')

    <div class="login">
    <form method="POST" action="/worker/{{$worker->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="container rounded bg-white mt-5 mb-5">

        <div class="row">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img alt="nie" class="rounded-circle mt-5" style="width: 150px"  src="@if(empty($worker->image))https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg @else {{asset("storage/$worker->image")}}@endif">
                    <span class="font-weight-bold">{{$worker->user->name}} {{$worker->user->last_name}}</span>
                    <span class="text-black-50">{{$worker->user->email}}</span><span> </span></div>
                <div class="col-md-12"><label class="labels">File</label><input type="file" name="image" class="form-control"  ></div>
            </div>
            <div class="col-md-7 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="{{$worker->user->name}}"></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="{{$worker->user->last_name}}" placeholder="surname"></div>
                    </div>


                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="phone"  class="form-control" placeholder="enter phone number" value="{{$worker->phone}}"></div>
                            <div class="col-md-12"><label class="labels">Address Line</label><input type="text" name="adresa" class="form-control" placeholder="enter address line " value="{{$worker->adresa}}"></div>
                            <div class="col-md-12"><label class="labels">Postcode</label><input type="text"  name="postcode" class="form-control" placeholder="poscode" value="{{$worker->postcode}}"></div>
                            <div class="col-md-12"><label class="labels">State</label><input type="text" name="state"  class="form-control" placeholder="State" value="{{$worker->state}}"></div>
                            <div class="col-md-12"><label class="labels">Education</label><input type="text" name="education" class="form-control" placeholder="education" value="{{$worker->education}}"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input type="text" name="coutry" class="form-control" placeholder="country" value="{{$worker->coutry}}"></div>
                            <div class="col-md-6"><label class="labels">State/Region</label><input type="text" name="region" class="form-control" value="{{$worker->region}}" placeholder="state"></div>
                        </div>
                        <div class="mt-5 text-center"><input   class="btn btn-primary profile-button" type="submit"></div>


                </div>
            </div>


        </div>
    </div>
    </form>
    </div>

@endsection
