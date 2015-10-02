<?php
/**
 * List of related articles.
 *
 * @package abraham
 */

?>
<section class="u-flexed-start mdl-cell mdl-card mdl-card-image mdl-shadow--2dp">
<div class="u-bg-frost-3 u-text-white u-color-inherit">

        <div <?php hybrid_attr('entry-summary'); ?>>
            <?php tha_entry_content_before(); ?>
            <?php the_content(); ?>
            <?php tha_entry_content_after(); ?>
        </div>
</div>
</section>
