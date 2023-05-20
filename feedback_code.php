<?php 

$con=mysqli_connect('localhost','root');

 mysqli_select_db($con,'uniquedeveloper');
 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $email=$_POST['email'];
 $feedback=$_POST['feedback'];
 $user_check='/^[A-Za-z. ]{3,30}$/';
 $email_check = '/^[A-Za-z_0-9]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/';
 $mobile_check='/^[0-9]{10}$/';

if(preg_match($user_check,$name)){
		if(preg_match($mobile_check,$mobile)){
            if(preg_match($email_check,$email)){
				$ins="insert into feedback(name,mobile,email,feedback) values('$name','$mobile','$email','$feedback')";
                 if(mysqli_query($con,$ins))
                 {
                     echo "<script>window.location.href='index.php';alert('thanks your feedback recived');</script>";
                 }
                 else
                 {
                     echo "<script>window.location.href='feedback.php';alert('Something went wrong please try again');</script>";
                 }

			}
			else{
                echo "<script>window.location.href='feedback.php';alert('Invalid Email');</script>";
			}
		}
		else{
			echo "<script>window.location.href='feedback.php';alert('Invalid Mobile Number (Must be 10 digit and only digits are allowed)');</script>";
		}
       
	}else
	{
		echo "<script>window.location.href='feedback.php';alert('Invalid Username (Username must be in between 3 to 30 character and only Alphabets Allowed)');</script>";
	}

 ?>

 