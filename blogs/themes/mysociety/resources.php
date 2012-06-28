<?php
    global $resources;

?>

<section class="section-links">
    <ul class="linked_list">
    <?php foreach ($resources as $resource) { ?>
        <li><a class="link-<?=$resource['type']?>" href="<?=$resource['url']?>"><?=$resource['text'] ?></a></li>
    <?php } ?>
    </ul>
</section>
