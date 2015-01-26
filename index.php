<!DOCTYPE html>
<html ng-app>
<head>
	<base href="/jsonapi/">
	<title>Bearded Penguins</title>
	    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
 
	<header>
		<h1>
			<a href="<?php echo site_url(); ?>">Bearded Penguins</a>
		</h1>
	</header>
 
	<div>
		<input type="text" ng-model="name">
 
		<p>Hello, {{name}}!</p>
	</div>
 	
	<footer>
		&copy; <?php echo date( 'Y' ); ?>
	</footer>
 
</body>
</html>