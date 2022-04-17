<?php
    require_once('../config/konek.php');
    if (isset($_POST['nama_mainan']) && isset($_POST['kondisi']) && isset($_POST['harga'])&& isset($_POST['stok'])){
        $nama_mainan = $_POST['nama_mainan'];
        $kondisi = $_POST['kondisi'];
        $sql = $conn->prepare("INSERT INTO lego (nama_mainan, kondisi, harga, stok) VALUES (?, ?, ?, ?)");
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $sql->bind_param('ssdd', $nama_mainan, $kondisi, $harga, $stok);
        $sql->execute();
        if ($sql){
            //echo json_encode(array('RESPONSE' =&gt; 'FAILED'));
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
            //header("location:../readapi/tampil.php");
        } else{
            echo "GAGAL";
        }
    }
?>