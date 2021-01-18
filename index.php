<?php

require_once 'Users.php';

$ospite = new Users(18);

echo $ospite->age;
$ospite->setName('pippo');
echo $ospite->getName();
$ospite->setName('paperino');
echo $ospite->getName();
?>
