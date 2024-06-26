<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rating page</title>
        <link rel="stylesheet" href="{{ asset('css/rating-style.css') }}">
        <script defer src="{{ asset('js/ratingpage.js') }}"></script>
    </head>

    <header>
    @include('nav-bar');
    </header>

    <body>
        <div class="write_review">
            <div class="rating_section">
                <div class="review_form">
                    <form id="submit_form">
                        <p>Title</p>
                        <input type="text" id="platform" name="title">
                        <p>Platform</p>
                        <select id="platform" name="platform">
                            <option value="PS4">PS4</option>
                            <option value="PS5">PS5</option>
                            <option value="Xbox360">Xbox 360</option>
                            <option value="XboxOne">Xbox One</option>
                            <option value="PC">PC</option>
                        </select>
                        <p>Content</p>
                        <textarea id="content" name="content" rows="8">

                        </textarea>
                        <p>Score<span class="red_highlight">*</span></p>
                        <select id="score" name="score">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input id="review_submit" type="submit" value="Submit" onclick="test();">
                      </form>
                </div>
            </div>
            <div class="headline">
                <div class="headline_image">
                    <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co670h.png">
                </div>
                <div class="headline_text">
                    <h2>Baldurs Gate 3</h2>
                    <h3><span>4.8/5</span> | 2020 | Larian Studios</h3>
                </div>
            </div>
        </div>
        <div class="other_reviews">

        </div>
    </body>
</html>
