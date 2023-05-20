<?php 

session_start();


$con=mysqli_connect('localhost','root');

 mysqli_select_db($con,'uniquedeveloper');
 $pass=$_POST['password'];
 $email=$_POST['email'];

 $q="select * from admin where email='$email' && password='$pass'";

 $result=mysqli_query($con,$q);
 $res=mysqli_fetch_assoc($result);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {
    $_SESSION['email']=$res['email'];
	echo "<script>window.location.href='user_registration.php';alert('Login Success');</script>";
 }
 else
 {
 	$_SESSION['error']="error";
 	echo "<script>window.location.href='user_registration.php';alert('Email Id OR Password Wrong Try Again');</script>";

 }





 ?>