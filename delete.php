<?php

include 'Connexion.php';
include 'ShowTables.php';
include 'Util.php';


$idd = "";
if(isset($_POST)){
    $idd = $_GET['idd'];
    $tablenamee = $_GET['tablenamee'];
    $query = "DELETE FROM $tablenamee WHERE id = $idd" ;

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
