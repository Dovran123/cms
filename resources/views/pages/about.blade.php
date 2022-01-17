@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
<div class="telo" style="background-color: white; padding-left: 5%; padding-right: 5%;"  >
    <div class="container">
        <h1 style="color: black"> About</h1>
        <div class="">
            <p class="pismo"> Stratford is a place of teaching excellence,
                where your children can feel at home while learning the skills
                that will help them thrive after their school years are over. As a parent,
                what more can you ask for?
                <br><br>
                This is sample content, included with the template to illustrate its features. Remove or replace it with your own words and media.
            </p>

        </div>


    </div>
</div>
<div class="atelo" style="background-color:#0c63e4 ; padding-left: 5%; padding-right: 5%;"  >
    <div class="container2">
        <div class="rozlozenie">
            <h1  class="pismena"  >Wonderful Facilities</h1>
            <p class="bielepis">We have some of the best possible learning technologies and facilities in the country.</p>
            <a class="staff" href="/post/whatweoffer">SEE OUR FACILITIES</a>
        </div>
        <div class="rozlozenie">
            <h1 class="pismena"  >Our Excellent Staff</h1>
            <p class="bielepis">Our staff are excellent, and we think you’ll love them too! Come and meet them!</p>
            <a class="staff" href="/post/ourstaff">MEET OUR STAFF</a>
        </div>
    </div>
</div>
<div class="telo-box" style="padding-left: 5%; padding-right: 5%;">
    <div class="container">
        <h1>What other parents say</h1>

        <div class="boxi">
            <div class="box1">
                <p><em>My son struggled with mathematics during his school years – until we enrolled him at Stratford. That has been the best decision we made, and his educators have worked hard to get his mathematics to a level we never thought possible!
                </em>
                    <br><br>
                    ― Anthony, Grade 8 parent
                </p>
            </div>
            <div class="box2">
                <p><em>My daughter has loved being at Stratford for the last 5 yeras. The learning environment makes the difference and I’m so proud that she has been accepted into University next year!
                </em>
                    <br><br>
                    ― Megan, Grade 12 parent
                </p>
            </div>
        </div>
    </div>
</div>
<div style="padding-left: 5%; padding-right: 5%; justify-content: space-between">
    <div class="container">
<div class="ohranicenie">
    <h1 class="joing">Let’s build your child’s future together.</h1>
    <a href="/letter" class="tlacidlo" >GET IN TOUCH!</a>

</div>
    </div>
</div>


@endsection
