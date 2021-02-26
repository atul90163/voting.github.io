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
 
<?php

$cndtnm="";
include "connection.php";
if(isset($_POST['vote']))
{
	$cndt=$_POST['candidate'];
	$eml=$_SESSION['email'];
	$vtr=$_SESSION['voterid'];
   $selectdata=mysqli_query($con,"select * from user where email='$eml' AND user_id_generated='$vtr'   AND  votingstatus='voted'");
   $num_row=mysqli_num_rows($selectdata);
if($num_row==1)
  {
	   //$data=mysqli_fetch_assoc($selectdata);
	   //echo $data['votingstatus'];
	   //echo $data['sr_no'];
	  // echo "you have already ";
	  
	 echo "<script> alert('you have already voted')</script>";
         //session_destroy();
    echo	"<script> window.open('welcome.php','_self')</script>";	 
	  
 }
else
   {
	     // echo "you are able to vote";
		 $updtusrtbl=mysqli_query($con,"update user set votingstatus='voted'  where email='$eml' AND user_id_generated='$vtr'");
		 $updt_canddt_tbl=mysqli_query($con, "update candidate_tbl set vote=vote+1 where sort_name='$cndt'");
		 if($updtusrtbl AND $updt_canddt_tbl)
		 {  
	      $slctdtcndt=mysqli_query($con,"select * from candidate_tbl where sort_name='$cndt' ");
		  //$row=mysqli_num_rows($slctdtcndt);
		  $name=mysqli_fetch_assoc($slctdtcndt);
		  if($name)
		  {
			  $cndtnm=$name['candidate_name'];
			 // echo $cndtnm;
			 // $s=$_SESSION['votin']=$name['votingstatus'];
			  //echo $s;
			  //$_SESSION['status']=$vdata['status'];
		  }
	 
	 
	 
	      //echo "jay shree ram";
			echo "<script> alert('your vote is done for $cndtnm ')</script>";
			//echo $cndtnm;
      // session_destroy();
      echo	"<script> window.open('welcome.php','_self')</script>";	 
	  
		 }
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
 <title>
online voting system
</title>
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
	color:red;
	
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
margin-left:40%;
margin-bottom:0.60em;
padding-top: 30px;
color:red;

}
input[type=radio] {
    border: 0px;
    width: 100%;
    height: 4em;
}
input[type=submit]
{
width:100px;
}

a:hover
{
	background:green;
}
.bt
{
	
	border:2px solid red;
}
.img1{
	height:100px;
	width:100px;
}
.navidth
{
	
	background-color:aqua;
	border:3px solid;
	
}
.he
{
	padding-top:10px;
	font-size:20px;
}
</style>
</head>
<body>

<div class="container-fluid ">
<?php
include "welheader.php";
?>

  <div class="container  navidth ">
 
 <div class="col-lg-9 col-md-9 col-sm-9">
<center>
 <h5 class="heading"><b>
 VOTE YOUR FAVOURITE PLAYER</b> </h5>
 
</div>
</center>
<center>
  <form action="" method="POST">
 
<table >
 

<tr>
<td style="border:2px solid ; height:100px width:100px"><img src="dhoni.jpg" class=" img img-responsive img1"></td>
<td style="border:2px solid; height:100px; width:250px ; background-color:aqua;"><center><b>MS DHONI</b></td></center><td style="border:2px solid ;background-color:red; width:100px ;"><center><input type="radio" name="candidate" value="md" required></center></td>
</tr>
<br>
<tr>
<td style="border:2px solid ; height:100px width:100px"><img src="virat.jpg" class=" img img-responsive img1 "></td>
<td style="border:2px solid; height:100px; width:250px ; background-color:aqua;"><center><b> VIRAT KOHLI</b></td></center><td style="border:2px solid ;background-color:red; width:100px ;"><center><input type="radio" name="candidate" value="vk" required></center></td>
</tr>
<br>
<tr>
<td style="border:2px solid ; height:100px width:100px"><img src="rohit.jpg" class=" img img-responsive img1"></td>
<td style="border:2px solid; height:100px; width:250px ; background-color:aqua;"><center><b>ROHIT SHARMA</b></td></center><td style="border:2px solid ;background-color:red; width:100px ;"><center><input type="radio" name="candidate" value="rs" required></center></td>
</tr>
<br>
<tr>
<td style="border:2px solid ; height:100px width:100px"><img src="sikhar.jpg" class=" img img-responsive img1"></td>
<td style="border:2px solid; height:100px; width:250px ; background-color:aqua;"><center><b> SHIKHAR DHAWAN</b></td></center><td style="border:2px solid ;background-color:red; width:100px ;"><center><input type="radio" name="candidate" value="sd" required></center></td>
</tr>
<br>
<tr>
<td style="border:2px solid ;background-color:red;" colspan="3"><center><input type="submit" name="vote" value="vote"></center></td>
</tr>
</table>
</form>

</center>  
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
