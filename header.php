<div class="container">
	<div class="header-logo">
		<div class="row">
			<div class="col-md-5">
				<a href="index.php"><img class="logo" src="images/logo.jpg" alt="Kamal-E-Industries"></a>
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
			        	<a class="nav-link text-white" href="index.php">Home Page</a>
			      	</li>
			      	<li class="nav-item">
						<a class="nav-link text-white" href="company-profile.php">Company Profile</a>
					</li>
			      	<li class="nav-item dropdown">
			        	<a class="nav-link text-white dropdown-toggle" href="category.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
				        						<?php echo '<a class="dropdown-item" href="categories-products.php?prdctgid='.$row['ID'].'">'; ?>
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
						<a class="nav-link text-white" href="contact-us.php">Contact Us</a>
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