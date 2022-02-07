
<div id="hlavicka" class="hlavicka">
    <a class="nadpis" href="/post">Stratford</a>
    <div class="ikony">
        <ul class="topnav" id="myTopnav">

            <li class="idk {{ (request()->is('post')) ? 'active' : '' }} {{ (request()->is('post/home')) ? 'active' : '' }}" id="post">
                <a class="znacka"  style=""  href="/post">Home</a>
            </li>
            <li   class="idk  {{ (request()->is('post/about')) ? 'active' : '' }}">
                <a class="znacka" href="/post/about" >About</a>
               <img alt="znacka" src="{{asset("images/icons8-triangle-arrow-24.png")}}" style="height: 13px; width: 13px" >

                <div  class="dropdown-content">
                    <a class="idk {{ (request()->is('post/ourstaff')) ? 'active' : '' }}" id="ourstaff"  href="/post/ourstaff">- Our Staff</a>
                    <a class="idk {{ (request()->is('post/whatweoffer')) ? 'active' : '' }}" id="whatweoffer" href="/post/whatweoffer">- What We Offer</a>
                </div>
            </li>
            <li class="idk {{ (request()->is('blog')) ? 'active' : '' }}" id="blog">
                <a  class="znacka"   href="/blog">Blog</a>
            </li>
            <li class="idk {{ (request()->is('galery')) ? 'active' : '' }}" id="ini">
                <a class="znacka" href="/galery/">Galery</a>
            </li>
            <li class="idk {{ (request()->is('letter')) ? 'active' : '' }}" id="letter">
                <a class="znacka"  style="" href="/letter">Contact</a>
            </li>


            <li class="ida"> <a href="javascript:void(0);" class="icon" id="menu" onclick="">
                    MENU +
                </a> </li>
            @guest
                @if (Route::has('login'))
                    <li class="idk">
                        <a class="znacka" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

            @else
                <li   class="idk">
                    <p class="" > {{ Auth::user()->name }} {{ Auth::user()->last_name }}</p>

                    <div  class="dropdown-content" style="margin-right: 2%">
                        <a class="idk" href="{{ route('logout') }}"
                           onclick="events.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>





                            <a href="/post/profil">setting</a>


                    </div>
                </li>

            @endguest

        </ul>

    </div>


</div>

