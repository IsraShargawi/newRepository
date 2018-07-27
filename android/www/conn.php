<?php
  
    $user = "root";
    
    $pass = "";
    
    $db = "transguide";
 
    
    $connection = new PDO("mysql:host=localhost;dbname=$db",$user,$pass);
    if ($connection) {
    	# code...
    	echo "successfuly";
    }
?>