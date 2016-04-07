<?php
session_start();
include("connection.php")
?>
<?php 
error_reporting(E_ALL);
ini_set('display_errors','1');
?>

<?php 
$dynamicList = "";
	$sql = mysql_query("SELECT * FROM product");
	$productCount = mysql_num_rows($sql);
	
	if($productCount > 0){
		while($row = mysql_fetch_array($sql)){
			$id = $row["prod_id"];
			$product_name = $row["prod_name"];
			$price = $row["prod_price"];
			$dynamicList .= '<table style = "float:left; margin-left:20px; margin-top:10px;" width="179" border="0" cellpadding="6" align=center>
 		 <tr>
   		 <td width="169"><a href="product.php?id='.$id.'"><img style = "border:#666 1px solid;" src="img/'.$id.'.jpg" alt="'.$product_name.'" width="250" height="150" 	/></a></td>
  		 </tr>
 		 <tr>
  	    <td height="78" align="center" valign="middle">'.$product_name.'<br />
  	      P'.$price.'<br />
  	     <a href="product.php?id='.$id.'">View Product Details</a><br /></td>
         </tr>
          </table>';
		}
	}else{
			$dynamicList = "We have no products listed in our store yet";	
		}
mysql_close();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="img/black.jpg">

    <title>Gmedley</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><link rel="shortcut icon" href="img/black.jpg">G-medley</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
					<li>
						<a href="customer_acc.php">Create Account</a>
					<li/>
					<li>
					<a href="clogin.php">LOGIN</a>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image: url(img/electric/4/1.PNG);"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image: url(img/acoustic/6/1.PNG);"></div>
                <div class="carousel-caption">  
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image: url(img/acoustic/1/RS15ANNH1-Hero-2.jpg);"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
            	<div class="fill" style="background-image: url(img/electric/3/2.PNG);"></div>
                <div class="carousel-caption"></div>
                </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    

        <!-- Marketing Icons Section -->
        <div class="row" style=background-color:#DAA520>
            <div class="col-lg-12">
                <h1 class="page-header" align="center">
                    <font face="Magneto" color="#000000">Welcome to G-Medley</font>
                </h1>
               
            </div>
           

        <h3><div style=""class="container" align="center">Have it NOW!!!</div></h3>
         <div class="container">
            <?php echo $dynamicList; ?>
            </div><!-- /.row -->

        <!-- Portfolio Section -->
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Quality-Check Products!</h4>
                    </div>
                    <div class="panel-body">
                        <p>Here at G-Medley, we can assure you that we have the best qualities of acoustic and electric guitars including some of its parts and components. Have one now!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Free Gifts &amp; Special Offers </h4>
                    </div>
                    <div class="panel-body">
                        <p>Yes! We give gifts and special offers! Order a particular product and have a chance to purchase another product for FREE!. Explore now, be amazed and be one of the luckiest!</p>
                     
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>Detailed Specs</h4>
                    </div>
                    <div class="panel-body">
                        <p>Hello there guitar lovers! Be captured with the awesome specifications of each product here @ G-Medley. We made it detailed for you only. Have fun and fall in love with our guitars!</p>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

 
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
