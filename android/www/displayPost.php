<?php 


 if($_SERVER['REQUEST_METHOD']=='GET'){
 
$user = "root";
$pass = "";
$host= "localhost";
$dbname="transguide";

$con = mysqli_connect($host,$user,$pass,$dbname);
 
 
 
 $sql = "SELECT * FROM post ";
 

 $res = mysqli_query($con, $sql);

 $result = array();
 if(mysqli_num_rows($res) > 0){
  while($row = mysqli_fetch_assoc($res)){
    array_push($result,array(
     "postID"=>$row['postID'], 	
     "username"=>$row['username'],
     "posttext"=>$row['posttext'],
     "likenum"=>$row['likenum'],
     "pDate"=>$row['pDate'],
     "imgsrc"=>$row['imgsrc']  
 )
 );
 }
 echo json_encode(array("result"=>$result));
 
	 
 }else {
	 
	 array_push($result,array(
     "error"=>'error',
 )
 );
 
 echo json_encode(array("result"=>$result));
 }
 
 mysqli_close($con);
 }
 
?>