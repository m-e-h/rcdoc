<?php
?>



<div itemscope itemtype="http://schema.org/Organization">
    <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <span itemprop="streetAddress">
            <?php the_field('doc_street'); ?><br>
            <?php the_field('doc_street_2'); ?>
        </span>
        <span itemprop="addressLocality"><?php the_field('doc_city'); ?>, <?php the_field('doc_state'); ?></span>
        <span itemprop="postalCode"><?php the_field('doc_zip'); ?></span>
    </p>
    <p itemprop="telephone"><i class="u-align-middle material-icons">&#xE0CD;</i> <?php the_field('doc_phone_number'); ?></p>
    <p itemprop="faxNumber"><i class="u-bold u-align-middle">FAX</i> <?php the_field('doc_fax'); ?></p>
    <p itemprop="email"><i class="u-align-middle material-icons">&#xE0BE;</i> <?php the_field('doc_email'); ?></p>
</div>

<?php

$location = get_field('doc_map');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>
