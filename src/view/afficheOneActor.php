<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Acteur</title>
</head>
<body>

<h1> Fiche acteur </h1>

<p><img src="../public/img/<?=$actor->getPhoto() ?>" ><p>
<p><?=$actor->getSurname() ?> <?=$actor->getFirstname() ?><p>

<a href="../fupdateactor/<?=$actor->getId_actor() ?>">Modifier Acteur</a>
<a href="../deleteactor/<?=$actor->getId_actor() ?>">Supprimer Acteur</a> 

</body>
</html>







