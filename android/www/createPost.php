<?php
    
    require_once 'conn.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $posttext = $_POST['posttext'];
    $userID = 5;
    $userImage = "";
    
	 $user = "root";
    $pass = "";
    $host= "localhost";
    $dbname="transguide";

    $con = mysqli_connect($host,$user,$pass,$dbname);
    $sql = "SELECT * FROM account where username ='".$username."' and password ='".$password."'";
 

    $r = mysqli_query($con,$sql);
 
 
   if(mysqli_num_rows($r) > 0){
    while($row = mysqli_fetch_assoc($r)){
      $userID = $row['userID']; 
      $userImage = $row['imgsrc'];
     }
    }
   	else
   	{
      echo "sorry no item selected";
   	}
    date_default_timezone_set('(UTC+02:00) Cairo');

    //$query = $connection -> prepare("INSERT into post (userID,posttext,date,username) value (?,?,?,?)");
    $query = $connection -> prepare("INSERT into post (userID,posttext,username,imgsrc) value (?,?,?,?)");

    //$result = $query -> execute(array($userID,$_POST['posttext'],date("Y-m-d H:i:s",time()),$_SESSION['login_user']));
    $result = $query -> execute(array($userID,$posttext,$username,$userImage));

    if($result>0)
        //echo "it works well";
    ?>