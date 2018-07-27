<?php
    session_start();


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$image = $_POST['image'];
        $username = $_POST['username'];
        $password = $_POST['password'];
		
	    define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'transguide');
		
		$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		
		$path = "uploads/$username.png";
		
		$actualpath = "http://192.168.42.102/$path";

       
		$sql = "UPDATE account SET imgsrc = '$username.png' WHERE username='".$username."' and password ='".$password."' ";
		
		if(mysqli_query($conn,$sql)){
			file_put_contents($path,base64_decode($image));
		}
		
		mysqli_close($conn);
	}else{
		echo "Error";
	}