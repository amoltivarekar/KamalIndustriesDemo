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
				<div class="body-content bg-white">
					<?php include_once 'modal.html' ?>
					<img class="d-block w-100" src="images/template_photo_company-profile.jpg" alt="banner" />
					<div class="p-3">
						<h5 class="font-weight-bold text-center pt-4 pb-2 letterSpace2px">SHOWROOM</h5><hr>
						<?php 
							$sql = "SELECT * FROM product_categories";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {

									$sql_count = "SELECT COUNT(ID) FROM all_products WHERE product_category_ID=".$row['ID'];

									$result_count=mysqli_query($conn,$sql_count);
									$count=mysqli_fetch_assoc($result_count);
						?>
						<div class="row pt-2">
							<div class="col-md-3 py-3">
								<?php echo '<a href="categories-products.php?prdctgid='.$row['ID'].'">'; ?>
									<div class="card">
										<?php echo '<img class="card-img-top p-3 img-box" src="'.$row['product_img_path'].'" alt="Category image cap">'; ?>
										<div class="card-footer text-center">
											<span class="font-weight-bold font-12 badge badge-secondary px-2 py-2"><?php echo $count['COUNT(ID)']; ?></span>
										</div>
							  		</div>
								</a>
							</div>
							<div class="col-md-9 py-3">
								<?php echo '<a href="categories-products.php?prdctgid='.$row['ID'].'" class="nav-link p-0">'; ?>
									<h6 class="font-weight-bold letterSpace1px text-uppercase theme-primary-text-color"><?php echo $row['product_category_name']; ?></h6>
								</a>
								<hr>
								<div class="row">
									<?php 
										$sql_ctg_prd = "SELECT * FROM all_products WHERE product_category_ID=".$row['ID'];
										$result_ctg_prd = $conn->query($sql_ctg_prd);
										if ($result_ctg_prd->num_rows > 0) {
											while($row_ctg_prd = $result_ctg_prd->fetch_assoc()) {
									?>
									<div class="col-md-6 pb-1">
										<?php echo '<a href="product.php?prid='.$row_ctg_prd['ID'].'" class="font-13 font-weight-bold letterSpace1px text-dark nav-link p-0">'.$row_ctg_prd['product_name'].'</a>'; ?>
									</div>
									<?php
											}
										}
									?>
								</div>
								<div class="row btn-more">
									<div class="col-md-12 text-right">
										<?php echo '<a href="categories-products.php?prdctgid='.$row['ID'].'">'; ?>
											<button class="btn theme-primary-bg-color text-white px-2 py-1">More...</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php 	}
							} else{
								echo "<h6 class='text-center py-5 letterSpace2px font-weight-bold theme-primary-text-color text-uppercase'>records not found...</h6>";
							}
						?>
					</div>
					<?php include_once 'footer.html'; ?>
				</div>
			</div>
		</div>
	</body>
</html>