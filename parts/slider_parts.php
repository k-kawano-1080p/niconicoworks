<?php if( is_category()): ?>
	<!-- カテゴリ
	================================================== -->
		<!--start main roop-->
		<?php if (have_posts()) :?>
		<div class="simpleSlideShow">
		<?php while (have_posts()) : the_post();?>
		<a href="<?php the_permalink();?>"><?php $title= get_the_title(); the_post_thumbnail( '350' , array( 'alt' =>$title, 'title' => $title)); ?></a>
		<?php endwhile;?>
		</div>
		<?php endif;?>
		<?php wp_reset_query() ?>
		<!--end main roop-->
<?php elseif(is_tag() ): ?>
		<!-- タグ
		==================================================================================================== -->
		<!--roop start-->
		<?php
		$tags = wp_get_post_tags($post->ID);
		$tag_ids = array();
		foreach($tags as $tag):
		  array_push( $tag_ids, $tag -> term_id);
		endforeach ;
		$args = array(
			'tag__in' => $tag_ids, //タグ情報を獲得
			//'posts_per_page' => 5, //表示する件数
			//'post_type' => array( 'post',),
			//'meta_key' => 'views', //ページビューを獲得
			// 'orderby' => 'meta_value_num',
			// 'order' => 'DESC',
			);
		$the_query = new WP_Query( $args );
					// ループ
		if ( $the_query->have_posts() ) : ?>
		<div class="simpleSlideShow">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<a href="<?php the_permalink();?>"><?php $title= get_the_title(); the_post_thumbnail( '350' , array( 'alt' =>$title, 'title' => $title)); ?></a>
		<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		<!--end　subu roop-->
<?php elseif(is_search()): ?>
	<!-- サーチ
	================================================== -->
		<!--スライダーループ-->
		<?php
		$args = array(
			'post_type' => array( 'post',),
			'category__not_in' => array( 1 ),
			'orderby' => 'date',
			'posts_per_page' => 10,

			);
		$the_query = new WP_Query( $args );
					// ループ
		if ( $the_query->have_posts() ) : ?>
		<div class="simpleSlideShow">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a href="<?php the_permalink();?>"><?php $title= get_the_title(); the_post_thumbnail( '350' , array( 'alt' =>$title, 'title' => $title)); ?></a>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		<!--end slider-->
<?php elseif(is_page( '34' ) || is_page( '321' ) || is_single() ): // ブログTOP ?>
	<!-- ブログTOP,サイトマップ,シングル
	================================================== -->
		<!--スライダーループ-->
		<?php
		$args = array(
			'post_type' => array( 'post',),
			'category__not_in' => array( 1 ),
			'orderby' => 'date',
			'posts_per_page' => 10,

			);
		$the_query = new WP_Query( $args );
					// ループ
		if ( $the_query->have_posts() ) : ?>
		<div class="simpleSlideShow">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a href="<?php the_permalink();?>"><?php $title= get_the_title(); the_post_thumbnail( '350' , array( 'alt' =>$title, 'title' => $title)); ?></a>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		<!--end slider-->
<?php elseif(is_home() ): // インデックス?>
	<!-- ホーム
	================================================== -->
		<!--スライダーループ-->
		<?php
		$args = array(
			'post_type' => array('page', ),
			'post__in' => array(2,40,151,154,157),
			'orderby' => 'post__in',
			);
		$the_query = new WP_Query( $args );
					// ループ
		if ( $the_query->have_posts() ) : ?>
		<div id="slider">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div>
					<a href="<?php the_permalink();?>"><?php $title= get_the_title(); the_post_thumbnail( 'slidepc' , array( 'alt' =>$title, 'title' => $title)); ?></a>
				</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		<!--end slider-->
<?php endif; ?>


