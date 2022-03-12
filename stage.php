<?php 
session_start();
require_once('db.inc.php');
    if(isset($_POST['submit'])){
        if($_POST['role'] == "other"){
            header('location:entrep.html.php');
        }
        else{
            $sel = "SELECT id FROM entreprise WHERE nom = '{$_POST['role']}'";
            $rs = $db->query($sel);
            $res = $rs->fetch(PDO::FETCH_ASSOC);
            if($res!=NULL){
                $_SESSION['stage']=$_POST;
                $sql = "INSERT INTO stage(entreprise,nome,prenome,intit,descr,tech,nomb,prenomb)
                VALUES ({$res['id']},'{$_SESSION['stage']['encEN']}','{$_SESSION['stage']['encEP']}','{$_SESSION['stage']['Intit']}',
                '{$_SESSION['stage']['descr']}','{$_SESSION['stage']['tec']}','{$_SESSION['stage']['NB']}','{$_SESSION['stage']['PB']}')";
                $nb = $db->exec($sql);
                header('location:etud.php');
            }
        }
    }
?>