<?php 
	session_start();
	 include 'conn.inc.php';
 require 'comments.inc.php';


if (!isset($_SESSION['username'])) {
	header('location:../../login.php');	
}
 date_default_timezone_set('Asia/Kolkata');
 // echo date_default_timezone_get();




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="java_video.css">
 	<link rel="stylesheet" type="text/css" href="../../css/programming.css">

 	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 	<style type="text/css">
 		#mybody
{
	background-color: #e9ecef;

}

#video-list-section
{
	position: absolute;
	top:80px;
	right: 150px;
	background-color: deepskyblue;
	padding: 20px;
	left:900px;
	width: 400px;

}
.fixed-top
{
	position: relative;
}



.item #sidebar-wrapper, #sidebar-wrapper {
    float: right;
    width: 30%;
    max-width: 330px;
}

#sidebar-wrapper {
    padding-top: 20px;
}





 	</style>
 </head>
 <body id="mybody" class="bg-white">


	
			<!---Navigation Start	----->
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#"><b>Cognito School</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="../../homepage.php"><b>Home </b><span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
  </div>
</nav>

<!---Navigation Ends	----->


<!---Video iframe Start	----->

<br>
<div class="container-fluid">
	<div class="row">
 		<section class="col-md-7 mt-4">
		<iframe style="border:1px #999 solid;" width="760" height="415" 
<?php  
		$_SESSION['vid']=$_GET['video_id'];
		$video_id=$_GET['video_id'];
		$sql="select * from videos where video_id='$video_id'";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {
			?>
			src=<?php echo $row['video_path'];   //fetching youtube video path from database & storing into src attribute
		}
		?>
		frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<!---Video iframe Ends	----->
	</section>
<!---Video list Start	----->
	<div class="col-md-4 float-right ml-5 bg-white mt-4">          
  <table class="table table-hover mt-3 table-borderless bg-light">
    <tbody>
	<div class="card-header text-center bg-light"><h5>Popular videos</h5></div>
<?php 
	$course_name=$_GET['course_name'];
	$sql="select * from videos where course_name='$course_name'";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result))
	 {		
?>
      <tr>
        <td><a href=""><img src=../../uploadimg/thumbnail/<?php echo $row['video_image']; ?>  height="100" width="150"></a></td>
        <td><?php echo $row['video_name']; ?></td>
       
      </tr>

  <?php } ?>
    
   
    </tbody>
  </table>
</div>
</div>
</div>	
 </body>
 </html>