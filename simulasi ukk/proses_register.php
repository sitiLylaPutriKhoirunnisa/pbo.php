<?php
      session_start();


         $username = htmlentities(trim($_POST['username']));
         $password = $_POST['password'];
         $pesan_error="";

         if(empty($username)){
         $pesan_error="Data tidak boleh kosong";
         }
         if($pesan_error !==""){
         header("location:form_register.php?error=$pesan_error");
         }
         if($pesan_error ==""){

   $database = new PDO("mysql:host=localhost;dbname=perjalanan_db",'root','');
   $query = $database->query("insert into login values('','$username','$password')");
   
   $data = $query->fetch();

   if($query->rowCount() > 0){

      $_SESSION['id_login'] = $data['id_login'];
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['password'] = $_POST['password'];

      header("location:Home.php");

   }
   if($query){
    header("Location:form_register.php");
   }
   }
 
