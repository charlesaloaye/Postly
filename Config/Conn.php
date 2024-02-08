<?php 
ob_start();
session_start();
error_reporting(0);

define('DB_NAME', 'pinnacle');
define('DB_USERNAME', 'charlestechy');
define('DB_HOST', 'localhost');
define('DB_PASSWORD', 'Yomzy@23');


$dsn = 'mysql:host='. DB_HOST.';dbname='. DB_NAME.';';

$conn = new PDO($dsn, DB_USERNAME,DB_PASSWORD);

$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


if(!$conn) echo 'Error occured while trying to connect to the DB';