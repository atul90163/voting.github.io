<?php
session_start();
$email=$_SESSION['email'];
$name=$_SESSION['name'];
$vtrid=$_SESSION['voterid'];

if($vtrid=="")
{
	header('location:idgenrate.php');
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
   
    <title> online voting project </title>
<style>
p
{
	color:white;
	padding-top:8px;
}
h5
{
color:red;	
}
h4{
	margin-right:15px;
	
}
h1
{
	margin:0;
	padding:0 0 20px;
	text-align:center;
	font-size:22px;
	
	
}

.p1{
	font-size:20px;
	font-style:italic;
	
}

.navWidth
{
	background-color:teal;
}
.heading
{
margin-left:45%;
margin-bottom:0.60em;
padding-top: 30px;
color:red;
}
.navWidth
{
	background-color:teal;
}

a:hover
{
	background:green;
}

</style>
</head>
<body>


<div class="container-fluid ">
<?php
include "welheader.php";
?>

		
		
	  <div class="container navWidth ">
	  <?php
	  include "connection.php";
	  if(isset($_POST['vote']))
	  {
		  $vid=$_POST['vtrid'];
		  $veml=$_POST['email'];
		  $vpswrd=$_POST['Password'];
		  $selectvoterdata=mysqli_query($con , "select * from user where email='$veml' AND password='$vpswrd' AND user_id_generated='$vid'");
		  $num_row=mysqli_num_rows($selectvoterdata);
		  if($num_row==1)
		  {
			  $vdata=mysqli_fetch_assoc($selectvoterdata);
			  $_SESSION['status']=$vdata['status'];
			  //echo  $_SESSION['status'];
			  
			  echo "<script> window.open('candidate.php','_self')</script>";
		  }
		  else
		  {
			 echo "<script> alert('invalid entered data')</script>";
		  }
		  
	  }
	  
	  
	  
	  
	  ?>
 
	 
	  <form action="" method="post">
 <div class="form-group">
      <label for="email">VoterID:</label>
      <input type="text" class="form-control" id="vtrid" name="vtrid" placeholder ="Enter Voterid "required>
    </div>
 
   

 <div class="form-group">
      <label for="email">User_Email:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder ="Enter  Email" required >
    </div>
   
 <div class="form-group">
      <label for="text">User_Password:</label>
      <input type="text" class="form-control" id="Password" name="Password" placeholder ="Enter Password "required >
    </div>

   <center><button type="submit" class="btn btn-info btn-block" name="vote"><b>VOTE</b></button></center>

</form>
</div>

	 
 
 
 


<div class="row bg-dark">
<div class="col-lg-12 col-md-12 col-sm-12">
<p style="color:white; float:right;"> copyright to ONLINE.PVT.LTD</P>
</div>

</div>

</section>
</div>
</body>
</html>