<!-- カテゴリーループ
==================================================================================================== -->
<!--start　category　roop-->
<?php
$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
  array_push( $category_ID, $category -> cat_ID);
endforeach ;
$args = array(
	'post__not_in' => array($post -> ID),
	'category__in' => $category_ID,
	'posts_per_page' => 4,
	'meta_key' => 'views',
	 'orderby' => 'meta_value_num',
	 'order' => 'DESC',
		);
$the_query = new WP_Query( $args );
			// ループ
if ( $the_query->have_posts() ) : ?>
<?php
$category = get_the_category();
$cat_id   = $category[0]->cat_ID;
$cat_name = $category[0]->cat_name;
$cat_slug = $category[0]->category_nicename;
?>
<h3><?php echo $cat_name; ?>&nbsp;カテゴリーの人気記事</h3>
<ul class="related_list cf">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li>
			<a href="<?php the_permalink();?>"><?php $title= get_the_title(); the_post_thumbnail( '120' , array( 'alt' =>$title, 'title' => $title)); ?></a>
			<span class="label label-danger" style="display: inline;padding: .2em .6em .3em;font-size: 75%;color: #fff;border-radius: .25em;font-weight: 700;line-height: 1;vertical-align: baseline;white-space: nowrap;text-align: center;background-color: #d9534f;"><?php echo the_views(); ?></span>
			<p class="related_title"style="float: left;">
				<a href="<?php the_permalink();?>">
					<?php the_title(); ?>
				</a>
			</p>
		</li>
	<?php endwhile; ?>
</ul>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
