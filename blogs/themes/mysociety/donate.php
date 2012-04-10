<?
/* Template Name: Donate */
get_header();
?>
  <div class="content" role="main">
    <article id="post-<? the_ID() ?>" <? post_class() ?>>
      <header class="entry-header">
        <h1 class="entry-title"><? the_title() ?></h1>
        <div style="margin-bottom:2em;background:#cfcfcf;padding:1em;text-align:center"><br>big image</div>
      </header>
        
      <div class="entry-content">
        <? if(get_field('intro')): ?><p class="entry-intro"><? the_field('intro') ?></p><? endif; ?>

        <div style="margin-bottom:2em;background:#cfcfcf;padding:4em 1em;text-align:center"><br>three smaller images</div>

        <? if(get_field('body')): ?><div class="entry-body"><? the_field('body') ?></div><? endif; ?>
      </div>
    </article>
  </div>
<? get_footer(); ?>