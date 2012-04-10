<? if(get_field('mailing-list')) : ?>

<form action="<? the_field('mailing-list'); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
  <h3><?= (get_field('mailing-list-label') ? get_field('mailing-list-label') : __( 'Join the mailing list', 'mysociety' )); ?></h3>

  <label for="mce-EMAIL" class="visuallyhidden"><? _e( 'Email Address', 'mysociety'); ?> <span class="asterisk">*</span></label>
  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="<? _e( 'Email Address', 'mysociety'); ?>">

  <button type="submit" name="subscribe" id="mc-embedded-subscribe"><? _e( 'Go', 'mysociety'); ?></button>
</form>

<? endif; ?>