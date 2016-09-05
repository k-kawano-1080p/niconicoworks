<?php get_header();?>
<?php echo get_template_part( "parts/pankuzu_list" ); ?>
<div id="main" class="cf">
	<div id="content_column">
    <?php if (have_posts()): // WordPress ループ ?>
    <?php while (have_posts()): the_post(); // 繰り返し処理開始 ?>
    <?php get_template_part( "parts/kiji_itiran" ); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php echo get_template_part( "parts/pagenavi" ); ?>
    <?php wp_reset_query(); // 投稿データをリセット ?>
	</div>
	<!--end content-->
	<?php get_sidebar();?>
</div>
<!--end main-->
<?php get_footer();?>