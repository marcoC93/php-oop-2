<?php

// Grazie a queste istruzioni riesco ad importare le varie classe con relative funzioni da file separati ed il require once permette che non ci siano errori, nel caso vengano importati piú volte tali file
require_once 'Users.php';
require_once 'Rooms.php';


//  questo é un esempio di un istanza di classe  con 2 parametri al suo interno, i quali sono stati definiti nel costruttore presente nel file dedicato
$ospite1 = new Users('pippo',18);
?>
    <!-- in questo modo stampo il risultato di un istanza indicando la variabile d'istanza dopo il segno -> dell'istanza di riferimento  -->
    <p>
        <?php echo $ospite1->age; ?>
    </p>
    <?php $ospite1->setName('pippo');?>


<?php
echo $ospite1->getName();
$ospite1->setName('paperino');
?>
    <p>
     <?php echo $ospite1->getName(); ?>
    </p>

<?php
$ospite2 = new Users('paperino',30);
?>
    <p>
          <?php echo $ospite2->getName(); ?>
    </p>

<?php
$room1 = new Rooms(2);
 ?>

 <h1> Qui ho usato una funzione getRoom</h1>
 <!-- se non uso un valore setRoom qui di seguito verrá visualizzato il valore di default indicato nel costruttore relativo -->
 <?php echo $room1->getRoom() ; ?>


<h1> <?php echo $room1->beds ; ?></h1>

<?php

$room2 = new Rooms(5);
?>
<h1>
    <?php echo $room2->beds ; ?>
</h1>
