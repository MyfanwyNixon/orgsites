<h1>Team.php</h1>
<?php
/*
Template Name: Team
*/
?>
<?php
	$values = get_field('people');
	if($values){
		echo '<ul>';
			foreach($values as $value){
				foreach($value as $v){
					echo '<li>' . $v . '</li>';
				}
			}
		echo '</ul>';
	}

	// always good to see exactly what you are working with
	var_dump($values);
?>
<? get_footer(); ?>