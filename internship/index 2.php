<?php
require_once('header.php');

?>
	  <!-- carousel section start-->	
      <section>
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
			<?php
			$ret=mysqli_query($con,"select *from  banner limit 3");
			$active="active";
			while ($row=mysqli_fetch_array($ret)){
			?>
               <div class="carousel-item <?php echo $active;?>">
                  <img src="<?php echo'admin/uploads/banner/'.$row["banner_image"]?>" alt="Los Angeles" width="100%" height="610"> 
                  <div class="container">
                     <div class="overlay"></div>
                     <div class="carousel-caption text-center">
                        <h1 class="text-warning"><?php echo $row["title"]?></h1>
                        <p class="text-white font-weight-bold"><?php echo $row["sub_title"]?></p>
                        <p><a class="btn btn-lg btn-warning text-white" href="#" role="button">View Mode</a></p>
                     </div>
                  </div>
               </div>
			    <?php
				$active='';
				}
			   ?>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>
      <!-- carousel section end-->
	<!--about us section-->
      <section class="m-0 p-0 p-md-5 m-md-5 py-5">
         <div class="container">
				<?php
				$ret=mysqli_query($con,"SELECT * FROM `about-us`");
				$row=mysqli_fetch_array($ret);
				?>
            <h1 class="text-center text-warning"><?php echo $row["title"] ?></h1>
            <div class="row py-5">
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <img src="<?php echo'admin/'.$row["image"]?>" alt="not exist"width="300px" height="300px" class="img-fluid thumbnail border border-warning home-about-img">
               </div>
               <div class="col-lg-8 col-md-8 col-sm-12 border-left border-warning home-about-border">
                  <p class="text-justify pt-3 home-about-p-line-height ">
                   <?php echo $row["Description"] ?> 
                  </p>
               </div>
            </div>
         </div>
      </section>
	  <!--about us section end-->
	 <!-- project section-->
	 <section>
	 <div class="container">
	 <div class="row justify-content-center">
	 <div class="col-12">
	 <div class="text-center">
	 <span>view our awsome projects</span>
	 <h2 class="home-project"><b>Occpy House </b>Make Life Better</h2>
	 <p style="font-family:cursive;">Let us take you into a deeper experience, make a moment a lasting conveyable memory. Let us help build your tribe</p>
	 <a class="btn btn-warning text-white" href="#" title="">View more</a>
	 </div>
	 </div>
	  <div class="col-12 md-5 pt-5">
	  <div class="home-project-section center-dots">
		<div class="project-item">
			<img src="image\omgg1.jpeg" alt="Not Found" width="350" height="430"/>
			<div class="project-name">
				<h3> Project 1</h3>
				<a href=""> View More>></a>
				<a class="btn btn-warning btn-booknow" href='#'> Book Now</a>
			</div>
		</div>
		<div class="project-item">
		<img src="image/omgg2.jpg" alt="Not Found"  width="350" height="430"/>
		<div class="project-name">
			<h3> Project 2</h3>
			<a href=""> View More>></a>
			<a class="btn btn-warning btn-booknow" href='#'> Book Now</a>
		</div>
		</div>
		<div class="project-item">
		<img src="image/omgg3.png" alt="Not Found"  width="350" height="430"/>
		<div class="project-name">
			<h3> Project 3</h3>
			<a href=""> View More>></a>
			<a class="btn btn-warning btn-booknow" href='#'> Book Now</a>
		</div>
		</div>
		<div class="project-item">
		<img src="image/omgg4.jpg" alt="Not Found"  width="350" height="430"/>
	    <div class="project-name">
			<h3> Project 4</h3>
			<a href=""> View More>></a>
			<a class="btn btn-warning btn-booknow" href='#'> Book Now</a>
		</div>
		</div>
		<div class="project-item">
		<img src="image/omgg5.jpg" alt="Not Found"  width="350" height="430"/>
	    <div class="project-name">
			<h3> Project 5</h3>
			<a href=""> View More>></a>
			<a class="btn btn-warning btn-booknow" href='#'> Book Now</a>
		</div>
		</div>
	 </div>
	 </div>
	 </div>
	 </div>
	 </section>
	 <!-- project section end-->
	 <!-- service section start-->
	 <section class="mt-5 pt-5 mb-5">
				<div class="container">
					<h1 class="text-center text-warning text-weight-bold">Our Services</h1>
					<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6">
					  <div class="card home-service mt-1">
					         <i class="fa fa-bitbucket"></i>
						  <div class="card-body text-center mt-0 pt-0">
							  <h4 class="card-title">LUXURY</h4>
						  </div>
					  </div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
					  <div class="card home-service mt-1">
					      <i class="fa fa-heartbeat"></i>
						  <div class="card-body text-center mt-0 pt-0">
							  <h4 class="card-title">GREAT SERVUCES</h4>
						  </div>
					  </div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
					  <div class="card home-service mt-1">
						<i class="fa fa-gear"></i>
						  <div class="card-body text-center mt-0 pt-0">
							  <h4 class="card-title">24/7 Services</h4>
						  </div>
					  </div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
					  <div class="card home-service mt-1">
						<i class="fa fa-handshake-o"></i>
						  <div class="card-body text-center mt-0 pt-0">
							  <h4 class="card-title">Frindly Services</h4>
						  </div>
					  </div>
					</div>
				</div>
					<div class="text-center mt-2">
					<a class="btn btn-warning btn-lg text-white">View all Services</a>
					</div>
				</div>
			</section>
	  <!-- service section end-->
	
<?php
require_once('footer.php');
?>