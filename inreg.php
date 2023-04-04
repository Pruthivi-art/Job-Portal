<?php

$Username = $_POST['user_name'];
$Password  = $_POST['password'];
$Name = $_POST['name'];





if (!empty($Username) || !empty($Password) || !empty($Name) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test_db";
 



$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error()); 
}
else{
  $SELECT = "SELECT user_name From users Where user_name = ? Limit 1";
  $INSERT = "INSERT Into users (user_name , password ,name ) values(?,?,?)";


     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $Username);
     $stmt->execute();
     $stmt->bind_result($Username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $Username,$Password,$Name );
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this usename";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>