<?php
session__star();

header('X-Frame-Options: DENY'); 
header('X-Content-Type-Options: nosniff'); 
header('X-XSS-Protection: 1; mode=block');

ini_set('display_errors', 1);
ini_set('log_errors', 1);