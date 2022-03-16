<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/attes.css">
    <title>Document</title>
</head>
<body>
    <?php require_once('header.php');?>
    <form action="attes.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Votre Attestation :</label>
            <input type="file" name="att" >
        </div>
        <div>
            <label for="">Votre Fiche D'évaluation :</label>
            <input type="file" name="fic" >
        </div>
        <div>
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
</body>
</html>