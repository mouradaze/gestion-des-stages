<?php
    error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/rap_f.css">
    <title>Document</title>
</head>
<body>
    <?php require_once('header.php');?>
    <div>
    <form <?php if(isset($_GET['n']) && $_GET['n'] == 2)  echo "action=\"rap_ff.php\"";
     elseif(isset($_GET['n']) && $_GET['n'] == 2) echo "action=\"rap_f.php\"";
      else echo "action=\"Pres.php\""; ?> method="post" enctype="multipart/form-data">
        <div>
            <label for="">Votre Fichier :</label>
            <input type="file" name="rap" >
        </div>
        <div><input type="submit" value="submit" name="submit"></div>
        
    </form>
    </div>
</body>
</html>