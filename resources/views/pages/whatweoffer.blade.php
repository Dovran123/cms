@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
<div class="telo" style="background-color: white; padding-left: 5%; padding-right: 5%;"  >
    <div class="container">
        <h1 style="color: black"> What We Offer</h1>
        <div class="">
            <p class="pis"> Stratford can only succeed in its mission of providing teaching excellence to fulfil your child’s potential by offering the best possible learning environment, with the most effective learning tools and facilities.
            </p>

        </div>


    </div>
</div>
<div style=" padding-left: 5%; padding-right: 5%;"  >
    <div class="noveobrazky">
        <div class="bloky">
            <img src="{{asset("images/coaching-coders-coding-7374.jpg")}}" alt="jpg">
            <h1>Individual Attention </h1>
            <p>
                The classroom environment at Stratford allows your child’s educators to give them the time and attention that they need in order to succeed. We believe in keeping class numbers low to maximum learning potential.
            </p>
        </div>
        <div class="bloky">
            <img src="{{asset("images/architecture-book-shelves-bookcase-1319854.jpg")}}" alt="jpg">
            <h1>Fantastic Facilitiesn </h1>
            <p>
                Each student has access to the best possible learning technologies, as well having guest classes from industry professionals. We believe this better prepares your child for their careers or own businesses.
            </p>
        </div>
        <div class="bloky">
            <img src="{{asset("images/academy-celebrate-celebration-267885-1-1.jpg")}}" alt="jpg">
            <h1>Life Long Learning </h1>
            <p>
                We believe in equipping your children with the skills to be able to learn for the rest of their lives! By instilling in them a method of analytical thinking, we believe they will be able to be independent thinkers and be high performers in their chosen careers.
            </p>
        </div>
    </div>
</div>
<div style="padding-left: 5%; padding-right: 5%; justify-content: space-between">
    <div class="container">
        <div class="ohranicenie">
            <h1 class="joing">Let’s build your child’s future together.</h1>
            <a href="/post/Contak" class="tlacidlo" >GET IN TOUCH!</a>

        </div>
    </div>
</div>

@endsection
