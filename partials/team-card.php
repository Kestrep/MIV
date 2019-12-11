<div class="col-12 col-md-6 team-card">
    <div class="background"></div>
    <div class="card-header">
        <div class="header-container">
            <div class="avatar-container">
                <div class="avatar-wrapper">
                    <?php the_post_thumbnail(); ?>
                </div>    
            </div>
            <div class="info">
                <div class="name"><?php the_title(); ?></div>
                <div class="function"><?php echo get_post_meta($post->ID, 'member_function', true); ?></div>
            </div>
        </div>
    </div>
    <div class="description-container">
        <div class="description">
            <?php the_excerpt(); ?>
            <!-- <div class="post-link"><a href="<?php the_permalink(); ?>">Lire la suite</a></div> -->
        </div>
    </div>
</div>
