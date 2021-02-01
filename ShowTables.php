<?php

include 'Connexion.php';

$query = $db->prepare('show tables');
$query->execute();
$tables[]= array();
$indexTables='';

while($rows = $query->fetch(PDO::FETCH_ASSOC)){
     array_push ( $tables ,$rows);
}

unset($tables[0]);
$indexTables=key($tables[1]);


function getRowsNumber($tableName,$db) {
    
$query = $db->prepare("SELECT count(*) FROM $tableName ");
$query->execute();
$result = $query->fetchColumn();
return $result;
}

 
function getColumnsNumber($tableName,$db) {
    
    $query = $db->prepare("SELECT * FROM $tableName ");
    $query->execute();
    $colcount = $query->columnCount();
    return $colcount;
    }

function getColumnsNamesAndTypes($tableName,$db) {
        $columns[]= array();

        $query = $db->prepare("SELECT column_name,data_type from information_schema.columns where TABLE_NAME='$tableName'
         ");
        $query->execute();
        while($rows = $query->fetch(PDO::FETCH_ASSOC)){
            array_push( $columns ,$rows);
       }
       unset($columns[0]);
       return $columns;
        }

        function IdentifyType($type){

                 }
?>
