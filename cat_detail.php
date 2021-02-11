<?php
require_once"dbconfig.php";
//$result=select("select * from items where itemid='".$_REQUEST['id']."'")
$q="SELECT * FROM items where category='".$_REQUEST['cat']."'";
$result=select($q);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Dorne - Directory &amp; Listing Template | Listing</title>

    
    <link rel="icon" href="img/core-img/favicon.ico">

    
    <link href="style.css" rel="stylesheet">

  
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
  
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

  
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

    
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
					 <a class="navbar-brand" href="index.php">ONLINE ELECTRONIC SHOP</a>
                       
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
								<a class="nav-link" href="category.php">Category</a>
                              
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
    
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)"></div>
	</br>
    
	 <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
					 <?php
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
                        <div class="single-features-area">
                            <a href="view_detail.php?id=<?=$itemid?>"><img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
								 <p><?=$Title?></p>
                               
                                   <h5><?=$price?>/-</h5></br>
								     </div>
                                
								<?php for($i=1;$i<=$item_rating;$i++) :  ?>

								<i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                    
                            </div></a>
                        </div>
						<?php
					 }
						?>
                        
                        
                    </div>
                </div>
            </div>
	
	<footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights 
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