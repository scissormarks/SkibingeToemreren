<!doctype html>
<html><head>
	<meta charset="utf-8">
	<!--Adjusts the viewport so the page works on different devices-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>
		<?php wp_title(''); ?>
	</title>

	<?php wp_head(); ?>
</head>

<body class="covered">

	<!--Navigation bar-->
	<? get_header();?>
	<!--Page content-->
	<? require('home-content.php');?>
	<!--footer-->
	<? get_footer();?>
	
<!--script-->

</body>

</html>