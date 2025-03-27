<?php

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

  $route = [

    '/' => 'controllers/index.php',

    '/about' => 'controllers/about.php',

    '/contact' => 'controllers/contact.php',
    
  ];


