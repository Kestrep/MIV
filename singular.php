<?php if (is_user_logged_in()) {echo '<div class="localisation-in-wordpress">singular.php</div>';} get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="container singular-page">
    <div class="metadata">
        <div class="date">Publié le 29 septembre 2019 </div>
        <div class="tags"> Cameroun, Scolarité</div>
    </div>

    <div class="thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>