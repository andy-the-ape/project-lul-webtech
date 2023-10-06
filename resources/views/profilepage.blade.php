<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Level Up Library</title>
    <link rel="stylesheet" href="{{ asset('css/profilepage.css') }}">
    <script src="https://kit.fontawesome.com/e7bbbc0c8d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="primary-header">
        <div class="container">
            <nav class="primary-navigation">
                <!--Input nav-bar code in here-->
                    <div class="logo">
                        <a href="#"><img src="resources/LUL-logo.png" id="logo" alt="Level Up Library"></a>
                    </div>
                    <div id="nav-right-side">
                        <div class ="nav-links">
                            <a href="#">Browse</a>
                            <a href="#">Top Picks</a>
                        </div>
                        <div class="nav-search">
                            <label>
                                <input type ="search" placeholder="Search for games">
                            </label>
                            <a href="profilepage.html"><i class="fa-regular fa-user"></i></a>
                        </div>
                    </div>
                </nav>
        </div>
    </header>
    <div class="profile-cover-image">
    </div>
    <div class="container2">
        <div class="profile-container-header"></div>
        <div class="profile-info-container">
            <div class="profile-info-left">
                <div class="username">User123</div>
                <div class="profile-description">
                <p>Hello, I'm John Doe, a passionate gamer and explorer of virtual worlds. I've been gaming since I was a kid, and I've seen the evolution of video games from pixelated classics to breathtaking open-world adventures.</p>
                <p><strong>Gaming Interests:</strong></p>
                <ul>
                    <li>Favorite Genres: RPGs, First-Person Shooters, and Strategy Games</li>
                    <li>Top Picks: The Witcher 3, Doom Eternal, and Civilization VI</li>
                    <li>Gaming Achievements: Completed Dark Souls without breaking a controller!</li>
                </ul>
                </div>
            </div>

        </div>


        <div class="profile-creation-date">
            Member since: Okt 10, 2023
        </div>

        <div class="review-box">
            Recent Reviews
            <ul>
                <li>Baldurs Gate 3</li>
                <li>Ass Hunters</li>
                <li>Roller Coaster Tycoon 3</li>
            </ul>
            <button class="review-page-button">
                All reviews
            </button>
        </div>
    </div>

</body>
</html>
