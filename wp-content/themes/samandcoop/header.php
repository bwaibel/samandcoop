<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>

    <link rel="stylesheet" href="wp-content/themes/samandcoop/stylesheets/screen.css" type="text/css" media="screen, projection"> 
    <link rel="stylesheet" href="wp-content/themes/samandcoop/stylesheets/print.css" type="text/css" media="print"> 
    <!--[if lt IE 8]><link rel="stylesheet" href="wp-content/themes/samandcoop/stylesheets/ie.css" type="text/css" media="screen, projection"><![endif]--> 

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
                <?php wp_list_categories( 'title_li=' ); ?>
            </ul>
        </div>
        <div id="content">