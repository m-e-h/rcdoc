<?php
/**
 * List of related articles.
 *
 * @package abraham
 */
?>
<section class="u-bg-2 u-text-white u-color-inherit u-flexed-start mdl-cell mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
      <div <?php hybrid_attr('entry-content'); ?>>
          <?php tha_entry_content_before(); ?>
          <?php the_content(); ?>
          <?php tha_entry_content_after(); ?>
      </div>
  </div>
  <footer <?php hybrid_attr('entry-footer'); ?>>
      <a href="<?php the_permalink(); ?>" class="mdl-button mdl-js-button mdl-js-ripple-effect"><?php esc_html_e( 'More', 'abraham' ); ?></a>
      <?php get_template_part('components/child', 'links'); ?>
  </footer>
</section>
