<?php
include_once '../koneksi.php';
$nama=$_POST['nama'];
$pass=md5($_POST['pass']);
$login= mysqli_query($koneksi,"select * from karyawan where nama_karyawan ='$nama' and password='$pass'");
$cek = mysqli_num_rows($login);
if ($cek==1){
    $data = mysqli_fetch_array($login);
    session_start();
    $_SESSION['islogin']=true;
    $_SESSION['id_karyawan']=$data['id_karyawan'];
    $_SESSION['username']=$data['username'];
    header("location:/ta_pweb/view/karyawan/indek.php");
}else{
    header("location:../loginkaryawan.php");
}