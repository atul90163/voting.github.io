<?php
session_start();
$email=$_SESSION['email'];
$name=$_SESSION['name'];

if($email=="")
{
	header('location:login.php');
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
.login-box
{
	
	
	background-color:teal;
	color:#fff;
	
	height:300px;
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
.bt
{
	
	border:2px solid red;
}


</style>
</head>
<body>


<div class="container-fluid ">

<?php
include "welheader.php";
?>
 <div class="container-fluid">
  
  
  <div class="row ">
  <div class="col-lg-6 col-md-6 col-12" style="padding-top:70px;">
  <img src="hjg.jpg" class=" img img-responsive rounded img-thumbnail ab ab">
  </div>
  
   <div class="col-lg-6 col-md-6 col-sm-6">
  
 <ul class="py-5" >
 <li>firstly select <b>"idrequest"</b> from navigation bar</li>
 <li>then send request to <b>Admin</b> for generating id</li>
 <li>Note this <b>ID</b> for further use</li>
 <li>click the <b> vote</b> from navigation bar</li>
 <li>feel the vote option according asked by admin</li>
 <li>after succesfully <b>the vote </b> option</li>
  <li>choose the  <b>candidate </b> option from navigation  bar</li>
   <li>then select the your favroite candidate from candidate page</li>
  <li> <h4 class="text text-center text-info alert bg-dark  " >cast your vote according to above statement </h4></li>
 
 </ul> 
  
  </div>
  
  
  </div>
  </div>
  
 <section>
 
<div class="row bg-dark">
<div class="col-lg-12 col-md-12 col-sm-12">
<p style="color:white; float:right;"> copyright to ONLINE.PVT.LTD</P>
</div>

</div>

</section>
</div>
</body>
</html>