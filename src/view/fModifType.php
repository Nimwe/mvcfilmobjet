<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<h2>Formulaire pour modifier un genre</h2>

<form method="post" action="../updateType">
  <div>
    <input type="text" placeholder="Genre" name="name" value="<?= $genre->getName() ?>" required/>
  </div>
  <div>
    <input type="hidden" name="id_type" value="<?= $genre->getId_type() ?>" />
  </div>
  <button type="submit">Modifier</button>
</form>

</body>
</html>