<!-- Public Page -->
<?php
get_header();
get_template_part('header', 'single');
get_template_part('resources');

// TODO get some posts to display
$args = array( 'post_type' => 'post', 'posts_per_page' => 5 );
$loop = new WP_Query( $args );
echo '<h3>Blog</h3>';
while ( $loop->have_posts() ) {
    $loop->the_post();
?>
    <h4><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h4>
    <p><?php the_content(); ?></p>
    <p><small><?php the_category(', ');?></small></p>
<?php
}

get_footer();
