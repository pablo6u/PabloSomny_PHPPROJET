<html>
<head>
    <title>Creer News</title>
    <?php
    include_once("connexion.php");
    if(isset($_POST['valider_creerNews'])) {
      if (isset($_POST['titre']) && isset($_POST['theme']) && isset($_POST['date']) && isset($_POST['texte'])) {
        $v_titre=$_POST['titre'];
        $v_theme=$_POST['theme'];
        var_dump($_POST['theme']);
        $v_idtheme=1;
        $v_date=$_POST['date'];
        $v_texte=$_POST['texte'];
        $v_idredacteur=1;

        $result = $objPdo->query("select * from theme");
        while($row = $result->fetch()){
          if ($row['description']==$v_theme){
            $v_idtheme = $row['idtheme'];
            echo "theme trouve";
          }
        }

        $insert_stmt = $objPdo->prepare('INSERT INTO news (idtheme,titrenews,datenews,textenews,idredacteur) VALUES(?,?,?,?,?)');
        $insert_stmt->bindValue(1, $v_idtheme);
        $insert_stmt->bindValue(2, $v_titre);
        $insert_stmt->bindValue(3, $v_date);
        $insert_stmt->bindValue(4, $v_texte);
        $insert_stmt->bindValue(5, $v_idredacteur);



        $insert_stmt->execute();
      }
    }
    ?>
</head>
<body>
    <form method="post" action="creerNews.php">

        <h1> Création d'une nouvelle news :</h1><br />
        <label>Titre : </label><input name="titre" type="text" width="500" required  /><br />
        <label>Themes : </label><select name="theme">
            <?php
            $result = $objPdo->query("select * from theme");
            while($row = $result->fetch()){
                echo "<option>".$row['description']."</option>";
            }
            ?>
        </select><br />
        <label>Date : </label><input name="date" type="date" required /><br />
        <label>Texte : </label><br /><textarea title="texte" cols="100" rows="15" name="texte" required></textarea><br />
        <button type = "submit" name = "valider_creerNews" value = 'valider_creerNews'>Valider</button>
    </form>
</body>
</html>
