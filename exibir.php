<?php
$host = "localhost";
$uname = "id16408215_pedshopdb";
$pwd = "3Iig%=&/0YLiOq-W";
$database = "id16408215_petshopdb";
$con = mysqli_connect($host, $uname, $pwd, $database);

$data=array(); 
$q=mysqli_query($con, "SELECT * FROM tblprodutos"); 


while ($row=mysqli_fetch_array($q)){		
    echo($row["produto"]); 
	echo(" - "); 
	echo($row["produto"]); 
	echo("<br>"); 
}


?>