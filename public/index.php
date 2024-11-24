<?php
require_once '../../conf.php';

require_once '../../src/Router/router.php';



dispatch(url: $_SERVER['REQUEST_URI']);