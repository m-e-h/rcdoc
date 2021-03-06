<?php
/**
 * List of related articles.
 *
 * @package abraham
 */
if ( has_post_thumbnail() ) {
$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
     echo '<style>
     .mdl-card-image {
            background: url('.$feat_image_url.') center / cover;
        }
            </style>';
}
?>
<section class="u-flexed-start mdl-cell mdl-card mdl-card-image mdl-shadow--2dp">
<div class="u-bg-tint-4 u-text-white u-color-inherit">
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
</div>
</section>
