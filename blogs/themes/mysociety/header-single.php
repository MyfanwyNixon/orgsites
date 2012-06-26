<header class="section_intro">

    <hgroup>
        <h2><?php the_title();?></h2>
        <h3><?php echo get_field('strapline')?></h3>
    </hgroup>

    <div class="images">
        <ul class="slider">
            <?php if ($image_id = get_field('image')) {
                $img_tag = wp_get_attachment_image( $image_id, 'feature-thumb' );
                $img_src = wp_get_attachment_image_src( $image_id, 'feature-thumb' );
?>
                <li><a href="<?=$img_src[0] ?>"><?=$img_tag ?></a></li>
            <?php } ?>
        </ul>
        <? if (get_post_type() == 'ms_council') { ?>
            <p class="council-options"><a href="#newsletter-signup"><i class="icon-black-announcement"></i><strong>Local Gov Newsletter</strong></a> &nbsp;&nbsp; <a href="<?php bloginfo('template_url'); ?>/pdfs/fms_councils-A4.pdf"><i class="icon-black-file-pdf"></i><strong>Download Brochure</strong></a></p>
        <? } ?>
    </div>

    <div class="description">
        <p><?php echo get_field('overview')?></p>
<?php
    // TODO (for ms_project) add a field in admin for the main site url and add it here, have done it manually for now
    //<p><a class="btn" href="">visit <strong>siteUrlHere</strong>.com</a></p>
?>
    </div>

</header>

