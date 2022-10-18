<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('location:Home.php');
    }
   

?>

<html lang="en">
<head>
    <title>Document</title>
<style>
body {
    font-family: sans-serif;
    background-color: aqua;
}
.h1{
    text-align: center;
    font-weight: 300;
}
.login{
    width: 350px;
    background: white;
    margin: 80px auto;
    padding: 30px 20px;
}
label{
    font-size: 11pt;
}
.form_login{
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 20px;
}
.tombol{
    background: rgb(22, 139, 130);
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
   
    border-radius: 3px;
    padding: 10px 20px;
}


</style>
</head>
<body>
    <div class="login">
    <form action="login.php" method="post">
        <h1>FORM LOGIN</h1>
        
        <label>
            Username : 
            <input type="text" name="username" id="" class="form_login" placeholder="username">
        </label>
        <label>
           Password : 
           <input type="password" name="password" id="" class="form_login" placeholder="password">
        </label>
        
        <button type="submit" class="tombol">Login</button>
    </form>
</div>
</body>
</html>