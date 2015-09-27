<?php if (have_posts()) : ?>

    <?php tha_content_while_before(); ?>

    <?php while (have_posts()) : the_post(); ?>

    <?php tha_entry_before(); ?>

    <article <?php hybrid_attr('post'); ?>>

        <?php tha_entry_top(); ?>
<?php
$document = get_field('document');

if( $document ):

		$url = esc_url_raw( $document['url'] );
		$url_for_parse = ( 0 === strpos( $url, '//' ) ) ? 'http:' . $url :  $url;
		$scheme = parse_url( $url_for_parse, PHP_URL_SCHEME );

echo '<iframe class="pdf-responsive" data-true-height="800px" data-true-width="600px" max-width="1200px" height="800px" frameBorder="0" src="' . esc_url( $scheme . '://mozilla.github.io/pdf.js/web/viewer.html?file=' . rawurlencode( $url ) ) . '"></iframe>';

endif;
?>

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

    <?php the_posts_navigation( array(
    'prev_text'          => __( 'Previous page', 'abraham' ),
    'next_text'          => __( 'Next page', 'abraham' ),
    ) ); ?>

<?php
endif;
