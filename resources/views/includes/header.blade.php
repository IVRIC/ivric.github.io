<header id="header">
    <h1 id="logo"><a href="{{ route('app::index') }}">IVRIC</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="{{ route('app::index') }}">Home</a></li>
            <li>
                <a href="#contest">About</a>
                <ul>
                    <li><a href="#contest">The Contest</a></li>
                    <li><a href="#organizers">Organizers</a></li>
                    {{--<li><a href="no-sidebar.html">No Sidebar</a></li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Submenu</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="#">Option 1</a></li>--}}
                            {{--<li><a href="#">Option 2</a></li>--}}
                            {{--<li><a href="#">Option 3</a></li>--}}
                            {{--<li><a href="#">Option 4</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
            </li>
            <li><a href="{{ route('pages::faq') }}">FAQ</a></li>
            <li><a href="#subscribe" class="button special">Sign Up</a></li>
        </ul>
    </nav>
</header>