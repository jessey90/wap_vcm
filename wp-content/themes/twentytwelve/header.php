<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="mway-header">
    <div class="banner">
        <div class="user_logging"><a href="http://hayday.mobi/user/login">Đăng nhập</a> | <a
                href="http://hayday.mobi/user/register">Đăng ký</a></div>
        <style>/*.sg-ads { background:#DDDDDD !important;}	.sg-ads a { color:#000 !important;}*/ </style>
        <div style="text-align: center" class="logo-hd"><a href="http://hayday.mobi"> <img
                src="http://image.sangame.net/images/2013/07/19/FqVWj.png" style="width: 130px;"
                alt="HayDay.Mobi"></a><br><b>TẢI GAME HOÀN TOÀN MIỄN PHÍ</b>.
        </div>
    </div>
    <div class="navi" id="navbar">
        <div class="navigation">
            <div class="home-r"><a href="http://hayday.mobi" title="Game online, game mobile, game di dong"><img
                    src="http://image.sangame.net/images/2013/07/19/39cAK.png" border="0"></a></div>
            <div><a href="/game-hay.html">&nbsp;Game HOT&nbsp;</a></div>
            <div class="selected"><a href="/tro-choi-mien-phi.html">&nbsp;Trò chơi&nbsp;</a></div>
            <div><a href="/phan-mem-mien-phi.html">&nbsp;Phần mềm&nbsp;</a></div>
        </div>
    </div>
    <div style="padding:2px 4px;"><p><strong><img src="http://image.sangame.net/images/2013/09/03/8WJXd.gif" alt=""
                                                  width="60" height="13"></strong><strong><a
            href="http://bit.ly/15u00P3"><span style="color: #ff0000;">[Bói tình yêu]</span> Bạn và người ấy đẹp đôi đến
        mức nào?<img src="http://image.sangame.net/images/2013/09/03/Tqdv.gif" alt="" width="18"
                     height="18"></a><br></strong></p></div>
    <style>.searchbar {
        padding: 4px;
    }

    .searchbar .button {
        padding: 3px;
        border: 1px solid #c3c3c3;
        background: #e3e3e3;
        color: #555;
    }</style>
    <div class="searchbar">
        <form action="/search.html" method="post">
            <table>
                <tbody>
                <tr>
                    <td width="100%"><input type="text" name="keywords" style="width:98%" class="textbox"></td>
                    <td><input type="submit" name="submit" value="Tìm kiếm" class="button"></td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
        <hgroup>
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                      title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                                      rel="home"><?php bloginfo('name'); ?></a></h1>

            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
        </hgroup>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <h3 class="menu-toggle"><?php _e('Menu', 'twentytwelve'); ?></h3>
            <a class="assistive-text" href="#content"
               title="<?php esc_attr_e('Skip to content', 'twentytwelve'); ?>"><?php _e('Skip to content', 'twentytwelve'); ?></a>
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
        </nav>
        <!-- #site-navigation -->

        <?php $header_image = get_header_image();
        if (!empty($header_image)) : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($header_image); ?>"
                                                                 class="header-image"
                                                                 width="<?php echo get_custom_header()->width; ?>"
                                                                 height="<?php echo get_custom_header()->height; ?>"
                                                                 alt=""/></a>
            <?php endif; ?>
    </header>
    <!-- #masthead -->
    <div id="main" class="wrapper">