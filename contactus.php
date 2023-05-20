<!DOCTYPE html>
<html lang="en-US">
<head>
        <meta charset="utf-8" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="link/bootstrap.min.css" />
		<link rel="stylesheet" href="link/animate.css" />
		<link rel="stylesheet" href="font-awesome.css" />
		<link rel="stylesheet" href="link/hover.css" />
		<script src="link/jquery-3.3.1.slim.min.js"></script>
		<script src="link/popper.min.js"></script>
		<script src="link/bootstrap.min.js"></script>
		<script src="link/wow.js"></script>
		<title>Contact us page</title>
		<link href="css/bootstrap_css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap JavaScript Link -->
    <script src="js/js/bootstrap.bundle.min.js"></script>
    <!-- Google icons Link -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Font Awesome icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- My external css file -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

		
		<script> 
		              wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    );
                    wow.init();
	     </script>
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


<!--------------CONTACT--------------->
<div class="container-fluid">
	<div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d436995.2299878085!2d75.39936842762633!3d31.16457491593727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sLPU%20Distance%20Education!5e0!3m2!1sen!2sin!4v1684376940420!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
			<div class="col-sm-6 h3 mt-2 text-white " style="background:#111f4d"><br>
			<div class="h2 text-danger text-center" style="font-family:algerian;text-decoration: none;"><i><b>CONTACT DETAILS</i></b></div>
			
        
        <br/>
        <p class="h3 ml-5"><i>Cognito School</i></p><br>
       <p class="h4 ml-5"> <font color="red"><i class="fa fa-map-marker" aria-hidden="true"></i></font>&nbsp &nbsp Lovely Professional University, Jalandhar - Delhi <br> &nbsp &nbsp &nbsp G.T. Road,Phagwara, Punjab (India) - 144411</p><br>
      
                <p class="h5 ml-5"><font color="red"><i class="fa fa-phone" aria-hidden="true"></i></font>&nbsp &nbsp +91-9140967607 , +91-6394296293</p><br>
                   
                    <p class="h4 ml-5"><font color="red"><i class="fa fa-envelope" aria-hidden="true"></i></font>&nbsp &nbsp cognitoschool@gmail.com</p><br/>
    </div>
		
	<div class="col-sm-6 h3 mt-2" style="background:#f3c276;"><br><div class="h2 text-danger text-center" style="font-family:algerian;text-decoration: none;"><i><b>CONTACT US</i></b></div>
       <div class="container">
       	<div class="row">
       		<div class=col-sm-12>
        <div class="container">
       	<div class="row">
       		<div class="col-sm-12 h6">
        <form class="form-group" action="contact_code.php" method="post">
        	<label class="text-dark">NAME</label>
                 <div class="input-group-append">
								<span class="input-group-text"style="background: cyan"><i class="fa fa-user"></i></span>
        	<input type="text" name="name" class="form-control" required placeholder="ENTER YOUR NAME" required></div>
        	<label class="mt-2 text-dark">EMAIL</label>
                   <div class="input-group-append">
							<span class="input-group-text"style="background: cyan"><i class="fa fa-envelope"></i></span>
        	<input type="email" name="email" class="form-control" required placeholder="ENTER YOUR EMAIL" required></div>
        	<label class="mt-2 text-dark">SUBJECT</label>
                     <div class="input-group-append">
								<span class="input-group-text"style="background: cyan"><i class="fa fa-frown"></i></span>
        	<input type="text" name="subject" class="form-control" required placeholder="ENTER YOUR SUBJECT" required></div>
        	<label class="mt-2 text-dark">MASSAGE</label>
                  <div class="input-group-append">
								<span class="input-group-text"style="background: cyan"><i class="fa fa-comments"></i></span>
        	<textarea name="message" class="form-control" required placeholder="ENTER YOUR MASSAGE" required></textarea></div><br>
        	<button class="btn btn-danger">CONTACT</button>
        </form>
    </div>
</div>
</div>
</div>	
</body>
</html>