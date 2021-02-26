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
.login-box padding{
	margin:0px;
	padding:0px;
	font-weight:bold;
	
}
.login-box input
{
width: 50%;
margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
	border:none;
	border-bottom:1px solid #fff;
	background:transparent;
	outline:none;
	height:40px;
	color:#fff;
	font-size:16px;
}
.login-box input[type="submit"]
{
	border:none;
	outline:none;
	height:40px;
	background:#1c8adb;
	color:#fff;
	font-size:18px;
}
.login-box input[type="submit"]:hover
{

cursor:pointer;
background:#39dc79;
color:#000;	
}
.login-box a
{
	text-decoration:none;
	font-size:16px;
	color:#fff;
	
}
.login-box a:hover{
	background:#39dc79;
	width:50%;
	
}
/* Slideshow container */
.slideshow-container {
  
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
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
  <div class="col-lg-6 col-md-6 col-12">
  <img src="hjg.jpg" class=" img img-responsive ab">
  </div>
  
   <div class="col-lg-6 col-md-6 col-sm-6">
  <h4 class="text text-center text-info alert bg-dark  " >cast your vote according to above statement </h4>
  
 <ul class="py-5" >
 <li>firstly select <b>"id generate"</b> from navigation bar</li>
 <li>then send request to <b>Admin</b> for generating id</li>
 <li>click the <b> vote</b> from navigation bar</li>
 <li>feel the vote option according asked by admin</li>
 <li>after succesfully <b>the vote </b> option</li>
  <li>choose the  <b>candidate </b> option from navigation  bar</li>
   <li>then select the your favroite candidate from candidate page</li>
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