<!DOCTYPE html>
<html lang="en">
	<head>
		<title>kamal Industries</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  	<link rel="stylesheet" href="css/style.css">
	  	<script src="js/custom.js"></script>
	</head>
	<?php
		include_once 'connection.php';
	?>
	<body>
		<div class="page-body">
			<div class="container text-right fixed-bottom">
				<div class="btn btn-sm btn-outline-light bg-danger mb-4 mr-2" id="pageUp">
					<a href="#"><i class="fa fa-angle-up fa-2x font-weight-bold px-1 text-white"></i></a>
				</div>
			</div>
			<div class="container">
				<div class="header-logo">
					<div class="row">
						<div class="col-md-5">
							<a href="index.html"><img class="logo" src="images/logo.jpg" alt="Kamal-E-Industries"></a>
						</div>
						<div class="col-md-7 p-2">
							<h4 class="letterSpace2px">KAMAL INDUSTRIES</h4>
							<h6 class="letterSpace1px font-13">Mumbai, Maharastra, India</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="theme-primary-bg-color">
				<div class="container">
					<nav class="navbar navbar-expand-lg">
						<a class="navbar-brand text-design d-none" href="#"><h6>MENU</h6></a>
						<button class="navbar-toggler text-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="navbar-toggler-icon fa fa-bars" aria-hidden="true"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav mr-auto main-menu">
						      	<li class="nav-item">
						        	<a class="nav-link text-white" href="index.html">Home Page</a>
						      	</li>
						      	<li class="nav-item">
									<a class="nav-link text-white" href="company-profile.html">Company Profile</a>
								</li>
						      	<li class="nav-item dropdown">
						        	<a class="nav-link text-white dropdown-toggle" href="products-category.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
						          		Our Products
						        	</a>
							        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							        	<ul class="nav navbar-nav">
							        		<?php 
												$sql = "SELECT * FROM product_categories";
												$result = $conn->query($sql);
												if ($result->num_rows > 0) {
													while($row = $result->fetch_assoc()) {
											?>
							        					<li>
							          						<a class="dropdown-item" href="#">
							          							<?php  echo $row['product_category_name'] ?>
							          						</a>
							          					</li>
							          		<?php
							          				}
							          			}
							          		?>
							        	</ul>
							        </div>
						      	</li>
								<li class="nav-item">
									<a class="nav-link text-white" href="contact-us.html">Contact Us</a>
								</li>
						    </ul>
						    <form id="search" class="form-inline my-2 my-lg-0 pl-3 pr-3">
					      		<div class="float-left">
					      			<input class="form-control mr-sm-2 font-14" type="search" placeholder="Enter keywords to search" aria-label="Search">
					      		</div>
				      			<div class="pl-2 pr-2">
				      				<button class="btn btn-outline-light my-2 my-sm-0 font-14">
				      					<i class="fa fa-search" aria-hidden="true"></i>
				      				</button>
				      			</div>
					    	</form>
						</div>
					</nav>
				</div>
			</div>
			<div class="container">
				<div class="body-content">
					<div id="carouselSlideIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselSlideIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselSlideIndicators" data-slide-to="1"></li>
							<li data-target="#carouselSlideIndicators" data-slide-to="2"></li>
							<li data-target="#carouselSlideIndicators" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="images/template_photo_1.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/template_photo_2.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/template_photo_1.jpg" alt="Third slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/template_photo_2.jpg" alt="Forth slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselSlideIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselSlideIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<h6 class="p-3 font-weight-bold text-center">Offering highly productive and power efficient Capsule Filling Machine, Bottle Washing Machine,<br> Rapid Mixer Granulator, etc. at affordable prices...</h6>
					<div class="row p-3">
						<?php 
							$sql = "SELECT * FROM all_products";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
						?>
								<div class="col-md-3">
										<div class="card">
										<?php echo '<img class="card-img-top p-3" src="'.$row['img_path'].'" alt="Card image cap"/>' ?>
										<div class="card-body text-center border-top min-h-75">
								      		<h6 class="card-title font-weight-bold font-13 letterSpace1px"><?php echo $row['product_name'] ?></h6>
								    	</div>
								    	<?php echo '<a href="product.php?prid='.$row['ID'].'" class="view-more card-footer text-center text-danger font-weight-bold font-14 nav-link border-0">View More</a>' ?>
									</div>
							  	</div>
					  	<?php
					  			}
					  		}
					  	?>
						<!-- <div class="card">
							<img class="card-img-top p-3" src="images/planetary-mixer.jpg" alt="Card image cap">
							<div class="card-body text-center border-top">
					      		<h6 class="card-title font-weight-bold font-13 letterSpace1px">PLANETARY MIXER</h6>
					      		<p class="card-text font-13">Description about this product</p>
					    	</div>
							<div class="card-footer text-center">
								<span class="text-danger font-weight-bold font-14">View More</span>
							</div> 
					  	</div>
					  	<div class="card">
							<img class="card-img-top p-3" src="images/double-cone-blender.jpg" alt="Card image cap">
							<div class="card-body text-center border-top">
					      		<h6 class="card-title font-weight-bold font-13 letterSpace1px">DOUBLE CONE BLENDER</h6>
					      		<p class="card-text font-13">Description about this product</p>
					    	</div>
							<div class="card-footer text-center">
								<span class="text-danger font-weight-bold font-14">View More</span>
							</div>
					  	</div>
					  	<div class="card">
							<img class="card-img-top p-3" src="images/rapid-mixer-granulator.jpg" alt="Card image cap">
							<div class="card-body text-center border-top">
					      		<h6 class="card-title font-weight-bold font-13 letterSpace1px">FLUID BED DRYER</h6>
					      		<p class="card-text font-13">Description about this product</p>
					    	</div>
							<div class="card-footer text-center">
								<span class="text-danger font-weight-bold font-14">View More</span>
							</div>
					  	</div> -->
					</div>
					<h5 class="px-3 pt-4 pb-2 text-center font-weight-bold">About Us</h5>
					<p class="px-3 pb-4 font-14 about-content">
						Save your time, energy and money with technically advanced <b>Processing & Packaging Machinery for food, beverage, pharmaceutical, chemical and other industries</b>, presented by <b>Kamal E Industries</b>. We introduce ourselves as a key <b>manufacturer, supplier and exporter of Bottle Washing Machine, Strip Packing Machine, Capsule Filling Machine, Sealing & Capping Machines, Batch Coding Machine, S.S.Tanks, Rapid Mixer Granulator, Reaction Vessels, Conveyors, etc</b>. Owing to our well-equipped infrastructural facility, we have been designing a splendid range of Machinery that provides higher productivity in minimum time.
					</p>
					<div class="best-products pb-5">
						<h5 class="font-weight-bold text-center text-white letterSpace1px pt-5 pb-4">Best Selling Products</h5>
						<div class="row mx-0">
						<?php 
							$sql = "SELECT * FROM all_products where best_selling_product=1";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
						?>
								  	<div class="col-md-3 my-2">
								  		<div class="card">
								  			<?php echo '<img class="card-img-top p-3" src="'.$row['img_path'].'" alt="Card image cap"/>'?> 
											
											<div class="card-body d-flex align-items-center justify-content-center text-center border-top min-h-75">
									      		<h6 class="card-title font-weight-bold font-12 letterSpace1px text-uppercase mb-0"><?php echo $row['product_name'] ?></h6>
									    	</div>
											<div class="card-footer text-center">
												<span class="text-danger font-weight-bold font-14">View More</span>
											</div>
										</div>
								  	</div>
						<?php
								}
							}
						?>
						</div>
					</div>
					<div class="footer theme-secondary-bg-color px-3 pt-4">
						<div class="row">
							<div class="col-md-12">
								<h5 class="text-white font-weight-bold letterSpace1px">KAMAL E INDUSTRIES</h5>
								<h6 class="text-white font-14">Mumbai, Maharashtra, India</h6>
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-md-6">
								<p class="text-white font-13">C/O Collage Communications, 2, Mandar C.H.S., 193, Turner Road, Bandra West, Mumbai - 400050, Maharashtra, India</p>
							</div>
							<div class="col-md-6">
								<h6 class="text-white font-13 letterSpace1px">Mr. Anand Ratna (Proprietor)</h6>
								<h6 class="text-white font-13 letterSpace1px"><b>Mobile : </b> 08045800250</h6>
							</div>
						</div>
						<div class="row py-3">
							<div class="col-md-12">
								<h6 class="text-white font-13 letterSpace1px"><b>Phone : </b> 08045800250</h6>
								<h6 class="text-white font-13 letterSpace1px"><b>Fax : </b> 91-22-24373474</h6>
							</div>
						</div>
						<div class="row py-3 text-center theme-primary-bg-color">
							<div class="col-md-12">
								<button class="btn btn-sm btn-outline-light font-weight-bold letterSpace1px px-3 py-2 mx-2">SEND SMS</button>
								<button class="btn btn-sm btn-outline-light font-weight-bold letterSpace1px px-3 py-2 mx-2">SEND INQUIRY</button>
							</div>
						</div>
						<div class="row p-3 text-center theme-primary-bg-color">
							<div class="col-md-8 mx-auto">
								<div class="row">
									<div class="col-md-3">
										<h6 class="text-white font-13">Home Page</h6>
									</div>
									<div class="col-md-3">
										<h6 class="text-white font-13">Comapany Profile</h6>
									</div>
									<div class="col-md-3">
										<h6 class="text-white font-13">Our Products</h6>
									</div>
									<div class="col-md-3">
										<h6 class="text-white font-13">Contact Us</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>