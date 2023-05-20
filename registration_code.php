<?php 

session_start();


$con=mysqli_connect('localhost','root');

 mysqli_select_db($con,'uniquedeveloper');
 $name=$_POST['name'];
 $pass=$_POST['password'];
 $email=$_POST['email'];
 $user_check='/^[A-Za-z. ]{3,30}$/';
 $pass_check='/^(?=.*[0-9])(?=.*[@#$%&*^!])[a-zA-Z0-9!@#$%^&*]{8,16}$/';
 $email_check = '/^[A-Za-z_0-9]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/';
//  $mobile_check='/^[0-9]{10}$/';

 $q="select * from login where username='$name' && email='$email'";

 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {
 	echo "<script>window.location.href='user_registration.php';alert('User Already Exist');</script>";
 }
 else
 {
	if(preg_match($user_check,$name)){
		if(preg_match($email_check,$email)){
            if(preg_match($pass_check,$pass)){
				$qy="insert into login(username,password,email) values('$name','$pass','$email')";
 	            mysqli_query($con,$qy);
 	            echo "<script>window.location.href='userlogin.php';alert('Registration Success');</script>";
			}
			else{
                echo "<script>window.location.href='user_registration.php';alert('Username must be in between 8 to 16 and combination of character,number and special symbol');</script>";
			}
		}
		else{
			echo "<script>window.location.href='user_registration.php';alert('Invalid Email');</script>";
		}
       
	}else
	{
		echo "<script>window.location.href='user_registration.php';alert('Invalid Username (Username must be in between 3 to 30 character and only Alphabets Allowed)');</script>";
	}
 	
 }


 ?>