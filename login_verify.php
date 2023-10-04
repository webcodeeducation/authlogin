<?php
session_start();
include 'include/connection.php';
//print_r($_POST);

$email = $_POST['email'];
$pass = $_POST['pwd'];

$sql = 'select * from users where email="'.$email.'" && password="'.$pass.'"';

$result = mysqli_query($conn,$sql);


//print_r($result);


$count = mysqli_num_rows($result);

if($count > 0){
$data = mysqli_fetch_assoc($result);
$_SESSION['userid'] = $data['id'];
$_SESSION['useremail'] = $data['email'];
//echo '<pre>';
//print_r($data);
//echo '</pre>';
//die();
  header("Location: home.php");
}else{
  //header("Location: index.php");
}







?>