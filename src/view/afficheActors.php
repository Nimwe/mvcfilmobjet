<h1> Tous les acteurs </h1>
<?php 
// $ acteurs est un tableau contenant des objets actors
foreach ($actors as $actor) { ?>
<p><?=$actor->getSurname() ?><p>
<p><?=$actor->getFirstname() ?><p>
<p><?=$actor->getPhoto() ?><p>
<?php } ?>