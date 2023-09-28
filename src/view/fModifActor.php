<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h2>Formulaire pour modifier un acteur</h2>

<form method="post" action="../updateActor">
  <div>
   <input type="text" placeholder="nom acteur" name="surname" value="<?= $acteur->getSurname() ?>" required/>
  </div>
  <div>
    <input type="text" placeholder="prénom acteur" name="firstname" value="<?= $acteur->getFirstname() ?>" required/>
  </div>
  <div>
    <input type="text" placeholder="photo" name="photo" value="<?= $acteur->getPhoto() ?>" required/>
  </div>
  <div>
    <input type="hidden" name="id_actor" value="<?= $acteur->getId_actor() ?>" />
  </div>
  <button type="submit">Modifier</button>
</form>

</body>
</html>