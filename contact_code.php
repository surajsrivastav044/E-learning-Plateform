<?php 

$con=mysqli_connect('localhost','root');

 mysqli_select_db($con,'uniquedeveloper');
 $name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];
 $user_check='/^[A-Za-z. ]{3,30}$/';
 $email_check = '/^[A-Za-z_0-9]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/';
 

    if(preg_match($user_check,$name)){
        if(preg_match($email_check,$email)){
			$ins="insert into contact(name,email,subject,message) values('$name','$email','$subject','$message')";
            if(mysqli_query($con,$ins))
            {
               echo "<script>window.location.href='index.php';alert('thanks for contacting us');</script>";
            }
            else
            {
              echo "<script>window.location.href='contactus.php';alert('contact us not success please try again');</script>";
            }	
		}
		else{
                echo "<script>window.location.href='contactus.php';alert('Invalid Email');</script>";
		}       
	}else
	{
		echo "<script>window.location.href='contactus.php';alert('Invalid Username (Username must be in between 3 to 30 character and only Alphabets Allowed)');</script>";
	}








 ?>

 