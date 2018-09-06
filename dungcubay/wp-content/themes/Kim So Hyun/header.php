<?php 
	$phone="123 456 472";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<base href="<?php echo bloginfo('template_directory') ?>/"/>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.min.css" rel="stylesheet">
	<link href="css/full-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	
	<?php
		$phone="123 456 472";
		wp_head(); 
	?>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top mainmenu" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php bloginfo('url') ?>">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
			<?php wp_nav_menu( 
				array( 
					'theme_location' => 'topmenu', 
					'container' => 'false', 
					'menu_id' => 'header-menu', 
					'menu_class' => 'header-main navbar-nav ml-auto'
				) 
			); ?>
        </div>
      </div>
    </nav>