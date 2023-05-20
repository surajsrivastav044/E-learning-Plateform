<?php 

session_start();


$con=mysqli_connect('localhost','root');

 mysqli_select_db($con,'uniquedeveloper');
 $pass=$_POST['password'];
 $email=$_POST['email'];
 
 $q="select * from login where email='$email' && password='$pass'";
 $result=mysqli_query($con,$q);
 $res=mysqli_fetch_assoc($result);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {
    $_SESSION['username']=$res['username'];
	echo "<script>window.location.href='homepage.php';alert('Login success');</script>";
 }
 else
 {
 	$_SESSION['error']="error";
    echo "<script>window.location.href='user_registration.php';alert('User Not Exist please Register First');</script>";

 }





 ?>

 