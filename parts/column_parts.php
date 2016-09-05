<!--コラム抜粋-->
    <?php
    $args = array(
    'post_type' => 'column',
    	);
    $the_query = new WP_Query( $args );
    // ループ
    if ( $the_query->have_posts() ) :?>
    <div class="newstext">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); // 何かする ?>


                    <div class="columnpost">
                        <p>
                            <span class="date"><?php the_time('Y年n月j日'); ?></span>
                            <span class="bold"><?php the_title(); ?></span>
                        </p>
                        <p><?php the_excerpt('...');?><span class="right"><a href="<?php the_permaLink(); ?>" title="<?php the_title(); ?>">続きを読む>>></a></span></p>
                    </div>

                <?php endwhile; ?>
                <?php endif; ?>
                </div>
<?php wp_reset_postdata(); ?>

