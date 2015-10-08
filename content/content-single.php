<?php if (have_posts()) : ?>

    <?php tha_content_while_before(); ?>

    <?php while (have_posts()) : the_post(); ?>

    <?php tha_entry_before(); ?>

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

    <?php tha_entry_after(); ?>

    <?php endwhile; ?>

    <?php tha_content_while_after(); ?>

    <?php
    the_post_navigation( array(
        'next_text' =>  '<span class="u-text-white post-title">%title</span>' .
            '<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
            '<span class="meta-nav mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored" aria-hidden="true"><i class="material-icons">&#xE409;</i></span> ',
        'prev_text' => '<span class="meta-nav mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored" aria-hidden="true"><i class="material-icons">&#xE408;</i></span> ' .
            '<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
            '<span class="u-text-white post-title">%title</span>',
    ) );
    ?>

    <?php get_template_part('components/loop', get_the_slug() ); ?>

<?php
endif;
