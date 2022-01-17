@extends('layouts.setting')
@section('title')
    Home
@endsection
@section('content')


    <div class="carty">
        <div style="margin: 20px;display: flex"><a  class="buttoni" style="background-color: #0c63e4 ;color: white " href="/worker/{{$worker->id}}/edit" >edit</a>
            <button  class="buttoni" style="background-color: red ;color: white; margin-left: 20px " onclick="deleteConfirmation({{$worker->id}})" >delete</button>
        </div>
        <img  src="@if(empty($worker->image))https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg @else {{asset("storage/$worker->image")}}@endif " alt="Avatar" style="width:100% ;margin-right: auto;margin-left: auto; display: block">
        <div  style="width: auto;text-align: center">
            <p>{{$worker->user->user_type}}</p>
            <h4><b>   {{$worker->user->name}} {{$worker->user->last_name}}</b></h4>

            <p><b>Email:</b> {{$worker->user->email}}</p>
            <p><b>Phone:</b> {{$worker->phone}}</p>
            <p><b>State:</b> {{$worker->state}}</p>
            <p><b>Education:</b> {{$worker->education}}</p>
            <p><b>Region:</b> {{$worker->region}}</p>

        </div>
    </div>



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
                var _url = "{{url('delete')}}/" + id;
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
                                window.location.assign("../worker/")
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

