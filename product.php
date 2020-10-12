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
		$product_id = "";
		$product_id = $_REQUEST['prid'];

		if($product_id != ''){
			$sql_next_id = "SELECT ID FROM all_products WHERE ID = (select min(ID) from all_products where ID > ".$product_id.")";

			$result_next_id = mysqli_query($conn,$sql_next_id);
			$next_id = mysqli_fetch_assoc($result_next_id);

			if($next_id != null){
				$next_id = $next_id['ID'];
			} else{
				$next_id = '';
			}

			$sql_prev_id = "SELECT ID FROM all_products WHERE ID = (select max(ID) from all_products where ID < ".$product_id.")";

			$result_prev_id = mysqli_query($conn,$sql_prev_id);
			$prev_id = mysqli_fetch_assoc($result_prev_id);

			if($prev_id != null){
				$prev_id = $prev_id['ID'];
			} else{
				$prev_id = '';
			}

		}
	?>
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
					<?php include_once 'modal.html'; ?>
					<?php
						if($product_id != ""){
							$sql = "SELECT * FROM all_products where ID=".$product_id;
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								$row = $result->fetch_assoc();
					?>
					<div class="p-3">
						<h5 class="font-weight-bold text-center pt-4 pb-2 letterSpace2px text-uppercase">
						<?php
							if($row['product_name'] != ""){
								echo $row['product_name'];
							}
						?>
						</h5>
						<hr>
						<div class="row mx-0 my-4">
							<?php if($prev_id != ''){?>
								<?php echo '<a class="col-md-1 btn btn-sm p-2 opacity-point-1 d-flex align-items-center justify-content-center nav-link" href="product.php?prid='.$prev_id.'">'; ?>
									<i class="fa fa-chevron-circle-left fa-3x text-light"></i>
								</a>
							<?php } else{ ?>
								<a class="col-md-1 btn btn-sm disabled p-2 opacity-point-1 d-flex align-items-center justify-content-center nav-link empty" >
									<i class="fa fa-chevron-circle-left fa-3x text-light"></i>
								</a>
							<?php } ?>
							<div class="col-md-10 p-0">
								<div class="p-1 d-flex align-items-center justify-content-center">
									<?php echo '<img class="img-box" src="'.$row['img_path'].'" alt="product img"/>'; ?>
								</div>
								<div class="text-center p-1">
									<p class="m-0 letterSpace1px">
										<span class="font-weight-bold font-14 theme-primary-text-color text-uppercase">
											<?php
												if($row['product_name'] != ""){
													echo $row['product_name'];
												}
											?>
										</span>
									</p>
									<p class="m-0 letterSpace1px">
										<span class="font-weight-bold font-14">Product Code : </span>
										<span class="font-13">
										<?php
											if($row['product_code'] != ""){
												echo $row['product_code'];
											}
										?>
										</span>
									</p>
									<p class="m-0 letterSpace1px">
										<span class="font-weight-bold font-13">Brand name : </span>
										<span class="font-13">
										<?php
											if($row['brand_name'] != ""){
												echo $row['brand_name'];
											}
										?>
										</span>
									</p>
								</div>
							</div>
							<?php if($next_id != ''){?>
								<?php echo '<a class="col-md-1 btn btn-sm p-2 opacity-point-1 d-flex align-items-center justify-content-center nav-link" href="product.php?prid='.$next_id.'">'; ?>
									<i class="fa fa-chevron-circle-right fa-3x text-light"></i>
								</a>
							<?php } else{ ?>
								<a class="col-md-1 btn btn-sm disabled p-2 opacity-point-1 d-flex align-items-center justify-content-center nav-link empty" >
									<i class="fa fa-chevron-circle-right fa-3x text-light"></i>
								</a>
							<?php } ?>
						</div>
						<div class="text-center py-2">
							<button type="button" class="btn btn-sm btn-outline-light font-weight-bold letterSpace1px text-uppercase px-3 py-2 mx-2 my-1" data-toggle="modal" data-target="#inquiry">get a price/quote</button>
							<button type="button" class="btn btn-sm btn-outline-light font-weight-bold letterSpace1px text-uppercase px-3 py-2 mx-2 my-1" data-toggle="modal" data-target="#inquiry">ask a question</button>
							<button type="button" class="btn btn-sm btn-outline-light font-weight-bold letterSpace1px text-uppercase px-3 py-2 mx-2 my-1" data-toggle="modal" data-target="#inquiry">send inquiry</button>
						</div>
						<div class="media-row-center py-2">
							<?php
								if($row['order_quantity'] != "") {
							?>
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">price and quantity</h6>
								<div class="row p-1 m-0 border border-light">
									<div class="col-md-6">
										<div class="row text-left p-1">
											<div class="col-6 font-12 font-weight-bold letterSpace1px">
												Minimum order quantity
											</div>
											<div class="col-6 font-12 letterSpace1px">
												<?php echo $row['order_quantity']; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
								}
							?>
							<?php
								if($row['type'] != "" || $row['material'] !="" || $row['computerized'] != "" || $row['control_mode'] !="") {
							?>
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">product specifications</h6>
								<div class="row p-1 m-0 border border-light">
									<?php if($row['type'] != "") { ?>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Type
											</div>
											<div class="col-7 font-12 letterSpace1px">
												<?php echo $row['type']; ?>
											</div>
										</div>
									</div>
									<?php } ?>
									<?php if($row['material'] != "") { ?>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Material
											</div>
											<div class="col-7 font-12 letterSpace1px">
												<?php echo $row['material']; ?>
											</div>
										</div>
									</div>
									<?php } ?>
									<?php if($row['computerized'] != "") { ?>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Computerized
											</div>
											<div class="col-7 font-12 letterSpace1px">
												<?php echo $row['computerized']; ?>
											</div>
										</div>
									</div>
									<?php } ?>
									<?php if($row['control_mode'] != "") { ?>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Control Mode
											</div>
											<div class="col-7 font-12 letterSpace1px">
												<?php echo $row['control_mode']; ?>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
							<?php
								}
							?>
							<?php
								if($row['description'] != "") {
							?>
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">product description</h6>
								<div class="row text-left p-1 m-0 border border-light">
									<div class="col-md-12 font-12 letterSpace1px">
										<?php echo $row['description']; ?>
									</div>
								</div>
							</div>
							<?php
								}
							?>
							<?php
								if($row['features'] != "") {
							?>
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">features</h6>
								<div class="row text-left p-1 m-0 border border-light">
									<div class="col-md-12 font-12 letterSpace1px">
										<?php
											$features_str = $row['features'];
											$features_arr = explode(", ", $features_str);
											for($i=0; $i<count($features_arr); $i++){
												echo $features_arr[$i].'</br>';
											}
										?>
									</div>
								</div>
							</div>
							<?php
								}
							?>
							<?php
								if($row['applications'] != "") {
							?>
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">applications</h6>
								<div class="row text-left p-1 m-0 border border-light">
									<div class="col-md-12 font-12 letterSpace1px">
										<?php
											$applications_str = $row['applications'];
											$applications_arr = explode(", ", $applications_str);
											for($i=0; $i<count($applications_arr); $i++){
												echo $applications_arr[$i].'</br>';
											}
										?>
									</div>
								</div>
							</div>
							<?php
								}
							?>
							<?php
								if($row['applications'] != "") {
							?>
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">applications</h6>
								<div class="row text-left p-1 m-0 border border-light">
									<div class="col-md-12 font-12 letterSpace1px">
										<?php
											$applications_str = $row['applications'];
											$applications_arr = explode(", ", $applications_str);
											for($i=0; $i<count($applications_arr); $i++){
												echo $applications_arr[$i].'</br>';
											}
										?>
									</div>
								</div>
							</div>
							<?php
								}
							?>
							<?php
								if($row['specifications'] != "") {
							?>
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">specifications</h6>
								<div class="row text-left p-1 m-0 border border-light">
									<div class="col-md-12 font-12 letterSpace1px">
										<?php echo $row['specifications']; ?>
									</div>
								</div>
							</div>
							<?php
								}
							?>
							<?php
								if($row['FOB_port'] != "" || $row['payment_terms'] !="" || $row['delivery_time'] != "" || $row['packaging_details'] !="" || $row['main_export_market'] !="" || $row['main_domestic_market'] !="") {
							?>
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">trade information</h6>
								<div class="row p-1 m-0 border border-light">
									<?php if($row['FOB_port'] != "") { ?>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												FOB port
											</div>
											<div class="col-7 font-12 letterSpace1px">
												<?php echo $row['FOB_port']; ?>
											</div>
										</div>
									</div>
									<?php } ?>
									<?php if($row['payment_terms'] != "") { ?>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Payment Terms
											</div>
											<div class="col-7 font-12 letterSpace1px">
												<?php echo $row['payment_terms']; ?>
											</div>
										</div>
									</div>
									<?php } ?>
									<?php if($row['delivery_time'] != "") { ?>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Delivery Time
											</div>
											<div class="col-7 font-12 letterSpace1px">
												<?php echo $row['delivery_time']; ?>
											</div>
										</div>
									</div>
									<?php } ?>
									<?php if($row['packaging_details'] != "") { ?>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Packaging Details
											</div>
											<div class="col-7 font-12 letterSpace1px">
												<?php echo $row['packaging_details']; ?>
											</div>
										</div>
									</div>
									<?php } ?>
									<?php if($row['main_export_market'] != "") { ?>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Main Export Market(s)
											</div>
											<div class="col-7 font-12 letterSpace1px">
												<?php echo $row['main_export_market']; ?>
											</div>
										</div>
									</div>
									<?php } ?>
									<?php if($row['main_domestic_market'] != "") { ?>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Main Domestic Market
											</div>
											<div class="col-7 font-12 letterSpace1px">
												<?php echo $row['main_domestic_market']; ?>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
							<?php
								}
							?>
						</div>
						<div class="pt-0 pb-2">
							<div class="my-4 form-content p-5 border rounded bg-light">
								<h5 class="my-2 text-center font-weight-bold letterSpace2px">KAMAL E INDUSTRIES
								</h5>
								<hr>
								<h6 class="pt-4 font-weight-bold font-14">Describe Your BUYING Requirement. <span class="text-danger font-weight-bold">*</span></h6>
								<p class="font-12">
									<span class="text-danger font-weight-bold">*</span> Tips on getting accurate quotes. Please include product name, order quantity, usage, special requests if any in your inquiry.
								</p>
								<div class="input-group">
							  		<textarea class="form-control" aria-label="With textarea" id="description-inq"></textarea>
								</div>
								<div class="text-danger d-none font-14 my-0 py-1" id="alert-danger-description-inq" role="alert">
  									Description is required
								</div>
								<div class="input-group pt-3 pb-2">
									<span class="pr-2 font-weight-bold font-14">Add Attachment</span>
									<input type="file" class="btn btn-sm btn-default p-0" id="attachment-inq">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="font-weight-bold font-14 py-2">Email <span class="text-danger">*</span></div>
										<div><input type="text" class="form-control" id="email-inq"></div>
										<div class="text-danger d-none font-14 my-0 py-1" id="alert-danger-email-inq" role="alert">
  											Email address is required
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="font-weight-bold font-14 py-2">Mobile No. <span class="text-danger">*</span></div>
										<div class="input-group">
											<div class="input-group-prepend">
		          								<div class="input-group-text">+91</div>
		        							</div>
											<input type="text" class="form-control" id="mobile-inq">
										</div>
										<div class="text-danger d-none font-14 my-0 py-1" id="alert-danger-mobile-inq" role="alert">
  											Mobile number is required
										</div>
									</div>
								</div>
								<div class="text-center mt-5">
									<button class="btn btn-sm btn-outline-light font-weight-bold px-3 py-2 font-13 letterSpace1px text-uppercase" id=
									"send-inq">send inquiry</button>
								</div>
								<div class="alert alert-success mt-4 font-weight-bold d-none" id="alert-success-inq" role="alert">
  									Your inquiry successfully sent...
								</div>
								<div class="alert alert-danger mt-4 font-weight-bold d-none" id="alert-danger-inq" role="alert">
  									Something went wrong...
								</div>
							</div>
						</div>
						<div class="media-row-center py-2">
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold my-3">
									other products in <sup class="fa fa-quote-left font-8"></sup> capsule section machine <sup class="fa fa-quote-right font-8"></sup> category
								</h6>
								<div class="row m-0 py-1 border border-light d-flex align-items-center justify-content-center">
									<?php 
										$sql = "SELECT * FROM all_products WHERE product_category_ID=(select product_category_ID from all_products where ID=".$product_id.") and ID !=".$product_id;
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()){
									?>
											<div class="col-md-3 py-2">
												<div class="card">
													<?php echo '<img class="card-img-top p-3 img-box" src="'.$row['img_path'].'" alt="Card image cap">'; ?>
													<div class="card-body text-center border-top min-h-75">
											      		<h6 class="card-title font-weight-bold font-12 m-0 letterSpace1px">
											      			<?php echo $row['product_name']; ?>
											      		</h6>
											    	</div>
													<?php echo '<a href="product.php?prid='.$row['ID'].'" class="view-more card-footer text-center text-danger font-weight-bold font-14 nav-link border-0">View More</a>' ?>
											  	</div>
											</div>
									<?php
											}
										}
									?>
								</div>
							</div>
						</div>
					</div>
					<?php
							} else {
								echo "<h6 class='text-center py-5 letterSpace2px font-weight-bold theme-primary-text-color text-uppercase'>records not found...</h6>";
							}
						} else{
							echo "<h6 class='text-center py-5 letterSpace2px font-weight-bold theme-primary-text-color text-uppercase'>something went wrong...please try again</h6>";
						}
					?>
					<?php include_once 'footer.html'; ?>
				</div>
			</div>
		</div>
	</body>
</html>