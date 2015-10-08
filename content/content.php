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
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
            </header>

            <div <?php hybrid_attr('entry-summary'); ?>>
                <?php tha_entry_content_before(); ?>
                <?php the_excerpt(); ?>
                <?php tha_entry_content_after(); ?>
            </div>

            <footer <?php hybrid_attr('entry-footer'); ?>>
                <a href="<?php the_permalink(); ?>" class="mdl-button mdl-js-button mdl-js-ripple-effect"><?php esc_html_e( 'More', 'abraham' ); ?></a>
                <?php get_template_part('components/child', 'links'); ?>
            </footer>

    <?php tha_entry_bottom(); ?>

    </article>

    <?php tha_entry_after(); ?>

    <?php endwhile; ?>

    <?php tha_content_while_after(); ?>

<div class="u-1/1 u-text-center">
    <?php
    the_posts_pagination( array(
        'next_text' =>  '<span class="meta-nav mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored" aria-hidden="true"><i class="material-icons">&#xE409;</i></span> ',
        'prev_text' => '<span class="meta-nav mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored" aria-hidden="true"><i class="material-icons">&#xE408;</i></span> ',
        'before_page_number' => '<span class="u-text-white meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
    ) );
    ?>
</div>
<?php
endif;
