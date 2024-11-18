<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>

        <link rel="stylesheet" href="css/auth.css" />
    </head>
    <body>
        <div class="auth__container">
            <div class="auth__content">
                    <ul class="auth__nav_list">
                        <li class="auth__nav_item">
                            <a href="" class="auth__nav-link active">ВОЙТИ</a>
                        </li>
                        <li class="auth__nav_item">
                            <a href="" class="auth__nav-link">РЕГИСТРАЦИЯ</a>
                        </li>
                    </ul>

                <form action="" class="sign__in none">
                    <input type="text" placeholder="Имя пользователя" />
                    <input type="password" placeholder="Пароль" />
                    <p><input type="checkbox" /> Запомнить меня</p>

                    <div class="sign__in_links">
                        <button class="login-button">Войти</button>
                        <a href="#" class="forgot-link">Забыли пароль?</a>
                    </div>
                </form>
                <hr>
                <form action="" class="sign__up ">
                    <input type="text" placeholder="Ваше имя"/>
                    <input type="text" placeholder="Ваша фамилия"/>
                    <input type="email" placeholder="Ваш email"/>

                    <input type="password" placeholder="Придумайте пароль">
                    <input type="password" placeholder="Повторите пароль">

                    <p>
                        <input type="checkbox">     Согласен с условиями сайта
                    </p>
                    
                    <div class="sign__up_btn">
                        <button>Регистрация</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </body>
</html>
