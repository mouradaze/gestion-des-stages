<?php
    require_once('db.inc.php');
    session_start();
    if(isset($_POST['submit'])){
        $pname = rand(1000,10000)."-".$_FILES['rap']['name'];
        $tname = $_FILES['rap']['tmp_name'];
        $uploads_dir = './rapport_f';
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);
        $sql = "UPDATE rapport SET nom='$pname' WHERE numutil = {$_SESSION['utilisateur']['id']}";
        $db->exec($sql);
        header("location:etud.php");
    }
    

?>