<?php if(is_page( '34' ) || is_page( '321' ) || is_single() || is_category() || is_tag() || is_search() ): ?>
<!-- ブログTOP、シングル、カテゴリ、タグ、サーチ、ブログサイトマップ
================================================== -->
<?php echo get_template_part( "parts/footer_parts" ); ?>
<?php wp_footer(); ?>
</body>
</html>
<?php elseif(is_page( '170' ) || is_archive( 'column' ) || is_page() ): ?>
<!-- 固定ページとパッケージとコラムアーカイブ
================================================== -->
<?php echo get_template_part( "parts/footer_parts" ); ?>
</div>
<!--end wrapper-->
<?php wp_footer(); ?>
</body>
</html>
<?php elseif(is_home()): ?>
<!-- ホーム
================================================== -->
<div class="box col5">
<div class="boxinner_e">
<div id="footer">
<h4 class="sw_icon"><?php bloginfo('name'); ?></h4>
<div class="footerbox">
<?php echo get_template_part( "parts/footer_menu_parts" ); ?>
<br class="fix" />
</div>
<!--end footerbox-->
</div>
<!--end inner-->
</div>
<!--end footer-->
</div>
<!--end box-->
</div>
</div>
<!--end top_wrapper-->
<?php wp_footer(); ?>
</body>
</html>
<?php endif; ?>