<?php
    error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/entrep.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <h1>Informations d'entreprise</h1>
        <form action="entrep.php" method="post">
            <div>
                <label for="" class="ent"><sup>*</sup>Nom :</label>
                <input type="text" name="nom" class="ent" required>
            </div>
            <div>
                <label for="" class="ent"><sup>*</sup>Adresse :</label>
                <input type="text" name="adresse" class="ent" required>
            </div>
            <div>
                <label for="" class="ent"><sup>*</sup>Tel :</label>
                <input type="tel" name="tel" id="" required>

            </div>
            <div>
                <label for="" class="ent"><sup>*</sup>Ville :</label>
                <input type="text" name="ville" class="ent" id="" required>
            </div>
            <div class="subm">
                <input type="submit" value="Submit" name="sub">
            </div>
            
    </form>
    </div>
    
            
</body>
</html>