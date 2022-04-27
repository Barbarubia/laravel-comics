<header>
    Questo è l'header.

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
                    <img src="./images/dc-logo.png" alt="Logo">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="{{ route('characters') }}">Characters</a>
                    </li>
                    <li>
                        <a href="{{ route('comics') }}">Comics</a>
                    </li>
                    <li>
                        <a href="{{ route('movies') }}">Movies</a>
                    </li>
                    <li>
                        <a href="{{ route('tv') }}">TV</a>
                    </li>
                    <li>
                        <a href="{{ route('games') }}">Games</a>
                    </li>
                    <li>
                        <a href="{{ route('collectibles') }}">Collectibles</a>
                    </li>
                    <li>
                        <a href="{{ route('videos') }}">Videos</a>
                    </li>
                    <li>
                        <a href="{{ route('fans') }}">Fans</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">News</a>
                    </li>
                    <li>
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

    Fine header
</header>
