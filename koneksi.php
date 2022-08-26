<?php

class koneksi{
    function getkoneksi(){
        return new PDO("mysql:host=localhost;dbname=pbo12","root"."");
    }
}

//$koneksi = new koneksi();
//echo $koneksi1->koneksi();