<?php 
  include("classes/admin.php");
  $admin=new admin;
  $userd=$admin->show_users();

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin panel</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<style type="text/css">
</style>

</head>
<body>
 
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12"  style="background:#191927;">
			<div class="row">
		<div class="col-sm-2"style="background:#191927;">	
              <center> <img src="pic/logo1.png"class="img img-fluid " style="height:73px;"></center>
           </div>
           <div class="col-sm-7 h1 text-white text-center mt-2">
              <i><b>COGNITO SCHOOL</b></i>
		</div>
		<div class="col-sm-3 mt-2">
			<ul class="nav nav-pills">
  <li class="nav-item ">
  	<a class="nav-link" href="logoutcode.php?id=1"><font size="5px;"><i class="fa fa-sign-out text-white" aria-hidden="true"></i></font><font size="4px" class="text-white">&nbsp LOGOUT</font></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" href="changepassword.php"><font size="5px;"><i class="fa fa-key text-white " aria-hidden="true"></i></font><font size="4px" class="text-white">C-PASSWARD</font></a>
  </li>
  
</ul>
		
	</div>
	           <div class="col-sm-12">
	           	<div class="row">
	           		<div class="col-sm-2.5"style="background:#bda24f">
	           		<nav class="nav flex-column">
                        <a class="nav-link text-left h5 mt-4" href="admin_panel.php.php"><button class=" hvr-rectangle-in" style="border-radius:5px;">HOME</button></a>
                         <a class="nav-link text-left h5 mt-2" href="manage_courses/manage_courses.php"><button class=" hvr-rectangle-in" style="border-radius:5px;">MANAGE COURSES</button></a>
                          <a class="nav-link text-left h5 mt-2" href="manage_videos/manage_videos.php"><button class=" hvr-rectangle-in" style="border-radius:5px;">MANAGE VIDEOS</button></a>

                     
                          <a class="nav-link text-left h5 mt-2" href="manage_quiz/manage_quiz.php"><button class=" hvr-rectangle-in" style="border-radius:5px;">MANAGE QUIZ</button></a>
                        <a class="nav-link text-left h5 mt-3" href=""><button class=" hvr-rectangle-in" style="border-radius:5px;">MANAGE FEEDBACK</button></a>
                          <a class="nav-link text-left h5 mt-3" href="a"><button class=" hvr-rectangle-in" style="border-radius:5px;">MANAGE CONTACT</button></a>
                          <a class="nav-link text-left h5 mt-3" href=""><button class=" hvr-rectangle-in" style="border-radius:5px;">MANAGE USERS</button></a>
                        </nav>   
	           		</div>
	           		<div class="col-sm-10"style="background: #fffad0">
	           			<div class="row">
	           				<div class="col-sm-12 text-center h2 mt-4"style="font-family:algerian;"><i><b>ADMIN DASHBOARD</i></b>
	           				   <p><input type="range" name="" style="width:200px;"></p>
	           			</div>
	           			<div class="col-sm-12">
	           				<div class="row">
	           					<div class="col-sm-3">
	           				        <div class="card mb-3 mt-3 ml-auto" style="max-width: 325px;">
                                    <div class="row no-gutter">
                                    <div class="col-md-4">
                                        <img src="pic/icon.png" class="card-img" alt="..." style="width:120px;height:120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title ml-4">ISSUE BOOKS</h5>
                                            <p class="card-text text-center h5">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<div class="col-sm-3">
	           				<div class="card mb-3 mt-3 ml-auto" style="max-width: 325px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="pic/bookicon1.png" class="card-img ml-2" alt="..." style="width:120px;height:120px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title ml-4">RETURN BOOKS</h5>
        <p class="card-text text-center">NO</p>
        
      </div>
    </div>
  </div>
</div>
</div>

<div class="col-sm-3">
	<div class="card mb-3 mt-3 ml-auto" style="max-width: 325px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="pic/bookicon1.png" class="card-img ml-2" alt="..." style="width:120px;height:120px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title ml-4">RETURN BOOKS</h5>
        <p class="card-text text-center">NO</p>
        
      </div>
    </div>
  </div>
</div>
</div>

<div class="col-sm-3">
	<div class="card" style="width: 16rem;">
    <div class="card-body">
    <h2 class="card-title text-center font-weight-bold" style="font-family:algerian;">MANAGE COURSES</h2>
    <img src="img/feedback.png" style="height:110px;display: block; margin-left: auto;margin-right: auto;width: 60%;" class="card-img-top " alt="...">
    <a href="" class="btn btn-primary mt-3">MANAGE YOUR COURSE</a>
  </div>
</div>
</div>
	 
		<div class="col-sm-12">
		   <div class="row">
		   	<div class="col-sm-2"></div>
		   	<div class="col-sm-4">
		   		<div class="card mb-3 mt-3 ml-auto" style="max-width: 320px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="pic/feedback.png" class="card-img" alt="..." style="width:120px;height:120px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-right">FEEDBACKS</h5>
        <p class="card-text text-center h5">7</p>
        
      </div>
    </div>
  </div>
</div>
		   	</div>
		   	<div class="col-sm-4">
		   		<div class="card mb-3 mt-3 ml-auto" style="max-width: 320px;">
  <div class="row no-gutters ">
    <div class="col-md-4">
      <img src="pic/upload.png" class="card-img" alt="..." style="width:120px;height:120px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title ml-4">ALL UPLOADS</h5>
        <p class="card-text text-center h5">3</p>
        
      </div>
    </div>
  </div>
</div>
		   	</div>
		   	<div class="col-sm-2"></div>
		   </div>
		</div>

</body>
</html>