<?php

    include 'Connexion.php';
    include 'ShowTables.php';
    include 'Util.php';


    if(isset($_POST)){
        var_dump($_POST);

        $tablename=$_POST['vtablename'];
        $id = $_POST['id'];
        $attribute1 = $_POST['attribute1'];
        $attribute2 = $_POST['attribute2'];
        $query = "UPDATE $tablename SET attribut1 = $attribute1, attribut2 = $attribute1 WHERE id = $id" ;

        $error='';
        try {
            $statement  = $db->prepare($query);
            $statement->execute();
        }catch (PDOException  $e){
            $error= $e->getMessage();
        }
        header("Location: AdminPage.php?error=".$error);
    }
?>
