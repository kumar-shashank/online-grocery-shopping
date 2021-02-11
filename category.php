<?php
require_once"dbconfig.php";
//$result=select("select * from items where itemid='".$_REQUEST['id']."'")
$result=select("SELECT DISTINCT category FROM items" );


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title -->
    <title>Category</title>

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
					 <a class="navbar-brand" href="index.php">GROCERY ONLINE SHOPPING</a>
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php"> <span class="sr-only">(current)</span></a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="mycart.php"></a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php"></a>
                                </li>
                            </ul>
                            
                           
						       <div class="dorne-signin-btn">
							   <?php
							   if(isset($_SESSION['login']))
							   {
								   ?><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                              
								<a class="nav-link" href="mycart.php">My Cart</a>
								<a class="nav-link" href="mycart.php">Category</a>
                              
                                	<a class="nav-link" href="logout.php">Logout</a>
								   
								   <?php
							   }
								   else
								   {
									   ?>
									   <a href="#">Sign in  or Register</a>
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
								
								   <?php
								   }
							   
							   ?>
                                
                            </div>
                           
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)"></div>
	</br>
    
	<section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Category</h4>
                        </div>
                </div>
            </div>
            <div class="row">
			
                <?php
				while($r=mysqli_fetch_array($result))
				{
				?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="cat_detail.php?cat=<?=$r[0]?>"><div class="single-features-area mb-50">
                        <!-- Price -->
                        
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5><?=$r[0]?></h5>
                                <p>View Items</p>
                            </div>
                           
                        </div>
                    </div></a>
                </div><?php
				}
				?>
                <!-- Single Features Area -->
                
            </div>
        </div>
    </section>
	
	<footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Project is made by Shashank Kumar & Varunika Palsetty</a>

                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
  
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>