<?php include("index_upload_receipt.php"); ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Shri Ram Parivar Navdurga Durgapuja Samiti</title>

		<!-- Loading third party fonts -->
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" >
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	

		<style>
			/* Make the image fully responsive */
			.carousel-inner img {
			  width: 100%;
			  height: 100%;
			}
			</style>
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>

		<?php


    
        $mysqli = new mysqli('localhost','root','','filexmgmt');
        
    ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<div class="site-content">
			<header class="site-header">
				<div>
					<a href="#" class="branding1">
						<img src="images2/logo.jpg" alt="" width="100%">
						<!--<h1 class="site-title">Ramparivar Durga Puja</h1>-->
					</a>

					<!--<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Homepage <small>Lorem ipsum</small></a></li>
							<li class="menu-item"><a href="#">Pastors <small>Cupidatat non proident</small></a></li>
							<li class="menu-item"><a href="seremons.html">Seremons <small>Laboris nisi aliquip</small></a></li>
							<li class="menu-item"><a href="events.html">Events <small>Sunt in culpa</small></a></li>
							<li class="menu-item"><a href="families.html">Families <small>Aute irure</small></a></li>
							<li class="menu-item"><a href="#">Contact <small>lorem ipsum</small></a></li>
						</ul>
					</div>-->		

					<div class="mobile-navigation"></div>
				</div>
			</header> 		
			<!-- .site-header -->
			<div id="demo" class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				<ul class="carousel-indicators">
				  <li data-target="#demo" data-slide-to="0" class="active"></li>
				  <li data-target="#demo" data-slide-to="1"></li>
				  <li data-target="#demo" data-slide-to="2"></li>
				</ul>
				
				<!-- The slideshow -->
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="images2/1.jpg" alt="Maa Durga" width="1100" height="500">
					<div class="carousel-caption">
						
					</div>  
				  </div>
				  <div class="carousel-item">
					<img src="images2/2.jpg" alt="Maa Durga" width="1100" height="500">
					<div class="carousel-caption">
					
					</div>  
				  </div>
				  <div class="carousel-item">
					<img src="images2/3.jpg" alt="Maa Durga" width="1100" height="500">
					<div class="carousel-caption">	
					</div> 
				  </div>
				  <div class="carousel-item">
					<img src="images2/dd1.jpg" alt="Maa Durga" width="1100" height="500">
					<div class="carousel-caption">	
					</div> 
				  </div>
				  <div class="carousel-item">
					<img src="images2/dd2.jpg" alt="Maa Durga" width="1100" height="500">
					<div class="carousel-caption">	
					</div> 
				  </div>
				</div>
				
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
				  <span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
				  <span class="carousel-control-next-icon"></span>
				</a>
			  </div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">AAJ KE DARSHAN</h2>

						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="news">
										<?php $result = $mysqli->query("SELECT images FROM aajkedarshan WHERE seq_id=1;");
	
										while($data = $result->fetch_assoc()) {
										echo "<img src='{$data['images']}' width='250px' height='340px'>";
										}
										$result = $mysqli->query("SELECT title FROM aajkedarshan WHERE seq_id=1;");
	
										while($data = $result->fetch_assoc()) {
										print_r($data['title']);
										}
										?>
									
								
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<?php $result = $mysqli->query("SELECT images FROM aajkedarshan WHERE seq_id=2;");
	
										while($data = $result->fetch_assoc()) {
										echo "<img src='{$data['images']}' width='250px' height='340px'>";
										}
										$result = $mysqli->query("SELECT title FROM aajkedarshan WHERE seq_id=2;");
	
										while($data = $result->fetch_assoc()) {
										print_r($data['title']);
										}
										?>
									
								
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<?php $result = $mysqli->query("SELECT images FROM aajkedarshan WHERE seq_id=3;");
	
										while($data = $result->fetch_assoc()) {
										echo "<img src='{$data['images']}' width='250px' height='340px'>";
										}
										$result = $mysqli->query("SELECT title FROM aajkedarshan WHERE seq_id=3;");
	
										while($data = $result->fetch_assoc()) {
										print_r($data['title']);
										}
										?>
									
									
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<?php $result = $mysqli->query("SELECT images FROM aajkedarshan WHERE seq_id=4;");
	
										while($data = $result->fetch_assoc()) {
										echo "<img src='{$data['images']}' width='250px' height='340px'>";
										}
										$result = $mysqli->query("SELECT title FROM aajkedarshan WHERE seq_id=4;");
	
										while($data = $result->fetch_assoc()) {
										print_r($data['title']);
										}
										?>
									
								
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- section -->
				
				
				
				
				
				
				<div class="fullwidth-block">
					<div class="container" >
						<div class="col" >
							<div class="col-md-6">
								<h2 class="section-title">Donate Now</h2>
								<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="news">
									<image class="center" src="images2/scanner.jpg" style="width:220px;height:240px;> </image>
									<h3 class="news-title"><a href="#">UPI-ID:BHARATPE.9100579697</a></h3>
								
								</div>
							</div>
								
							</div>	
						</div>		
					</div>
					
					
					
					<div class="col" >
							<div class="col-md-6">
								<h2 class="section-title">Upload Receipt</h2>
								<div class="row">
							<div class="col-md-6 col-sm-6">
							<div class="news">
							
							
		<form action=" " method="post" enctype="multipart/form-data" class="mb-3">
		<div class="user-box">
		<input type="text" name="title" required>
		<label>Name</label>
		</div>
		<div class="user-box">
			<input type="text" name="amount" required="">
			<label>Amount</label>
		</div>
      <div class="user-image mb-3 text-center">
        <div class="imgGallery"> 
          <!-- Image preview -->
        </div>
      </div>

      <div class="custom-file">
        <input type="file" name="fileUpload[]" class="custom-file-input" id="chooseFile" multiple>
        <label class="custom-file-label" for="chooseFile">Select file</label>
      </div>

      <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
        Upload Image
      </button>
    </form>

    <!-- Display response messages -->
    <?php if(!empty($response)) {?>
        <div class="alert <?php echo $response["status"]; ?>
           <?php echo $response["message"]; ?>
        </div>
    <?php }?>
  </div>
  

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <script>
    $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

      $('#chooseFile').on('change', function() {
        multiImgPreview(this, 'div.imgGallery');
      });
    });    
  </script>
								
							</div>
							</div>
								
							</div>
							</div>
								
							</div>	
						</div>		
					</div>	
					<div style="text-align: center;"> <p class="section-title"> PLEASE UPLOAD THE DONATION SCREENSHOT/RECEIPT IN UPLOAD RECEIPT</p></div>
				</div>






				
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h2 class="section-title">SADASYA</h2>
								<ul class="seremon-list">
									
									<li>
										
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">Founder</a></h3>
											<div class="colophon">
												<div class="colophon"><i class="fa fa-user"></i>Sanjay Shukla</div>												
											</div>
										</div>
									</li>
									<li>
										
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">President</a></h3>
											<div class="colophon">
												<div class="colophon"><i class="fa fa-user"></i>Gyanprakash Singh</div>												
											</div>
										</div>
									</li>
									<li>
									
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">Vice President</a></h3>
											<div class="colophon">
												<div class="colophon"><i class="fa fa-user"></i> Pradeep Singh,Sailendra Nath Pandey</div>												
											</div>
										</div>
									</li>
									<li>
										
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">Secretary</a></h3>
											<div class="colophon">
												<div class="colophon"><i class="fa fa-user"></i> Ajay Prakash Pandey,Raju Shukla</div>												
											</div>
										</div>
									</li>
									<li>
										
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">Vice Secretary</a></h3>
											<div class="colophon">
												<div class="colophon"><i class="fa fa-user"></i> Pradeep Tiwari</div>												
											</div>
										</div>
									</li>
								
									<li>										
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">Treasurer</a></h3>
											<div class="colophon">
												<div class="colophon"><i class="fa fa-user"></i>Ramkesh Yadav,Rajesh Divedi</div>												
												
											</div>
										</div>
									</li>
									<li>										
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">Coordinator</a></h3>
											<div class="colophon">
												<div class="colophon"><i class="fa fa-user"></i>Harendar Rai</div>											
												
											</div>
										</div>
									</li>
								</ul>

								<!--<div class="text-center">
									<a href="#" class="button">See all seremons</a>
								</div>-->
							</div>
							<div class="col-md-6">
								<h2 class="section-title"><br></h2>
								<ul class="seremon-list">
									<li>
										
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">Advisor</a></h3>
											<div class="colophon">
												<div class="colophon"><i class="fa fa-user"></i>Satyadev Pandey,Anoj Kumar Singh</div>												
											</div>
										</div>
									</li>
									<li>
										
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">Working Member</a></h3>
											<div class="colophon">
												<div class="colophon"><i class="fa fa-user"></i>Dharmendra Shukla</div>
												<div class="colophon"><i class="fa fa-user"></i>Ramkesh Yadav</div>
												<div class="colophon"><i class="fa fa-user"></i>Deena Nath Yadav</div>
												<div class="colophon"><i class="fa fa-user"></i>S B Singh</div>
												<div class="colophon"><i class="fa fa-user"></i>Naveen Singh</div>
												<div class="colophon"><i class="fa fa-user"></i>Ajay Tulsiyan</div>
												<div class="colophon"><i class="fa fa-user"></i>Jumesh Kumar Swain </div>
												<div class="colophon"><i class="fa fa-user"></i>Jagnarayan Sharma</div>
												<div class="colophon"><i class="fa fa-user"></i>Sunil Tiwari</div>
												<div class="colophon"><i class="fa fa-user"></i>Mohan Vishwakarma</div>
												<div class="colophon"><i class="fa fa-user"></i>Sandeep Vishwakarma</div>
												<div class="colophon"><i class="fa fa-user"></i>Visheshwar Yadav</div>
												
												
											</div>
										</div>
									</li>
									
									
								</ul>

								<!--<div class="text-center">
									<a href="#" class="button">See all seremons</a>
								</div>-->
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
					<div style="text-align: center;"> <p class="section-title"> Special Thanks to Sanjay Shukla and Vivek Sinha</p></div>
				</div> <!-- section -->
			
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="widget">
								<h3 class="widget-title">Our address</h3>
								<p>Shri Ram Parivar Navdurga Durgapuja Samiti.</p>
								<ul class="address">
									<li><i class="fa fa-map-marker"></i>9th main, 2nd Cross, Begur Main Road, Hogasandra, Bengaluru- 560068</li>
									<li><i class="fa fa-phone"></i> 9738885802/9886194886/9060699109</li>
									<li><i class="fa fa-envelope"></i> <a href="mailto:anujsingh75@gmail.com">anujsingh75@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="widget">
								<h3 class="widget-title">Latest Update</h3>
								<ul class="bullet">
									<li><a href="documents/d1.pdf">Puja Details</a></li>
									
								</ul>
							</div>
						</div>
						
						<div class="col-md-4">
					    <input type="button" class="buttton"onclick="location.href='login/index.html';" value="Login" </>
						
							<div class="widget">
								<h3 class="widget-title">Feedback</h3>
								<form action="#" class="contact-form">
									<div class="row">
										<div class="col-md-6"><input type="text" placeholder="Your name..."></div>
										<div class="col-md-6"><input type="text" placeholder="Email..."></div>
									</div>
									
									<textarea name="" placeholder="Your message..."></textarea>
									<div class="text-right"><a href="mailto:anujsingh75@gmail.com"><input type="submit" value="Submit"/></a></div>
									
									
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					<p class="colophon">Copyright 2020 Darshanapp.com. All right reserved</p>
				</div><!-- .container -->
			</footer> <!-- .site-footer -->

		</div>
		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script src="js/popup.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
		
	</body>





</html>