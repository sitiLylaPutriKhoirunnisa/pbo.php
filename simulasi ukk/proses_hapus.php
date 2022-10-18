<?php 

$id_login = $_POST['id_login'];

$database = new PDO("mysql:host=localhost;dbname=perjalanan_db",'root','');
$query = $database->query("DELETE FROM perjalanan where id_login='$id_login'");

if($query){
   header("Location:catatan_perjalanan.php");
}