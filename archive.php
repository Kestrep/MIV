<?php if (is_user_logged_in()) {echo '<div class="localisation-in-wordpress">archive.php</div>';} get_header(); ?>

<div class="container">
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
    <h1 class="page-fullwidth page-title"><?php echo single_cat_title( '', false ); ?></h1>
    <?php
    // Display optional category description
    if ( category_description() ) : ?>
    <div class="page-fullwidth page-description"><?php echo category_description(); ?></div>
    <?php endif; ?>

<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
<div class="metadata">
    <div class="date"><?php the_date(); ?></div> &nbsp;
    <div class="tags"><?php the_tags('', ','); ?></div>
</div>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<div class="row">
    <div class="col-4"><?php the_post_thumbnail(); ?></div>
    <div class="col-8">
        <?php the_excerpt(); ?>
        <div class="post-link"><a href="<?php the_permalink(); ?>">Lire la suite</a></div>
    </div>
</div>


 
<?php endwhile; else: echo '<p>Sorry, no posts matched your criteria.</p>';  endif; ?>
</div>
<?php get_footer(); ?>