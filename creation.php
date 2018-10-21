<?php
include_once("connexion.php");
if(isset($_POST['valider_creerNews'])) {
  if (isset($_POST['titre']) && isset($_POST['theme']) && isset($_POST['date']) && isset($_POST['texte'])) {
    $v_titre=$_POST['titre'];
    $v_theme=$_POST['theme'];
    $v_idtheme;
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


if(isset($_POST['submit'])=='ajouterRedacteur'){
  if(isset($_POST['txtNom']) && isset($_POST['txtPrenom']) && isset($_POST['txtMail']) && isset($_POST['txtMdp'])){
    $v_nom = $_POST['txtNom'];
    $v_prenom = $_POST['txtPrenom'];
    $v_mail = $_POST['txtMail'];
    $v_mdp = $_POST['txtMdp'];

    $insert_stmt = $objPdo->prepare("INSERT INTO redacteur (nom,prenom,mail,motdepasse) VALUES($v_nom, $v_prenom, $v_mail, $v_mdp)");
    $insert_stmt->excute();

    header("location: index.php");

  }
}
header("location: index.php");
?>
