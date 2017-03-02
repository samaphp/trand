<?php

require 'inc/config.php';

// Also spl_autoload_register (Take a look at it if you like).
function __autoload($class) {
  require 'inc/' . $class .".php";
}

// Load the website bootstrap!
$bootstrap = new Bootstrap();
$bootstrap->init();
