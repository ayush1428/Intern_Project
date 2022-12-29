<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Gym Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	
	<?php include 'include/header.php';?>
	
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Contact US</h2>
				</div>
			</div>
		</div>
	</section>



	
	<section class="pricing-section spad">
		<div class="container">

			<div class="row">

				<div class="col-lg-12 col-sm-6">
<p><strong>Email:</strong> contact@123.com</p>
<p><strong>Contact No:</strong> 1234567890, 1122334455</p>
<p><strong>Address:</strong> Test Address</p>
				</div>
			</div>
		</div>
	</section>
	

	
	<?php include 'include/footer.php'; ?>
	

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>


	<script src="js/main.js"></script>

	</body>
</html>
