<?
/* Template Name: Products */
get_header();
?>
  <div class="content" role="main">
    <article id="post-<? the_ID() ?>" <? post_class() ?>>
      <header class="entry-header">
          <h1 class="entry-title"><? the_title() ?></h1>
      </header>
        
      <div class="entry-content">
        <? if(get_field('intro')): ?><p class="entry-intro"><? the_field('intro') ?></p><? endif; ?>
        
        <?
          //start our loop of the repeater field
          $product_sections = get_field('product-section');
          if($product_sections):
            $i = 0;
            foreach($product_sections as $ps):
        ?>


        <? if($i <= 2): //FIRST set of three ?>

          <?if($i == 0):?>
          <div class="product-section-header">
            <h2>Our products</h2>
            <p>Our web products are focussed on getting things done. We help deliver your goals whether it is to move services online, engage better with your users, or simply enhance your online presence.</p>
          </div>
          <section class="product-intros">           
          <?endif;?>
            <div <?if($i == 2){echo 'class="last"';}?>>
              <h3><?= $ps[title] ?></h3>
              <p><?= $ps[text_snippet] ?></p>
            </div>
          <?if($i == 2):?>
          </section>
          <?endif;?>

        <? endif; ?>

        

        <? if($i >= 3 && $i <= 5): //SECOND set of three ?>

          <?if($i == 3):?>
          <section class="product-examples">
          <?endif;?>
            <div <?if($i == 5){echo 'class="last"';}?>>
              <?
                $rel_id = $ps[product][0]->ID;
                $rel_images = get_field('gallery', $rel_id);
                if($rel_images) {
                  $sized = vt_resize( $rel_images[0][image], '', 288, 180, true );
                  echo "<a class='thumb' href='".get_permalink()."'><img src='{$sized[url]}' width='{$sized[width]}' height='{$sized[height]}' alt='{$image['alt']}' /></a>";
                }
              ?>
              <h4><? if($ps[title]){ echo $ps[title]; }else{ echo $ps[product][0]->post_title; } ?></h4>
              <h5><? the_field('council', $rel_id) ?></h5>
              <p><?= $ps[text_snippet] ?></p>
            </div>
          <?if($i == 5):?>
          </section>
          <?endif;?>

        <? endif; ?>



        <? if($i >= 6 && $i <= 8): //THIRD set of three ?>

          <?if($i == 6):?>
          <div class="product-section-header">
            <h2>Bespoke projects and consultancy</h2>
            <p>With over ten years experience in transactional web applications, we can help you scope, build and support a system that meets your user needs perfectly. We also provide tecnology and usability consulting to make sure your approach is focused and cost effective.</p>
          </div>
          <section class="product-examples">
          <?endif;?>
            <div <?if($i == 8){echo 'class="last"';}?>>
              <?
                $rel_id = $ps[product][0]->ID;
                $rel_images = get_field('gallery', $rel_id);
                if($rel_images) {
                  $sized = vt_resize( $rel_images[0][image], '', 288, 180, true );
                  echo "<a class='thumb' href='".get_permalink()."'><img src='{$sized[url]}' width='{$sized[width]}' height='{$sized[height]}' alt='{$image['alt']}' /></a>";
                }
              ?>
              <h4><? if($ps[title]){ echo $ps[title]; }else{ echo $ps[product][0]->post_title; } ?></h4>
              <h5><? the_field('council', $rel_id) ?></h5>
              <p><?= $ps[text_snippet] ?></p>
            </div>
          <?if($i == 8):?>
          </section>
          <?endif;?>

        <? endif; ?>



        <? if($i >= 9 && $i <= 11): //FOURTH set of three ?>

          <?if($i == 9):?>
          <div class="product-section-header">
            <h2>Mapping and visualisation</h2>
            <p>Mapping is core to most of our tools and we have built up extensive knowledge in this area. If you have a mapping project at hand, we can probably help.</p>
          </div>
          <section class="product-intros">
          <? endif; ?>
            <div <?if($i == 11){echo 'class="last"';}?>>
              <h3><?= $ps[title] ?></h3>
              <p><?= $ps[text_snippet] ?></p>
            </div>
          <?if($i == 11):?>
          </section>
          <? endif; ?>

        <? endif; ?>



        <? //end repeater field loop
              $i++;
            endforeach;
          endif;
        ?>


        <div class="product-section-header">
          <h2>Our clients</h2>
          <p>We work with private companies, public organisations and the 3rd sector in the UK and internationally.</p>
        </div>

      </div>
    </article>
  </div>
<? get_footer(); ?>