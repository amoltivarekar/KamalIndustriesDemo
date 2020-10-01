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
		$product_id = $_REQUEST['prid'];
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
						        	<a class="nav-link text-white dropdown-toggle" href="products-category.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          		Our Products
						        	</a>
							        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							        	<ul class="nav navbar-nav">
							        		<li>
							          			<a class="dropdown-item" href="#">Capsule Section Machine</a>
							          		</li>
							          		<li>
							          			<a class="dropdown-item" href="#">Liquid Section</a>
							          		</li>
							          		<li>
							          			<a class="dropdown-item" href="#">Ointment Section</a>
							          		</li>
							          		<li>
							          			<a class="dropdown-item" href="#">Tablet Section</a>
							          		</li>
							          		<li>
							          			<a class="dropdown-item" href="#">SS Fabricated Items</a>
							          		</li>
							          		<li>
							          			<a class="dropdown-item" href="#">P P Capping</a>
							          		</li>
							          		<li>
							          			<a class="dropdown-item" href="#">Capsule Loader</a>
							          		</li>
							          		<li>
							          			<a class="dropdown-item" href="#">Capsule Filling</a>
							          		</li>
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
				<div class="body-content bg-white">
					<img class="d-block w-100" src="images/template_photo_company-profile.jpg" alt="banner" />
					<div class="p-3">
						<h5 class="font-weight-bold text-center pt-4 pb-2 letterSpace2px text-uppercase">capsule polishing machine</h5>
						<hr>
						<div class="row mx-0 my-4">
							<div class="col-md-1 p-2 rounded-left opacity-point-1 d-flex align-items-center justify-content-center">
								<i class="fa fa-chevron-circle-left fa-3x text-light"></i>
							</div>
							<div class="col-md-10 p-0">
								<div class="p-1 d-flex align-items-center justify-content-center">
									<img class="img-box" src="images/oven-tray-drier.jpg" alt="product img">
								</div>
								<div class="text-center p-1">
									<p class="m-0 letterSpace1px">
										<span class="font-weight-bold font-14 theme-primary-text-color text-uppercase">Capsule polishing machine</span>
									</p>
									<p class="m-0 letterSpace1px">
										<span class="font-weight-bold font-14">Product Code : </span>
										<span class="font-13">25</span>
									</p>
									<p class="m-0 letterSpace1px">										<span class="font-13">Kamal E Industries</span>
									</p>
								</div>
							</div>
							<div class="col-md-1 p-2 rounded-right opacity-point-1 d-flex align-items-center justify-content-center">
								<i class="fa fa-chevron-circle-right fa-3x text-light"></i>
							</div>
						</div>
						<div class="text-center py-2">
							<button class="btn btn-sm btn-outline-light font-weight-bold letterSpace1px text-uppercase px-3 py-2 mx-2 my-1">get a price/quote</button>
							<button class="btn btn-sm btn-outline-light font-weight-bold letterSpace1px text-uppercase px-3 py-2 mx-2 my-1">ask a question</button>
							<button type="button" class="btn btn-sm btn-outline-light font-weight-bold letterSpace1px text-uppercase px-3 py-2 mx-2 my-1" data-toggle="modal" data-target="#inquiry">send inquiry</button>
						</div>
						<div class="modal fade" id="inquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  	<div class="modal-dialog" role="document">
						    	<div class="modal-content">
						    		<div class="modal-header bg-light">
							        	<h5 class="modal-title text-uppercase font-weight-bold letterSpace1px" id="exampleModalLabel">send inquiry</h5>
							        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							    			<span aria-hidden="true">&times;</span>
							        	</button>
							    	</div>
							    	<div class="modal-body px-3 py-4">
							    		<h6 class="font-weight-bold font-14">Describe Your BUYING Requirement. <span class="text-danger font-weight-bold">*</span></h6>
										<p class="font-12">
											<span class="text-danger font-weight-bold">*</span> Tips on getting accurate quotes. Please include product name, order quantity, usage, special requests if any in your inquiry.
										</p>
										<div class="input-group">
									  		<textarea class="form-control" aria-label="With textarea"></textarea>
										</div>
										<div class="input-group pt-3 pb-2">
											<span class="pr-2 font-weight-bold font-14">Add Attachment</span>
											<input type="file" class="btn btn-sm btn-default p-0">
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="font-weight-bold font-14 py-2">Email <span class="text-danger">*</span></div>
												<div><input type="text" class="form-control" value=""></div>
											</div>
											<div class="col-md-6">
												<div class="font-weight-bold font-14 py-2">Mobile No. <span class="text-danger">*</span></div>
												<div class="input-group">
													<div class="input-group-prepend">
				          								<div class="input-group-text">+91</div>
				        							</div>
													<input type="text" class="form-control" value="">
												</div>
											</div>
										</div>
							    	</div>
							    	<div class="modal-footer bg-light rounded">
							        	<button type="button" class="btn btn-sm btn-secondary text-uppercase font-weight-bold px-3 py-2 font-13 letterSpace1px" data-dismiss="modal">close</button>
							        	<button class="btn btn-sm btn-outline-light text-uppercase font-weight-bold px-3 py-2 font-13 letterSpace1px">SEND INQUERY</button>
							    	</div>
						    	</div>
							</div>
						</div>
						<div class="media-row-center py-2">
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">price and quantity</h6>
								<div class="row p-1 m-0 border border-light">
									<div class="col-md-6">
										<div class="row text-left p-1">
											<div class="col-6 font-12 font-weight-bold letterSpace1px">
												Minimum order quantity
											</div>
											<div class="col-6 font-12 letterSpace1px">
												1 Piece
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">product specifications</h6>
								<div class="row p-1 m-0 border border-light">
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Type
											</div>
											<div class="col-7 font-12 letterSpace1px">
												Capsule Polisher
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Material
											</div>
											<div class="col-7 font-12 letterSpace1px">
												Stainless Steel
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Computerized
											</div>
											<div class="col-7 font-12 letterSpace1px">
												No
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Control Mode
											</div>
											<div class="col-7 font-12 letterSpace1px">
												Automatic
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">product description</h6>
								<div class="row text-left p-1 m-0 border border-light">
									<div class="col-md-12 font-12 letterSpace1px">
										KEI AUTOMATIC CAPSULE INSPECTION CUM POLISHING MACHINE. The Machine does both inspection and polishing in TWO STAGES. The machine is provided with a SS hopper, a 230 v single phase vibrator fitted below the SS hopper, a SS powder collection tray, Ptfe inspection belt fitted ½ hp motor and provided with tube light for inspection of capsules. The polishing section is provided with a 1 hp motor and has 2 nylon brushes with polishing cloths covered by SS pipe, gearbox for brushing unit drive with variable speed pulley and complete with SS cover. Dust collection unit for collection of powder.
									</div>
								</div>
							</div>
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold">trade information</h6>
								<div class="row p-1 m-0 border border-light">
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Payment Terms
											</div>
											<div class="col-7 font-12 letterSpace1px">
												Cheque
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Delivery Time
											</div>
											<div class="col-7 font-12 letterSpace1px">
												8-12 Week
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Main Export Market(s)
											</div>
											<div class="col-7 font-12 letterSpace1px">
												Asia, Australia, North America, South America, Eastern Europe, Western Europe, Middle East, Africa
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row text-left pb-1">
											<div class="col-5 font-12 font-weight-bold letterSpace1px">
												Main Domestic Market
											</div>
											<div class="col-7 font-12 letterSpace1px">
												All India
											</div>
										</div>
									</div>
								</div>
							</div>
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
							  		<textarea class="form-control" aria-label="With textarea"></textarea>
								</div>
								<div class="input-group pt-3 pb-2">
									<span class="pr-2 font-weight-bold font-14">Add Attachment</span>
									<input type="file" class="btn btn-sm btn-default p-0">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="font-weight-bold font-14 py-2">Email <span class="text-danger">*</span></div>
										<div><input type="text" class="form-control" value=""></div>
									</div>
									<div class="col-md-6">
										<div class="font-weight-bold font-14 py-2">Mobile No. <span class="text-danger">*</span></div>
										<div class="input-group">
											<div class="input-group-prepend">
		          								<div class="input-group-text">+91</div>
		        							</div>
											<input type="text" class="form-control" value="">
										</div>
									</div>
								</div>
								<div class="text-center mt-5">
									<button class="btn btn-sm btn-outline-light font-weight-bold px-3 py-2 font-13 letterSpace1px">SEND INQUERY</button>
								</div>
							</div>
						</div>
						<div class="media-row-center py-2">
							<div class="my-4">
								<h6 class="text-uppercase font-13 letterSpace1px font-weight-bold my-3">
									other products in <sup class="fa fa-quote-left font-8"></sup> capsule section machine <sup class="fa fa-quote-right font-8"></sup> category</h6>
								<div class="row m-0 py-1 border border-light d-flex align-items-center justify-content-center">
									<div class="col-md-3 py-2">
										<div class="card">
											<img class="card-img-top p-3" src="images/oven-tray-drier.jpg" alt="Card image cap">
											<div class="card-body text-center border-top">
									      		<h6 class="card-title font-weight-bold font-12 m-0 letterSpace1px">DRYING OVEN-TRAY DRIER</h6>
									    	</div>
											<div class="card-footer text-center">
												<span class="text-danger font-weight-bold font-14 text-uppercase">send inquiry</span>
											</div>
									  	</div>
									</div>
									<div class="col-md-3 py-2">
										<div class="card">
											<img class="card-img-top p-3" src="images/oven-tray-drier.jpg" alt="Card image cap">
											<div class="card-body text-center border-top">
									      		<h6 class="card-title font-weight-bold font-12 m-0 letterSpace1px">DRYING OVEN-TRAY DRIER</h6>
									    	</div>
											<div class="card-footer text-center">
												<span class="text-danger font-weight-bold font-14 text-uppercase">send inquiry</span>
											</div>
									  	</div>
									</div>
									<div class="col-md-3 py-2">
										<div class="card">
											<img class="card-img-top p-3" src="images/oven-tray-drier.jpg" alt="Card image cap">
											<div class="card-body text-center border-top">
									      		<h6 class="card-title font-weight-bold font-12 m-0 letterSpace1px">DRYING OVEN-TRAY DRIER</h6>
									    	</div>
											<div class="card-footer text-center">
												<span class="text-danger font-weight-bold font-14 text-uppercase">send inquiry</span>
											</div>
									  	</div>
									</div>
									<div class="col-md-3 py-2">
										<div class="card">
											<img class="card-img-top p-3" src="images/oven-tray-drier.jpg" alt="Card image cap">
											<div class="card-body text-center border-top">
									      		<h6 class="card-title font-weight-bold font-12 m-0 letterSpace1px">DRYING OVEN-TRAY DRIER</h6>
									    	</div>
											<div class="card-footer text-center">
												<span class="text-danger font-weight-bold font-14 text-uppercase">send inquiry</span>
											</div>
									  	</div>
									</div>
									<div class="col-md-3 py-2">
										<div class="card">
											<img class="card-img-top p-3" src="images/oven-tray-drier.jpg" alt="Card image cap">
											<div class="card-body text-center border-top">
									      		<h6 class="card-title font-weight-bold font-12 m-0 letterSpace1px">DRYING OVEN-TRAY DRIER</h6>
									    	</div>
											<div class="card-footer text-center">
												<span class="text-danger font-weight-bold font-14 text-uppercase">send inquiry</span>
											</div>
									  	</div>
									</div>
									<div class="col-md-3 py-2">
										<div class="card">
											<img class="card-img-top p-3" src="images/oven-tray-drier.jpg" alt="Card image cap">
											<div class="card-body text-center border-top">
									      		<h6 class="card-title font-weight-bold font-12 m-0 letterSpace1px">DRYING OVEN-TRAY DRIER</h6>
									    	</div>
											<div class="card-footer text-center">
												<span class="text-danger font-weight-bold font-14 text-uppercase">send inquiry</span>
											</div>
									  	</div>
									</div>
									<div class="col-md-3 py-2">
										<div class="card">
											<img class="card-img-top p-3" src="images/oven-tray-drier.jpg" alt="Card image cap">
											<div class="card-body text-center border-top">
									      		<h6 class="card-title font-weight-bold font-12 m-0 letterSpace1px">DRYING OVEN-TRAY DRIER</h6>
									    	</div>
											<div class="card-footer text-center">
												<span class="text-danger font-weight-bold font-14 text-uppercase">send inquiry</span>
											</div>
									  	</div>
									</div>
								</div>
							</div>
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