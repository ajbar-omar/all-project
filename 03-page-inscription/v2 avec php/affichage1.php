<?php
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $nom = [] ;
 $prenom = [] ;
 $email = [];
 $numero = [];


 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['nom'] ) ) {
    $nom =  $_SESSION['nom'] ;
 }
 else {
    $_SESSION['nom'] =  $nom;};


    
 if( isset( $_SESSION['prenom'] ) ) {
    $prenom =  $_SESSION['prenom'] ;}
    
 else{ $_SESSION['prenom'] =  $prenom;};



 if( isset( $_SESSION['email'] ) ) {
    $email =  $_SESSION['email'] ;
 }
  else{ $_SESSION['email'] =  $email;};

 
  if( isset( $_SESSION['numero'] ) ) {
    $email =  $_SESSION['numero'] ;
 }
  else{ $_SESSION['numero'] =  $numero;};



 // Ajouter le nom du nom dans le tableau
 $nom[]  = $_POST["nom"];
 $prenom[]  = $_POST["prenom"];
 $email[]  = $_POST["email"] ;
 $numero[]  = $_POST["numero"];

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $nom;
$_SESSION['prenom'] = $prenom;
$_SESSION['email'] =  $email;
$_SESSION['numero'] = $numero;
?>


<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .size{
        width: 400px;
    }
    .container{
        display: flex;
    }
    h2 ,h1{
        text-align:center;
    }
    li {
        text-align:center;
        list-style:none;
    }

    </style>
</head>
<body>
<h1>Liste des participants</h1>
<div class="container">

<div class="size">
<h2>PRÉNOM </h2>
<ul >
    <?php
        foreach ($nom as $value) { 
        ?>
        <li> <?php echo $value ?></li><br>
        <?php
        }
    ?>  
    </ul>
    </div>
    <div class="size">
    <h2>NOM</h2>
    <ul>
    <?php
        foreach ($prenom as $value) { 
        ?>
    <li> <?php echo  $value?></li><br>
        <?php
        }

    ?> 
    </ul>
    </div>
    <div class="size">
     <tr>
    <th><h2>EMAIL</h2>
    <ul>
      <?php
        foreach ($email as $value) { 
        ?>
    <li> <?php echo  $value ?></li><br>
        <?php
        }

    ?> 
    
     </ul> 
     </div>


     <div class="size">
     <tr>
    <th><h2>numero</h2>
    <ul>
      <?php
        foreach ($numero as $value) { 
        ?>
    <li> <?php echo  $value ?></li><br>
        <?php
        }

    ?> 
    
     </ul> 
     </div>



     </div>

</body>
</html>