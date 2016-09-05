<div id="footer">
    <div id="footer_page">
        <h4 class="sw_icon"><?php bloginfo('name'); ?></h4>
            <?php echo get_template_part( "parts/footer_menu_parts" ); ?>
        <br class="fix" />
        <div id="copy">
            <p>Copyright©<?php the_time('Y'); ?> <a href="<?php echo home_url('/'); ?>">NICONICOWORKS</a></p>
        </div>
        <!--end copy-->
    </div>
    <!--end footer_page-->
</div>
<!--end footer-->