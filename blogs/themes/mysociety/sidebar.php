<div class="blogs-meta">

    <section class="blogkey">
        <h3>Our Blogs:</h3>
        <ul>
        <?php $our_blogs = get_bookmarks( array( 'category_name' => 'our blogs', 'orderby' => 'rating' ) ) ?>
        <?php foreach ( $our_blogs as $blog ) { ?>
            <li><a class="<?php echo $blog->link_name ?>" href="<?php echo $blog->link_url ?>"><?php echo $blog->link_description ?></a></li>
        <?php } ?>
        </ul>
    </section>
    
<?php
    //TODO
    // <section class="widget widget_search">
    //     <h3 class="widget_title">Search posts:</h3>
    //  php get_search_form();
    //     </form>
    // </section>
    
$args = array(
        'orderby'   => 'name',
        'title_li'  => '',
    );
?>
    <section class="widget widget_categories">
        <h3 class="widget_title"><i class="icon-black-tag"></i>Categories</h3>
        <ul>
            <?php wp_list_categories( $args ); ?> 
        </ul>
    </section>
</div>
