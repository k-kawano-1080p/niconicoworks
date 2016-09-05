<?php
get_header(); ?>
<!--コンテンツ-->
<div id="wrapper" class="cf">
    <div id="main">

        <div style="margin-top: 1em" class="post">
                <div style="float: left;"><?php get_template_part('parts/slider_parts'); ?></div>
                <?php get_template_part('parts/adsense_content_pc'); ?>
                <?php get_template_part('parts/antena_parts'); ?>
                <?php if (have_posts()): // WordPress ループ ?>
                <div class="single-post">
                <?php get_template_part('parts/pankuzu_list'); ?>
                <div class="postarticle">
                <?php while (have_posts()): the_post(); // 繰り返し処理開始 ?>
		        	<?php the_content(); ?>
			    <?php endwhile; // 繰り返し処理終了 ?>
			    <?php else: // ここから記事が見つからなかった場合の処理 ?>
			    <div class="post">
			    	<h2>記事はありません</h2>
			    	<p>お探しの記事は見つかりませんでした。</p>
			    </div>
			    <?php endif; // WordPress ループ終了 ?>
			    <div style="text-align: center;">
			    <?php get_template_part('parts/adsense_content_pc'); ?>
			    </div>
                </div><!--end postarticle-->
                </div><!--end single-post-->
		        <?php echo get_template_part( "parts/pagenavi" ); ?>
				<?php wp_reset_query() ?>
	        	<br class="fix">
		</div><!--end post-->
	</div><!--end main-->
	<div style="margin-top: 1em"><?php get_sidebar(); ?></div>
</div>
<!--end wrapper-->
<?php get_footer(); ?>