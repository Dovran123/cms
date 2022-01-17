@extends('layouts.setting')
@section('title')
    Home
@endsection

@section('content')
    @foreach ($user as $item)

        <div class="container">
            <ul style="background-color: #ffffff;margin-top: 20px;list-style: none;height: 50px">
                <li style="height: 2px; display: flex;font-size: 20px ; justify-content: space-between;padding: 10px">
                    <p class="" style="font-size: 20px ; text-decoration: none; color: black" >{{$item->name}}  {{$item->last_name}}</p>
                 <div style="display: flex"> <a href="#{{$item->id}}"  ><i style="color: green" class="fad fa-user-edit"></i></a>

                     <button  type="submit" onclick="deleteConfirmation({{$item->id}})" style="border: none; background-color: white"><i style="color: orangered" class="fad fa-user-minus"></i></button>

                 </div>
                </li>
            </ul>
        </div>

        <div id="{{$item->id}}"  class="popup">
            <div class="stred">
                <form action="/post/{{$item->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="name" >Name</label><input type="text" name="name" id="name" value="{{$item->name}} ">
                    <label  for="last_name" >Last name</label><input type="text" name="last_name" id="last_name" value="{{$item->last_name}} ">
                    <label for="cars">User_type</label>
                    <select id="cars" name="user_type" >
                        <option value="Administrator">Administrator</option>
                        <option value="Writer">Writer</option>
                    </select>
                        <input style="margin-top: 50px"  class="btn btn-primary profile-button" type="submit">

                </form>
            </div>
        </div>
    @endforeach

@endsection
<script type="text/javascript">


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
                var _url = "{{url('/user/delete')}}/" + id;
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
                                window.location.assign("../post/")
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
