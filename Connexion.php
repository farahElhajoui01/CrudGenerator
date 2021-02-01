<?php

 $host='localhost';
 $username='root';
 $password='';
 $dbname='testCrud';
 try{
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
}
 catch(PDOException $e){
    echo $e->getMessage();
}
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
 
?>