<?php
include_once '../koneksi.php';
$id=$_POST['id'];
$pass=md5($_POST['pass']);
mysqli_query($koneksi, "update karyawan set password='$pass'where id_karyawan='$id'");

header("location:../loginkaryawan.php");
