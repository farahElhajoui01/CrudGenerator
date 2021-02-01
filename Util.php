<?php 

 function AddRow($value,$type){
    if($type=='int' )
    $ConvertedValue=intval($value);
    elseif ($type=='float') 
    $ConvertedValue=floatval($value);
    elseif($type=='double') 
    $ConvertedValue=(double)$value;
    elseif($type=='bigint')
    $ConvertedValue=gmp_init($value);
    else
    $ConvertedValue="'".$value."'";
    return $ConvertedValue;
 }


?>