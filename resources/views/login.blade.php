<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход</title>
    @vite('resources/css/app.css')
</head>
<body>
<div>

    <div class="container">
        <div class="form-login-wrapper">
            <div class="form-login-title-wrapper">
                <h1 class="form-login-title">Вход</h1>
            </div>
            <form action="/" class="form-login" method="post">
                @csrf
{{--                <label for="" class="form-login-email__label">email:</label>--}}
                <input type="email" class="form-login_email" placeholder="логин или email" name="email">
{{--                <label for="" class="form-login-password__label" >password:</label>--}}
                <input type="password" class="form-login_email" placeholder="пароль" name="password">
                <button type="submit" class="form-login__btn">Войти</button>
            </form>
            <div class="link-helper">
                <div class="link-helper__forgot-pss">
                    <a href="#">я забыл пароль</a>
                </div>
                <div class="link-helper__create-accaunt">
                    <a href="#">зарегистрироваться</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
