<header>

    <div class="header-top">
        <div class="container">
            <ul>
                <li>
                    <a href="#">DC Power<sup>SM</sup> Visa <i class="fa-regular fa-registered"></i></a>
                </li>
                <li>
                    <a href="#">Additional DC Sites</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="Logo">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li class="{{ Route::current()->getname() == 'characters' ? 'active' : '' }}">
                        <a href="{{ route('characters') }}">Characters</a>
                    </li>
                    <li class="{{ Route::current()->getname() == 'comics' ? 'active' : '' }}">
                        <a href="{{ route('comics') }}">Comics</a>
                    </li>
                    <li class="{{ Route::current()->getname() == 'movies' ? 'active' : '' }}">
                        <a href="{{ route('movies') }}">Movies</a>
                    </li>
                    <li class="{{ Route::current()->getname() == 'tv' ? 'active' : '' }}">
                        <a href="{{ route('tv') }}">TV</a>
                    </li>
                    <li class="{{ Route::current()->getname() == 'games' ? 'active' : '' }}">
                        <a href="{{ route('games') }}">Games</a>
                    </li>
                    <li class="{{ Route::current()->getname() == 'collectibles' ? 'active' : '' }}">
                        <a href="{{ route('collectibles') }}">Collectibles</a>
                    </li>
                    <li class="{{ Route::current()->getname() == 'videos' ? 'active' : '' }}">
                        <a href="{{ route('videos') }}">Videos</a>
                    </li>
                    <li class="{{ Route::current()->getname() == 'fans' ? 'active' : '' }}">
                        <a href="{{ route('fans') }}">Fans</a>
                    </li>
                    <li class="{{ Route::current()->getname() == 'news' ? 'active' : '' }}">
                        <a href="{{ route('news') }}">News</a>
                    </li>
                    <li class="{{ Route::current()->getname() == 'shop' ? 'active' : '' }}">
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>
                </ul>
            </div>
            <div class="search">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>

</header>
