<?php 
 session_start();

 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $_SESSION['login_user'] = $_POST['username'];
 $_SESSION['login_pass'] = $_POST['password'];
 $user = "root";
 $pass = "";
 $host= "localhost";
 $dbname="transguide";

 $con = mysqli_connect($host,$user,$pass,$dbname);
 
 $sql = "SELECT * FROM account WHERE username='".$_SESSION['login_user']."' and password ='".$_SESSION['login_pass']."'";
   

  
 $res = mysqli_query($con, $sql);
 $result = array();
 if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
		  array_push($result,array(
		 "value"=> 'correct',
		
		   )
		 );
		}
		
  echo json_encode(array("result"=>$result));	  
 }else{
	 
	 array_push($result,array(
     "value"=>'error',
    )
 );
 echo json_encode(array("result"=>$result));
 }
 mysqli_close($con);
 }
 
?>