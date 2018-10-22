<?php
try{
    //$objPdo = new PDO('mysql:host=localhost;port=3306;dbname=somny8u_ProgWeb_News','somny8u_appli', '31706856');
    $objPdo = new PDO('mysql:host=localhost;port=3306;dbname=pablo6u_progweb_news','pablo6u_local', '$uperman01!');
    echo "connexion ok!";
}catch (Exception $exception) {
    die($exception->getMessage());

}
?>
