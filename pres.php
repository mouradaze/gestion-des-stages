<?php 
session_start();
require_once('db.inc.php');
if(isset($_POST['submit'])){
    $pname = rand(10,10000)."-".$_FILES['rap']['name'];
    $tname = $_FILES['rap']['tmp_name'];
    $uploads_dir = './presentation';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    $sql = "INSERT INTO presentation(numutil,nomP) VALUES ({$_SESSION['utilisateur']['id']},'$pname')";
    $rs = $db->exec($sql);
    header("location:etud.php");
}

?>