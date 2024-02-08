<?php 
if(!$_SESSION['auth']){
    header('location: '. APP_HOME.'login.php');
}