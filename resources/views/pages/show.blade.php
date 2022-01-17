@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
@Auth
    @if(auth()->user()->user_type == "Administrator" ||auth()->user()->name = $blog->user->name )
        <div style="margin-top: 40px; display: flex" class="container"><a href="#edit" style="background-color: greenyellow; margin-bottom: 100px" class="buttoni" > edit</a>  <form   method="POST" action="/blog/{{$blog->id}}" enctype="multipart/form-data" >
                @csrf
                @method('DELETE')
                <button  class="buttoni" style="background-color: red ;color: white; margin-left: 20px " onclick="return confirm('Naozaj chcete vymazať?')"  type="submit" >delete</button>
            </form></div>
    <div id="edit" class="popup" style="margin-right:200px ">
        <div  class="vlastne">
            <form action="/blog/{{$blog->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="nadpis" >Titul</label><input type="text" name="nadpis" id="nadpis" value="{{$blog->nadpis}}" required>
                <label for="category" >category</label><input type="text" name="category" id="category" value="{{$blog->category}}" required>
                <label for="tag" >tag</label><input type="text" name="tag" id="tag" value="{{$blog->tag}}" required>
                <label  for="text" >text</label><input type="text" name="text" id="text" value="{{$blog->text}}" required>
                <label for="image" >image</label><input type="file" class="@error('image') is-invalid @enderror" name="image" id="image"  required>
                <input style="display: none" type="text" name="uzivatel_fk" id="sub" value="{{$blog->uzivatel_fk}}}" required>

                <input style="margin-top: 20px" type="submit">

            </form>
        </div>
    </div>
    @endif
@endauth
    <div class="nic"> <h1>{{ $blog->nadpis}}</h1>          </div>

    <div class="obrazok-blok"><img src="{{asset("storage/$blog->image")}}" alt=""></div>
    <div class="text-blok" style="padding-left: 5%; padding-right: 5%;">
        <div class="container">
            <p>{{ $blog->text}}</p>
        </div>

    </div>
    <div style="padding-left: 5%; padding-right: 5%; justify-content: space-between">
        <div class="container">
            <div class="ohranicenie">
                <h1 class="joing">Want to join the Stratford family?</h1>
                <a href="/letter" class="tlacidlo">GET IN TOUCH!</a>

            </div>
            <div class="pouzivatel">
                <ul>
                    <li><a class="linka" href="#"><i style="color: slategray" class="fas fa-user"></i> {{$blog->user->name}} {{$blog->user->last_name}}</a> </li>
                    <li><a class="linka"  href="#"><i  style="color: slategray" class="fad fa-clock"></i> {{$blog->updated_at}} </a></li>
                    <li><a class="linka"  href="#"><i style="color: slategray" class="fad fa-folder"></i> {{$blog->category}}</a></li>
                    <li><a class="linka" href="#"><i  style="color: slategray" class="fas fa-tag"></i>{{$blog->tag}}</a></li>
                </ul>
            </div>

        </div>
    </div>
@endsection
