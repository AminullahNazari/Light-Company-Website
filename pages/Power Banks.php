<!DOCTYPE html>
<html>
<head>
	<title>Light Company>products</title>
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



    * {box-sizing: border-box;}

	.image-wall {
  		position: relative;
  		width: 100%;
  		max-width: 300px;
	}

	#product-image {
  		display: block;
  		width: 100%;
  		height: auto;
	}

	.overlay-button {
  		position: absolute; 
  		bottom: 0; 
  		background: rgb(0,0,0);
  		background: rgba(0,0,0,0.5); /* Black see-through */
  		color: #f1f1f1; 
  		width: 100%;
  		transition: .5s ease;
  		opacity:0;
  		color: white;
  		font-size: 20px;
  		padding: 20px;
  		text-align: center;
	}

	.image-wall:hover .overlay-button {
 		opacity: 1;
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
          					<a class="nav-link" href="About Us.php">Support</a>
        				</li>
        				<li class="nav-item">
          					<a class="nav-link active" href="Power Banks.php">Products</a>
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
        <a id="test" href="Cart.php" style="float: right; margin: 3% 3%;"><i id="cart" class="fa fa-shopping-cart" style="font-size:200%;color:black; float: right;"></i></a>
      </div>

      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a id="link"  class="nav-link text-dark" href="PCs.php">PCs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="Power Banks.php">Power Banks</a>
        </li>
        <li class="nav-item">
          <a id="link" class="nav-link text-dark "  href="Chargers.php">Chargers</a>
        </li>
        <li class="nav-item">
          <a id="link" class="nav-link text-dark " href="Cables.php">Cables</a>
        </li>
      </ul>


      <div class="container-fluid p-3">
        <h1  class="text-dark ms-5" style="text-align: ;">
          Power Banks
        </h1>
        
      </div>
    </div>
    
    
	</div>


	<!--second page-->
	
	<div id="bottom-root" class="container-fluid shadow p-0">

		
		
      		 <!--product list--><a href="">
      	<div class="container-fluid shadow bg-white pt-5 pb-5" >
        	
        	<div class="row" >
        		<div class="col-3" >          
            <!--product profile -->
            		<a href="">
                		<div id="children" class="image-wall" >
                			<div id="children" class="image-wall" >
                    			<img id="product-image" src="../images/power.jpg" alt="Avatar" class="image image-fluid">
                				<div class="overlay-button d-grid"><a class="btn btn-primary btn-block" href="">Select</a></div>
           					</div>

                			<div class="image-wall" >
                  				<a style="color: black; text-decoration: none;" href="">
                      				<h5> The discription is came here in bottom...</h5>
                      				<h5 class="text-secondary">cost</h5>
                 				</a>               
                			</div>
                		</div>
   					</a>
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