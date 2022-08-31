<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/starterkit/resource/php/class/core/init.php';

$user = new User();
echo $user->data()->name;
 ?>
