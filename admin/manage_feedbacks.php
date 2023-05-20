
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>

 	<!-- bootstrap CDN files -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<!-- google font -->
 <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

   <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- 		css starts -->
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
 </style>
 </head>
 <body>
<!-- navigation bar starts -->

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

<!-- navigation bar ends -->

<div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
        <!-- sidebar Start -->
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


        <!-- feedback section start -->
  		<div class="col-md-10 mt-4">
            <div class="card-header mt-3 mr-5 bg-white text-info border-0 shadow card1" style="width: 1050px; box-shadow: 1px 1px 1px 1px #ccc"><b>MANAGE ALL FEEDBACKS </b></div><br>
      
               <table border=2 align=center class="table table-striped-columns table-hover ml-3">
       	<tr bgcolor="cyan" align=center>
       		<th>ID</th>
       		<th>NAME</th>
       		<th>MOBILE</th>
       		<th>EMAIL</th>
       		<th>FEEDBACK</th>
          <th>DELETE</th>
       	</tr>
     <?php 
     $con=mysqli_connect("localhost","root","","uniquedeveloper");
     $sel="select * from feedback";
     $r=mysqli_query($con,$sel);
    while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
{
 	?>
       	<tr bgcolor="pink" align=center>
       		<td><?php echo $k['0']?></td>
       		<td><?php echo $k['1']?> </td>
       		<td><?php echo $k['2']?> </td>
       		<td><?php echo $k['3']?></td>
       		<td><?php echo $k['4']?></td>
          <td><a href="feedbackdel.php?id=<?php echo $k['0'];?>">DELETE</a></td>

       	</tr>
       	<?php
       }
      
?>
</table>

          </div>
  				
  
</div>
</div>

 </body>
 </html>