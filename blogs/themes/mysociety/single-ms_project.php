<? get_header(); ?>

    <div id="content">

        <article class="products">

            <?php get_template_part('header', 'single'); ?>

            <section class="section-options">
                <ul class="">
                    <?php $facets = get_field('facet'); ?>
                    <?php if(is_array($facets) && count($facets) > 0) : ?>
                        <?php foreach(get_field('facet') as $post_object): ?><li>
                            <?php if(get_field('headline', $post_object->ID)): ?>
                                <h3><?php echo get_field('headline', $post_object->ID); ?></h3>
                            <?php else :?>
                                <h3><?php echo get_the_title($post_object->ID); ?></h3>
                            <?php endif; ?>
                            <?php if(get_field('one_liner', $post_object->ID)): ?>
                                <p class="desc"><?php echo get_field('one_liner', $post_object->ID)?></p>
                            <?php else : ?>
                                <p class="desc"><?php echo get_field('strapline', $post_object->ID)?></p>
                            <?php endif?>
                            <?php if(get_field('link_text', $post_object->ID)): ?>
                                <p><a class='btn' href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_field('link_text', $post_object->ID)?></a></p>
                            <?php else :?>
                                <p><a class='btn' href="<?php echo get_permalink($post_object->ID); ?>">Find out more</a></p>
                            <?php endif ?>
                        </li><?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </section>


        </article>




    </div>

<?php get_footer(); ?>
