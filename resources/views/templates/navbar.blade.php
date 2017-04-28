<header> 
    <!-- Main container -->
    <div class="page-container">
        <!-- bloc-0 -->
        <div class="bloc sticky-nav full-width-bloc bgc-white l-bloc" id="bloc-0">
            <div class="container">
                <nav class="navbar nav-center row mini-nav">
                    <div class="navbar-header"><a class="navbar-brand" href="{{route('welcome')}}"><span class="special-tag-for-editing-text-with-html"></span><span class="special-tag-for-editing-text-with-html"></span><img src="img/logo.svg" alt="logo" height="130" width="275" /></a><button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle menu-icon-rounded-bars" data-toggle="collapse" data-target=".navbar-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                    <div class="collapse navbar-collapse navbar-1 nav-special fullscreen-nav"> 
                        <ul class="site-navigation nav navbar-nav">
                        @if (Auth::check())
                            @if (Auth::user()->rol = 'cliente')
                                <li><a href="{{route('welcome')}}" class="ltc-white">Home</a></li>
                                <li><a href="{{route('menu')}}" method="get">Menu</a></li>
                            @endif
                                <li><a href="{{route('chef')}}">Chef</a></li>
                                <li><a href="{{route('almacen')}}" class="ltc-white"> Almacen </a></li>
                                <li><a href="{{ route('log-out') }}"class="ltc-white">Salir</a></li>
                            @else
                                <li><a href="{{route('log-in')}}" class="ltc-white">Log In</a></li>
                                <li><a href="{{route('register')}}" class="ltc-white">Registrate</a></li>
                            @endif
                            <li></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- bloc-0 END -->
    </div>
</header>