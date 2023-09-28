<h1> Tous les genres</h1>
<?php 
// $ genre est un tableau contenant des objets type
foreach ($types as $type) { ?>
<p><?=$type->getName() ?><p>  
<?php } ?>