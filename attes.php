<?php 
session_start();
require_once('db.inc.php');
    if(isset($_POST['submit']) && isset($_FILES['att']) && isset($_FILES['fic'])){
        $pname = rand(100,10000)."-".$_FILES['att']['name'];
        $tname = $_FILES['att']['tmp_name'];
        $uploads_dir = './attestation';
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);
        $fname = rand(100,10000)."-".$_FILES['fic']['name'];
        $aname = $_FILES['fic']['tmp_name'];
        $uploads_dire = './fiche';
        move_uploaded_file($aname, $uploads_dire.'/'.$fname);
        $sql = "INSERT INTO attestation(numutil,nom,nomF) VALUES ({$_SESSION['utilisateur']['id']},'$pname','$fname')";
        $db->exec($sql);
    header("location:etud.php");
    }


?>