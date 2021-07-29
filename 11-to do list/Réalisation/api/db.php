<?php
$dbh = new PDO("mysql:host=localhost;dbname=to-do-list","root","curvaloca");
$sql = " SELECT * FROM mission ";
$TaskQuery = $dbh->query($sql);
$getTask = $TaskQuery->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($getTask));
?>