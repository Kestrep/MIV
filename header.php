<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design et lancement : Alexandre Petot -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>
<body>

<?php 
    $logo_url = get_template_directory_uri() . "/image_temp/logo_seul.jpg";
    $home_link = get_home_url();
 ?>

<header class="pg-hdr">
    <div class="pg-hdr-cntnr">
        <div class="logo-wrppr">
            <a href="<?= $home_link; ?>">
                <img src="<?= $logo_url; ?>" alt="Logo du site" class="logo">
            </a>
        </div>
        
        <div class="site-ttl-wrppr col">
            <div class="site-ttl"><a href="<?= $home_link ?>">Manum In Vulnere</a></div>
        </div>
        
        <div class="brg" id="brg">
            <div class="ln-1"></div>
            <div class="ln-2"></div>
            <div class="ln-3"></div>
        </div>
    </div>
    <div class="nvgt-cntnr" id="nvgt-cntnr">
        <?php wp_nav_menu( 'primary_menu' ); ?>
    </div>
</header>

<div class="header-divider"></div>

