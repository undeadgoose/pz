<nav id="pz-navbar" class="navbar navbar-dark navbar-expand-lg shadow-sm sticky-top">
        <div class="navbar-brand pz-logo ml-5 small-device-brand">
            <a href="/">
                <img src="{{asset('/img/logo-white.png')}}">
            </a>
        </div>
        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#pzNavToggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
    
    <div class="collapse navbar-collapse" id="pzNavToggler">
            <div class="pz-navbar-links navbar-nav ml-auto pt-4 mr-5">
                <ul class="d-flex mx-auto">
                    @guest
                            <li><a href="/">Home</a></li>
                            <li><a href="/talents">Talents</a></li>
                            <li><a href="/partners">Partners</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/blog">Blog</a></li>
                    @else
                            <li><a href="/">Home</a></li>
                            <li><a href="/talents">Talents</a></li>
                            <li><a href="/partners">Partners</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/blog">Blog</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-dark" href="/dashboard">Dashboard</a>
                                <a href="/blog/create" class="dropdown-item text-dark">Create Post</a>
                                <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
            <div class="nav-social-media-links mt-3">
                <ul class="d-flex list-none">
                    <li><a href="https://www.facebook.com/playerzeropage" target="_blank">
                        <div class="icon-20 nav-fb-icon"></div>
                        </a
                    ></li>
                    <li> <a href="https://twitter.com/PlayerZeroPH" target="_blank">
                        <div class="icon-20 nav-tw-icon ml-2"></div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/playerzeroph" target="_blank">
                            <div class="icon-20 nav-ig-icon ml-2"></div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCubDrSXFWz54uEw766uKKew" target="_blank">
                            <div class="icon-20 nav-yt-icon ml-2"></div>
                        </a>
                    </li>
                </ul>  
            </div>    
    </div>
</nav>