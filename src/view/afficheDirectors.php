<h1> Tous les Réalisateurs </h1>
<?php 
// $ directors est un tableau contenant des objets directors
foreach ($directors as $director) { ?>
<p><?=$director->getSurname()?><p>
<p><?=$director->getFirstname()?><p>
<p><?=$director->getPhoto()?><p>
<?php } ?>