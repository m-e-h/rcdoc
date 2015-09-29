<?php if (have_posts()) : ?>

    <?php tha_content_while_before(); ?>

    <?php while (have_posts()) : the_post(); ?>

    <?php tha_entry_before(); ?>

    <?php if (hybrid_post_has_content()) : ?>

    <article <?php hybrid_attr('post'); ?>>

        <?php tha_entry_top(); ?>


            <div <?php hybrid_attr('entry-content'); ?>>
                <?php tha_entry_content_before(); ?>
                <?php the_content(); ?>
                <?php tha_entry_content_after(); ?>
            </div>

            <footer <?php hybrid_attr('entry-footer'); ?>>
                <?php get_template_part('components/child', 'links'); ?>
                <?php wp_link_pages(array(
                    'before' => '<nav class="page-nav"><p>'.__('Pages:', 'abraham'),
                    'after'  => '</p></nav>',
                )); ?>
            </footer>

            <?php comments_template('', true); ?>

    <?php tha_entry_bottom(); ?>

    </article>

    <?php endif; // Check for content ?>

    <?php tha_entry_after(); ?>

    <?php endwhile; ?>

    <?php
    // WP_Query arguments
    $args = array (
        'post_type'              => array( 'chancery' ),
        'category_name'          => 'bishop-jugis',
        'pagination'             => false,
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
        'cache_results'          => true,
        'update_post_meta_cache' => false,
        'update_post_term_cache' => false,
    );

    // The Query
    $bishop_query = new WP_Query( $args );

    // The Loop
    if ( $bishop_query->have_posts() ) { ?>
    <div class="mdl-grid">
        <?php
        while ( $bishop_query->have_posts() ) {
            $bishop_query->the_post();
            get_template_part('components/card', get_post_format() );
        }
        ?>
    </div>
    <?php
    } else {
        // no posts found
    }

    // Restore original Post Data
    wp_reset_postdata();
    ?>
    <?php tha_content_while_after(); ?>

    <?php the_posts_navigation( array(
    'prev_text'          => __( 'Previous page', 'abraham' ),
    'next_text'          => __( 'Next page', 'abraham' ),
    ) ); ?>

<?php
endif;
