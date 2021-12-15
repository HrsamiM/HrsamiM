<?php

//
//PORTFOLIO PAGE - PORTFOLIO WORK EXPERIENCE
//FUNCTION PORTFOLIO AT COMPANY WORK START

function portfolio_company_t (){
    $args = array(
        'post_type' => 'web_projects',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'category_name' => 'job-tmd'
    );

    $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-xl-3 col-md-6 gridfx">
            <div class="card mb-3 infoSeCard">

                <div class="row g-0">
        <?php if ( has_post_thumbnail()) : ?>
                <a href="<?php the_field('link_pagina_web'); ?>" alt="<?php the_title_attribute(); ?>" target="_blank">
            <?php the_post_thumbnail('img-fluid cardImg imgCol'); ?>
                </a>
            <?php endif; ?>

        <div class="card-body">
                <h6 class="cardTitle"><?php the_title(); ?></h6>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a class="btnRM" href="<?php the_field('link_pagina_web'); ?>" target="_blank">Ver sitio web</a>
            </div>
        </div>
    </div>
</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif;
}

add_shortcode('hrm_shortcode_portfolio_t','portfolio_company_t');
//[hrm_shortcode_portfolio_t]
//PORTFOLIO PAGE - PORTFOLIO WORK EXPERIENCE
//FUNCTION PORTFOLIO AT COMPANY WORK END