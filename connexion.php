<?php
try{
    $objPdo = new PDO('mysql:host=localhost;port=3306;dbname=somny8u_ProgWeb_News','somny8u_appli', '31706856');
}catch (Exception $exception) {
    die($exception->getMessage());
}
?>
