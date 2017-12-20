<!doctype html>
<html>
<head>
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
	<? require_once('navigation.php');?>
	<!--Page content-->
	<? require('page-content.php');?>
	<!--footer-->
	<? get_footer();?>
	
	<!--social bar-->
	<? include('social_bar.php');?>
	
<!--script-->
<script src='js/main.js'></script>
</body>

</html>