<div id="site-menu">
    <nav id="main-nav" class="main-nav">
        <ul id="menu-primary-menu" class="menu">
            <li class="menu-item ">
                <a href="/" class="menu_active">Home</a>
            </li>
            <li class="menu-item">
                <a href="{{ route('about.show') }}">About Us</a>

            </li>

            <li class="menu-item ">
                <a href="{{ route('contest.archive') }}">Contests</a>
            </li>

            <li class="menu-item ">
                <a href="{{ route('contact.show') }}">Contact</a>
            </li>

            @guest()
                <li class="menu-item ">
                    <a href="{{ route('login') }}"> Login/Register <i class="fa fa-sign-in ss" aria-hidden="true"></i></a>
                </li>
            @endguest


            @auth()
                <li class="menu-item menu-item-has-children ">

                    <a href="{{ route('dashboard') }}"><i class="fa fa-user ss" aria-hidden="true"></i>
                        {{ Auth::user()->name }}</a>
                    <ul class="sub-menu">
                        <li class="menu-item ">
                            <form action="{{ route('logout') }}
                    " method="post">
                                @csrf
                                <button type="submit" class="sub">Logout <i class="fa fa-sign-out ss"
                                        aria-hidden="true"></i></button>
                        </li>
                        </form>

                </li>
            </ul>
            </li>
        @endauth
        </ul>
    </nav><!-- /#main-nav -->
</div>
