<?php if (have_posts()) : ?>

    <?php tha_content_while_before(); ?>

    <?php while (have_posts()) : the_post(); ?>

    <?php tha_entry_before(); ?>

    <article <?php hybrid_attr('post'); ?>>

        <?php tha_entry_top(); ?>

            <header <?php hybrid_attr('entry-header'); ?>>
                <?php
                    get_the_image(array(
                        'size' => 'abraham-lg',
                    ));
                ?>
                <h2 <?php hybrid_attr('entry-title'); ?>>
                    <a href="<?php the_permalink(); ?>"><i class="material-icons">&#xE24D;</i> <?php the_title(); ?></a>
                </h2>
            </header>

    <?php tha_entry_bottom(); ?>

    </article>

    <?php tha_entry_after(); ?>

    <?php endwhile; ?>

    <?php tha_content_while_after(); ?>

    <?php the_posts_navigation( array(
    'prev_text'          => __( 'Previous page', 'abraham' ),
    'next_text'          => __( 'Next page', 'abraham' ),
    ) ); ?>

<?php
endif;
