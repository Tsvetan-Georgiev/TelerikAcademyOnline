<?php
	// mysql_connect('localhost','psihozdr_main','a1ab@1@');
	// mysql_select_db('psihozdr_main');
	$servername = "localhost";
	$username = "psihozdr_tito";
	$password = "masterkey";
	$bd = "psihozdr_contactlist";
	$conn = new mysqli($servername, $username, $password,$bd);
	if ($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}
	mysqli_set_charset( $conn,"UTF8" );
?>