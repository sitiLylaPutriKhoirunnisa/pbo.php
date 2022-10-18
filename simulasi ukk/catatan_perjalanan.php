<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:form_register.php");
    }

    $koneksi = new PDO("mysql:host=localhost;dbname=perjalanan_db","root","");

    $query = $koneksi->query("select * from perjalanan");


    if(isset($_GET['urut'])){ 
    $urut = $_GET['urut'];
    $query = $koneksi->query("select * from perjalanan order by $urut asc");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <style>
        .select {
            border: 1px solid black;
            width: 30%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
<h2>PEDULI DIRI</h2>
    <a href="Home.php">Home</a>|
    <a href="catatan_perjalanan.php">Catatan Perjalanan</a>|
    <a href="form_catatan_perjalanan.php">Isi Data</a>
<form>
    <div class="select">
        <span>Urut Berdasarkan</span>
            <select name="urut">
                <option value="tanggal">Tanggal</option>
                <option value="waktu">Waktu</option>
                <option value="lokasi">Lokasi</option>
            </select>
            <button type="submit">urutkan</button>
    </div>
    </form>
    <table class="table table-striped table-bordered mt-5">
    <tr >
        <td>Tanggal</td>
        <td>Waktu</td>
        <td>Lokasi</td>
        <td>Suhu</td>
        <td>Akses</td>
        
    </tr>
        <?php
        while ($data = $query->fetch()){ ?>
    <tr >
        <td><?php echo $data["tanggal"] ?></td>
        <td><?php echo $data["waktu"] ?></td>
        <td><?php echo $data["lokasi"]?></td>
        <td><?php echo $data["suhu"]?></td>
        <td><button class="btn btn-success btn-sm">Update </button>
            <a href="proses_hapus.php" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
    <?php } ?>
    </table>
    
    <a href="form_catatan_perjalanan.php" class="btn btn-primary">Isi catatan perjalanan</a>
    </div>

    
</body>
</html>