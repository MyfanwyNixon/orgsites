<?php
    global $resources;
    $promoted_resources = array();
    $std_resources = array();

    if ( count($resources) ) {
        foreach ($resources as $resource) {
            if ( $resource['promoted'] ) {
                array_push( $promoted_resources, $resource );
            } else {
                array_push( $std_resources, $resource );
            }
        }
    }
?>


<?php if ( count($promoted_resources) ) { ?>
<section class="section-options">
    <ul class="<?php echo resource_cols($promoted_resources); ?>">
    <?php foreach ($promoted_resources as $resource) { ?>
        <li>
            <?php echo $resource['promoted'] ?>
            <p>
            <a class="btn " href="<?=$resource['url']?>"><i class="icon-<?=$resource['type']?>"></i><strong><?=$resource['text'] ?></strong></a>
            </p>
        </li>
    <?php } ?>
    </ul>
</section>
<?php } ?>

<?php if ( count($std_resources) ) { ?>
<section class="section-links">
    <h3>Other resources:</h3>
    <ul class="linked_list">
    <?php foreach ($std_resources as $resource) { ?>
        <li><a class="link-<?=$resource['type']?>" href="<?=$resource['url']?>"><?=$resource['text'] ?></a></li>
    <?php } ?>
    </ul>
</section>
<?php } ?>
