<?php

// turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

// resuire the autoload file
rewuire_once('vendor/autoload.php');

// create an instance of the base class
$f3 = Base::instance();

// Run fat free
$f3 -> run();