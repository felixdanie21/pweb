<?php

include_once '../koneksi.php';
 $id = $_REQUEST['id'];
 var_dump($id);
 die();
$tgl =date('Y/m/d H:i:s');
mysqli_query($koneksi,
    "update absen set tgl_absen='$tgl'where id_absen='$id'");
