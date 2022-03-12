<?php
    require_once('db.inc.php');
    $email=addslashes($_POST['email']);
	$passe=addslashes($_POST['pass']);
    if(isset($_POST['submit'])){
    $sql = "SELECT * FROM etudiant WHERE email = '$email' AND mdp = '$passe'";
    $rs = $db->query($sql);
    if($rs!=NULL)
    $res = $rs->fetch(PDO::FETCH_ASSOC);
    else
    $error = "Connexion Impossible, resseyez !!";
    if($res!= NULL){
        session_start();
        $_SESSION['utilisateur'] = $res;
        if($res['genre'] == "etu")
        header('location:etud.php');
        else if($res['genre'] == "ens")
        header('location:enseig.php');
        else if($res['genre'] == "adm")
        header('location:admin.php');
    }
    else{
        $error = "Connexion Impossible, resseyez !!";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sign-in.css">
    <title>Document</title>
</head>
<body>
<?php require('header.php'); ?>
<div>
<form action="sign-in.php" method="post" enctype="multipart/form-data">
            <?php
                if(isset($error))
				echo "<h2 style='color:red; font-size:15px; margin:5px 37% 5px; padding: 0 0 10px;'>$error</h2>";
			?>
    <label for="fname">E-mail :</label>
    <input type="email" id="email" name="email" placeholder="E-mail">
    <br>
    <label for="lname">Password :</label>
    <input type="password" id="pass" name="pass" placeholder="Password">
    <br>
    <input type="submit" value="Submit" name="submit">
  </form>
  </div>
</body>
</html>