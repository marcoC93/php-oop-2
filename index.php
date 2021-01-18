<?php

require_once 'Users.php';
require_once 'Rooms.php';

$ospite1 = new Users('pippo',18);

// echo $ospite1->age;
// $ospite1->setName('pippo');
// echo $ospite1->getName();
// $ospite1->setName('paperino');
echo $ospite1->getName();

$ospite2 = new Users('paperino',30);
echo $ospite2->getName();



$room1 = new Rooms(2);
 ?>
<h1> <?php echo $room1->beds ; ?></h1>
<?php

$room2 = new Rooms(5);
echo $room2->beds ;

?>
