<?php
    require_once('../config/konek.php');
    $data = json_decode(file_get_contents("php://input"));

    if ($data->id!=null){
        $id = $data->id;
        $nama_mainan = $data->nama_mainan;
        $harga = $data->harga;
        $kondisi = $data->kondisi;
        $stok = $data->stok;

        $sql = $conn -> prepare("UPDATE lego SET nama_mainan=?, kondisi=?, harga=?, stok=? WHERE id=?");
        $sql -> bind_param('ssddd', $nama_mainan, $kondisi, $harga, $stok, $id);
        $sql -> execute();
        if ($sql){
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
        }else{
            echo json_encode(array('RESPONSE' => 'FAILED'));
        }
    }else{
        echo "GAGAL";
    }
?>