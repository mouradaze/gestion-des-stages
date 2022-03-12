<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/modif.css">
    <title>Document</title>
</head>
<body>
    <?php require_once('header.php');?>
    <div>
    <form action="modif.php" method="post" enctype="multipart/form-data">
        <label for="">Nouveau Mot De Passe :</label>
        <input type="password" name="password" id="">
        <label for="" class="l">Photo De Profil :</label>
        <input type="file" name="image" id="">
        <?php if(isset($_GET['error'])){
             echo "<h3 class='h'>{$_GET['error']}</h3>";
             }?>
        <input type="submit" value="submit" name="submit">
    </form>
    </div>
</body>
</html>