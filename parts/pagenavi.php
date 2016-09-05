<?php if(is_page( '34' ) ): ?>
<!-- ブログTOP
======================================================================================================================================== -->
        <?php wp_pagenavi(array('query' => $the_query)); ?>
<?php elseif(is_page( '321' ) ): ?>
<!-- サイトマップ
======================================================================================================================================== -->
<div class="single-widget go2top cf">
<a href="<?php echo get_permalink(34); ?>" class="go2top-button-2"><div class="button">ブログTOPページへ戻る</div></a>
</div>
<?php elseif(is_category() || is_tag() || is_search() ): ?>
<!-- index:ブログTOP,シングル投稿ページ | noindex:カテゴリー,タグ,検索ページ
======================================================================================================================================== -->
            <br class="fix">
            <?php pagination(); ?>
            <br class="fix">
<?php elseif( is_single() ): ?>
<!-- シングルページ
======================================================================================================================================== -->
<div class="more-post cf">
<ul>
<li class="single-post-prev"><?php previous_post_link('%link', '＜　前の記事', TRUE, ''); ?></li>
    <li class="single-post-home"><a href="<?php echo get_latest_post_url(); ?>" class="go2top-button-1">新着記事をチェック</a></li>
<li class="single-post-next"><?php next_post_link('%link', '次の記事　＞', TRUE, ''); ?></li>
</ul>
</div>
<div class="single-widget go2top cf">
<a href="<?php echo get_permalink(34); ?>" class="go2top-button-2"><div class="button">ブログTOPページへ戻る</div></a>
</div>
<?php elseif( is_archive( "column" ) ): ?>
<!-- コラムアーカイブ(コラムシングルはテンプレートに直書き)
======================================================================================================================================== -->
    <?php
    echo "<div id='pagenavi'>\n";
    wp_pagenavi(
        );
    echo "</div>";
     ?>
<?php elseif(is_page() ): ?>
<!-- ◆noindex:プライバシーポリシー195,サイトマップ188　◆index:パッケージ170、固定ページ
======================================================================================================================================== -->
<?php endif; ?>