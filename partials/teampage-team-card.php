<div class="team-card-big col-12 row">
    <div class="background"></div>
    <div class="avatar avatar-big col-12 col-md-4">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="info col-12 col-md-8">
        <div class="name"><?php the_title(); ?></div>
        <div class="function"><?php echo get_post_meta($post->ID, 'member_function', true); ?></div>
    </div>
    <div class="description col-12"><?php the_content(); ?></div>

</div>

