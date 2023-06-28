<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>Register Page</title>
</head>

<body>
    <style>
        body {
            overflow: hidden;
        }
    </style>
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="{{ asset('images/logo.png') }}" alt="logo">
            </div>
            <div class="login-card-header">
                <h1>Sign Up</h1>
                <div>Please register to use the platform</div>
            </div>
            <form class="login-card-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">account_circle</span>
                    <input type="text" name="name" placeholder="Enter Name" id="nameForm"
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input type="email" name="email" placeholder="Enter Email" id="emailForm"
                    required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" name="password" placeholder="Enter Password" id="passwordForm"
                     required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" id="passwordConfirmForm"
                     required>
                </div>
                <button type="submit">Sign Up</button>
            </form>
            <div class="login-card-footer">
                Already have an account? <a href="{{ route('login') }}">Login here.</a>
            </div>
        </div>
    </div>

</body>

</html>
