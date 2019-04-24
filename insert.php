<?php

$uname = filter_input(INPUT_POST, 'uname');
$password = filter_input(INPUT_POST, 'pword');
if(!empty($username)){
  if(!empty($username)){
    $host = "localhost";
    $dbusername = "root"
    $dbpassword = "";
    $dbname = "Food";

  }

  $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
  if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

  }else{
    $sql = "INSERT INTO account (uname, pword) values ('$uname', '$pword')";
    if($conn->query($sql)){
      echo "New Reocrd is inserted successfully";
    }
    else{
      echo "error:".$sql."<br>".$conn->error;
    }
    $conn->close();
    
  }
  else{
    echo "Password should not be empty"
    die();
  }
}
else{
  echo "username shouldnot be emp";
  die();
}


 ?>
