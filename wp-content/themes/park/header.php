<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
<script src="https://use.fontawesome.com/a51ab7be15.js"></script>

<script src="https://code.jquery.com/jquery-3.1.0.min.js" ></script>

	</head>
	<body <?php body_class(); ?>>

   <div class="top-header">
   	   <div class="container">
   	   	  <div class="row">
   	   	  	<div class="col-md-4 pull-right text-right">
   	   	  		<ul class="social-media">
   	   	  			<li>
   	   	  				<a href="#">
   	   	  					<i class="fa fa-facebook-official fa-2x"></i>
   	   	  				 </a>
   	   	  			</li>
   	   	  			<li>	 
   	   	  				<a href="#">
   	   	  					<i class="fa fa-twitter-square fa-2x"></i>
   	   	  				 </a>
   	   	  			</li>
   	   	  			<li>	  
   	   	  				 <a href="#">
   	   	  					<i class="fa fa-instagram fa-2x"></i>
   	   	  				 </a>
   	   	  			</li>
   	   	  		</ul>
   	   	  	</div>
   	   	  </div>
   	   </div>
   </div>


		<!-- wrapper -->
		<div class="container" id="container">

			<!-- header -->
			<header class="row" id="header" role="banner">

					<!-- logo -->
					<div class="col-md-6" id="logo">
						<a href="<?php echo home_url(); ?>">
							
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					
					</div>
					<!-- /logo -->

				

			</header>
			<!-- /header -->
         
         <div class="row" id="navbar">
         		<!-- nav -->
					<div class="col-md-4">
						
					</div>
					<nav class="navbar navbar-default" id="navigation" role="navigation">
					<div class="container-fluid">
   					 <!-- Brand and toggle get grouped for better mobile display -->
   						 <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
      							
   					 </div>
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
         </div>
       
       <div class="row">
       		<div class="col-md-12" id="slider">
       			
       			<?php 
    			echo do_shortcode("[metaslider id=4]"); 
				?>
       			
       		</div>
       </div>


