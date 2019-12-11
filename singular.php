<?php if (is_user_logged_in()) {echo '<div class="localisation-in-wordpress">singular.php</div>';} get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="container singular-page">
    <div class="metadata">
        <div class="date"><?php the_date(); ?></div>
        <div class="tags"><?php the_tags(); ?></div>
    </div>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>

