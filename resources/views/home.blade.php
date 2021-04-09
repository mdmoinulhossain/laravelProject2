<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopnopur</title>
	<link rel="shortcut icon" type="image/x-icon" href="files/custom/images/shopnopur.jpg">
	<link rel="stylesheet" href="files/external/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  	<link rel="stylesheet" type="text/css" href="files/custom/css/style.css">

	
</head>
<body>
	<!-- side menu -->
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	  <button class="dropdown-btn" onclick="window.location.href='productPage.html'">Men's Item 
	    <i class="fa fa-caret-down"></i>
	  </button>
	  <div class="dropdown-container">
	    <a href="#">Face Care</a>
	    <a href="#">Body Care</a>
	    <a href="#">Hair Style</a>
	    <a href="#">Private care</a>
	    <a href="#">Others</a>
	  </div>
	  <a href="#">Children Item</a>
	  <button class="dropdown-btn">Women's Item 
	    <i class="fa fa-caret-down"></i>
	  </button>
	  <div class="dropdown-container">
	    <a href="#">Face Care</a>
	    <a href="#">Eyes Care</a>
	    <a href="#">Nails</a>
	    <a href="#">Hair style</a>
	    <a href="#">Lips</a>
	    <a href="#">Body care</a>
	    <a href="#">Private care</a>
	    <a href="#">Others</a>
	  </div>
	</div>
	<!-- /side menu -->
	<div id="main">
	<!-- nav1 -->
	<nav class="navbar navbar-expand-sm clearfix" id="myNav1">
	  <!-- Brand -->
	  <div class="bars">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="fa fa-bars"></span>
		  </button>
	  </div>
	  <!-- Links -->
		<div class="collapse navbar-collapse nav1div" id="collapsibleNavbar">
		  <ul class="navbar-nav">
		  	<li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		        Language's
		      </a>
		      <div class="dropdown-menu">
		        <a class="dropdown-item" href="#">English</a>
		        <a class="dropdown-item" href="#">Bangla</a>
		      </div>
		    </li>
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		        Suppliar Account
		      </a>
		      <div class="dropdown-menu">
		        <a class="dropdown-item" href="#">Login</a>
		        <a class="dropdown-item" href="#">Sign Up</a>
		      </div>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#" id="me">Earning Opportunity</a>
		    </li>
		    <!-- Dropdown -->
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		        Customer
		      </a>
		      <div class="dropdown-menu">
		        <a class="dropdown-item" href="#">Login</a>
		        <a class="dropdown-item" href="#">Sign Up</a>
		      </div>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#" id="me">Track Order</a>
		    </li>
		  </ul>
		</div>
	</nav>
	<!-- /nav1 -->
	<!-- nav2 -->
	<nav class="navbar navbar-expand-sm navbar-collapse sticky-top myNav2">
	    <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" onclick="openNav()" id="icon-3dot">&#9776; Category<span class="navbar-toggler-icon"></span> </a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#"><img height="50" width="100" src="files/custom/images/shopnopur.jpg"></a>
		    </li>
	    </ul>
	  	<div class="col-md-4">
			<div class="input-group" id="search">
			  <input type="text" class="form-control" placeholder="Search ......" aria-label="Recipient's username">
			  <div class="input-group-append">
			    <span class="input-group-text"><i class="fa fa-search"></i></span>
			  </div>
			</div>
		</div>
		<ul class="navbar-nav">
			<li class="nav-item">
		      <a class="nav-link" href="#" id="cart"><i class="fa fa-cart-arrow-down"></i></a>
		    </li>
		</ul>
	</nav>
	<!-- /nav2 -->

	<!-- carousel -->
	<div class="container">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  	<ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  	</ol>
		  	<div class="carousel-inner">
			    <div class="carousel-item active">
			    	<a href="#">
			      <img class="d-block w-100" src="files/custom/images/carousel/i1.jpg" alt="First slide"></a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#">
			      <img class="d-block w-100" src="files/custom/images/carousel/i2.jpg" alt="Second slide"></a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#">
			      <img class="d-block w-100" src="files/custom/images/carousel/i3.jpg" alt="Third slide"></a>
			    </div>
		  	</div>
		  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
		  	</a>
		</div>
	</div>
	<!-- /carousel -->

	<!-- product category -->
	
	<div class="container">
		<div class="section group">
			<hr><h3>Categories</h3><hr>
		</div>
		<div class="section group">
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/jents.jpg">
				<h6>Men's Cosmetics</h6>
			</div>
			
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/women2.jpg">
				<h6>Women's Items</h6>
			</div>
			
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/jents2.jpg">
				<h6>Men's Cosmetics</h6>
			</div>
			
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/women.jpg">
				<h6>Women's Items</h6>
			</div>
			
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/jents.jpg">
				<h6>Men's Cosmetics</h6>
			</div>
			
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/jents2.jpg">
				<h6>Childern Cosmetics</h6>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/jents1.jpg">
				<h6>Men's Cosmetics</h6>
			</div>
			
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/jents2.jpg">
				<h6>Childern Cosmetics</h6>
			</div>
			
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/food.jpg">
				<h6>Food</h6>
			</div>
			
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/child3.jpg">
				<h6>Food</h6>
			</div>
			
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/child2.jpg">
				<h6>Men's Cosmetics</h6>
			</div>
			
			<div class="col span_1_of_6">
				<img class="cateimg" src="files/custom/images/categories/child.jpg">
				<h6>Childern Items</h6>
			</div>
		</div>
	</div>
	<!-- /product category -->
	
	<!-- footer -->
    <footer class="site-footer">
      	<div class="container">
	        <div class="row">
	          <div class="col-sm-12 col-md-6">
	            <h6>About</h6>
	            <p class="text-justify">alamin.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
	          </div>

	          <div class="col-xs-6 col-md-3">
	            <h6>Categories</h6>
	            <ul class="footer-links">
	              <li><a href="#category/c-language/">C</a></li>
	              <li><a href="#category/front-end-development/">UI Design</a></li>
	              <li><a href="#category/back-end-development/">PHP</a></li>
	              <li><a href="#category/java-programming-language/">Java</a></li>
	              <li><a href="#category/android/">Android</a></li>
	              <li><a href="#category/templates/">Templates</a></li>
	            </ul>
	          </div>

	          <div class="col-xs-6 col-md-3">
	            <h6>Quick Links</h6>
	            <ul class="footer-links">
	              <li><a href="#about/">About Us</a></li>
	              <li><a href="#contact/">Contact Us</a></li>
	              <li><a href="#contribute-at-scanfcode/">Contribute</a></li>
	              <li><a href="#privacy-policy/">Privacy Policy</a></li>
	              <li><a href="#sitemap/">Sitemap</a></li>
	            </ul>
	          </div>
	        </div>
	        <hr>
      	</div>
      	<div class="container">
	        <div class="row">
	          <div class="col-md-8 col-sm-6 col-xs-12">
	            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
	         	<a href="#">Alamin</a>.
	            </p>
	          </div>

	          <div class="col-md-4 col-sm-6 col-xs-12">
	            <ul class="social-icons">
	              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
	              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
	              <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
	              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
	            </ul>
	          </div>
	        </div>
     	</div>
	</footer>
	<!-- /footer -->
</div>
	<!-- js files -->
	<script src="files/external/js/jquery.min.js"></script>
	<script src="files/external/js/popper.min.js"></script>
  <script src="files/external/js/bootstrap.min.js"></script>
  <script src="files/custom/js/main.js"></script>
</body>
</html>