<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catatan perjalanan</title>
    <style>
body {
    font-family: sans-serif;
    background-color: aqua;
}
.h2{
    text-align: center;
    font-weight: 300;
}
.perjalanan{
    width: 350px;
    background: white;
    margin: 80px auto;
    padding: 30px 20px;
}
label{
    font-size: 11pt;
}
.form_catatan{
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
    <div class="perjalanan">
        <form action="proses_isicatatan.php" method="post">

        <?php if(isset($_GET["error"])) :?>
            <div class="alert alert-danger" role="alert">
                <p><? $_GET['error']?></p>
            </div>
            <?php endif ?>
            <h2>Catatan Perjalanan</h2>

            <label>
                Tanggal:
                <input type="date" name="tanggal" class="form_catatan" placeholder="tanggal" required>
            </label>
            <label>
                Waktu:
                <input type="time" name="waktu" class="form_catatan" placeholder="waktu" required>
            </label>
            <label>
                Lokasi :
                <input type="text" name="lokasi" class="form_catatan" placeholder="lokasi" required>
            </label>
            <label>
                Suhu :
                <input type="float" name="suhu" class="form_catatan" placeholder="suhu" required>

            </label>

            <button type="submit" class="tombol">Simpan</button>
        </form>
    </div>
    
    
</body>
</html>