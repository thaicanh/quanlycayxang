<?php 

	
    $hostName="localhost";
    $username="root";
    $pass ="";
    $dbName ="quanlicayxang";
  	$ketnoi = mysqli_connect($hostName,$username ,$pass,$dbName) or die("khong the ket noi");
  	if (isset($_GET['id'])) {
  		$idsensor = $_GET['id'];
  		$query = mysqli_query($ketnoi,"SELECT * FROM sensor JOIN value ON (sensor.idsensor=value.idsensor) WHERE value.idsensor = '$idsensor' ORDER BY  time DESC limit 1");
    	$sensor = mysqli_fetch_array($query);	
    	echo json_encode($sensor);
  	}
 	
 ?>