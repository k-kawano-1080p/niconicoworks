<!--サイドバー関連記事-->
<?php
$args = array(
	'posts_per_page' => 10,
	'orderby' => 'date',
	'order' => 'DESC'
	);
$the_query = new WP_Query( $args );
			// ループ
if ( $the_query->have_posts() ) : ?>
<li id="newpostcatch-2" class="widget widget_newpostcatch"><h2 class="widgettitle">最近の投稿</h2>
	<ul id="npcatch" >
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li>
			<a href="<?php the_permalink();?>" title="<?php the_title(); ?>" ><?php $title= get_the_title(); the_post_thumbnail( 's_thumbnail' , array( 'alt' =>$title, 'title' => $title)); ?></a>
			<span class="title"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></span>
		</li>
		<?php endwhile; ?>
	</ul>
</li>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<br class="fix">