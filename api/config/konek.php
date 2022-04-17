<?php
    define('HOST','localhost');
    define('USER','root');
    define('DB','mainan');
    define('PASS','');
    $conn = new mysqli(HOST,USER,PASS,DB) or die('Koneksi error untuk mengakses database');
?>