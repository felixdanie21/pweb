<?php
include_once '../koneksi.php';
$id=$_POST['id'];
$nama=$_POST['nama'];
$tgl=$_POST['tglk'];
$sw = $_POST['buka'];
mysqli_query($koneksi,"insert into absen(id_absen,nama_kegiatan,tgl_kegiatan,status)values ('$id','$nama','$tgl','$sw')");

header("location:/ta_pweb/view/admin/indekadmin.php");