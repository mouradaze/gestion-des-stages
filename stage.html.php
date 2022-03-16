<?php session_start();
error_reporting(E_ERROR | E_PARSE);
if(!$_SESSION){
    header('location:sign-in.php');
}
    require_once('db.inc.php');
    $sql = "SELECT * FROM entreprise";
    $rs = $db->query($sql);
    $res = $rs->fetchAll(PDO::FETCH_ASSOC);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stage.css">
    <script src="stage.js"></script>
    <title>Document</title>
</head>
<body>
    <?php require('header.php'); ?>
                <div class="pop">
                    <div class="popup">
                        <div class="close">+</div>
                        <form action="">
                            <input type="text" name="" id="" placeholder="Nom">
                            <input type="text" name="mail" id="" placeholder="Mail">
                            <input type="submit" name="submit" id="">
                        </form>
                    </div>
                </div>
    <div class="stage">
        <form action="stage.php" method="post">
            <div>
                <label for=""><sup>*</sup> Entreprise :</label>
                <select id="role" name="role" required>
                    <?php
                        foreach($res as $r){
                            echo "<option value='{$r['nom']}'>{$r['nom']}</option>";
                        }   
                    ?>
                        
                </select>
                
            </div>
            <div><input type="checkbox" name="Op" >Autres Entreprises</div>
            <div>
                <label for="nEnc"><sup>*</sup> Nom Encadrent :</label>
                <input type="text" name="encEN" id="" maxlength="30" required>
            </div>
            <div>
                <label for="nEnc">Prenom Encadrent :</label>
                <input type="text" name="encEP" id="" maxlength="30">
            </div>
            <div>
                <label for="nEnc"><sup>*</sup> Intitulé du sujet :</label>
                <input type="text" name="Intit" id="" maxlength="50" required>
            </div>
            <div>
                <label for="nEnc">Description Du Sujet :</label>
                <textarea name="descr" cols="25" rows="5" maxlength="255"></textarea>
            </div>
            <div>
                <label for="nEnc"><sup>*</sup> Les Technologies Utilisées :</label>
                <textarea name="tec" id="" cols="25" rows="5" maxlength="255" required></textarea>
            </div>
            <div>
                <label for="nEnc">Nom Binome :</label>
                <input type="text" name="NB" id="" maxlength="30">
            </div>
            <div>
                <label for="nEnc">Prenom Binome :</label>
                <input type="text" name="PB" id="" maxlength="30">
            </div>
            <div>
                <input type="submit" value="Submit" name="submit" id="sub">
            </div>
                
        </form>
    </div>
</body>
</html>