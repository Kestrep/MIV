<?php get_header(); if ( is_user_logged_in() ) {echo '<div class="localisation-in-wordpress">page.php</div>';} ?>

<!-- Affichage du contenu -->
<?php if(have_posts()): while(have_posts()): the_post();

the_content();

endwhile; endif; ?>

<!-- End: Affichage du contenu -->

<div class="container">
    <div class="row">
            <?php 
            $args = [
                'post_type' => 'team_member',
                'post_status' => 'publish',
                'order' => 'ASC'
            ];
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post();
    
                include 'partials/team-card.php' ;
    
            endwhile; endif;
            ?>
    </div>
</div>


<?php get_footer(); ?>