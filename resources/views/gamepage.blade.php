<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Level Up Library</title>
    <link rel="stylesheet" href="{{ asset('css/gamepage.css') }}">
    <script src="https://kit.fontawesome.com/e7bbbc0c8d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
       @include ('nav-bar');
    </header>
    <div class="game-cover-image">
    </div>
    <div class="container2">
        <div class="game-container-header"></div>
        <div class="game-info-container">
            <div class="game-info-left">
                <div class="game-title">Starfield</div>
                <div class="game-description">
                    <p>Starfield is the first new universe in over 25 years from Bethesda Game Studios, the award-winning creators of The Elder Scrolls V: Skyrim and Fallout 4. In this next generation role-playing game set amongst the stars, create any character you want and explore with unparalleled freedom as you embark on an epic journey to answer humanity’s greatest mystery.</p>
                    <p>In the year 2330, humanity has ventured beyond our solar system, settling new planets, and living as a spacefaring people. You will join Constellation – the last group of space explorers seeking rare artifacts throughout the galaxy – and navigate the vast expanse of space in Bethesda Game Studios’ biggest and most ambitious game.</p>
                </div>
                <button class="read-more-button">Read More</button>
            </div>
            <div class="game-image">
                <a href="#"><img src="resources/starfield-pc-physical-packaging.jpg" id="game-image" alt="image"></a>
            </div>
        </div>

        <div class="game-publisher">
            Publisher: Bethesda
        </div>
        <div class="release-date">
            Release date: Sep 6, 2023
        </div>
        <div class="game-tags">
            <ul> Tags:
                <li>Single Player</li>
                <li>Role Playing Game</li>
                <li>First-Person Shooter</li>
                <li>Open World</li>

            </ul>
        </div>
        <div class="review-box">
            Highlighted User Reviews:
            <ul>
                <li>FalloutBoy_xXx:</li>
                <li>MrGameAficionado:</li>
                <li>FourTwentyBl4Z3:</li>
            </ul>
            <button class="review-page-button">
                Review Page
            </button>
        </div>
    </div>

</body>
</html>
