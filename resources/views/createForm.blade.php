<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Create Account Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/styleCreate.css') }}">
</head>
<body>
    <div class="center">

        <div class="createForm">

            <label for="show" class="closebtn fas fa-times" title="close" onclick="closeCreate()"></label>
            <div class="text">Create Account</div>
                <form action="#">
                    <div class="data">
                        <label>Username</label>
                        <input type="text" required placeholder="Enter username">
                    </div>

                    <div class="data">
                        <label>Email</label>
                        <input type="text" required placeholder="Enter email">
                    </div>

                    <div class="data">
                        <label>Password</label>
                        <input type="text" required placeholder="Enter password">
                        <div class="passrq">
                            <label> • Passwords must be at least 8 characters</label>
                        </div>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox">
                        <a href="#">I agree to the Terms of Service and Privacy Policy</a>
                    </div>

                    <div class="create-account">
                        <div class="create"></div>
                        <button type="submit">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
