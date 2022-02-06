@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
@auth
    @if(auth()->user()->user_type == "Administrator" || auth()->user()->user_type == "Writer" )
   <div style="margin-left: 20%; margin-top: 40px" class=""> <a  style="background-color: #0c63e4; color: white " class="buttoni" href="#add"> add </a></div>
    <div id="add" class="popup" style="margin-right: 15%">
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
   <div id="addg"  class="popup" style="height: 200px; margin-left: 30%;">
       <div  class="vlastne">
           <form action="{{route("galery.store")}}" method="post" enctype="multipart/form-data">
               @csrf
               <div style="background-color: red">  <p>@error('image') you dont get bad format @enderror </p></div>
               <label for="nasd" >Name</label><input type="text" name="name" id="nasd" value="" required>
               <label for="images" >image</label><input type="file" class="@error('image') is-invalid @enderror" name="image" id="images"  required>
               <input style="margin-top: 20px"  type="submit">
           </form>
       </div>
   </div>
        @endif
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

     <div style="justify-content: space-between"> <h1>Galery</h1>   @auth  @if(auth()->user()->user_type == "Administrator") <a  style="color: green" href="#addg"><i class="fad fa-plus-square"></i></a>@endif @endauth

     </div>

        <div class="left-arrow">
            <a class="lava" style="font-size: 30px" href="#"><i class="fas fa-chevron-left"></i></a>
        </div>
        <div class="right-arrow">
            <a  class="prava" style="font-size: 30px" href="#"><i  class="fas fa-chevron-right"></i></a>
        </div>

        <div class="slaidery">
        @foreach($imag as $item)

                <div class="ini">
                    <div class="like" style="display: flex" ><p style="margin-right: 10px" id="likesa{{$item->id}}">{{$item->like}}</p> <a  style="color: #0a53be" onclick="addlikess({{$item->id}},{{$item->like}})"><i class="fad fa-thumbs-up"></i></a></div>
                    <img src="{{asset("storage/$item->image")}}"  alt="{{$item->name}}">
                </div>
            @endforeach



            </div>
    </div>
</div>

@endsection
<script type="text/javascript">


    function addlikess(id,likes) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var _url = "{{url('/image/like')}}/"+id;
        $.ajax({
            type: 'POST',
            url: _url,
            data: {_token: CSRF_TOKEN,likes:likes},
            dataType: 'JSON',
            success: function (results) {
                fetchdas(id);
            }
        })
    }
function fetchdas(id){
    var _url = "{{url('/image/get')}}/"+id;
    $.ajax({
        type: 'GET',
        url: _url,
        dataType: 'JSON',
        success: function (data) {
            var lik = "#likesa" + id;
            $(lik).html(data.like);
        }
    })
}

</script>
