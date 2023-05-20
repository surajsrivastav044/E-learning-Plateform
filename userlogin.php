<!DOCTYPE html>
<html>
<head>
	<title>User Login Page </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/animate.css" />
		<link rel="stylesheet" href="css/font-awesome.css" />
		<link rel="stylesheet" href="css/hover.css" />
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.js"></script>
		<!-- <link rel="stylesheet" href="css/style.css"> -->
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Font Awesome icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">


	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

		<style>
             .hh
			{
               height:570px;
              background:url('img/feedback_background.jpg' );
			  
              size:100% 100%;
			}
		</style>
</head>
<body>

<!-------header------>

<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <div class="col-sm-1"><a class="navbar-brand" href="#"><img src="img/logo1.png" alt="Not Found" width="150px"
     height="40px"></a></div>
    <div class="col-sm-3"><a href="" class="h3 text-white" style="font-family:algerian;text-decoration: none;"><i><b>COGNITO SCHOOL</i></b></a></div>
    <div class="col-sm-7"> 
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="text-white"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php"><b>HOME</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="aboutus.php"><b>&nbsp;&nbsp;ABOUT-US</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contactus.php"><b>&nbsp;&nbsp;CONTACT-US</b></a>
				</li>
         <li class="nav-item">
          <a class="nav-link text-white" href="feedback.php"><b>&nbsp;&nbsp;FEEDBACK</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="userlogin.php"><b>&nbsp;&nbsp;USER-LOGIN</b></a>
        </li>
         <li class="nav-item ">
          <a class="nav-link text-white" href="adminlogin.php"><b>&nbsp;&nbsp;ADMIN-LOGIN</b></a>
        </li>
      </ul>
    </div></div>
     
    
  </div>
</nav>
		

<!-------------End HEADER----------->
<div class="jumbotron hh">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"style="background:#111f4d; opacity:.9;">
		<center><img src="img/icon2.png" class="img-fluid mt-2"style="height:80px;"></center>
		<h5 class="text-center text-success"><b>USER LOGIN</b></h5>
		<form class="form-group" action="userlogin_code.php" method="post">
			<lavel class="text-white">EMAIL</lavel>
                      <div class="input-group-append">
							<span class="input-group-text"style="background: cyan"><i class="fas fa-envelope"></i></span>
			<input type="email" name="email" required placeholder="ENTER YOUR EMAIL" class="form-control"/></div>
			<lavel class="text-white">PASSWORD</lavel>
                   <div class="input-group-append">
							<span class="input-group-text"style="background: cyan"><i class="fas fa-envelope"></i></span>
			<input type="password" required name="password" placeholder="ENTER YOUR PASSWORD" class="form-control"/></textarea></div><BR>
			<center><button class="btn-success" style="width:150px;height:40px;border-radius:10px;">LOGIN</button></center>			
            <a href="user_registration.php" class="text-white"><b><i>NEW USER ?</b></i></a>
			 <a href="forget_password.php" class="text-white float-right"><b><i>FORGET PASSWORD ?</b></i></a>
        </form>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
		
</body>
</html>