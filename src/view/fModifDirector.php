
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    
  <h2>Formulaire pour modifier un réalisateur</h2>
  
  <form method="post" action="../updateDirector">
    <div>
      <input type="text" placeholder="Nom Réalisateur" name="surname" value="<?= $realisateur->getSurname() ?>"/>
    </div>
    <div>
      <input type="text" placeholder="Prénom réalisateur" name="firstname" value="<?= $realisateur->getFirstname() ?>"/>
    </div>
    <div>
      <input type="text" placeholder="photo" name="photo" value="<?= $realisateur->getPhoto() ?>"/>
    </div>
    <div>
      <input type="hidden" name="id_director" value="<?= $realisateur->getId_director() ?>" />
    </div>
    <button type="submit">Modifier</button>
  </form>

  </body>
  </html>