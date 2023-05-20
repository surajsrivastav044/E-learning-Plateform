
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
  
    .sidebar-list
    {
        margin-right: -15px;
        
        font-family: 'Quicksand', sans-serif; 
        font-size: 14px
    }

    .sidebar-list li:hover
    {
      background-color: deepskyblue !important;
    }
     .sidebar-list li a
     {
        color:white;
        text-decoration: none;
     }

     .mytable1 .card
     {
     background: #5f2c82;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #49a09d, #5f2c82);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #49a09d, #5f2c82); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

     }

     .mytable2 .card
     {
      background: #EC6F66;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #F52887, #EC6F66);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #F52887, #EC6F66); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

     }

     .mytable3 .card
     {
     background: #15317E;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left,#BCE954,#15317E);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left,#BCE954, #15317E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

     }

     .mytable4 .card
     {
      background: #EC6F66;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right,#BCE954, #AA6C39);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #F3A183, #AA6C39); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

     }
     .card 
     {
      overflow: hidden;
      transition: all 0.9s ease;
     }
     .card:hover
     {
      transform: scale(1.04);
     }



    

</style>

  </head>

  <body style="background-color:#f1efef">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#"><b>Cognito School</b></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="admin_main.php"><b>Home </b><span class="sr-only">(current)</span></a>
      </li>     
    </ul>
  </div>
  <div class="col-sm-7 ml-5 h2 text-white"style="font-family:algerian;"><b><i>ADMIN DASHBOARD</i></b>
	</div>
</nav>



  <!-- sidebar starts -->
    <div class="container-fluid" style="margin-top:50px">
      <div class="row">
        <div class="col-sm-2 col-md-2 sidebar badge-dark mt-1" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
            <li class="list-group-item  bg-dark "><a href="admin_main.php"><b>Welcome  Admin</a></li>
            <li class="list-group-item bg-dark "><a href="manage_courses/manage_courses.php">Manage Courses</a></li>
            <li class="list-group-item bg-dark"><a href="manage_quiz/manage_quiz.php">Manage Quize</a></li>
            <li class="list-group-item bg-dark"><a href="manage_videos/manage_videos.php">Manage Tutorials</a></li>
            <li class="list-group-item bg-dark"><a href="manage_feedbacks.php">Manage Feedbacks</a></li>
            <li class="list-group-item bg-dark"><a href="manage_users.php">Manage Users</a></li>
            <li class="list-group-item bg-dark"><a href="manage_contacts.php">Manage Contacts</a></li>
            <li class="list-group-item bg-dark"><a href="logout.php">Logout</b></a></li>
            <li class="list-group-item bg-dark" style="height: 400px;"></li>
          </ul>
        </div>

        <!-- sidebar ends -->

         <!-- main content starts -->
<div class=" col-md-10">
    
    <div class="row ml-3 mt-5">
        <div class="col-sm-3">
	        <div class="card" style="width: 16rem;">
            <div class="card-body">
              <h2 class="card-title text-center font-weight-bold" style="font-family:algerian;">MANAGE COURSES</h2>
              <img src="img/bookicon1.png" style="height:110px;display: block; margin-left: auto;margin-right: auto;width: 60%;" class="card-img-top " alt="...">
              <a href="manage_courses/manage_courses.php" class="btn btn-primary mt-3">MANAGE YOUR COURSES</a>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
	        <div class="card" style="width: 16rem;">
            <div class="card-body">
              <h2 class="card-title text-center font-weight-bold" style="font-family:algerian;">MANAGE TUTORIALS</h2>
              <img src="img/videos_icon.jpg" style="height:110px;display: block; margin-left: auto;margin-right: auto;width: 60%;" class="card-img-top " alt="...">
              <a href="manage_videos/manage_videos.php" class="btn btn-primary mt-3">MANAGE YOUR TUTORIALS</a>
            </div>
          </div>
        </div>

          <div class="col-sm-3">
	        <div class="card" style="width: 16rem;">
            <div class="card-body">
              <h2 class="card-title text-center font-weight-bold" style="font-family:algerian;">MANAGE QUIZZ</h2>
              <img src="img/quiz.webp" style="height:110px;display: block; margin-left: auto;margin-right: auto;width: 60%;" class="card-img-top " alt="...">
              <a href="manage_quiz/manage_quiz.php" class="btn btn-primary mt-3">MANAGE YOUR QUIZZ.......</a>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
	        <div class="card" style="width: 16rem;">
            <div class="card-body">
              <h2 class="card-title text-center font-weight-bold" style="font-family:algerian;">MANAGE USERS</h2>
              <img src="img/users_logo.jpg" style="height:110px;display: block; margin-left: auto;margin-right: auto;width: 60%;" class="card-img-top " alt="...">
              <a href="manage_users.php" class="btn btn-primary mt-3">MANAGE YOUR ALL USERS</a>
            </div>
          </div>
        </div>

<!--  no of courses and videos starts -->
        <div class="col-sm-3 mt-5">
	        <div class="card" style="width: 16rem;">
            <div class="card-body">
              <h2 class="card-title text-center font-weight-bold" style="font-family:algerian;">MANAGE FEEDBACK</h2>
              <img src="img/feedback.png" style="height:110px;display: block; margin-left: auto;margin-right: auto;width: 60%;" class="card-img-top " alt="...">
              <a href="manage_feedbacks.php" class="btn btn-primary mt-3">MANAGE ALL FEEDBACKS</a>
            </div>
          </div>
        </div>

        <div class="col-sm-3 mt-5">
	        <div class="card" style="width: 16rem;">
            <div class="card-body">
              <h2 class="card-title text-center font-weight-bold" style="font-family:algerian;">MANAGE CONTACT</h2>
              <img src="img/smsicon2.png" style="height:110px;display: block; margin-left: auto;margin-right: auto;width: 60%;" class="card-img-top " alt="...">
              <a href="manage_contacts.php" class="btn btn-primary mt-3">MANAGE ALL CONTACTS</a>
            </div>
          </div>
        </div>

        <div class="col-md-3 mt-5">
          <table class="table table-borderless">  
            <tbody >
              <tr>
                <td class="mytable1">
                  <div class="card shadow border-0" style="width: 15rem; height: 110px; box-shadow: 2px 3px #827171; border-radius:0px; border-top-left-radius: 0px;">
                  <div class="card-body">
                    <p class="card-text text-white text-center"><b class="h4">No. Of Courses <br><span style="font-size: 20px;"><?php $admin->display_course_count(); ?></span></b></p>
                  </div>
                  </div>
                </td>       
              </tr>
              <tr>
                <td class="mytable2">
                  <div class="card shadow border-0" style="width: 15rem; height: 110px; box-shadow: 2px 2px #827171; border-radius:0px; border-top-left-radius: 0px;">
                  <div class="card-body">
                    <p class="card-text text-white text-center"><b class="h4">No. Of Tutorials<br><span style="font-size: 20px;"><?php $admin->display_video_count(); ?></span></b></p>
                  </div>
                </td>      
              </tr>    
      </tbody>
    </table>
  </div>      

  <div class="col-md-3 mt-5">
          <table class="table table-borderless">  
            <tbody >
              <tr>
                <td class="mytable3">
                  <div class="card shadow border-0" style="width: 15rem; height: 110px; box-shadow: 2px 3px #827171; border-radius:0px; border-top-left-radius: 0px;">
                  <div class="card-body">
                    <p class="card-text text-white text-center"><b class="h4">Total Users <br><span style="font-size: 20px;"><?php $admin->display_course_count(); ?></span></b></p>
                  </div>
                  </div>
                </td>       
              </tr>
              <tr>
                <td class="mytable4">
                  <div class="card shadow border-0" style="width: 15rem; height: 110px; box-shadow: 2px 2px #827171; border-radius:0px; border-top-left-radius: 0px;">
                  <div class="card-body">
                    <p class="card-text text-white text-center"><b class="h4">Total feedbacks<br><span style="font-size: 20px;"><?php $admin->display_video_count(); ?></span></b></p>
                  </div>
                </td>      
              </tr>    
      </tbody>
    </table>
  </div>      

 <!-- no of courses and videos ends  -->
          </div>  <!--  second row closed -->
           
      </div>       <!--  main row closed -->
    </div>          <!-- container closed -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
