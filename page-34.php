<?php get_header(); ?>
<?php echo get_template_part( "parts/pankuzu_list" ); ?>
<!--コンテンツ-->
<div id="wrapper" class="cf">
	<div id="main">

		<div class="post">
			<div style="float: left;"><?php get_template_part('parts/slider_parts'); ?></div>
			<?php get_template_part('parts/adsense_content_pc'); ?>
			<?php get_template_part('parts/antena_parts'); ?>
			<?php get_template_part('parts/kiji_itiran'); ?>
		</div><!--end post-->
	</div><!--end main-->
	<?php get_sidebar(); ?>
</div>
<!--end wrapper-->
<?php get_footer(); ?>