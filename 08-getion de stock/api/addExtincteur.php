<?php
$dbh = new PDO("mysql:host=localhost;dbname=ecran_db","root","curvaloca");
$sql = " INSERT INTO ecran(titre,type,prix) VALUES (:titre,:type,:prix)";
$addStudentsQuery = $dbh->prepare($sql);
$addStudentsQuery->bindParam(":titre",$_POST["titre"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":type",$_POST["type"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":prix",$_POST["prix"],PDO::PARAM_STR);
$addStudentsQuery->execute();
?>
