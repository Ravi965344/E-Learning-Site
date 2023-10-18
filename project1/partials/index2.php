<?php
session_start();
echo "exit";
//include '_dbconnect.php';
echo "Logging you out. Please wait...";

unset ($_SESSION["email_id"]);
unset ($_SESSION["loggedin"]);

header("Location: index.php");

exit ;
?>  