<html>
<head>
    <title>
        Accueil
    </title>
    <?php
    include_once("connexion.php");
    if(isset($_POST['valider_creerNews'])) {
      if (isset($_POST['titre']) && isset($_POST['theme']) && isset($_POST['date']) && isset($_POST['texte'])) {
        $v_titre=$_POST['titre'];
        $v_theme=$_POST['theme'];
        $v_idtheme=1;
        $v_date=$_POST['date'];
        $v_texte=$_POST['texte'];
        $v_idredacteur=1;

        $result = $objPdo->query("select * from theme");
        while($row = $result->fetch()){
          if ($row['designation']==$v_theme){
            $v_idtheme=$row['idtheme'];
          }
        }

        $insert_news = $objPdo->prepare("INSERT INTO news (idtheme,titrenews,datenews,textenews,idredacteur) VALUES($v_idtheme, $v_titre, $v_date, $v_texte, $v_idredacteur)");
        $insert_news->execute();

        header("location: index.php");
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
                echo "<option>".$row ['description']."</option>";
            }
            ?>
        </select><br />
        <label>Date : </label><input name="date" type="date" required /><br />
        <label>Texte : </label><br /><textarea title="texte" cols="100" rows="15" name="texte" required></textarea><br />
        <button type = "submit" name = "valider_creerNews" value = 'valider_creerNews'>Valider</button>
    </form>
</body>
</html>
