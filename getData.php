<?php 
session_start();
    $hostName="sql12.freemysqlhosting.net";
    $username="sql12359268";
    $pass ="lBI48EpC4d";
    $dbName ="sql12359268";

    if (!array_key_exists("usrname", $_SESSION)) {
      header("location:login.php");
    }
    if (isset($_POST['logout'])) {
      unset($_SESSION['usrname']);
       // print_r($_SESSION);
      header("location:login.php");
    }
 
  $ketnoi = mysqli_connect($hostName,$username ,$pass,$dbName) or die("khong the ket noi");
 ?>
