<form id="searchform" role="search" action="<?= esc_url( home_url( '/' ) ); ?>" type="get">
  <label for="searchform-search" class="visuallyhidden"><? _e( 'Search', 'mysociety' ); ?></label>
  <input id="searchform-search" name="s" type="text" placeholder="<? esc_attr_e( 'Keywords...', 'mysociety' ); ?>">
  <button type="submit" name="submit"><? esc_attr_e( 'Go', 'mysociety' ); ?></button>
</form>