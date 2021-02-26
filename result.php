<?php
session_start();
$email=$_SESSION['email'];
$name=$_SESSION['name'];
$vtrid=$_SESSION['voterid'];
//$votingstatus=$_SESSION['votin'];

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
.p1{
	font-size:20px;
	font-style:italic;
	
}

.active {
  background-color: #717171;
}
table{
	height:300px;
	width:300px;
	background-color:aqua;
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

a:hover
{
	background:green;
}
.bt
{
	
	border:2px solid red;
}
.setheightwidth
{
	min-height:295px;
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

		
		
	  <div class="container navWidth setheightwidth ">
	  <?php
include "connection.php";
$query= mysqli_query($con, "select * from candidate_tbl");
echo "<center>";
echo "<table border='1'>
     <tr border='1'>
	 <td><b>Sr_no</b></td>
	 <td><b>Candidate_name</b></td>
	 <td><b>Result</b></td>
	 </tr>";
	// if(mysqli_num_rows($query)>0)
	// {
		 while($rows=mysqli_fetch_assoc($query))
		 {
	echo "<tr >";
	
	echo " <td>".$rows['sr_no']."</td>";
	 echo"<td>".$rows['candidate_name']."</td>";
	 echo"<td>".$rows['vote']."</td>";
	echo" </tr>"; 
	 }
	 echo "</table>";
	echo" </center>";
	 
	
	 mysqli_close($con);
	 ?>

 
	 
	  
 
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