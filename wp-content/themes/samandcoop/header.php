<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>

    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/main.js"></script>


    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div id="header">
        <a href="<?php echo home_url(); ?>" id="home">
            <img src="<?php bloginfo('template_url'); ?>/images/logo_03.png" alt="<?php bloginfo( 'name' ); ?>" />
        </a>
    </div>

    <div id="main">
        <div id="head">
            <ul id="nav">
                <li id="home_nav"><a href="/">home</a></li>
                <?php shopp('catalog','category-list','depth=1&wraplist=off'); ?>
            </ul>
        </div>
        <div id="content">