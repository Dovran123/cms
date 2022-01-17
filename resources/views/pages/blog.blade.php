@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
@auth
   <div style="margin-left: 20%; margin-top: 40px" class=""> <a  style="background-color: #0c63e4; color: white " class="buttoni" href="#add"> add </a></div>
    <div id="add" class="popup">
        <div  class="vlastne">
            <form action="{{route("blog.store")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nadpis" >Titul</label><input type="text" name="nadpis" id="nadpis" value="" required>
                <label for="category" >category</label><input type="text" name="category" id="category" value="" required>
                <label for="tag" >tag</label><input type="text" name="tag" id="tag" value="" required>
                <label  for="text" >text</label><input type="text" name="text" id="text" value="" required>
                <label for="image" >image</label><input type="file" class="@error('image') is-invalid @enderror" name="image" id="image"  required>
                <input style="display: none" type="text" name="uzivatel_fk" id="sub" value="{{auth()->user()->id}}" required>

                <input style="margin-top: 20px" type="submit">

            </form>
        </div>
    </div>
@endauth
    @foreach($blog as $item)
        <div class="nic"><a class="linka" href="blog/{{$item->id}}"> <h1>{{ $item->nadpis}}</h1></a></div>
<div class="obrazok-blok"><img src="{{asset("storage/$item->image")}}" alt=""></div>
<div class="text-blok" style="padding-left: 5%; padding-right: 5%;">
    <div class="container">
        <p>{{ $item->text}}</p>
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
                <li><a class="linka" href="#"><i style="color: slategray" class="fas fa-user"></i> {{$item->user->name}} {{$item->user->last_name}}</a> </li>
                <li><a class="linka"  href="#"><i  style="color: slategray" class="fad fa-clock"></i> {{$item->updated_at}} </a></li>
                <li><a class="linka"  href="#"><i style="color: slategray" class="fad fa-folder"></i> {{$item->category}}</a></li>
                <li><a class="linka" href="#"><i  style="color: slategray" class="fas fa-tag"></i>{{$item->tag}}</a></li>
            </ul>
        </div>

    </div>
</div>
@endforeach

<div class="blok-obrazky">
    <div class="container">

        <h1>Galery</h1>
        <div class="left-arrow">
            <a class="lava" style="font-size: 30px" href="#"><i class="fas fa-chevron-left"></i></a>
        </div>
        <div class="right-arrow">
            <a  class="prava" style="font-size: 30px" href="#"><i  class="fas fa-chevron-right"></i></a>
        </div>
        <div class="slaidery">

        <div class="ini">
            <img src="{{asset("images/blog/action-activity-balls-296302.jpg")}}" onclick="" alt="action-activity-balls">
        </div>
      <div class="ini">
            <img src="{{asset("images/blog/action-activity-bouncy-castle-296308.jpg")}}" alt="action-activity-bouncy-castle">
        </div>
        <div class=" ini">
            <img src="{{asset("images/blog/action-activity-boy-296301.jpg")}}" onclick="" alt="action-activity-boy-296301.jpg">
        </div >


        <div class="ini">
            <img src="{{asset("images/blog/active-athletes-ball-2116469.jpg")}}" onclick="" alt="active-athletes-ball-2116469.jpg">
        </div>
            <div class="ini">
                <img src="{{asset("images/blog/action-adult-carry-1378866.jpg")}}" onclick="" alt="action-adult-carry-1378866.jpg">
            </div>
        <div class="ini">

            <img src="{{asset("images/blog/boys-childhood-children-51349.jpg")}}" onclick="" alt="jpg">
        </div>
        <div class="ini">
            <img src="{{asset("images/blog/children-class-classroom-1720186.jpg")}}" onclick="" alt="jpg">
        </div>



            </div>
    </div>
</div>

@endsection
