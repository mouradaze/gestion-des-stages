<?php session_start();if(!$_SESSION){
    header('location:sign-in.php');
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/etud.css">
    <title>Document</title>
</head>
<body>
    <?php require_once('header.php');?>
    <div class="profil">
        <img src="./pdp/<?php echo $_SESSION['utilisateur']['url']?>" alt="profil">
        <h2 class="name"><?php echo $_SESSION['utilisateur']['nom'];?></h2> 
        <h2><?php echo $_SESSION['utilisateur']['prenom'];?></h2>
    </div>
    <ol>
        <li><a href="modif.html.php">Modifier Mon Profil</a></li>
        <li><a href="stage.html.php">Ajouter Un Stage</a></li>
        <li><a href="">Déposer La Première Version Du Rapport</a></li>
        <li><a href="">Déposer La Version Corrigée Du Rapport</a></li>
        <li><a href="">Déposer La Présentation</a></li>
        <li><a href="">Déposer L’attestation De Stage Et La Fiche D’évaluation</a></li>
    </ol>
</body>
</html>