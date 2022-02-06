@extends('layouts.setting')
@section('title')
    Home
@endsection
@Auth
@section('content')
    @foreach ($worker as $item)
        @if(auth()->user()->user_type == "Administrator" || ($item->user->name == auth()->user()->name ))
            <div class="container">

                       <div style="justify-content: space-between;display: flex; margin: 20px"> <img style="height: 500px" alt="{{$item->name}}" src="{{asset("storage/$item->image")}}">  <a onclick="deleteConfirmation({{$item->id}})" > <i style="font-size: 20px; color: red" class="fad fa-minus-square"></i></a></div>

            </div>
        @endif
    @endforeach
@endsection
@endAuth
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
