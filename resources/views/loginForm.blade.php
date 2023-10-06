<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Login Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}">
</head>

<body>
    <div class="center">

        <div class="loginForm" id="loginForm">

            <label for="show" class="closebtn fas fa-times" title="close" onclick="closeLogin()"></label>
            <div class="text">Login</div>

            <form action="#">
                <div class="data">
                    <label>Username or Email</label>
                    <input type="text" required placeholder="Enter username or email">
                </div>

                <div class="data">
                    <label>Password</label>
                    <input type="text" required placeholder="Enter password">
                </div>

                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>

                <div class="btns">
                    <div class="inner"></div>
                    <button type="submit">Login</button>
                </div>

                <div class="break-line">
                    <div class="line"></div>
                    <div class="dot">or</div>
                    <div class="line"></div>
                </div>

                <div class="btns">
                    <div class="create"></div>
                        <button type="button" id="createbtn" onclick="openCreate()">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
