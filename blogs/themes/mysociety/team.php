<?php
/*
Template Name: Team
*/
?>

<?php get_header();?>

<div id="content">
    <article id="team" class="people">
        <h2><?php the_title();?></h2>

    <?php
    if (have_posts()) : while (have_posts()) : the_post();
        the_content();
    endwhile; endif;
    ?>

<?php $values = get_field('people'); ?>
<?php if($values) : ?>
    <ul id="mysociety_team" class="people_list fade">
		<?php foreach($values as $value) : ?>
        <li>
            <a name="<?php echo $value['name']; ?>">
                <div class="label">
                <strong class="name"><?php echo $value['name']; ?></strong>
                <span class="jobtitle"><?php echo $value['position']; ?></span>
            </div>
            <?php if($value['mug']) : ?>
                <img width="220px" height="220px" src="<?php echo $value['mug']; ?>" alt="<?php echo 'mugshot of '.$value['name']; ?>">
            <?php endif ?>
            </a>
        </li>
		<?php endforeach ?>
    </ul>
<?php endif ?>
    </article>
</div>

<? get_footer(); ?>
