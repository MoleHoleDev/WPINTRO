<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Oficjalny autorski motyw stworzony przez BadDevs">
	<meta name="author" content="BadDevs">

	<!-- <title><?php //echo get_bloginfo( 'name' ); ?></title> -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>

<body>
	<div id="app">


		<nav id="navi" class="navbar navbar-toggleable-md navbar-light fixed-top" style="background: rgba(0,0,0,0.5);">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon" style="background-image: url('https://png.icons8.com/cotton/2x/hamburger.png');"></span>
		  </button>
			<a class="navbar-brand ml-10" href="#home">
		    <img src="<?php echo get_template_directory_uri(); ?>/img/logo2xz.png" width="auto" height="50" class="d-inline-block align-top" alt="logo baddevs">
		    <font color="white"><?php  echo get_bloginfo( 'name' ); ?></font>
		  </a>
		  <div class="collapse navbar-collapse justify-content-end mr-10" id="navbarNav">
		    <ul id="hormenu" class="navbar-nav">
					<a href="#home" class="nav-link"><li data-menuanchor="home" class="navbar-nav bd-sweep-to-top navlink text-center active" style="padding-left: 10px;">Strona główna</li></a>
					<a href="#services" class="nav-link"><li data-menuanchor="services" class="navbar-nav bd-sweep-to-top navlink text-center" style="padding-left: 10px;">Usługi</li></a>
					<a href="#projects" class="nav-link"><li data-menuanchor="projects" class="navbar-nav bd-sweep-to-top navlink text-center" style="padding-left: 10px;">Projekty</li></a>
					<a href="#team" class="nav-link"><li data-menuanchor="team" class="navbar-nav bd-sweep-to-top navlink text-center" style="padding-left: 10px;">Ekipa</li></a>
					<a href="#contact" class="nav-link"><li data-menuanchor="contact" class="navbar-nav bd-sweep-to-top navlink text-center" style="padding-left: 10px;">Kontakt</li></a>
		    </ul>
		  </div>
		</nav>

		</div>
