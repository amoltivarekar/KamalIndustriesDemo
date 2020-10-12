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
	<?php include_once 'connection.php'; ?>
	<body>
		<div class="page-body">
			<div class="container text-right fixed-bottom">
				<div class="btn btn-sm btn-outline-light bg-danger mb-4 mr-2" id="pageUp">
					<a href="#"><i class="fa fa-angle-up fa-2x font-weight-bold px-1 text-white"></i></a>
				</div>
			</div>
			<?php include_once 'header.php'; ?>
			<div class="container">
				<div class="body-content">
					<?php include_once 'modal.html' ?>
					<div id="carouselSlideIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselSlideIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselSlideIndicators" data-slide-to="1"></li>
							<li data-target="#carouselSlideIndicators" data-slide-to="2"></li>
							<li data-target="#carouselSlideIndicators" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner w-100">
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
					<div id="card-carousel" class="carousel slide" data-interval="false">
						<div class="carousel-inner row w-100 mx-0 my-2 p-1">
							<?php 
							$sql = "SELECT * FROM all_products";
							$result = $conn->query($sql);

							$count = 0;

							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
								$count ++;
							
								if ($count == 1){
								echo '<div class="carousel-item col-md-3 active">';
								} else {
								echo '<div class="carousel-item col-md-3">';
								}
							?>
									<div class="card">
										<?php echo '<img class="card-img-top p-3 img-box" src="'.$row['img_path'].'" alt="Card image cap"/>' ?>
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
						</div>
						<a class="carousel-control-prev" href="#card-carousel" role="button" data-slide="prev">
							<span class="fa fa-chevron-left fa-2x text-secondary" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#card-carousel" role="button" data-slide="next">
							<span class="fa fa-chevron-right fa-2x text-secondary" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<h6 class="p-3 font-weight-bold text-center">Offering highly productive and power efficient Capsule Filling Machine, Bottle Washing Machine,<br> Rapid Mixer Granulator, etc. at affordable prices...</h6>
					<h5 class="px-3 pt-4 pb-2 text-center font-weight-bold">About Us</h5>
					<p class="px-3 pb-4 font-14 about-content">
						Save your time, energy and money with technically advanced <b>Processing & Packaging Machinery for food, beverage, pharmaceutical, chemical and other industries</b>, presented by <b>Kamal E Industries</b>. We introduce ourselves as a key <b>manufacturer, supplier and exporter of Bottle Washing Machine, Strip Packing Machine, Capsule Filling Machine, Sealing & Capping Machines, Batch Coding Machine, S.S.Tanks, Rapid Mixer Granulator, Reaction Vessels, Conveyors, etc</b>. Owing to our well-equipped infrastructural facility, we have been designing a splendid range of Machinery that provides higher productivity in minimum time.
					</p>
					<div class="best-products pb-5">
						<h5 class="font-weight-bold text-center text-white letterSpace1px pt-5 pb-4">Best Selling Products</h5>
						<div id="best-product-card-carousel" class="carousel slide" data-interval="false">
							<div class="carousel-inner row w-100 m-0 p-1">
								<?php 
								$sql = "SELECT * FROM all_products where best_selling_product=1";
								$result = $conn->query($sql);

								$count = 0;

								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
									$count ++;
								
									if ($count == 1){
									echo '<div class="carousel-item col-md-3 active">';
									} else {
									echo '<div class="carousel-item col-md-3">';
									}
								?>
										<div class="card">
											<?php echo '<img class="card-img-top p-3 img-box" src="'.$row['img_path'].'" alt="Card image cap"/>' ?>
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
							</div>
							<a class="carousel-control-prev" href="#best-product-card-carousel" role="button" data-slide="prev">
								<span class="fa fa-chevron-left fa-2x text-secondary" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#best-product-card-carousel" role="button" data-slide="next">
								<span class="fa fa-chevron-right fa-2x text-secondary" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<?php include_once 'footer.html'; ?>
				</div>
			</div>
		</div>
	</body>
</html>