<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UEMR Hospital</title>

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
<!-- Chat Bot - Task 5 -->
<script>(function(w, d) { w.CollectId = "636032b470e4853cfa5ce09b"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
</head>
<body>

<header>
	<nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgba(0,147,173,1);
    border-bottom: 2px solid rgba(0,147,173,0.7);
    border-top: 2px solid rgba(0,147,173,0.7);">
	  <div class="container-fluid">
	    <!-- <a class="navbar-brand" href="#">UEMR System</a> -->
	    <a href="<?php echo base_url();?>">

        	<img src="<?php echo base_url();?>uploads/hmslg.png" style="height:65px; width:75px;"/>

        </a> &nbsp;&nbsp;<a class="navbar-brand" href="#">UEMR Hospital</a>

   
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
	          <a class="nav-link" href="<?php echo base_url() . 'index.php?patientregister' ?>">Patient Register</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url() . 'index.php?login' ?>">
	            Login
	          </a>	         
	        </li>

	         <!-- <li class="nav-item">
	          <a class="nav-link" href="#con">Contact Us</a>
	        </li> -->
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
            <h1 style="color: rgba(0,147,173,10);">Welcome to UEMR Hospital</h1>
           
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
					<span style="margin-left: 16px;">&nbsp;020 7946 0000</span>
			</div>
			<div class="col-12 col-md 4 col-lg-4">
				<p><i class="fas fa-comments"style=" font-weight: 600;color:#08529c"></i>&nbsp;Chat with us today</p>
				<span style="margin-left: 16px;">&nbsp;enquiry@uemr.com</span>
			</div>
			<div class="col-12 col-md 4 col-lg-4">
				<p><i class="fas fa-location-arrow"style=" font-weight: 600;color:#08529c"></i>&nbsp;Vist our Location</p>
				<span style="margin-left: 16px;">&nbsp;East London</span>
			</div>
		</div>
	</div>
	
</section>
<section class="abt mt-5 mb-5" id="abt">
	<div class="container">
		<h2>About US</h2>
		<div class="row">
		<div class="col-12 col-md-12 col-lg-12">
			<p>We offer a full range of local and specialist services, which includes one of the largest hospitals in the UK with one of London's busiest accident and emergency departments. Home to London's Air Ambulance, The UEMR hospital is also one of the capital's leading trauma and emergency care centres and hyper-acute stroke centres.</p>
		</div>	
		
		</div>
	</div>
</section>

<section class="doc mt-5 mb-5" id="doc">
	<div class="container">
		<h2>Our Doctors</h2>
			<div class="owl-carousel owl-theme" id="owl-one">
		  <div class="item" style="height: 25rem;">
		   	<div class="card" style="width: 16rem;">
		   	  <img src="template/images/dr.png" class="card-img-top" style="height: 250px;" alt="...">
		   	  <div class="card-body">
		   	    <h5 class="card-title">Dr. Daniel </h5>
		   	    <p class="card-text">Physician</p>
		   	   <!--  <a href="#" class="btn btn-primary">Go </a> -->
		   	  </div>
		   	</div>
		   	
		   </div>
		   <div class="item" style="height: 25rem;">
		   	<div class="card" style="width: 16rem;">
		   	  <img src="template/images/dr1.jpg" class="card-img-top" style="height: 250px;" alt="...">
		   	  <div class="card-body">
		   	    <h5 class="card-title">Dr. Kris Mick </h5>
		   	    <p class="card-text">Physician</p>
		   	   <!--  <a href="#" class="btn btn-primary">Go </a> -->
		   	  </div>
		   	</div>
		   	
		   </div>
		   <div class="item">
		    	<div class="card" style="width: 16rem;">
		    	  <img src="template/images/dr2.jpg" class="card-img-top" style="height: 250px;" alt="...">
		    	  <div class="card-body">
		    	    <h5 class="card-title">Dr. Michel </h5>
		    	    <p class="card-text">Physician</p>
		    	   <!--  <a href="#" class="btn btn-primary">Go </a> -->
		    	  </div>
		    	</div>
		    	
		    </div>
		    <div class="item">
		    	<div class="card" style="width: 16rem;">
		    	  <img src="template/images/dr3.jpg" class="card-img-top" style="height: 250px;" alt="...">
		    	  <div class="card-body">
		    	    <h5 class="card-title">Dr. Dyana Kris </h5>
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
				         <h5 class="card-title">Cardiology</h5>
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
				         <h5 class="card-title">Gynecology</h5>
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
				         <h5 class="card-title">Neurology</h5>
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
				         <h5 class="card-title">Nephrology</h5>
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
	


<footer>
	
	<div class="copyright text-center">
		<p>© 2022 UEMR Hospital - Developed by UEL</p>
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
