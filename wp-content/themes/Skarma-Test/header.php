<!doctype html>

<html lang="en-US">

<head>
	<?php wp_head(); ?>
	<!-- <link rel='stylesheet'  href='<?php echo get_template_directory_uri(); ?>/style.css' type='text/css' media='all' /> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet"> 
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>

<body>
	
	<div class="container-fluid">
		<div class="col-12 col-md-6 offset-md-6 padding-ver-15 padding-hor-20">
			<a href="" class="col-md-3 col-xs-6 nav-1">FORTHEWIN</a>
			<a href="" class="col-md-3 col-xs-6  nav-1 ">SKARMA.ORG</a>
			<a href="" class="col-md-3 col-xs-6 nav-1">BEETROOTS</a>
			<a href="" class="col-md-3 col-xs-6 nav-1 ">TICKETING</a>
		</div>
	</div>
	<nav class="navbar navbar-default navbar-toggleable-md navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#"></a>

		<div class="collapse navbar-collapse col-xs-12 col-sm-12 col-md-7 offset-md-4" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form> -->
  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' , 'menu_class' =>'navbar-nav mr-auto') ); ?>
</div>

</nav>
<div class="container-fluid bg-theme-violet text-center padding-ver-20">

	<p class="text-white news-heading">news</p>

</div>