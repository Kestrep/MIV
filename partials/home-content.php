<?php for ($i=5; $i < 8; $i++) { 
    set_query_var('index', $i);
    get_template_part('partials/presentation-card');
}
?>


<section class="hero-donation">
    <div class="text">Aidez nous à continuer</div>
    <div class="donation-button big">Faites un don</div>
</section>

