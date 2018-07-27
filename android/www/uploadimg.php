<?php

require_once 'conn.php';
session_start();
if ($connection) {
	echo  $_SESSION['login_pass'];
}

		$image =$_POST["image"];
		$name =$_POST["name"];
		$temp = "zzzzzz";
		//isset($_SESSION['login_pass'])&&
		 $result = array();
if($connection) {
	
		$sql=" INSERT into account (username) values ('$name') where password ='".$temp."'";
		$upload_path="uploads/$name.jpg";
		if (mysqli_query($con,$sql)) {

			file_put_contents($upload_path, base64_decode($image));
			array_push($result,array(
		     "value"=>'uploadgood',
		    )
		  );

			echo json_encode(array('response'=>$result));
		}
		mysql_close($con);
	}
	else{
		echo "something went wrong";
		 array_push($result,array(
		     "value"=>'error',
		    )
		 );
 
        echo json_encode(array("response"=>$result));
	}
?>