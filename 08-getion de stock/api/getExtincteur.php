<?php
$dbh = new PDO("mysql:host=localhost;dbname=ecran_db","root","curvaloca");
$sql = " SELECT * FROM ecran ";
$extincteurQuery = $dbh->query($sql);
$getExtincteur = $extincteurQuery->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($getExtincteur));
?>
