<?php  
include('db.class.php');  
$decoded= $_GET['decode'];  
  
$fetch = "SELECT long_url From short_urls Where short_code='".$decoded."'";  
  
 

$gdb = new db();  
$short = $gdb->getOne($fetch);  
$long_url=$short['long_url'];  

header("location:".$long_url);  
 
?>  