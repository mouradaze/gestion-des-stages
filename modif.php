<?php 
    session_start();
    require_once('db.inc.php');
    if(isset($_POST['submit']) && isset($_FILES['image']) && isset($_POST['password'])){
        $passe=addslashes($_POST['password']);
            $img = strtolower($_FILES['image']['name']);
            $img_ex = pathinfo($img, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
                $new = uniqid("IMG-",true).'.'.$img;
                $path = './pdp/'.$new;
                move_uploaded_file($_FILES['image']['tmp_name'],$path);
                $sql = "UPDATE etudiant SET mdp = '$passe', url = '$new' WHERE id = '{$_SESSION['utilisateur']['id']}'";
                $rs = $db->exec($sql);
                header("location:etud.php");
            }
            else{
                $err = "Un Des Champs N'est Pas Remplie !!";
                header("location:modif.html.php?error=$err");
            }
    }
?>