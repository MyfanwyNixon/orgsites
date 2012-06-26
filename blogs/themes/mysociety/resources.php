<?php

$resources = get_field('resources');
if (!is_array($resources)) $resources = array();

?>

<section class="section-list">
    <ul class="linked_list">
    <?php foreach ($resources as $resource) { ?>
        <li><a class="link-<?=$resource['type']?>" href="<?=$resource['url']?>"><?=$resource['text'] ?></a></li>
    <?php } ?>
    </ul>
</section>
