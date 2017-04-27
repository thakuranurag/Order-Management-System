<?php
$con = mysqli_connect("localhost","anuragt0007","qwerty12345","anuragt");
error_reporting(E_ALL ^ E_NOTICE);

							session_start(); 
						 if (isset($_SESSION['abcd'])) {

	

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>veglnock.oms.com</title>

				<link rel="stylesheet" href="bootstrap.css" type="text/css" />
				<link rel="stylesheet" href="bootstrap-responsive.css" type="text/css" />
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
										<li  ><a href="viewALLBlogs.php">View All Blogs</a></li>
										<li><a href="blogEntry.php">Add Blog</a></li>
										<li class="active"><a href="newEntry.php">New Entries</a></li>
									</ul>
								</nav>					
							</div>
						</div><!--end navbar -->
					</div>

					<div class="item" >
						<div class="hero-unit-inner">
							<center><h1 style="font-family:castellar; text-decoration:underline;">Blogs</h1><h4>Select appropriate choice as per blog is Posted or Rejected .</h4></center>
							<div class="container">
								<div class="rows">
									<div class="col-sm-2 col-md-2 col-lg-2"></div> <div class="col-sm-8 col-md-8 col-lg-8" >
										<?php
						$sql = "SELECT * FROM contact WHERE status=0";
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
							 							 <div class='$temp2'> 
									
									<center><h2> ".$row ['startup_name']."</h2></center>
									<br>
									<center><h3> Website: <a href=http://".$row ['website'].">".$row ['website']."</a></h3>
									<br>
									<p> ".$row['description']."</p>
									<br><p>
									City : ".$row['city']."
									<br>
									State : ".$row['state']."
									<br>
									Contact Number : ".$row['phone_no']."
									<br>
									Email : ".$row['email']."</p>									
									Submitted by : ".$row['name']."<br/> </center>
									<h3>Click to change status :</h3> 
									<form action='changingStatus.php' method='post'>
									<input type='submit' name='posted' value='Posted' class='btn btn-primary btn-lg'>
									<input type ='hidden' name='contact_id' value=".$row['contact_id']." >
									<input type='submit' name='reject' value='Reject' class='btn btn-danger btn-lg'>
									
									</form>
							</div>	</a>	
									
							 ";
						/* echo "<a href='blog_page?blog_id=$temp' target='_blank'>
						 
						<div style='text-align: right;float:bottom;'>
						 Founded by:".$row[founders]."</div></div></a>";*/
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
					<h3>#Developers Anushree Ghosh , Mayank Sharma & <a href=http://www.facebook.com/m3ghal target="_blank">Meghal Agrawal</a></h3>	<h6>&copy;100StartUps.com</h6>
					</div>
				</div><!-- end footer -->
			</body>
		</html> 
		
		<?php 
						 }else{
							 
							 
							 echo "Error";
				header('location:adminLogin.php');
exit;
			 
						 }
?>