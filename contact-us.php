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
					<?php include_once 'modal.html'; ?>
					<img class="d-block w-100" src="images/template_photo_company-profile.jpg" alt="banner" />
					<div class="form-content p-5 m-3 border rounded bg-light">
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
								<div class="font-weight-bold font-14 py-2">Email<span class="text-danger">*</span></div>
								<div><input type="text" class="form-control" id="email-inq"></div>
								<div class="text-danger d-none font-14 my-0 py-1" id="alert-danger-email-inq" role="alert">
  									Email address is required
								</div>
							</div>
							<div class="col-md-6">
								<div class="font-weight-bold font-14 py-2">Mobile No.<span class="text-danger">*</span></div>
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
							<button class="btn btn-sm btn-outline-light font-weight-bold px-3 py-2 font-13 letterSpace1px text-uppercase" id="send-inq">send inquiry</button>
						</div>
						<div class="alert alert-success mt-4 font-weight-bold d-none" id="alert-success-inq" role="alert">
  							Your inquiry successfully sent...
						</div>
						<div class="alert alert-danger mt-4 font-weight-bold d-none" id="alert-danger-inq" role="alert">
							Something went wrong...
						</div>
					</div>
					<?php include_once 'footer.html'; ?>
				</div>
			</div>
		</div>
	</body>
</html>