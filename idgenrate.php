<?php
session_start();
$email=$_SESSION['email'];
$name=$_SESSION['name'];

if($email=="")
{
	header('location:login.php');
}
?>
<?php
$notice="";
if(isset($_POST['idgenrate']))
{
   $e=$_POST['email'];
	$s=$_POST['state'];
	include "connection.php";

	$userdata= mysqli_query($con , "select * from id_request_tbl where email='$e'");
	$ttlrow=mysqli_num_rows($userdata);
	if($ttlrow >0)
	{
		//$error= "Your Request already submitted ";
		$notice= "<center><p class=' text-danger p1'> Your Request already submitted </p></center>";
	}
	//echo $e;
	else
	{
	$insertdata=mysqli_query($con , "insert into id_request_tbl (email , state) values ('$e' , '$s')");
	if($insertdata)
	{
		//$error= "success";
		$notice= "<center><p class=' text-danger p1'>successfully registered </p></center>";
	}
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
	min-height:300px;
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
 <?php
 //$vid="";
 $vname="";
 $vemail="";
 $vstate="";
 include "connection.php";
 $a=$_SESSION['email'];
 $selectdata=mysqli_query($con,"select * from user where email='$a'");
 $countrow=mysqli_num_rows($selectdata);
 if($countrow > 0)
 {
	 $udata=mysqli_fetch_assoc($selectdata);
	   $vname=$udata['name'];
      $vemail= $udata['email'];
      $vstate=$udata['state'];
	   $_SESSION['voterid']= $vid=$udata['user_id_generated'];
		
	 
 }
    if($_SESSION['voterid'] != "")
	{
		//echo  $_SESSION['voterid']
		?>
		<div class="setheightwidth">
		<center><h4 class="mt"> Your Voting ID"<span class="idcolor"> <?php echo $vid ;?></span>"</h4></center>
		<p><b>Note:</b> Use this id and login password to caste your vote</p>
		</div>
		<?php
	}
 else
 {
	 ?>
	  <div class="container navWidth ">
  <?php
 	  echo $notice;
  
 ?>

	 
	  <form action="" method="post">
 <div class="form-group">
      <label for="email">User_Name:</label>
      <input type="text" class="form-control" id="name" name="name" required value="<?php echo $vname; ?>" readonly>
    </div>
 
   

 <div class="form-group">
      <label for="email">User_Email:</label>
      <input type="text" class="form-control" id="email" name="email" required value="<?php echo $vemail; ?>" readonly>
    </div>
   
 <div class="form-group">
      <label for="text">User_State:</label>
      <input type="text" class="form-control" id="state" name="state" required value="<?php echo $vstate; ?>" readonly>
    </div>

   <center><button type="submit" class="btn btn-info btn-block" name="idgenrate"><b>ID Request</b></button></center>

</form>
</div>

	 <?php
 }
 ?>
 
 
 


<div class="row bg-dark">
<div class="col-lg-12 col-md-12 col-sm-12">
<p style="color:white; float:right;"> copyright to ONLINE.PVT.LTD</P>
</div>

</div>

</section>
</div>
</body>
</html>