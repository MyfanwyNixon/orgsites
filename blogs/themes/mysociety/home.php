<h1>MySociety</h1>
<?
get_header();
?>
<h2>Projects</h2>
<?

// loop through each of the projects, with their one liners
$args = array( 'post_type' => 'ms_project', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
	echo '<div class="entry-content">';
		the_title(); 
		echo ': '.get_field('one_liner');
	echo '</div>';
endwhile;

get_footer(); 
?>