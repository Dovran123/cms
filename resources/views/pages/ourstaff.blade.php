@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
<div class="telo" style="background-color: white; padding-left: 5%; padding-right: 5%;"  >
    <div class="container">
        <h1 style="color: black">Our Staff</h1>
        <div class="">
            <p class="pis">
                At Stratford we have some of the most highly sought after educators in the nation! Your child’s future will be moulded and shaped by these thoughtful and highly skilled individuals.
            </p>

        </div>


    </div>
</div>
<div style=" padding-left: 5%; padding-right: 5%;"  >
<div class="box-body">
    <div class="body-img">

        <img src="{{asset("images/210d5-adult-3548077_1920-crop-portrait.jpg")}}" alt="jpg" >

    </div>
    <div class="body-body">
        <h1>Sally Smith</h1>
        <p > Headmistress </p>
        <p>Having spent several years in the classroom prior to Stratford, Sally not only runs Stratford administration, but she guides the overall vision and strategy as well. She cares deeply for your children and leads the drive for excellence by example!</p>
       <div class="zasebou"> <p style="padding-right: 5px ">Email me:</p> <a href=""> mail@example.com </a></div>
    </div>
</div>
</div>
<div style=" padding-left: 5%; padding-right: 5%;"  >
    <div class="box-body2">

        <div class="body-body">
            <h1>Juan Pérez</h1>
            <p >Head of Department </p>
            <p>
                Juan has been an integral part of our educators since Stratford opened its doors. His wealth of experience is paramount in administering the learning curriculum, and advising fellow educators. </p>
            <div class="zasebou2"> <p style="padding-right: 5px ">Email me:</p> <a href=""> mail@example.com </a></div>
        </div>
        <div class="body-img">

            <img src="{{asset("images/97c42-activity-3488324_1920-crop-portrait.jpg")}}" alt="jpg" >

        </div>
    </div>
</div>
<div style=" padding-left: 5%; padding-right: 5%;"  >
    <div class="box-body">
        <div class="body-img">

            <img src="{{asset("images/b14f6-corgi-3697186_1920-crop-portrait.jpg")}}" alt="jpg" >

        </div>
        <div class="body-body">
            <h1>Samuel the Dog</h1>
            <p > School Mascot </p>
            <p>
                No learning institution would be complete without a mascot for its teams and societies! Samuel the Dog exemplifies excellence during his mascot duties and we love having him around! </p>
            <div class="zasebou"> <p style="padding-right: 5px ">Email me:</p> <a href=""> mail@example.com </a></div>
        </div>
    </div>
</div>
<div style="padding-left: 5%; padding-right: 5%; justify-content: space-between">
    <div class="container">
        <div class="ohranicenie">
            <h1 class="joing">Want these educators to secure <br> your child’s future?</h1>
            <a href="post/Contak" class="tlacidlo" >GET IN TOUCH!</a>

        </div>
    </div>
</div>

@endsection
