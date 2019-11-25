<?php get_header(); ?>


<?php get_template_part('partials/home-content'); ?>

<div class="container">

    <section class="homepage-article">
        <aside class="image align-left">
            <img src="<?php echo get_template_directory_uri() . "/image_temp/groupe-devant-dortoir.jpg" ?>" alt="Logo">
        </aside>
        <main class="article">
            <div class="title">
                Dernières nouvelles du monde libre
            </div>
            <div class="content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex alias explicabo sit reiciendis odit veritatis quas iure quibusdam vitae itaque ipsa distinctio, deleniti nesciunt reprehenderit perspiciatis? Hic id cumque sit eos incidunt quam, cum quibusdam, ad, voluptate mollitia accusamus repudiandae optio error iusto eveniet dicta maiores reiciendis in? Officiis dolorem hic, doloremque, distinctio alias aliquid reiciendis eos vero earum voluptatem laboriosam perferendis necessitatibus debitis. Deserunt omnis laudantium reiciendis impedit. Saepe, possimus, distinctio alias dolores, porro nesciunt vitae quasi laboriosam ut fugit dignissimos cum enim harum corporis consequatur velit aliquid? Dolor eaque impedit praesentium minus modi eius quia recusandae consectetur harum laboriosam cumque deserunt enim magnam libero accusamus inventore, dolorem, natus consequuntur fuga voluptas voluptate. Suscipit, quaerat incidunt voluptas cupiditate nihil voluptatibus quidem aperiam porro, sed ab perspiciatis neque dolorum numquam quos et aliquid necessitatibus qui repellat eius optio? Quia voluptate, fugiat perferendis velit maiores rerum!
                <div class="hidden">&nbsp;</div>
            </div>
        </main>
    </section>

    <section class="team">
        <?php for ($i=0; $i < 8; $i++) { 
            get_template_part('partials/team-card');
        } ?>
    </section>

</div>



<?php get_footer(); ?>
