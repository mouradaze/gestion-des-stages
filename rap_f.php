<?php
session_start();require_once('db.inc.php');
if(isset($_POST['submit']) && isset($_FILES['rap'])){
    $pname = rand(1000,10000)."-".$_FILES['rap']['name'];
    $tname = $_FILES['rap']['tmp_name'];
    $uploads_dir = './rapport_f';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    $sql = "INSERT INTO rapport(numutil,nom) VALUES ({$_SESSION['utilisateur']['id']},'$pname')";
    $db->exec($sql);
    header("location:etud.php");
}


?>