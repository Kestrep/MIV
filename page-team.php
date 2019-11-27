<?php if (is_user_logged_in()) {echo '<div class="localisation-in-wordpress">team.php</div>';} get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="container">
    
    <h1 class="page-fullwidth page-title"><?php the_title(); ?></h1>
    <div class="page-description"><?php the_content(); ?></div>

    <div class="row">
        <?php 
        $args = [
            'post_type' => 'team_member',
            'post_status' => 'publish',
            'order' => 'ASC'
        ];
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post();

            include 'partials/teampage-team-card.php' ;

        endwhile; endif;
        ?>
    </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>