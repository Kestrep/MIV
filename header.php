<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>
<body>

<header class="page-header">
    <div class="page-header-container">

        <div class="logo-wrapper">
            <a href="<?php echo get_home_url(); ?>">
            <img src="<?= get_template_directory_uri() . "/image_temp/logo_seul.jpg" ?>" alt="" srcset="">
            </a>
        </div>
        <div class="title-wrapper">
            <div class="site-title"><a href="<?php echo get_home_url(); ?>">La main sur la plaie</a></div>
        </div>
        <div class="hamburger" id="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        
    </div>

    <div class="nav-container">
        <?php wp_nav_menu( 'primary_menu' ); ?>
        <div class="donation-button">Faites un don</div>
    </div>

    <div id="hamburgerMenu">
        <ul>
            <li class="menu-item">Cameroun</li>
            <li class="menu-item">Amérique du Sud</li>
            <li class="menu-item">L'équipe</li>
        </ul>
    </div>
    

</header>

<div class="header-divider"></div>
