<?php

session_start();

 $id_login =  htmlentities(trim($_POST['id_login']));
 $tanggal = $_POST['tanggal'];
 $waktu = $_POST['waktu'];
 $lokasi = $_POST['lokasi'];
 $suhu = $_POST['suhu'];

 $pesan_eror="";

 if(empty($id_login)){
   $pesan_eror="Data tidak boleh kosong";
 }
 if($pesan_eror !==""){
   header("location:form_catatan_perjalanan.php?error=$pesan_error");
 }
 if($pesan_eror ==""){

 $database = new PDO("mysql:host=localhost;dbname=perjalanan_db",'root','');
 $query = $database->query("insert into perjalanan values('','$id_login','$tanggal','$waktu','$lokasi','$suhu')");

 $data = $query->fetch();

 if($query->rowCount() > 0){
   $_SESSION['id_login'] = $data['id_login'];
   $_SESSION['tanggal'] = $_POST['tanggal'];
   $_SESSION['waktu'] = $_POST['waktu'];
   $_SESSION['lokasi'] = $_POST['lokasi'];
   $_SESSION['suhu'] = $_POST['suhu'];

   header("location:catatan_perjalanan.php");
 }
 if($query){
    header("Location:catatan_perjalanan.php");
 }
}
 

 