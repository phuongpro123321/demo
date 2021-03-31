<?php 
$conn_string = "host=ec2-23-22-191-232.compute-1.amazonaws.com dbname=ddpnh3fllikoh9 user=qlacuryvjwfagg password=2b902a01a3f536a9bc5398855594f01f3b6932ee4df7906b980e69d3726c4715";
$dbconn - pg_connect($conn_string);
if(isset($_POST['username'])){
	$username = $_POST['username'];
}
if(isset($_POSTa['pass'])){
	$pass = $_POST['pass'];
}
$result = pg_querry($dbconn,"select * from account");
while ($row = pg_fetch_row($result)){
	if($row[0] == $username && $row[1]==$pass){
		echo"done";
	}
}

 ?>