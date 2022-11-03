<?php

include_once '../koneksi.php';
$id = $_REQUEST["idka"];
$pass = md5($_REQUEST["password"]);
$nama = $_REQUEST["nama"];
$dob = $_REQUEST["dob"];
$divisi = $_REQUEST["divisi"];
mysqli_query($koneksi, "insert into karyawan(id_karyawan,password,nama_karyawan,dob_karyawan,divisi)values ('$id','$pass','$nama','$dob','$divisi')");
