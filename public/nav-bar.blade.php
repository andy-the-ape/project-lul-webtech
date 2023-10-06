<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level Up Library</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script defer src="{{ asset('js/script.js') }}"></script>
    <script defer src="https://kit.fontawesome.com/e7bbbc0c8d.js" crossorigin="anonymous"></script>
</head>
<body>


    <header class="primary-header">
        <div class="container">
            <nav class="primary-navigation">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('img/LUL-logo.png') }}" id="logo" alt="Level Up Library"></a>
                </div>
                <div id="nav-right-side">
                    <div class="nav-links desktop-nav-links">
                        <a href="games.html">Browse</a>
                        <a href="topgames.html">Top Picks</a>
                    </div>
                    <div class="hamburger-menu">
                        <div class="hamburger-icon" onclick="toggleMenu()">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="menu-links">
                            <li><a href="games.html">Browse</a></li>
                            <li><a href="topgames.html">Top Picks</a></li>
                        </div>
                    </div>
                    <div class="nav-search">
                        <label>
                            <input type="search" placeholder="Search for games">
                        </label>
                        <a href="profilepage.html">
                            <i class="fa-regular fa-user"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</body>

</html>
