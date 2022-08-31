<?php

session_start();
$_SESSION["username"] = "Lyla";
$_SESSION["id"] = "888";


echo "Username = ".$_SESSION['username'];
echo "<br/>";
echo "Password = ".$_SESSION['id'];
?>