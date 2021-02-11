<?php
require_once"dbconfig.php";
$result=select("select * from items where itemid='".$_REQUEST['id']."'")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>MyCart</title>
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
					 <a class="navbar-brand" href="index.php">ONLINE GROCERY SHOPPING</a>
                       
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
									   <a href="ragister.php">Sign in  or Register</a>
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
    <div class="row">
        <div class="col-lg-1 text-center"></div>
        <div class="col-lg-10 text-center">
		
          <div class="alert alert-info" role="alert">
  <p style="color:red;font-weight:bold;font-size:20px;">Complete Detail<p>
</div>
        </div>
		 <div class="col-lg-1 text-center"></div>
       
	   
	   
      </div><?php
	  while($r=mysqli_fetch_array($result))
	  {
		  extract($r);
	  ?>
	  <div class="row">
	  <div class="col-lg-1"></div>
	  <div class="col-lg-10">
<div class="card text-center">
  <div class="card-header" style="font-weight:bold;font-size:20px">
    <?=ucwords($Title)?>
  </div>
  <ul class="list-group list-group-flush">
        <li class="list-group-item">Price-  <?=$price?>  /-</li>
  </ul>
  
  <div class="card-body">
  <img src="admin/images/<?=$image?>" style="height:400px;max-width:95%;border:6px double #545565;">
    <h5 class="card-title"><?=ucwords($discription)?></h5>
	<form method="post">
	<?php
	if(isset($_SESSION['login']))
{
?>	    <button name="cart" class="btn btn-primary">Add To Cart</button>
</div>
  <input type="hidden" name="bookid" value=<?=$itemid?>>
  <input type="hidden" name="userid" value=<?=$_SESSION['userid']?>>
  <div class="card-footer text-muted">
 
 <?php
}
else
{
?><a href="ragister.php" class="btn btn-primary">Add To Cart</a>
	   
<?php	
}
?>
       <a href="index.php" class="btn btn-primary">Continue shopping</a>
     
  </div>
  </form>
  <?php
	  
	  if(isset($_REQUEST['cart']))
	  {
		 extract($_REQUEST);
		$query= "INSERT INTO `cart`( `itemid`, `userid`) VALUES ('$bookid','$userid')";
		$n=iud($query);
	 if($n==1)
	{
		echo"<script>alert(' Successfull');
		 </script>";
	}
	else
	{
	echo"<script>alert('Something Wrong');
		 
		 </script>";
	
	}
	}
	  
	  ?>
</div>	  
	  
	  </div></div><?php
	  }
	  ?>
	<footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Project is made by Shashank Kumar </a>
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
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