<?php
session_start();
include "connection.php";
$error="";

if(isset($_POST['login']))
{
	$e=$_POST['email'];
	$p=$_POST['password'];
	$e=mysqli_real_escape_string($con , $e);
	$p=mysqli_real_escape_string($con , $p);
	$selectdata=mysqli_query($con,"select * from user where email='$e' and password='$p'");
	$num_row=mysqli_num_rows($selectdata);
	if($num_row==1)
	{
		$userdata=mysqli_fetch_assoc($selectdata);
	   $_SESSION['name']=$userdata['name'];
		$_SESSION['email']=$userdata['email'];
		// $_SESSION['email'];
		 header('location:welcome.php');
		
	}	
else
{
	//$error= "<center><p class='text-danger'>invalid email_id & password! </p></center>";
	echo "<script> alert('invalid email_id & password!  Please try again')</script>";
	//header ('location:login.php');
	echo "<script> open('login.php','_self')</script>";

}	
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
p{
	font-size:20px;
	font-style:italic;
	
}

h5
{
color:red;	
}
.navWidth
{
	background-color:teal;
}
  
 .ab
  {
	  width:100%;
	  height:300px !important;
  }
.heading
{
margin-left:45%;
margin-bottom:0.60em;
padding-top: 30px;
color:red;

}
.b
{
	height:620px;
	width:25%;
	background-color:yellow;
}
.d
{
	height:620px;
	width:25%;
	background-color:red;
}
.c
{
	height:620px;
	width:50%;
	background-color:gray;
}
a:hover
{
	background:green;
}
h4
{
	color:white;
}

</style>
</head>
<body>

<div class="container-fluid ">
<?php
include "header.php";
 ?>
  <div class="container navWidth">
 <center> <h4> Login Here</h4></center>
 <?php
 echo $error;
 ?>
 
  <form action="" method="post">
   

 <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Your Email" required>
    </div>
   
 <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password"  placeholder="Enter Password" required>
    </div>

   <center><button type="submit" class="btn btn-info btn-block" name="login">Login</button></center>

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