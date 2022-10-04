<?php
$email=$_POST['email'];
$password=$_POST['psw'];
$repeat_password=$_POST['psw-repeat'];

$conn=new mysqli('localhost','root','','event_management');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into signup(email,psw,psw-repeat)values(?,?,?)");
          $stmt->bind_param("sss",$email,$password,$repeat_password);
          $stmt->execute();
          echo "registration Successfully...";
          $stmt->close();
}
?>
