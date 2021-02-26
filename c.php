

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
 <title>
online voting system
</title>
<style>
h4:hover{
	background:#39dc79;
	width:300px;
	
}

h4
{
	color:red;
}
.navWidth
{
	background-color:teal;
}
.aw
{
	background-color:teal;
}
.b
{
	height:558px;
	width:25%;
	background-color:yellow;
}
.d
{
	height:558px;
	width:25%;
	background-color:red;
}
.c
{
	height:558px;
	width:50%;
	background-color:gray;
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
 h1
{
margin-left:40%;
margin-bottom:0.60em;
padding-top: 25px;
color:red;

}

</style>
</head>
<body>

<div class="container-fluid ">
<section> 
<div class="row navWidth">
<div class="col-lg-12 col-md-12 col-sm-12">
 <img src="atl.jpg" height="160px" width="16%" style="float:left;">
 <h1 ><b>
ONLINE VOTING </h1></b>
 
</div>
</div>
</section>
<section>
 
<div class="row">
<div class="col-lg-2  col-md-2 col-sm-12 b"></div>
<div class="col-lg-8 col-md-8 col-sm-12 c">
 
<center>
 <form action="caction.php" method="POST">
<table >
<tr>
<td style="border:2px solid ; height:100px width:100px"><img src="dhoni.jpg" class=" img img-responsive img1"></td>
<td style="border:2px solid; height:100px; width:250px ; background-color:aqua;"><center><b>MS DHONI</b></td></center><td style="border:2px solid;background-color:red; width:100px ;"><center><input type="radio" name="candidate" value="C" required></center></td>
</tr>
<br>
<tr>
<td style="border:2px solid ; height:100px width:100px"><img src="virat.jpg" class=" img img-responsive img1 "></td>
<td style="border:2px solid; height:100px; width:250px ; background-color:aqua;"><center><b> VIRAT KOHLI</b></td></center><td style="border:2px solid;background-color:red; width:100px ;"><center><input type="radio" name="candidate" value="C" required></center></td>
</tr>
<br>
<tr>
<td style="border:2px solid ; height:100px width:100px"><img src="rohit.jpg" class=" img img-responsive img1"></td>
<td style="border:2px solid; height:100px; width:250px ; background-color:aqua;"><center><b>ROHIT SHARMA</b></td></center><td style="border:2px solid;background-color:red; width:100px ;"><center><input type="radio" name="candidate" value="C" required></center></td>
</tr>
<br>
<tr>
<td style="border:2px solid ; height:100px width:100px"><img src="sikhar.jpg" class=" img img-responsive img1"></td>
<td style="border:2px solid; height:100px; width:250px ; background-color:aqua;"><center><b> SHIKHAR DHAWAN</b></td></center><td style="border:2px solid;background-color:red; width:100px ;"><center><input type="radio" name="candidate" value="C" required></center></td>
</tr>
<br>
<tr>
<td style="border:2px solid;background-color:red;" colspan="3"><center><input type="submit" name="vote" value="vote"></center></td>
</tr>
</table>
</form>

</center>
</div>
<div class="col-lg-2  col-md-2 col-sm-12 d"></div>

</div>
</section>
<section>
 
<div class="row bg-dark">
<div class="col-lg-12 col-md-12 col-sm-12">
<p style="color:white; float:right;"> candidate & pannel</P>
</div>

</div>

</section>
</div>
</body>
</html>