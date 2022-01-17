<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">

</head>
<body>

<div id="app">
    <div class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand link-secondary" href="/post/home">Stanford</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                @auth


                    @if(auth()->user()->user_type == 'Administrator'||auth()->user()->user_type == 'Writer')
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('worker')) ? 'active' : '' }}" aria-current="page" href="/worker">Users</a>
                        </li>
                    @endif

                    @if(auth()->user()->user_type == 'Administrator'||auth()->user()->user_type == 'Writer')
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('post/mesenge')) ? 'active' : '' }}" href="/post/mesenge">Messenge</a>
                </li>
                    @endif
                        @if(auth()->user()->user_type == 'Administrator')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('post/nastavenie')) ? 'active' : '' }}" href="/post/nastavenie">Setting</a>
                            </li>
                        @endif
                    @endauth
            </ul>
            <ul class="navbar-nav  mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('post/profil')) ? 'active' : '' }}" aria-current="page" href="/post/profil">Profil</a>
            </li>
            </ul>
        </div>
    </div>
    </div>
    </div>


@yield('content')

<script src="{{asset("js/app.js")}}" defer></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</body>
</html>
