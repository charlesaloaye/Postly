<?php 

require('Config/Conn.php');


define('APP_NAME', 'Postly');
define('APP_DESC', 'The blog mate house');

define('APP_ROOT', 'Assets/Uploads/');

define('APP_HOME', 'http://localhost/postly/');



// SERVER SUPER GLOBAL
$page_name = ucwords(basename($_SERVER['SCRIPT_FILENAME'], '.php'));
$page_name = str_replace('-', ' ', $page_name);

if($page_name == 'Index'){
    $page_name = 'Home';

}



require('Auth/Auth.php');
require('Auth/Misc.php');
require('Config/DB/Queries.php');

