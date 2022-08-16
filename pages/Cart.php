<!DOCTYPE html>
<html>
<head>
	<title>Light Company>shopping cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta id="my"  http-equiv="refresh">
	<link href="../assets/bootstrap.min.css" rel="stylesheet" type="text/css" >
	
	<script type="text/javascript" src="../assets/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/font/css/font-awesome.min.css">
	
	

	



    <style>

	#top-root {
		
		background-image: url("../images/top-bg-cut.jpg");
		background-position: top;
		background-repeat: no-repeat;
		background-size: 100%;
		background-attachment: scroll;


	}


	#bottom-root {
		
		background-image: url("../images/top.jpg");
		background-position: bottom;
		background-repeat: no-repeat;
		background-size: 100%;
		background-attachment: fixed;

    }

    #link {
      opacity: 0.8;
    }

    #link:hover{
      opacity: 1;
    }


    i:hover {
    	opacity: 0.7;
    }



    
	

    </style>


   
</head>
<!--home page-->
<body>

	<!--The first page-->
	<div id="top-root" class="container-fluid  p-0"  ">

		<!--navbar-->
		<nav class="navbar navbar-expand-sm navbar-light bg-light">
  			<div class="container-fluid">
    			<a class="navbar-brand"  href="../index.php">LIGHT</a>
    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      				<span class="navbar-toggler-icon"></span>
   			 	</button>
    			<div class="collapse navbar-collapse" id="mynavbar">
      				<ul class="navbar-nav me-auto">
        				<li class="nav-item">
          					<a class="nav-link active" href="About Us.php">Support</a>
        				</li>
        				<li class="nav-item">
          					<a class="nav-link" href="PCs.php">Products</a>
        				</li>
        				<li class="nav-item">
          					<a class="nav-link" href="../index.php">Home</a>
        				</li>
      				</ul>
      				<form class="d-flex">
        				<input class="form-control me-2" type="text" placeholder="Search">
        				<button class="btn btn-primary" type="button">Search</button>
      				</form>
    			</div>
  			</div>
		</nav>

    <div class="container-fluid">


      <div style="float: right;padding: 1% 1%">
        <a href="Account.php" style="float: right;"><i id="user" class="fa fa-user-o " style="font-size:200%;color:black; float: right;"></i></a>  
      </div>
      <div   style="float: right; padding: 1% 1%">
        <a id="test" href="Cart.php" style="float: right; margin: 3% 3%;"><i id="cart" class="fa fa-shopping-cart" style="font-size:200%;color:black; float: right;opacity: 0.7"></i></a>
      </div>

      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a id="link"  class="nav-link text-dark" href="About Us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a id="link" class="nav-link text-dark" href="Contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a id="link" class="nav-link text-dark "  href="Terms of Service.php">Terms of Service</a>
        </li>
        <li class="nav-item">
          <a id="link" class="nav-link text-dark " href="Privacy Policy.php">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a id="link" class="nav-link text-dark " href="FAQs.php">FAQs</a>
        </li>
      </ul>


      <div class="container-fluid p-3">
        <h1  class="text-dark ms-5" ;">My Cart</h1>
        

        
      </div>
    </div>
    
    
	</div>


	<!--second page-->
	
	<div id="bottom-root" class="container-fluid shadow p-0">

		
		
      		 <!--Contuctt us-->
      	<div class="container-fluid shadow bg-white pt-5 pb-5 " >
      		<div class="row ps-4 pe-4 ">
      			<div class="ps-5 pe-5 mt-4 col-sm-8">
      				<h5 class="text-dark p-3" style="background-color: rgb(244,244,244);">Products</h5>
      				<h3 class="text-secondary p-5 " style="text-align: center;">Your cart is empty</h3>	
      			</div>

      			<div class=" p-4 mt-4 col-sm-4 " style="background-color: rgb(244,244,244);">
      				<h5 class="text-dark p-3 " style="text-align: center;">Order Summary </h5>
      				<div>
      					<span style="float: left;"><p class="text-dark pt-2 pb-2"> Total:</p></span>  
              			<span style="float: right;"><p class="text-dark pt-2 pb-2"> 0.0$</p></span>
      				</div>
      				<hr class="mt-5">
              	
      			
              	<form action="">
              		<div class="mb-4 mt-4 ">
                		<label for="comment" class="form-label h6 ">Comment:</label>
                		<textarea class="form-control" rows="10" id="comment" name="comment"></textarea>
              		</div>
              		<div class="form-check mb-3">
  						<input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
  						<label class="form-check-label text-secondary">I agree with the terms and conditions</label>
					</div>
              
              		<button type="submit" class="btn btn-primary p-4 pt-1 pb-1 disabled">Proceed to Checkout</button>
             	</form>

      			</div>
      		</div>
           	
    	</div>


           


		<!--Sighn up page-->
		<div class="container-fluid" style="padding: 8% 0%; ">
			<h1 class=" h1 text-dark" style="padding:1% auto;text-align: center; ">
				Newsletter Sighnup
			</h1>
			
			<h5 class="text-dark" style="padding:1% 0%;text-align: center">
				Sign Up for exclusive updates, new arrivals & insider-only discounts 
			</h5>
			
			<div class="row" style="width: 100%;">
    			<div class="col" ></div>
				<div class="col-10 col-sm-8 col-lg-6">
       				<form action="">
    					<div class="input-group">     
      						<input type="email" class="form-control" style="text-align: center;" placeholder="Enter your email" name="usrname">
      						<span style="margin-left: 2%"><button type="submit" class="btn btn-primary"> Submit</button></span>
    					</div>
  					</form>
    			</div>
    			<div class="col" ></div>  
  			</div>

			<div class="row text-dark" style="padding:2% 0%; font-size: 200%;margin: auto; width: 25%">
				<div class="col">
					<a href=""><i class="fa fa-facebook text-dark"></i></a>
				</div>
				<div class="col">
					<a href=""><i class="fa fa-instagram text-dark"></i></a>
				</div>
				<div class="col">
					<a href=""><i class="fa fa-twitter text-dark"></i></a>
				</div>
				<div class="col">
					<a href=""><i class="fa fa-pinterest text-dark"></i></a>
				</div>
				<div class="col">
					<a href=""><i class="fa fa-snapchat text-dark"></i></a>
				</div>
			</div>
			
		</div>
		<!--The Footer-->
		<div class="container-fluid bg-light" style="padding: 4% 20%">
			<div class="row">
				<div class="col">
					<p><a class="text-secondary" style="text-decoration: none;" href="">LIGHT Official Store</a></p>
				</div>
				<div class="col">
					<p><a class="text-secondary" style="text-decoration: none;" href="">Return and Exchanges</a></p>
				</div>
				<div class="col">
					<p><a class="text-secondary" style="text-decoration: none;" href="">Terms of Services</a></p>
				</div>
				<div class="col">
					<p><a class="text-secondary" style="text-decoration: none;" href="">FAQs</a></p>
				</div>	
			</div>
			<p class="text-secondary" style="padding:1% 35%">&copy LIGHT. All Rights Reserved</p>
		</div>
		
	</div>

	

</body>
</html>