<html>
  <head>
    <meta charset="utf-8">
    <title>Créer un compte Rédacteur</title>
  </head>
  <body>
    <h1>Veuillez rentrer vos informations</h1>
    <form method="post" action="creation.php">

      <label name="lblnom" >Nom</label>
      <input type="text" name="txtNom" required>

      <label name="lblprenom">Prenom</label>
      <input type="text" name="txtPrenom" required>
      </br>
      <label name="lbladresseMail">Adresse mail :</label>
      <input type="text" name="txtMail" required>
      </br>
      <label name="lblmdp">Mot de passe</label>
      <input type="text" name="txtMdp" required>
      </br>
      </br>
      <input type="submit" name="ajouterRedacteur" value="Ajouter">
    </form>
  </body>
</html>
