<header class="section_intro">

    <hgroup>
        <h2><?php the_title();?></h2>
        <h3><?php echo get_field('strapline')?></h3>
    </hgroup>

    <div class="images">
        <ul class="slider">
            <?php if(get_field('image')):?>
                <li><a href="<?php echo get_field('image'); ?>"><img src="<?php echo get_field('image'); ?>" alt="<?php the_title().' Feature Image';?>"></a></li>
            <?php else :?>
                <li><a href="#"><img src="http://placehold.it/460x370" alt="Default image"></a></li>
            <?php endif ?>
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

