<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="container singular-page">
    <div class="metadata">
        <div class="date">Publié le 29 septembre 2019 </div>
        <div class="tags"> Cameroun, Scolarité</div>
    </div>
    <h2><?php the_title(); ?></h2>

    <?php the_content(); ?>

</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>