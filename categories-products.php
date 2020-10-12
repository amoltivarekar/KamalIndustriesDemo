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
	<?php 
		$prd_ctg_id = "";
		$prd_ctg_id = $_REQUEST['prdctgid'];
	?>
	<body>
		<div class="page-body">
			<div class="container text-right fixed-bottom">
				<div class="btn btn-sm btn-outline-light bg-danger mb-4 mr-2" id="pageUp">
					<a href="#"><i class="fa fa-angle-up fa-2x font-weight-bold px-1 text-white"></i></a>
				</div>
			</div>
			<?php include_once 'header.php' ?>
			<div class="container">
				<div class="body-content bg-white">
					<?php include_once 'modal.html' ?>
					<?php if($prd_ctg_id != ""){
						$sql_ctg_name = "SELECT product_category_name FROM product_categories WHERE ID=".$prd_ctg_id;

						$result_ctg_name = mysqli_query($conn,$sql_ctg_name);
						$ctg_name = mysqli_fetch_assoc($result_ctg_name);
					?>
					<div class="p-3">
						<h6 class="font-weight-bold letterSpace1px text-uppercase pt-4 pb-3"><?php echo $ctg_name['product_category_name']; ?></h6>
						<?php
							$sql = "SELECT * FROM all_products where product_category_ID=".$prd_ctg_id;
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) { 
						?>
						<div class="card my-3">
							<div class="row px-3">
								<div class="col-md-3 py-3">
									<div class="card">
										<?php echo '<img class="card-img-top p-3 img-box" src="'.$row['img_path'].'" alt="Card image cap">'; ?>
										<div class="card-footer text-center">
											<span class="font-weight-bold font-12 badge badge-secondary px-2 py-2"><?php echo $row['product_code']; ?></span>
										</div>
							  		</div>
								</div>
								<div class="col-md-9 py-3">
									<h6 class="font-weight-bold letterSpace1px theme-primary-text-color text-uppercase font-14 border-bottom pb-3"><?php echo $row['product_name']; ?></h6>
									<div class="row pt-2">
										<?php if($row['type'] != ''){ ?>
											<div class="col-md-6 pt-1">
												<div class="row">
													<div class="col-5 font-13 font-weight-bold letterSpace1px">
														Type
													</div>
													<div class="col-7 font-13 letterSpace1px">
														<?php echo $row['type']; ?>
													</div>
												</div>
											</div>
										<?php } ?>
										<?php if($row['control_mode'] != ''){ ?>
										<div class="col-md-6 pt-1">
											<div class="row">
												<div class="col-5 font-13 font-weight-bold letterSpace1px">
													Control Mode
												</div>
												<div class="col-7 font-13 letterSpace1px">
													<?php echo $row['control_mode']; ?>
												</div>
											</div>
										</div>
										<?php } ?>
										<?php if($row['material'] != ''){ ?>
										<div class="col-md-6 pt-1">
											<div class="row">
												<div class="col-5 font-13 font-weight-bold letterSpace1px">
													Material
												</div>
												<div class="col-7 font-13 letterSpace1px">
													<?php echo $row['material']; ?>
												</div>
											</div>
										</div>
										<?php } ?>
										<?php if($row['computerized'] != ''){ ?>
										<div class="col-md-6 pt-1">
											<div class="row">
												<div class="col-5 font-13 font-weight-bold letterSpace1px">
													Computerized
												</div>
												<div class="col-7 font-13 letterSpace1px">
													<?php echo $row['computerized']; ?>
												</div>
											</div>
										</div>
										<?php } ?>
										<?php if($row['delivery_time'] != ''){ ?>
										<div class="col-md-6 pt-1">
											<div class="row">
												<div class="col-5 font-13 font-weight-bold letterSpace1px">
													Delivery Time
												</div>
												<div class="col-7 font-13 letterSpace1px">
													<?php echo $row['delivery_time']; ?>
												</div>
											</div>
										</div>
										<?php } ?>
									</div>
									<div class="text-center pt-5">
										<?php echo '<a class="align-bottom btn btn-sm text-uppercase btn-outline-light text-white font-weight-bold px-3 py-2 letterSpace1px" href="product.php?prid='.$row['ID'].'">view more</a>';
										?>
									</div>
								</div>
							</div>
						</div>
						<?php 
								}
							} else{
								echo "<h6 class='text-center py-5 letterSpace2px font-weight-bold theme-primary-text-color text-uppercase'>records not found...</h6>";
							}
						?>
					</div>
					<?php } else{
						echo "<h6 class='text-center py-5 letterSpace2px font-weight-bold theme-primary-text-color text-uppercase'>something went wrong...please try again</h6>";
					}?>
					<?php include_once 'footer.html'; ?>
				</div>
			</div>
		</div>
	</body>
</html>