@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
<div class="bodycontakt" style="padding-left: 5%;padding-right: 5%">
    <div class="container">
        <h1>Contact</h1>
        <p>Let’s talk <img src="{{asset("images/ikonky/1f44b.svg")}}" alt="svg" style="height:20px; width:20px" > Your child’s education and future is important to us! Don’t hesitate to reach out with the contact information below, or send a message using the form.</p>
</div></div>
<div class="hlavnetelocontakt">

    <div class="get-in-touch">
        <h1>Get in Touch</h1>
        <a class="mal" href="https://www.google.com/maps/search/99+Education+Way,+Stratford,+London,+GXVM+89+United+Kingdom/@51.5452143,-0.0132603,14z/data=!3m1!4b1">
            99 Education Way <br>
            Stratford, London GXVM+89 <br>
            United Kingdom <br>
        </a>
        <a class="mal" href="mailto:mail@example.com">mail@example.com <br></a>
        <a class="mal" href>(555) 555 1234</a>

    </div>

    <div class="sendus">
        <h1>Send Us a Message</h1>


            <div>
            <label for="name"><b>Name</b>(required)</label>
            <input type="text" id="name" name="name" value="@auth{{Auth()->user()->name}}  @endauth " REQUIRED>
            </div>
            <div>
                <label for="last_name"><b>Last_name</b>(required)</label>
                <input type="text" id="last_name" name="last_name" value="@auth{{Auth()->user()->last_name}}@endauth" REQUIRED>
            </div>
            <div>
            <label for="email"><b>Email</b>(required)</label>
            <input type="text" id="email" name="email" value="@auth{{Auth()->user()->email}}@endauth" REQUIRED>
            </div>
            <div>

            <label for="fweb"><b>writer/Administrator</b></label>
                <select id="fweb" name="uzivatel_fk" >
                    @foreach($user as $item)
                    @if($item->user_type == 'Administrator' || $item->user_type == 'Writer' )
                    <option  value="{{$item->id}}">{{$item->name}} {{$item->last_name}} {{$item->user_type}}</option>
                    @endif
                    @endforeach
                </select>

            </div>
            <div>
            <label for="text"> <b>Message</b>(required)</label>
                <textarea id="text" name="text" placeholder="Write something.." style="height:200px"></textarea>
            </div>
        <button id="addmesenge" onclick="addbuttons()" style="background-color: #0c63e4; color: white;margin-left: 40%; margin-bottom: 20px" class="buttoni"  value="Submit"> submit </button>

    </div>

</div>

@endsection
<script type="text/javascript">


    function addbuttons() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var _url = "{{url('addletter')}}";
        console.log(_url);
        var last_name = $('#last_name').val();
        var name = $('#name').val();
        var email = $('#email').val();
        var text = $('#text').val();
        var uzivatel_fk = $('#fweb').val();
        console.log(last_name);
        console.log(name);
        console.log(email);
        console.log(text);
        $.ajax({
            type: 'POST',
            url:_url,

            data: {_token: CSRF_TOKEN,last_name: last_name,name: name,email: email,uzivatel_fk:uzivatel_fk,text:text},
            dataType: 'JSON',
            success: function (results) {

                if (results.success === true) {
                    swal.fire("Done!", results.message, "success");

                    setTimeout(function(){
                        window.location.refresh();
                    },2000);
                } else {
                    swal.fire("Error!", results.message, "error");
                }
            }
        });

    }
</script>
