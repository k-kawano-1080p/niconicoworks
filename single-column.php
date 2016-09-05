<!-- コラムシングルページ　直指定
======================================================================================================================================== -->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Expires" content="86400" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/sw.ico" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
<link rel="stylesheet" type "text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.slider.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/column_options.js"></script>
<script>
//スライダー
$(function() {
    $('.spsitesample').slider({
        showControls: false,
        autoplay: true,
        showProgress: true,
        hoverPause: true,
        wait: 5000,
        fade: 500,
        direction: "left"
    });
});
</script>
<?php wp_head(); ?>
</head>
<body class="page">
<p id="page-top"><a href="#top">PAGE TOP</a></p>
<div id="wrapper">
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php echo get_template_part( "parts/pankuzu_list" ); ?>
<div id="main" class="cf">
	<div id="content_column">
		<?php
		if (have_posts()):
			while (have_posts()):
				the_post();
			?>
			<div class="post_column">
			<p><span class="date"><?php the_time('Y年n月j日'); ?></span></p>
		    <h1><?php the_title(); ?></h1>
			<?php the_content();?>
			</div><!--end post_column-->
			<?php
			endwhile;
			endif;
			?>
			<div class="post_column">
			<?php echo get_template_part( "parts/page_service_parts" ); ?>
			</div>
	</div>
	<!--end content-->
        <div id="side">
            <div id="page_side">
                <div class="sidebox">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/catlogo_column.png" alt="NEWS COLUMN" />
                </div>
                    <?php echo get_template_part( "parts/sidebar_menu_parts" ); ?>
                <div class="sidebox">
                    <a href="<?php echo get_page_link(34); ?>"><img src="<?php echo get_template_directory_uri();?>/img/blog_icon170_rollout.png" alt="ニコニコブログ" /></a>
                </div>
                <div class="banner1">
                    <a href="<?php echo get_page_link(170); ?>"><img src="<?php echo get_template_directory_uri();?>/img/superdiscount_banner_rollout.png" alt="オールインワンパッケージ" /></a>
                </div>
            </div>
            <!--end page_side-->
        </div>
        <!--end side-->
</div>
<!--end main-->
<?php get_footer();?>