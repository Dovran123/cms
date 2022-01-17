
@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')

    <div class="telo" style="padding-left: 5%; padding-right: 5%;"  >
        <div class="container">
            <h1> Excel</h1>
            <div class="text">
                <p class="pismo"> Stratford is a place of teaching excellence, where your children can feel at home while learning
                    the skills that will help them thrive after their school years are over.  As a parent, what more can you ask for?
                </p>
                <div class="btn-get-in-touch">
                    <a style=" text-decoration: none;
    color: white;" href="/letter"> Get in touch </a>
                </div>
            </div>


        </div>
    </div>
    <div class="telo-obrazka">

        <img src="{{asset("images/children-close-up-crowd-764681-1.jpg")}}" alt="jpg">
    </div>
    <div class="telo-modra" style="padding-left: 5%; padding-right: 5%;">
        <div class="container">
            <h1 class="service">Service</h1>
            <div class="divko-modre">
                <div class="medzi">
                    <img src="{{asset("images/icon-implementation-support-1.png")}}" alt="">
                </div>
                <div style="padding-left: 5em">
                    <h1>Individual Attention</h1>
                    <div style="justify-content: space-between;padding-top: 1em">
                        <p>The classroom environment at Stratford allows your childs’ educators to give them the time and attention that they need in order to succeed. We believe in keeping class numbers low to maximum learning potential.</p>
                    </div>
                </div>
            </div>
            <div class="divko-modre">
                <div class="medzi">
                    <img src="{{asset("images/icon-managed-hosting-1.png")}}" alt="">
                </div>
                <div style="padding-left: 5em">
                    <h1>Fantastic Facilities</h1>
                    <div style="justify-content: space-between;padding-top: 1em">
                        <p>Each student has access to the best possible learning technologies, as well having guest classes from industry professionals. We believe this better prepares your child for their careers or own businesses.</p>
                    </div>
                </div>
            </div>
            <div class="divko-modre">
                <div class="medzi">
                    <img src="{{asset("images/icon-build-digital-experiences-1.png")}}" alt="">
                </div>
                <div style="padding-left: 5em">
                    <h1>Life Long Learning</h1>
                    <div style="justify-content: space-between;padding-top: 1em">
                        <p>We believe in equipping your children with the skills to be able to learn for the rest of their lives! By instilling in them a method of analytical thinking, we believe they will be able to be independent thinkers and be high performers in their chosen careers.</p>
                    </div>
                </div>
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
    <div class="obrazok" >


    </div>
    <div class="telo-pismo" style="padding-left: 5%; padding-right: 5%;">
        <div class="container">
            <h1>Our Success</h1>


            <div class="pisma">
                <div >
                    <h1>1500+</h1>
                    <p>Since we opened in 2017 we’ve seen the lives changed of over 1000 students.</p>
                </div>
                <div>
                    <h1>100%</h1>

                    <p>If our students don’t succeed, then we haven’t done our job. Our students have a 100% University acceptance rate!</p>

                </div>
                <div>
                    <h1>5</h1>
                    <p>Year on year we have consistently produced the results you are looking for for 5 consecutive years.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="telo-modra" style="padding-left: 5%; padding-right: 5%;">
        <div class="container">
            <h1>Still not Satisfied?</h1>
            <p class="medzera">Why not set up an assessment for your child where they will interact in a real classroom environment? <br>
                <br>
                We will spend a day with your child in one of our classroom, where they will get to see what a day in the life of a Stratford student is like. Get in touch with us and we can help your child fulfil their potential by enrolling at Stratford!
            </p>
            <div class="btn-get-in-touch-me" >
                <a class="buttoni" style=" text-decoration: none;
    color: #3e69dc;" href="/letter">BOOK AN ASSESSMENT</a>
            </div>
        </div>
    </div>
    <div class="telo-kontakty" style="padding-left: 5%; padding-right: 5%;">
        <div class="container">
            <div class="telo-contaktov">
                <div>
                    <h1>About Us</h1>
                    <p> We are Stratford, a place of educational excellence.
                        <br><br>
                        We equip your children for their chosen field of study and careers with lifelong learning skills.
                    </p>
                </div>
                <div>
                    <h1>News</h1>

                    <hr>
                    <a href="">School Fun Day</a><br>
                    <p>August 15, 2019</p>
                    <hr>
                    <a href="">Mission Statement</a><br>
                    <p>August 14, 2019</p>
                    <hr>
                </div>
                <div>
                    <h1>Address</h1>
                    <p>mail@example.com <br>1-800-123-456
                        <br>99 Education Way<br>Stratford, London<br>GXVM+89<br>United Kingdom
                    </p>



                </div>
            </div>
        </div>
    </div>

@endsection
