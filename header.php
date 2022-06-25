<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php cleanwptheme_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <span id="menu-btn" onclick="menuFunction()">&#9776;</span>
        <header id="header" role="banner">
            <div id="header-wrapper" class="container">
                <div id="branding">
                    <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        <?php
                        if (is_front_page() || is_home() || is_front_page() && is_home()) {
                            echo '<h1>';
                        }
                        echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html(get_bloginfo('name')) . '</span></a>';
                        if (is_front_page() || is_home() || is_front_page() && is_home()) {
                            echo '</h1>';
                        }
                        ?>
                    </div>
                    <div id="site-description" <?php if (!is_single()) {
                                                    echo ' itemprop="description"';
                                                } ?>><?php bloginfo('description'); ?></div>
                </div>
                <nav id="menu-wrapper" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <span id="menu-toggle"><?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?></span>
                    <div id="search"><?php get_search_form(); ?></div>
                </nav>



            </div>
        </header>
        <div id="main-wrapper" class="container">
            <main id="content" role="main">