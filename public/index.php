<?php
require __DIR__ . '/../vendor/autoload.php';

use Controller\ItemController;

$affichetoipls = new ItemController();
$affichetoipls->index();
?>