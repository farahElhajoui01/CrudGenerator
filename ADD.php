<?php

include 'Connexion.php';
include 'ShowTables.php';
include 'Util.php';

if(isset($_POST)){
$columnsTable=getColumnsNamesAndTypes($_POST['tablename'],$db);
$tablename=$_POST['tablename'];
$query="Insert into $tablename values(";

for ($i = 1; $i <=sizeof($columnsTable); $i++){

    $value=AddRow($_POST[$columnsTable[$i]['column_name']],$columnsTable[$i]['data_type']);
    $query=$query.$value;
    if($i==sizeof($columnsTable))
         break;
    else
        $query=$query.',';

}
$query=$query.');';
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