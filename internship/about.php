<?php
require_once('header.php');
?>
	<!--header section end-->
		<!--breadcrumb Section starts-->
		<section class="contact">
			<div class="bread-crumb">
				<div class="container">
					<h1 class="text-white text-center">ABOUT PAGE</h1>
					<ul class="breadcrumbs">
						<li style="color:gray"><a href="index 2.php">Home</a></li> -
						<li class="active">ABOUT</li>
					</ul>
				</div>
			</div>
		</section>
		<!--breadcrumb Section ends-->
	<section class="mb-5 pb-5">
		<div class='container'>
		<div class="row align-items-center">
		<?php
			$ret=mysqli_query($con,"SELECT * FROM `about-us`");
				$row=mysqli_fetch_array($ret);
			?>
			<div class="col-6 col-md-4">
			<h1 class="text-warning"><?php echo $row["title"] ?></h1>
			</div>
			<div class="col-6 col-md-4">
			<img class="about-image" src="<?php echo'admin/'.$row["image"]?>" alt="not exist" width="300px" height="400px">
			</div>
			<div class="col-6 col-md-4">
			<p class="about-description"><?php echo $row["Description"] ?></p>
			</div>
		</div>
		
		</div>
	</section>
<?php
require_once('footer.php');
?>