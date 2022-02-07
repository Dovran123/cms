@extends('layouts.master')
@section('title')
    Home
@endsection



@section('content')
    <div id="addg"  class="popup" style="height: 250px; margin-left: 30%;">
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
                @foreach($worker as $item)

                    <div class="ini">

                        <div>@Auth @if(auth()->user()->user_type == 'Administrator') <a onclick="deleteConfirmation({{$item->id}})" > <i style="color: red" class="fad fa-minus-square"></i></a>   @endif @endauth </div> <div class="like" style="display: flex" >  <p style="margin-right: 10px" id="likesa{{$item->id}}">{{$item->like}}</p> <a  style="color: #0a53be" onclick="addlikess({{$item->id}},{{$item->like}})"><i class="fad fa-thumbs-up"></i></a></div>
                        <img src="{{asset("storage/$item->image")}}"  alt="{{$item->name}}">
                      <div style="margin: 6px; ">
                          @foreach($comm as $items)
                          @if($items->listimage->id == $item->id )
                          <div class="" style="margin: 2px">
                              <a href="" onclick="deletecomm({{$items->id}})" style="color: red"> <i class="fad fa-comment-alt-times"></i></a>
                              <p><b>{{$items->user->name}} {{$items->user->last_name}}</b> {{$items->created_at}}</p>


                          </div>
                              <div style="background-color: white;font-size: 15px;padding: 3px">
                                  <p>{{$items->text}}</p>
                              </div>

                          @endif
                          @endforeach
                      </div>
                        <div class="vylep" >


                        @Auth

                        <form method="POST" action="{{route('comment.store')}}"  >
                        @csrf
                            <label   >Comment</label><input type="text" name="text"  value="" required>
                                <input style="display:none" type="text" name="uzivatel_fk"  value="{{auth()->user()->id}}" required>
                                <input style="display:none" type="text" name="image_fk"  value="{{$item->id}}" required>
                            <input style="margin-top: 20px"  type="submit">
                        </form>
                        @endauth
                        </div>
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
    function deletecomm(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var _url = "{{url('/comme/delete')}}/"+id;
        $.ajax({
            type: 'POST',
            url: _url,
            data: {_token: CSRF_TOKEN},
            dataType: 'JSON',
            success: function (results) {
                window.location.reload();
            }
        })
    }
    function deleteConfirmation(id) {

        Swal.fire({
            title: "Delete?",
            text: "Please you can confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                var _url = "{{url('/galery/delete')}}/" + id;
                console.log(_url);
                $.ajax({
                    type: 'POST',
                    url:_url,

                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {

                        if (results.success === true) {
                            swal.fire("Done!", results.message, "success");
                            // refresh page after 2 seconds
                            setTimeout(function(){
                                window.location.reload();
                            },2000);
                        } else {
                            swal.fire("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }

</script>
