<?php
/**
 * List of related articles.
 *
 * @package abraham
 */
?>
<section class="mdl-cell mdl-card mdl-shadow--2dp u-1/1 u-1/2@md u-1/3@lg">
    <?php
        get_the_image(array(
            'size' => 'abraham-lg',
            'image_class' => 'mdl-card__media',
        ));
    ?>
        <header <?php hybrid_attr('entry-header'); ?>>
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

</section>
