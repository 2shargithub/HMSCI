<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UEMR System</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;1,600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/c646f67c6c.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url();?>template/css/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>template/css/main.css">
</head>
<body>

<header>
	<nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgba(0,147,173,0.7);
    border-bottom: 2px solid rgba(0,147,173,0.7);
    border-top: 2px solid rgba(0,147,173,0.7);">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">UEMR System</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#abt">About Us</a>
	        </li>
	         <li class="nav-item">
	          <a class="nav-link" href="#doc">Our Doctors</a>
	        </li>
	         <li class="nav-item">
	          <a class="nav-link" href="#dept">Departments</a>
	        </li>
	         <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url() . 'index.php?admin/dashboard' ?>">Book an Appointment</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url() . 'index.php?admin/dashboard' ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Login
	          </a>	         
	        </li>
	         <li class="nav-item">
	          <a class="nav-link" href="#con">Contact Us</a>
	        </li>
	      </ul>
	     <!--  <form class="d-flex" role="search">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form> -->
	    </div>
	  </div>
	</nav>
</header>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    	<div class="carousel-caption d-md-block align-items-center">
            <h1>Emergency Doctors</h1>
           
         </div>
      <img src="template/images/hms.png" class="d-block w-100" alt="...">
        

    </div>

   <!--  <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
</div>
<section class="grey">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md 4 col-lg-4">
				<p><i class="fas fa-phone" style=" font-weight: 600;color:#08529c"></i>&nbsp;Place a call through today</p>
					<span style="margin-left: 16px;">&nbsp;00000000</span>
			</div>
			<div class="col-12 col-md 4 col-lg-4">
				<p><i class="fas fa-comments"style=" font-weight: 600;color:#08529c"></i>&nbsp;Chat with us today</p>
				<span style="margin-left: 16px;">&nbsp;abc@gmail.com</span>
			</div>
			<div class="col-12 col-md 4 col-lg-4">
				<p><i class="fas fa-location-arrow"style=" font-weight: 600;color:#08529c"></i>&nbsp;Vist our Location</p>
				<span style="margin-left: 16px;">&nbsp;Somewhwre in Nigeria</span>
			</div>
		</div>
	</div>
	
</section>
<section class="abt mt-5 mb-5" id="abt">
	<div class="container">
		<h2>About US</h2>
		<div class="row">
		<div class="col-12 col-md-12 col-lg-12">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</div>	
		
		</div>
	</div>
</section>

<section class="doc mt-5 mb-5" id="doc">
	<div class="container">
		<h2>Our Doctors</h2>
			<div class="owl-carousel owl-theme" id="owl-one">
		  <div class="item">
		   	<div class="card" style="width: 16rem;">
		   	  <img src="template/images/dr.png" class="card-img-top" alt="...">
		   	  <div class="card-body">
		   	    <h5 class="card-title">Dr. ABC </h5>
		   	    <p class="card-text">Physician</p>
		   	   <!--  <a href="#" class="btn btn-primary">Go </a> -->
		   	  </div>
		   	</div>
		   	
		   </div>
		   <div class="item">
		   	<div class="card" style="width: 16rem;">
		   	  <img src="template/images/dr.png" class="card-img-top" alt="...">
		   	  <div class="card-body">
		   	    <h5 class="card-title">Dr. ABC </h5>
		   	    <p class="card-text">Physician</p>
		   	   <!--  <a href="#" class="btn btn-primary">Go </a> -->
		   	  </div>
		   	</div>
		   	
		   </div>
		   <div class="item">
		    	<div class="card" style="width: 16rem;">
		    	  <img src="template/images/dr.png" class="card-img-top" alt="...">
		    	  <div class="card-body">
		    	    <h5 class="card-title">Dr. ABC </h5>
		    	    <p class="card-text">Physician</p>
		    	   <!--  <a href="#" class="btn btn-primary">Go </a> -->
		    	  </div>
		    	</div>
		    	
		    </div>
		    <div class="item">
		    	<div class="card" style="width: 16rem;">
		    	  <img src="template/images/dr.png" class="card-img-top" alt="...">
		    	  <div class="card-body">
		    	    <h5 class="card-title">Dr. ABC </h5>
		    	    <p class="card-text">Physician</p>
		    	   <!--  <a href="#" class="btn btn-primary">Go </a> -->
		    	  </div>
		    	</div>
		    	
		    </div>
		    <div class="item">
		    	<div class="card" style="width: 16rem;">
		    	  <img src="template/images/dr.png" class="card-img-top" alt="...">
		    	  <div class="card-body">
		    	    <h5 class="card-title">Dr. ABC </h5>
		    	    <p class="card-text">Physician</p>
		    	   <!--  <a href="#" class="btn btn-primary">Go </a> -->
		    	  </div>
		    	</div>
		    	
		    </div>
		    <div class="item">
		    	<div class="card" style="width: 16rem;">
		    	  <img src="template/images/dr.png" class="card-img-top" alt="...">
		    	  <div class="card-body">
		    	    <h5 class="card-title">Dr. ABC </h5>
		    	    <p class="card-text">Physician</p>
		    	   <!--  <a href="#" class="btn btn-primary">Go </a> -->
		    	  </div>
		    	</div>
		    	
		    </div>
		    
		</div>
	</div>
						
</section>

<section class="doc mt-5 mb-5" id="dept">
	<div class="container">
		<h2>Our Departments</h2>
			<div class="owl-carousel owl-theme" id="owl-two">
	
		 		<div class="item">
				 <div class="card mb-3" style="max-width: 540px;">
				   <div class="row g-0">
				     <div class="col-md-4">
				       <img src="template/images/dep1.png" class="img-fluid rounded-start" alt="...">
				     </div>
				     <div class="col-md-8">
				       <div class="card-body">
				         <h5 class="card-title">Cardiology6</h5>
				         <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
				         <!--  <a href="#" class="btn btn-primary">Go </a> -->
				       </div>
				     </div>

				   </div>
				 </div>
				</div>
				<div class="item">
				 <div class="card mb-3" style="max-width: 540px;">
				   <div class="row g-0">
				     <div class="col-md-4">
				       <img src="template/images/dep1.png" class="img-fluid rounded-start" alt="...">
				     </div>
				     <div class="col-md-8">
				       <div class="card-body">
				         <h5 class="card-title">Cardiology5</h5>
				         <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
				         <!--  <a href="#" class="btn btn-primary">Go </a> -->
				       </div>
				     </div>

				   </div>
				 </div>
				</div>
				<div class="item">
				 <div class="card mb-3" style="max-width: 540px;">
				   <div class="row g-0">
				     <div class="col-md-4">
				       <img src="template/images/dep1.png" class="img-fluid rounded-start" alt="...">
				     </div>
				     <div class="col-md-8">
				       <div class="card-body">
				         <h5 class="card-title">Cardiology4</h5>
				         <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
				         <!--  <a href="#" class="btn btn-primary">Go </a> -->
				       </div>
				     </div>

				   </div>
				 </div>
				</div>
				<div class="item">
				 <div class="card mb-3" style="max-width: 540px;">
				   <div class="row g-0">
				     <div class="col-md-4">
				       <img src="template/images/dep1.png" class="img-fluid rounded-start" alt="...">
				     </div>
				     <div class="col-md-8">
				       <div class="card-body">
				         <h5 class="card-title">Cardiology3</h5>
				         <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
				         <!--  <a href="#" class="btn btn-primary">Go </a> -->
				       </div>
				     </div>

				   </div>
				 </div>
				</div>
				<div class="item">
				 <div class="card mb-3" style="max-width: 540px;">
				   <div class="row g-0">
				     <div class="col-md-4">
				       <img src="template/images/dep1.png" class="img-fluid rounded-start" alt="...">
				     </div>
				     <div class="col-md-8">
				       <div class="card-body">
				         <h5 class="card-title">Cardiology2</h5>
				         <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
				         <!--  <a href="#" class="btn btn-primary">Go </a> -->
				       </div>
				     </div>

				   </div>
				 </div>
				</div>
				<div class="item">
				 <div class="card mb-3" style="max-width: 540px;">
				   <div class="row g-0">
				     <div class="col-md-4">
				       <img src="template/images/dep1.png" class="img-fluid rounded-start" alt="...">
				     </div>
				     <div class="col-md-8">
				       <div class="card-body">
				         <h5 class="card-title">Cardiology1</h5>
				         <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
				         <!--  <a href="#" class="btn btn-primary">Go </a> -->
				       </div>
				     </div>

				   </div>
				 </div>
				</div>

			</div>
	</div>
						
</section>
	<section class="contact" id="con">
		<div class="container">
			<h2>Contact Us</h2>
			<form class="row g-3 needs-validation" novalidate>
			  <div class="col-md-6">
			    <label for="validationCustom01" class="form-label">First Name</label>
			    <input type="text" class="form-control" id="validationCustom01" value="Your First name" required>
			    <div class="valid-feedback">
			      Looks good!
			    </div>
			  </div>
			  <div class="col-md-6">
			    <label for="validationCustom02" class="form-label">Last Name</label>
			    <input type="text" class="form-control" id="validationCustom02" value="Your Last name" required>
			    <div class="valid-feedback">
			      Looks good!
			    </div>
			  </div>
			  <div class="col-md-6">
			    <label for="validationCustomUsername" class="form-label">Email</label>
			    <div class="input-group has-validation">
			      <input type="text" class="form-control" id="validationCustomUsername" value="Your Email" aria-describedby="inputGroupPrepend" required>
			      <div class="invalid-feedback">
			        Please choose a username.
			      </div>
			    </div>
			  </div>
			  <div class="col-md-6">
			    <label for="validationCustomPhone" class="form-label">Phone Number</label>
			    <input type="tel" class="form-control" id="validationCustomPhone" value="Your Number" required>
			    <div class="valid-feedback">
			      Looks good!
			    </div>
			  </div>			
			  <div class="mb-3">
			    <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </div>
			  <div class="col-12">
			    <button class="btn btn-primary" type="submit">Submit</button>
			  </div>
			</form>
		</div>
	</section>


<footer>
	
	<div class="copyright text-center">
		<p>© 2022 UEMR System - Developed by UEL</p>
	</div>
</footer>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script src="<?php echo base_url();?>template/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>template/js/main.js"></script>
</body>
</html>
