<?php global $i, $text; ?>
<div class="presentation-card container">
    <?php $index = get_query_var('index'); ?>
    <div class="image-wrapper img-align-<?= $index%2 === 0 ? 'right' : 'left' ;?> show-on-scroll col-6">
        <img src="<?php echo get_template_directory_uri() . '/image_temp/vue-exterieure-ecole.jpg' ?>" alt="">
    </div>
    <div class="presentation-hook">Que faisons nous ?</div>
    <div class="content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, laborum. Obcaecati labore vel fuga necessitatibus illum placeat cumque numquam quasi alias, asperiores, voluptatibus similique officia quia esse assumenda? Ea delectus ducimus hic magnam fugit eligendi tempore cupiditate iste ut commodi adipisci corrupti vitae repudiandae, totam nam quos aliquid nesciunt debitis fuga repellendus placeat earum. Earum.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi delectus soluta ratione saepe ab molestias veniam ipsum, a aliquid odit quidem dolores ex commodi voluptas vel, maxime nihil. Facere, repudiandae saepe quas voluptatem et adipisci. Lorem ipsum dolor sit amet consectetur adipisicing. </p>
    </div>
</div>
