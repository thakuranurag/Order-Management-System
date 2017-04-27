
<!DOCTYPE html>
<?php error_reporting(E_ALL ^ E_NOTICE);?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>100StartUps.com</title>

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
	<div class="hero-unit">
		<div class="container">
		<div class="navbar">
				<div class="navbar-inner">
					<nav class="navbar navbar-default">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="blogs.php">Our Blogs</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</nav>					
				</div>
			</div><!--end navbar -->
			<div class="item">
				<div class="hero-unit-inner">
					<h1><center>ADMIN PANEL</center></h1>
					<center>
						<div class="cntr">
							<form method="post" action="uploads.php" enctype="multipart/form-data" >
								<table border=0>
									<tr>
										<td>
											<table border=0 align=center width=60%></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td><b>StartUp Name:</b>
										<td>&nbsp;</td>
										<td><input type="text" name="startUp"></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td><b>Startup logo:</b>
										<td>&nbsp;</td>
										<td><input type="file"  name="fileToUpload" id="fileToUpload"></td>
									</tr>
									<tr>
										<td>&nbsp;	</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td><b>Website:</b>
										<td>&nbsp;</td>
										<td><input type="text" name="Website"></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td><b>About StartUp</b>
										<td>&nbsp;</td>
										<td><textarea name="aboutStartUp" rows=12 cols=60></textarea>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td><b>Founded by:</b>:
										<td>&nbsp;</td>
										<td><input type="text" name="founder[]">
									<?php
									extract($_GET);
									for($i=1; $i<$fndr; $i++)
										{
											echo "<tr><td>&nbsp;</td><tr><td>&nbsp;</td><td>&nbsp;</td><td><input type='text' name=founder[]></td>";
										}
										
										// echo '<input type="hidden" name="fndr" value="$fndr">';
									?>
									</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									
									<tr>
										<td align=center><input type="submit" name="submit" class="btn btn-primary btn-lg" value='Register'></td>
										<td>&nbsp;</td>
										<td align=center><input type="reset" class="btn btn-danger btn-lg" value='Clear'></td>
									</tr>
									<tr>
										<td>&nbsp;		</td>						
											</tr>
											</table>	
								</table>
							</form>
						</div>
					</center>
				</div>
			</div><!--end item-->	
		</div>
	</div><!-- end hero-unit -->

	<div id="footer">
		<div class="text-center copyright">
			<h6>&copy;100StartUps.com</h6>
		</div>
	</div><!-- end footer -->
</body>
</html> 