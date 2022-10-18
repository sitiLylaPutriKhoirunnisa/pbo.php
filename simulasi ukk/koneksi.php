<?php
    class koneksi{
        function getkoneksi(){
            return new PDO("mysql:host=localhost;dbname=perjalanan_db","root","");
        }

    }