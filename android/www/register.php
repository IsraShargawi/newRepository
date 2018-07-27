<?php
    
   
    require_once 'conn.php';
    $query = $connection -> prepare("INSERT into account (username,phonenumber,password,imgsrc) value (?,?,?,?)");

    $result = $query -> execute(array($_POST['username'],$_POST['phone'],$_POST['password'],"index.png"));

    if($result>0)
        echo "it works well";
    ?>