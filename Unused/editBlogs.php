<?php
include 'includes\dbconnect.php';
error_reporting(E_ALL ^ E_NOTICE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>100StartUps.com</title>

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
<style>
.blog1,.blog2
{
	color:white;
	background-color:#522A27;
	min-height:250px;
	padding-top:25px;
	padding-left:50px;
	padding-right:50px;
}
.pic{
	height:200px;
	width:200px;
	 background: #f4f4f4;
	 position: absolute;
	 box-shadow: 1px 1px 0 white;
}
.cont{
	float:right;
	position:relative;
	width:60%;
	height:200px;
}
 .cont a:visited, .cont a:link, .cont a:active
{
	color:white;
}
.cont a:hover
{
	color:blue;
}
</style>
</head>
<body>
	<div class="hero-unit-blog">
		<div class="container">
			<div class="navbar">
				<div class="navbar-inner">
					<nav class="navbar navbar-default">
						<ul class="nav navbar-nav">
							<li><a href="adminHome.php">Admin Home</a></li>
							<li  class="active"><a href="editBlogs.php">Edit Blogs</a></li>
							<li><a href="newBlogs.php.html">New Blogs</a></li>
						</ul>
					</nav>					
				</div>
			</div><!--end navbar -->
			</div>
			
			<div class="item" >
				<div class="hero-unit-inner">
					<strong><h1 style="font-family:castellar; text-decoration:underline;"><center>Blogs</center></h1><strong>
					<div class="container">
					<div class="rows">
					<div class="col-sm-2 col-md-2 col-lg-2"></div> <div class="col-sm-8 col-md-8 col-lg-8" >
					<?php
					
						$blogs=$_POST['blogs'];
						
						if(blogs==''){
							
							
						}else{
						$sql = "SELECT * FROM adminform ";
						$result = $conn->query($sql);
						$temp2="blog1";
						 while($row = $result->fetch_assoc()) {
							 echo" <br>";
							 $temp3=$row ['image'];
							 $temp=$row ['blog_id'];
							 $temp4="http://".$row['Website'];
							 if($temp2=="blog1")$temp2="blog2";
							 else $temp2="blog1";
							 echo" 
							 <a href='editBlog.php?blog_id=$temp' target='_blank' style='text-align:right'><div class='$temp2'>
							 <div class='pic'>
									<img src='$temp3' style='height:197px;width:197px;border: 1px solid #bbbbbb;'>
									</div>
									<div class= 'cont'>
									<center><h2> ".$row ['startup_name']."</h2><h3>Website:".$row['Website'].
									"<br/><br/>
									Founded by:".$row[founders]."<br/> See more...</center>
									</div>
							</div></a>		
									
							 ";
						/* echo "<a href='blog_page?blog_id=$temp' target='_blank'>
						 
						<div style='text-align: right;float:bottom;'>
						 Founded by:".$row[founders]."</div></div></a>";*/
						}
						
					}
						
					?>
				</div>
				<div class='col-sm-2 col-md-2 col-lg-2'></div>
				</div>
					</div>
				</div>
	
</div>		</div>	
	<div id="footer">
		<div class="text-center copyright">
			<h6>&copy;100StartUps.com</h6>
		</div>
	</div><!-- end footer -->
</body>
</html> 