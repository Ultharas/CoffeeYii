<?php /* @var $this Controller */ 

	Yii::app()->clientScript->registerScriptFile('/js/jquery-1.11.1.min.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('/js/jquery-migrate-1.2.1.min.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('/js/bootstrap.min.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('/js/jquery.scrollTo.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('/js/jquery.nav.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('/js/jquery.mobile.customized.min.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('/js/jquery.easing.1.3.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('/js/camera.min.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('/js/jquery.shuffle.modernizr.min.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('/js/jquery.magnific-popup.min.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('/js/wow.min.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('/js/custom.js', CClientScript::POS_END);

	Yii::app()->clientScript->registerScript('wow',"

		new WOW().init();
		
        setTimeout(function() 
        {          
            $('[data-group = all]').trigger('click');
        }, 150);

	",CClientScript::POS_END);

	//if (explode('/', $_GET['url'])[0] == 'index') :
	if (Yii::app()->request->requestUri == '/'){
		Yii::app()->clientScript->registerScript('coffee_icons',"
			$(document).ready(function() {
			  	$('#coffee-machine-anchor').click(function() {
	  				$('html, body').animate({ scrollTop: $('#coffee-machine').offset().top }, 500);
				});
			});

			$('.featured-block').find('a').hover(function() {
				var name = $(this).attr('id');
				$(this).find('h3').css({'color': '#A3543F'});
				$(this).find('img').attr(\"src\", '/images/index/menu_icons/' + name + '-hover.png');
				$(this).find('img').css({
					 transition: 'all 0.5s ease',
					 transform: 'rotateZ(360deg)',
					 MozTransform: 'rotateZ(360deg)',
					 WebkitTransform: 'rotateZ(360deg)',
					 msTransform: 'rotateZ(360deg)',
				});
			}, function() {
				var name = $(this).attr('id');
			 	$(this).find('h3').css({'color': '#FFF'});
			 	$(this).find('img').attr(\"src\", '/images/index/menu_icons/' + name + '.png');
			 	$(this).find('img').css({
					transform: 'rotateZ(720deg)',
					MozTransform: 'rotateZ(720deg)',
					WebkitTransform: 'rotateZ(720deg)',
					msTransform: 'rotateZ(720deg)'
				});
			});
		",CClientScript::POS_END);
	}	

	$footer_class = (Yii::app()->request->pathinfo == 'info/contacts') ? 'footer showme' : 'footer';
   
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="ru">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon">

	<!-- Bootstrap -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- Google Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Alegreya:400italic,700italic,900italic,400,700,900" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Template CSS Files  -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/camera.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/magnific-popup.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/responsive.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="js/ie8-responsive-file-warning.js"></script>
	<![endif]-->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="wrap">

	<!-- Preloader / Starts -->
	 <div class="loader"></div>
	<!-- Preloader / Ends -->
	
	<header>

		<!-- Navbar / Starts -->
		<nav class="navbar navbar-default sticky-nav" role="navigation">
			<div class="container">

				<!-- Navbar Header / Starts -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="/main" class="navbar-brand">
						<img class="img-responsive hidden-xs" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="Mskcofe">
						<img class="img-responsive visible-xs" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-small.png" alt="Mskcofe">
					</a>
				</div>
				<!-- Navbar Header / Ends -->

				<!-- Navbar Collapse / Starts -->
				<div class="navbar-collapse collapse">
					<?php $this->widget('zii.widgets.CMenu', array(
							'htmlOptions' => array( 'class' => 'nav navbar-nav navbar-right'),
							'id' => '',
							'items'=>array(
								array('label'=>'Главная'   , 'url'=>array('site/index')),
								array('label'=>'О компании', 'url'=>array('site/info', 'view'=>'about')),
								array('label'=>'Чай'       , 'url'=>array('tea/index')),
								array('label'=>'Кофе'      , 'url'=>array('coffee/index')),
								array('label'=>'Услуги'    , 'url'=>array('service/index')),
								array('label'=>'Галерея'   , 'url'=>array('gallery/index')),
								array('label'=>'Контакты'  , 'url'=>array('site/info', 'view'=>'contacts')),
						))); 
					?>

				</div>
				<!-- Navbar Collapse / Ends -->

			</div>
		</nav>
		<!-- Navbar / Ends -->

	</header>

	<?php echo $content; ?>

	<!-- Footer Section / Starts -->
	<div class="<?= $footer_class ?>">

		<!-- Container / Starts -->
		<div class="container">
			<div class="row">

				<!-- Copyright Text / Starts -->
				<div class="col-md-6 col-sm-12 wow fadeInDown">
					<p>&copy Все права защищены 2014 - <?= date("Y"); ?>, <a style="color: #00AEEF;" title="Разработка сайта" target="_blank" onfocus="blue()" href="#"> Ultharas </a>  </p>						
				</div>
				<!-- Copyright Text / Ends -->

				<!-- Social Media Links / Starts -->					
				<div class="col-md-6 col-sm-12">
					<ul class="list-unstyled list-inline wow fadeInUp">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-skype"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
				<!-- Social Media Links / Ends -->

			</div>
		</div>
		<!-- Container / Ends -->

	</div>
	<!-- Footer Section / Ends -->	

</div><!-- page -->

</body>
</html>
