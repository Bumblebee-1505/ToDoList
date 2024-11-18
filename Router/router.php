<?php
    function dispatch($url): void {
        if($url == "/start") {
            include __DIR__ ."/../html/start.php";
        } else if($url == "/profile") {
            include __DIR__ ."/../public/html/profile.php";
        } 
    }