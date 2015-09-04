 <?php  
include('db.class.php');
$long_url=$_POST['url'];  
$iid=rand(10000,99999);  
$short_code=base_convert($iid,20,36); 
$pushq="insert into short_urls (iid,long_url, short_code) 
			values('$iid','$long_url','$short_code')";
			


$ndb = new db();  
$short = $ndb->execute($pushq);  

echo "Shortened url is http://localdove.com/". $short_code;  
 
?> 