<?php
    /**
    * Template Name: Default page template
    */
?>
<head>
	<meta charset="utf-8">
	<!--Adjusts the viewport so the page works on different devices-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>
		<?php wp_title(''); ?>
	</title>

	<?php wp_head(); ?>

</head>
<?php
if ( wp_is_mobile() ) {
	/* Display and echo mobile specific stuff here */
}
?>
<?php get_header(); ?>

<!--Page content-->
<div class="content">
	<section class="wrapper">
		<div class="contentcontainer wrapper">	
			<div class="contenttextcontainer paper">
			<div class="pagecontent"></div>
				<div class="entry-content">
					<h2><?php the_title();?>	</h2>
					<p><?php the_post();?>		</p>
			        <p><?php the_content();?>	</p>
				</div>
			</div>
		</div>
	</section>
</div>


<?php get_footer(); ?>