<?php
    function dispatch($url): void {
        if($url == "/profile") {
            include __DIR__ ."../../public/html/profile/profile.php";
        } else if($url == "/auth") {
            include __DIR__ ."../../public/html/auth/auth.php";
        } 
    }