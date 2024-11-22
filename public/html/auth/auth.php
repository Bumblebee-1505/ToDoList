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

        <hr>

        <?php
            include 'signIn.php';
            include '../../css/auth/signIn.css';
        ?>

        <?php
            include 'signUp.php';
            include '../../css/auth/signUp.css';
        ?>
    </div>
</div>