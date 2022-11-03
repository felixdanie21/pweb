<?php
include_once '../koneksi.php';
$username=$_POST['username'];
$pass=md5($_POST['pass']);
$login= mysqli_query($koneksi,"select * from admin where username ='$username' and password='$pass'");
$cek = mysqli_num_rows($login);
if ($cek==1){
    $data = mysqli_fetch_array($login);
    session_start();
    $_SESSION['islogin']=true;
    $_SESSION['id_admin']=$data['id_admin'];
    $_SESSION['username']=$data['username'];
    header("location:/ta_pweb/view/admin/indekadmin.php");
}else{
    header("location:../loginadmin.php");
}