<?php

# Handles all the different custom post types

get_header();
echo '<div id="content">
        <article class="product">';
get_template_part('header', 'single');
show_support_resource();
show_features_prices_studies();
if (get_post_type() == 'ms_council') {
    show_newsletter();
}
get_template_part('resources');
echo '</article>
    /div>';

get_footer();

# ---

function show_support_resource() {
    // check that we have an email support or sales resource
    $resources = get_field('resources');
    if(count($resources) > 0) {
        foreach($resources as $resource) {
            if($resource['type'] == 'email' || $resource['type'] == 'sales'){
                $support = $resource;
            }
        }
    }

    if (isset($support)) { ?>
        <div class="action">
            <p><a href="mailto:<?php echo $support['url'] ?>"><?php echo $support['text'] ?></a></p>
        </div>
<?php
    }
}

function show_features_prices_studies() {
    // do some checks and present the correct links
    $features = get_field('features');
    $prices = get_field('offer');
    $studies = get_field('case_study');

    //TODO Decide whether these signposts are aa little smaller ?>
    <section class="section-options">
        <ul class="">
        <?php if(is_array($features) && count($features) > 0):?>
            <li>
                <p><a class="btn fms" href="#key-features"><strong>Key Features</strong></a></p>
            </li>
        <?php endif ?><?php if(is_array($prices) && count($prices) > 0):?>
            <li>
                <p><a class="btn fms" href="#pricing-options"><strong>Pricing</strong></a></p>
            </li>
        <?php endif ?><?php if(is_array($features) && count($studies) > 0):?>
            <li>
                <p><a class="btn fms" href="#case-studies"><strong>Case Stud<?php if(count($studies) == 1    ){ echo 'y'; }else{ echo 'ies'; } ?></strong></a></p>
            </li>
        <?php endif?>

        </ul>
    </section>

    <?php if(is_array($features) && count($features) > 0):?>
    <section id='key-features' class="section-features">
        <h3>Features <em><?php echo get_field('feature_text');?></em></h3>
        <ul class="two_up">
            <?php foreach($features as $feature):?><li>
                    <h4><?php echo $feature['heading'];?></h4>
                    <?php if($feature['image']): ?>
                        <a href="#"><img src="<?php echo $feature['image'];?>" alt="<?php echo $feature['heading'].' Feature Image';?>"></a>
                    <?php endif ?>
                    <p><?php echo $feature['detail'];?></p>
                </li><?php endforeach ?>
        </ul>
    </section>
    <?php endif?>

    <?php if(is_array($prices) && count($prices) > 0):?>
        <section id='pricing-options' class="product-options-pricing">
            <h3>Pricing: <em><?php echo get_field('pricing'); ?></em></h3>
            <ul class="clearfix <?=resource_cols($prices) ?>">
                <?php foreach($prices as $price): ?><li>
                    <h4><?php echo $price['overview'] ?></h4>
                    <p><?php echo $price['price'] ?></p>
                    <p><?php echo $price['details'] ?></p>
                </li><?php endforeach ?>
            </ul>

            <?php if(is_array(get_field('extras')) && count(get_field('extras')) > 0):?>
                <h3>Extras: <em><?php echo get_field('extras_label'); ?></em></h3>
                <ul class="product-options-pricing-extras">
                <?php foreach(get_field('extras') as $extra): ?>
                    <li>
                        + <h4><?php echo $extra['name']?></h4>
                        <p><?php echo $extra['price']?></p>
                    </li>
                <?php endforeach ?>
                </ul>
            <?php endif ?>

        </section>
    <?php endif?>

    <?php if(is_array($studies) && count($studies) > 0): ?>
    <section id="case-studies" class="product-options-casestudy">
        <h3>Case Studies: <em><?php echo get_field('case_subtitle')?></em></h3>
        <ul>
        <?php foreach($studies as $study): ?>
            <li>
                <h4><?php echo $study['client']; ?></h4>
                <!-- TODO image if and link to client page -->
                <?php if($study['image']) :?>
                    <a href="<?php $study['link'];?>"><img src="<?php echo $study['image']; ?>" alt="<?php echo $study['client']; ?>"></a>
                <?php else :?>
                    <a href="#"><img src="http://placehold.it/460x195" alt=""></a>
                <?php endif?>
                <p><?php echo $study['blurb'] ?></p>
            </li>
        <?php endforeach ?>
        </ul>
    </section>
    <?php endif
}

function show_newsletter() { ?>
    <section id="newsletter-signup" class="product-newsletter-signup">
        <h3> Sign up to our Local Gov Newsletter <em>Occasional emails about mySociety's work in local government</em></h3>
        <form action="https://secure.mysociety.org/admin/lists/mailman/subscribe/local-government" method="" accept-charset="utf-8">
            <input type="hidden" name="digest" value="0">
            <p>
                <label for="email">Full Name</label> <input type="text" name="fullname" value="" placeholder="optional">
            </p>
            <p>
                <label for="email">Email Address</label> <input type="text" name="email" value="">
            </p>
            <p>
                <input class="btn" type="submit" value="Join mailing list">
            </p>
        </form>
    </section>
<?
}

