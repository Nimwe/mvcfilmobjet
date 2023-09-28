<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Réalisateur</title>
</head>
<body>

<h1> Fiche réalisateur </h1>

<p><img src="../public/img/<?=$realisateur->getPhoto()?>" ><p>
<p><?=$realisateur->getSurname() ?> <?=$realisateur->getFirstname() ?><p>

</body>
</html>