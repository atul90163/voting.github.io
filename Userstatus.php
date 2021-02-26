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
.set
{
	min-height:295px;
	
}
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
.p1{
	font-size:20px;
	font-style:italic;
	
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
	  <form action="" method="post">
 <div class="form-group">
      <label for="email">VoterID:</label>
      <input type="text" class="form-control" id="vtrid" name="vtrid" placeholder ="Enter Voterid "required>
    </div>
 
   

   
 
   <center><button type="submit" class="btn btn-info btn-block" name="submit"><b>SHOW YOUR DATA</b></button></center>
  

</form>
</div>
</div>
 
<?php
include "connection.php";
if(isset($_POST['submit']))
{
	$identity=$_POST['vtrid'];
   $selectdata=mysqli_query($con , "select * from user where user_id_generated='$identity'");
   //$num_row=mysqli_num_rows($selectdata);
   //if($num_row > 0)
   $userdata=mysqli_fetch_assoc($selectdata);
   if($userdata)
   {
	   $n=$userdata['name'];
	   $e=$userdata['email'];
	   $p=$userdata['password'];
	   $a=$userdata['age'];
	   $s=$userdata['state'];
	  ?>
	   <div class="container  ">
	   <form action="" method="POST">
	   <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" name="name" value= '<?php echo $n;?>'  required>
    </div>

 <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" name="email" value= '<?php echo $e;?>' required>
    </div>
	<div class="form-group">
      <label for="Password">Password:</label>
      <input type="text" class="form-control" id="password" name="password"  value= '<?php echo $p;?>' required >
    </div>
<div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="age" name="age"  value= '<?php echo $a;?>'required>
    </div>
<div class="form-group">
      <label for="state">State:</label>
      <input type="text" class="form-control" id="state" name="state" value= '<?php echo $s;?>' required >
    </div>
	<center><button type="submit" class="btn btn-info btn-block" name="update"><b>Send Request to Admin for correction</b></button></center>
</div>
	<?php
 
	  
	  
   }
   else
   {
	   //echo "record not found";
	   
	  ?>
		<div class="setheightwidth">
		<center><h4 class=""><span class="idcolor"> <?php echo "record not found" ;?></span>"</h4></center>
		
		</div>
		<?php
 
	   
   }



}

?>
		

<?php
//session_start();
$c="";

$vid=$_SESSION['voterid'];
include "connection.php";


if(isset($_POST['update']))
{
	$n=$_POST['name'];
	$a=$_POST['age'];
   $e=$_POST['email'];
   $p=$_POST['password'];
	$s=$_POST['state'];
	$fetchdata=mysqli_query($con,"select * from update_tbl where voterid='$vid'");
	$rowcount=mysqli_num_rows($fetchdata);
	if($rowcount > 0)
	{
	   //$notice= "your request already submitted";
	   $c="<center><p class=' text-danger p1'>your request already submitted</p></center>";
	}
	else
	{
	
   $insertdata=mysqli_query($con,"insert into update_tbl (name,email, age, state,password,voterid) values('$n','$e',$a,'$s','$p','$vid')");
		if($insertdata)
		{
			//$notice= "successfully registered";
			$c="<center><p class=' text-danger p1'> request successfully registered</p></center>";
	
		}
		else{
			//$notice= "something's wrong";
			$c="<center><p class=' text-danger p1'>something's wrong</p></center>";
	
		}
	}
	
		//echo $vid;
		//echo $a;
		
}



 ?>


	<?php
	echo $c;
	
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