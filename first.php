



<?php
$conn = mysqli_connect("localhost","anuragt0007","qwerty12345","anuragt");
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
	background-color:#522A27;     <!-- #522A27 -->
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
									<center><h1 style="font-family:castellar; text-decoration:underline;">Welcome to VegKnock OMS</h1>													
										<li  ><a href="first.php">Home</a></li>       
										<li><a href="FindOrder.php">Find Order</a></li>              
										<li class="active"><a href="viewAll.php">View all orders</a></li>  
										<li><a href="logout.php">Logout</a></li>										
									</ul>
								</nav>					
							</div>
						</div><!--end navbar -->
					</div>

			<!--		<div class="item" >
						<div class="hero-unit-inner">
							<center><h1 style="font-family:castellar; text-decoration:underline;">Blogs</h1><h4>Select appropriate choice as per blog is Posted or Rejected .</h4></center>
							<div class="container">
								<div class="rows">
									<div class="col-sm-2 col-md-2 col-lg-2"></div> <div class="col-sm-8 col-md-8 col-lg-8" >   -->
										<?php
						$sqlf = "SELECT * FROM vegknock_new_order WHERE status!= 'Delivered' AND status!= 'Cancelled'";
						//$res = $conn->query($sql);
						$res = mysqli_query($conn,$sqlf);
						$temp2="blog1";
						 while($row= mysqli_fetch_array($res)) {
							 echo" <br>";
							 $o_id=$row['order_id'];
							 $c_id=$row['customer_id'];
							 $fn=$row['firstname'];
							 $sn=$row['lastname'];
							 $phone=$row['telephone'];
							 $add=$row['shipping_company'];
							 $total_bill=$row['total'];
							 $order_status = $row['status'];
							 $temp4="http://".$row['Website'];
							 if($temp2=="blog1")
								 $temp2="blog2";
							 else $temp2="blog1";
							 echo" 
							 							 <div class='$temp2'> 
									
									<center><h3> Order ID: ".$row ['order_id']."</h3></center>
									<br>
									<center>Customer ID: ".$row ['customer_id']."
									<br>
									Name: ".$row['firstname']." ".$row['lastname']."
									<br>
									Telephone : ".$row['telephone']."
									<br>
									Address : ".$row['shipping_company']."
									<br>
									Total : ".$row['total']."</p>									
									Order Status : ".$row['status']."<br/> </center>
									<h3>Click to change status :</h3> 
									<form action='changeStatus.php' method='post'>
									<input type='submit' name='confirmed' value='Confirmed' class='btn btn-primary btn-lg'>
									<input type ='hidden' name='order_id' value=".$row['order_id']." >
									<input type='submit' name='dispatched' value='Dispatched' class='btn btn-danger btn-lg'>
									<input type='submit' name='delivered' value='Delivered' class='btn btn-danger btn-lg'>
									<input type='submit' name='cancel' value='Cancel' class='btn btn-danger btn-lg'>
									
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
					<h3>#Developer Anurag Thakur</a></h3><h6>&copy;VegKnock.com</h6>
					</div>
				</div><!-- end footer -->
			</body>
		</html> 
		
		<?php 
						 }else{
							 
							 
							 echo "Error";
				header('location: login.php');
exit;
			 
						 }
?>