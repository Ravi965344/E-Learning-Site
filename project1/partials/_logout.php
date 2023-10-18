<?php
session_start();
define("URL","http://localhost/project1/");
$url =  constant("URL");

unset($_SESSION["loggedin"]); 
unset($_SESSION["email_id"]); 
unset($_SESSION["user_id"]); 

if(empty($_SESSION))
{
    header("Location: $url");

}

?>