<?php if(is_page( '34' ) || is_page( '321' ) || is_category() || is_tag() || is_search() || is_single() ): ?>
<!-- index:ブログTOP,シングル投稿ページ | noindex:カテゴリー,タグ,検索ページ,ブログサイトマップ
======================================================================================================================================== -->
<!DOCTYPE html>
<html>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <?php //指定ページにnoindexタグを出力
    if (get_post_meta($post->ID, "noindex", true))
    {echo '<meta name="robots" content="noindex,nofollow" />';print("\n");};
    ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swblog.css" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/sw.ico" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/icomoon/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/blog_options.js"></script>
    <script>
    //SIMPLE SLIDE SHOW
    $(function() {
        $('.simpleSlideShow').SimpleSlideShow({
            'height': 250, // ステージの高さ。デフォルトでは1枚目の画像の高さ。
            'width': 350, // ステージの横幅。デフォルトでは1枚目の画像の横幅。
            'duration': 1000, // アニメーションにかかる時間。
            'interval': 3000 // 次のアニメーションまでのインターバル。
        });
    });
    //JRUMBLE
    $(document).ready(function() {
        $('.rumble').jrumble({ //任意のクラス
            x: 1,
            y: 1,
            rotation: 1,
            speed: 10
        });
        $('.rumble').hover(function() {
            $(this).trigger('startRumble');
        }, function() {
            $(this).trigger('stopRumble');
        });
    });
    //ROTATE
    var angle = 0;
    var angle2 = 0;
    var angle3 = 0;
    var angle4 = 0;
    var angle5 = 0;
    var angle6 = 0;
    var angle7 = 0;
    var angle8 = 0;
    setInterval(function() {
        angle += 1;
        angle2 -= 0.2;
        angle3 -= 2;
        angle4 += 1;
        angle5 += 4;
        angle6 -= 1;
        angle7 += 5;
        angle8 += 0.5;
        $("#pentagon_orange").rotate(angle);
        $("#pentagon_purple").rotate(angle2);
        $("#trapezoid_red").rotate(angle3);
        $("#trapezoid_blue").rotate(angle4);
        $("#star_brown").rotate(angle5);
        $("#star_green").rotate(angle6);
        $("#diamond").rotate(angle7);
        $("#rotatetext").rotate(angle8);
    }, 20);
    //OWL
    $(function() {
        $(document).ready(function() {
            $("#owl").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                pagenation: true,
                singleItem: true,
                autoPlay: true

                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : true
            });
        });
    })
</script>
<?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
<?php wp_head(); ?>
</head>
<body>
<p id="page-top"><a href="#top">PAGE TOP</a></p>
<?php echo get_template_part( "parts/header_parts_blog" ); ?>
<?php elseif( is_archive( "column" ) ): ?>
<!-- コラムアーカイブ(コラムシングルはテンプレートに直書き)
======================================================================================================================================== -->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Expires" content="86400" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/sw.ico" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
<link rel="stylesheet" type "text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.slider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/column_options.js"></script>
<script>
//スライダー
$(function() {
    $('.spsitesample').slider({
        showControls: false,
        autoplay: true,
        showProgress: true,
        hoverPause: true,
        wait: 5000,
        fade: 500,
        direction: "left"
    });
});
</script>
<?php wp_head(); ?>
</head>
<body class="page">
<p id="page-top"><a href="#top">PAGE TOP</a></p>
<div id="wrapper">
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php elseif(is_page() ): ?>
<!-- ◆noindex:プライバシーポリシー195,サイトマップ188　◆index:パッケージ170、固定ページ
======================================================================================================================================== -->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
    <?php //指定ページにnoindexタグを出力
    if (get_post_meta($post->ID, "noindex", true))
    {echo '<meta name="robots" content="noindex,nofollow" />';print("\n");};
    ?>
<meta http-equiv="Expires" content="86400" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/sw.ico" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
<link rel="stylesheet" type "text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.slider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/page_options.js"></script>
<?php wp_head(); ?>
</head>
<body class="page">
<p id="page-top"><a href="#top">PAGE TOP</a></p>
<div id="wrapper">
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php elseif(is_home()): ?>
<!-- ホーム
======================================================================================================================================== -->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.slider.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.css" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/sw.ico" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/top_options.js"></script>
    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
    <script>
    //Mosonry
    $(function() {
        $('#container').masonry({
            itemSelector: '.box',
            isFitWidth: true,
        });
    });
    //スライダー
    $(function() {
        $('#slider').slider({
            showControls: false,
            autoplay: true,
            showProgress: true,
            hoverPause: true,
            wait: 5000,
            fade: 500,
            direction: "left"
        });
    });
    //スクロールバー
    $(function() {
        $(window).load(function() {
            $(".newstext").mCustomScrollbar();
        });
    });
</script>
<?php wp_head(); ?>
</head>
<body class="top">
    <div id="top_wrapper">
        <div id="header" class="cf">
            <div class="header_l">
                <h1>大分県でホームページ作成をお考えなら、SOHO・フリーランスWEBデザイナーのニコニコワークへ！楽天・Amazonなどのネットショップが得意です。大分・別府市より全国対応</h1>
            </div>
            <div class="header_r">
                <a href="<?php echo get_page_link(188); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sitemap_icon.png" alt="サイトマップ" width="119" height="28" /></a>
            </div>
        </div>
        <!--end header-->
<?php endif; ?>