<?php
# Noddy script to dump monthly donors

$dir = dirname(__FILE__);
require_once "$dir/../../conf/general";
require_once "$dir/../../../commonlib/phplib/db.php";

header('Content-Type: text/csv; charset=utf-8');

db_connect();
$out = pg_copy_to($db_h, 'donor', ',');
foreach ($out as $row) {
    print $row;
}

