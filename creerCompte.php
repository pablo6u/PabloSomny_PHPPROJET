<html>
  <head>
    <meta charset="utf-8">
    <title>Créer un compte Rédacteur</title>
    <?php
    include_once('connexion.php');
    if(isset($_GET['action']) && $_GET['action'] == "ajoutRedacteur"){
      if(isset($_POST['txtNom']) && isset($_POST['txtPrenom']) && isset($_POST['txtMail']) && isset($_POST['txtMdp'])){
        if($_POST['txtMdp'] == $_POST['txtMdp2']){

          $v_mdp_crypt = sha1($_POST['txtMdp']);
          $v_nom = $_POST['txtNom'];
          $v_prenom = $_POST['txtPrenom'];
          $v_mail = $_POST['txtMail'];


          $insert_stmt = $objPdo->prepare('INSERT INTO redacteur (nom,prenom,adressemail,motdepasse) VALUES(?, ?, ?, ?)');
          $insert_stmt->bindValue(1, $v_nom);
          $insert_stmt->bindValue(2, $v_prenom);
          $insert_stmt->bindValue(3, $v_mail);
          $insert_stmt->bindValue(4, $v_mdp_crypt);


          $insert_stmt->execute();
        }
      }
    }
    else var_dump($_GET['action'] == "ajoutRedacteur");
    ?>
  </head>
  <body>
    <ul>
      <li>Acceuil</li>
      <li>Ajouter Compte</li>
      <li>Ajouter News</li>
      
      <li>
    <h1>Veuillez rentrer vos informations</h1>
    <form method="post" action="creerCompte.php?action=ajoutRedacteur">

      <label name="lblnom" >Nom</label>
      <input type="text" name="txtNom" required>

      <label name="lblprenom">Prenom</label>
      <input type="text" name="txtPrenom" required>
      </br>
      <label name="lbladresseMail">Adresse mail :</label>
      <input type="text" name="txtMail" required>
      </br>
      <label name="lblmdp">Mot de passe</label>
      <input type="password" name="txtMdp" required>
      </br>
      <label name="lblmdp">confirmez le mot de passe</label>
      <input type="password" name="txtMdp2" required>

      </br>
      </br>
      <input type="submit" name="ajoutRedacteur" value="Ajouter">
    </form>
  </body>
</html>
