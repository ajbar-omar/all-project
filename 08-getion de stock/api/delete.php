<?php

$id = $_POST['id'];
$con = new PDO("mysql:host=localhost;dbname=ecran_db","root","curvaloca");
$querySQL = "DELETE FROM ecran WHERE id = '$id' ";
$applySQL = $con -> prepare($querySQL);
$applySQL -> execute();

?>