<?php

 $host='localhost';
 $username='root';
 $password='';
 $dbname='vo_db';
 try{
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
}
 catch(PDOException $e){
    echo $e->getMessage();}
    
 
?>