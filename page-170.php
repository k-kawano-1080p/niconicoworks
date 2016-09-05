<?php get_header(); ?>
<?php echo get_template_part( "parts/pankuzu_list" ); ?>
<div id="main">
    <div id="allinone">
            <?php

            if (have_posts()): // WordPress ループ
            while (have_posts()):
                    the_post(); // 繰り返し処理開始
            ?>
                <?php the_content(); ?>
            <?php
            endwhile; // 繰り返し処理終了
            else: // ここから記事が見つからなかった場合の処理
            ?>
            <div class="post">
                <h2>記事はありません</h2>
                <p>お探しの記事は見つかりませんでした。</p>
            </div>
            <?php endif; ?>
    </div>
    <!--end content-->
    <?php get_sidebar(); ?>
    <br class="fix" />
</div>
<!--end main-->
<?php get_footer(); ?>