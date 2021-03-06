<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="business, corporate, corporate website, creative, html5, marketing, multipurpose, responsive, site templates">
<link rel="shortcut icon" href="assets/favicon.png">
<title> Акции - Люмен Оптика</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	  <link href="css/ie_8.css" rel="stylesheet" />
      <script src="js/ie/html5shiv.js"></script>
      <script src="js/ie/respond.min.js"></script>
<![endif]-->

<!-- Add custom CSS here -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#ha-header">

<!-- Fixed navbar --> 
<?php include('header.php'); ?>
<!-- End Fixed navbar --> 



<!-- Services -->
<div id="services" class="services ha-waypoint"  data-animate-down="ha-header-small" data-animate-up="ha-header-large">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 col-sm-12">
        <div class=" container TitleSection">
          <header class="page-head">
            <h1>Наши<small> // Акции</small></h1>
          </header>
        </div>

        <?php
        	$query=mysql_query("select* from sales") or die(mysql_error());
        	while($result=mysql_fetch_assoc($query)){
        		echo "
					<div class=row>
						<div class='col-xs-12 col-md-12 col-sm-12'>
							<div class=sale_event>
								<div><h2 class=header-sale>".$result['name']."</h2></div>
								<div class=sale-container>
									<img class=sale_icon src='assets/".$result['img']."' alt=sale />
									<div class=sale_text><span>".$result['text']."</span>
								</div>
								</div>
							</div>
						</div>
					</div>
        		";
        	}
        ?>
<!--
        <div class="row">

          <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="sale_event">
              <div><h2 class="header-sale">Очки в подарок!</h2></div>
              <div class="sale-container">
              <img class="sale_icon" src="img/1.jpg" alt="sale" />
              <div class="sale_text"><span>При покупке любых корригирующих очков, сумма которых превышает 3000 рублей, вы получаете еще одни бесплатно!</span>
              </div>
              </div>
          </div>
          </div>

        </div>

         <div class="row">

          <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="sale_event">
              <div><h2 class="header-sale">Бесплатная проверка зрения!</h2></div>
              <div class="sale-container">
              <img class="sale_icon" src="" alt="sale" />
              <div class="sale_text"><span>Проверка зрения поможет понять требуются вам очки или нет. После проверки наши специалисты подберут вам подходящие очки или контактные линзы, посоветуют средства корректировки и расскажут про них подробнее.</span>
              </div>
              </div>
          </div>
          </div>

        </div>
        
        <div class="row">

          <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="sale_event">
              <div><h2 class="header-sale">5 лет гарантии!</h2></div>
              <div class="sale-container">
              <img class="sale_icon" src="" alt="sale" />
              <div class="sale_text"><span>В течение 5 лет мы проводим бесплатное ежегодное техническое обслуживание очков (ультразвуковая чистка, ремонт).</span>
            </div>
            </div>
          </div>
          </div>
-->
        </div>

      </div>
    </div>
  </div>
 
<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-9 col-sm-12">
        <p>&nbsp;</p>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-12">
        <ul class=" footer_social clearfix">
          <li><a href="https://vk.com/club72960834"><i class="fa fa-vk"></i></a></li>
          <li><a href="https://instagram.com/lumenoptica/"><i class="fa fa-instagram"></i></a></li>
          <li><a href="http://ok.ru/profile/226343630035"><i class="fa fa-odnoklassniki"></i></a></li>
          <li class="go_top"><a href="#top"><i class="fa fa-chevron-circle-up"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- /Footer --> 

<!-- JavaScript --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/nicescroll.min.js"></script><!-- jquery nice scroll--> 
<script src="js/pace.min.js" ></script> <!--page load progress bar--> 
<script src="js/jquery.validate.min.js"></script><!--contact page--> 
<script src="http://maps.google.com/maps/api/js?sensor=true"></script><!--google map contact page--> 
<script src="js/gmaps.min.js"></script><!--google map contact page--> 
<script src="js/isotope.min.js"></script><!--Portfolio Filter--> 
<script src="js/flexslider.min.js"></script><!-- FlexSlider --> 
<script src="js/waypoints.min.js"></script><!--Header Effect--> 
<script src="js/custom_min.js"></script><!-- Custom JavaScript  -->

</body>
</html>