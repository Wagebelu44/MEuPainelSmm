<?php

define('PATH', realpath('.'));
define('SUBFOLDER', false);
define('URL', 'https://yourwebsite.com');
define('STYLESHEETS_URL', '//yourwebsite.com');

error_reporting(1);
date_default_timezone_set('Asia/Kolkata');

return [
  'db' => [
    'name'    =>  'dbname',
    'host'    =>  'localhost',
    'user'    =>  'user',
    'pass'    =>  'password',
    'charset' =>  'utf8mb4' 
  ]
];
