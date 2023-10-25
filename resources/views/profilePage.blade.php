<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Level Up Library</title>
    <link rel="stylesheet" href="{{ asset('css/profilepage.css') }}">
    <script src="https://kit.fontawesome.com/e7bbbc0c8d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        @include('nav-bar');
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
