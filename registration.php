<?php
session_start();
include "connection.php";
$error="";
$n="";
$e="";
$p="";
$a="";
if(isset($_POST['submit']))
{
	$n=($_POST["name"]);
	$e=($_POST["email"]);
	$p=( $_POST["password"]);
	$a=($_POST["age"]);
	$s=($_POST["state"]);
	


    $n=mysqli_real_escape_string($con , $n);
	$e=mysqli_real_escape_string($con , $e);
	$p=mysqli_real_escape_string($con , $p);
	
	$a=mysqli_real_escape_string($con , $a);
	$s=mysqli_real_escape_string($con , $s);
	
	
	$query2=mysqli_query($con ,"select email from user where email='$e' ");
	$query3=mysqli_num_rows($query2);
	if($query3>0)
	{
		//$error= "<center><p class='text-danger'>the userid already exist ! </p></center>";
		   
		//echo "<script> alert ('the user already exit')</script>" ;
        // header('location:index.php');
    echo "<script>alert('the userid already exist ! register the another user ');</script>";
		   
		   echo "<script>window.open('index.php','_self');</script>";
		
}
	else
	{
		$query5=mysqli_query($con , "insert into user(name,age,email,password,state,status)values('$n','$a','$e','$p','$s','ACTIVATE')");
		
			if($query5)
		{
			//header("location:login.php");
		//$error= "<center><p class=' text-danger'>successfully registered </p></center>";
		  // echo "<script> alert ('successfully registraion')</script>" ;
        // header('location:index.php');
		echo "<script>alert('successfully registerd');</script>";
		   
		  echo "<script>window.open('login.php','_self');</script>";

		
				}
		//$_SESSION['id']=mysqli_insert_id($con);
		// mysqli_insert_id ()function is used to find out auto increment colomns value.
		//$id=$_SESSION['id'];
		//echo " <script> alert('your voting id no $id  & now you are able for voting ! to vote,please login using this id');</script>";
		//echo "<script>window.open('index.php','_self');</script>";

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
.navWidth
{
	background-color:teal;
}
h4
{
color:white;	
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
.heading
{
margin-left:45%;
margin-bottom:0.60em;
padding-top: 30px;
color:red;

}

a:hover
{
	background:green;
}


</style>
<script>


function q()
{
var a=document.form1.age.value;
var p= document.form1.password.value;
if(a<18)
{
alert("age must be greater than 18 year");
return false;

}
if(p.length<6)
{
alert("password must be atleast 6 character");
return false;

}
}



</script>
</head>
<body>

<div class="container-fluid ">
<?php
include "header.php";
 ?>
 
 
 
 
 
 <div class="container navWidth">
 <center><h4>Registration-Form</h4></center>
  <?php
  if($error !="")
  {
	  echo $error;
  }
 ?>
 
 
  <form action="" method="post" name="form1" id="form1" onsubmit="return q()">
 
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Your Name"required>
    </div>
   

 <div class="form-group">
      <label for="usr">Email:</label>
      <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Your Email"required>
    </div>
   

     <div class="form-group">
      <label for="usr">Age:</label>
      <input type="text" class="form-control" id="age" name="age" placeholder="Enter Your Age" required>
    </div>
   
  
<div class="form-check-inline">
 

  <label class="form-check-label"> Gender:
    <input type="radio" class="form-check-input" name="gender"   required>Female
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" required>male
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" required >Other
  </label>
</div>
<div class="form-group ">
  <label for="sel1">State:</label>
  <select class="form-control" name="state" id="state" required>
   <option >select your state</option>
    <option>bihar</option>
    <option>up</option>
    <option>mp</option>
    
  </select>
</div>
 <div class="form-group">
      <label for="usr">Password:</label>
      <input type="password" class="form-control" id="password" name="password"  placeholder="Enter Your Password"required>
    </div>

 <center> <button type="submit" class="btn btn-info btn-block" name="submit">Submit</button></center>

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