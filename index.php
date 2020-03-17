<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(1);

$CD = __DIR__;
$DS = DIRECTORY_SEPARATOR;
        
// vendor
require $CD.$DS."vendor".$DS."autoload.php";

// environment
$dotenv = new Dotenv\Dotenv($CD);
$dotenv->load();

require $CD.$DS."autoload.php";

