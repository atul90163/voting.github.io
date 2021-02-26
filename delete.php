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
<?php
$error="";
$i=$_SESSION['voterid'];
$e=$_SESSION['email'];
//echo $i;
include "connection.php";
if(isset($_POST['delete']))
{
	$pass=$_POST['password1'];
	//echo $p;
	$se=mysqli_query($con,"select * from user where email='$e' AND password='$pass' AND user_id_generated='$i' ");
	$num=mysqli_num_rows($se);
	if($num > 0)
	
	{
	
	    $deletequery=mysqli_query($con,"delete from user where email='$e' AND  password='$pass' AND user_id_generated='$i'");
	
	if($deletequery)
	  {
		      //echo "someting's worng" .mysqli_error($con);
		     echo "<script> alert('successfully deleted your account')</script>";
		     session_destroy();
		     echo"<script> window.open('index.php')</script>";
	  }
	}
else
	  {
	     // echo "<script> alert('something's wrong')</script>";
		   //session_destroy();
		   //echo"<script> window.open('welcome.php')</script>";
	
	   $error= "<center><p class=' text-danger p1'>something's error</p></center>";
		//$error= "something error";
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
	.div1
	{
		padding-top:35px;
	}
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
	font-size:30px;
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
.set
{
	min-height:295px;
	
}
.navWidth
{
	background-color:teal;
	
}
.idcolor
  {
	  color:red;
  }


a:hover
{
	background:green;
}
.setheightwidth
{
	min-height:300px;
}
.mt
{
	padding-top:100px;
	color:red;
}
.dth{
	background-color:aqua;
}

</style>
</head>
<body>


<div class="container-fluid ">
<?php
include "welheader.php";
?>
	
	  <div class="container navWidth  set">
	  
    <div class="div1">
	<?php
	 //echo $error;
	echo  $error;
	?>
	 
	  <form action=""  method="post" >
 
 <div class="form-group ">
      <label for="password">Password:</label>
      <input type="text" class="form-control" id="password1" name="password1" placeholder ="Enter Password " required  >
    </div>
 
   

   
 
   
   <center><button type="submit" class="btn btn-info btn-block" name="delete"><b>Delete Your Acount</b></button></center>

</form>
</div>
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