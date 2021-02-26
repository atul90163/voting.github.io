<?php
session_start();
$email=$_SESSION['email'];
$name=$_SESSION['name'];
$vtrid=$_SESSION['voterid'];
$status=$_SESSION['status'];

if($status=="")
{
	header('location:vote.php');
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
.navWidth
{
	background-color:teal;
}
  
 .ab
  {
	  width:100%;
	  height:300px !important;
  }
  .idcolor
  {
	  color:gray;
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
.setheightwidth
{
	min-height:300px;
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
.bt
{
	
	border:2px solid red;
}
.s
{
	min-height:200px;
}
.mt
{
	padding-top:100px;
	color:red;
}
</style>
</head>
<body>


<div class="container-fluid ">
<?php
include "welheader.php";
?>

		
		
	  <div class="container navWidth s">
<form action="" method="post">
<p>Election Name:</p>
<select name="electionname" class="form-control">
</select>

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