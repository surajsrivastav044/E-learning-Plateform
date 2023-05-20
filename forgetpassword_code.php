<?php 
$con=mysqli_connect('localhost','root');

 mysqli_select_db($con,'uniquedeveloper');
 $email=$_POST['email'];
 $new_password=$_POST['new_password'];
 $con_password=$_POST['con_password'];

 $q="select * from login where email='$email'";

 $result=mysqli_query($con,$q);
 $res=mysqli_fetch_assoc($result);
 $num=mysqli_num_rows($result);
 if($num==1)
 {
	if($new_password===$con_password){
    $q1="update login set password='$new_password' where email='$email'";
    if(mysqli_query($con,$q1)) {
         echo "<script>window.location.href='userlogin.php';alert('Password Change Success');</script>";
    } 
    else {
        echo "<script>window.location.href='forget_password.php';alert('Password not change');</script>";
    }
 }
 else{
    echo "<script>window.location.href='forget_password.php';alert('New password and Confirm passward not match');</script>";
 }
 }
 else
 {
 	echo "<script>window.location.href='user_registration.php';alert('Email Id Not Match Enter Right Id');</script>";

 }


 ?>