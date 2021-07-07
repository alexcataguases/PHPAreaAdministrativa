<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *"); 


$host = "localhost";
$uname = "id16408215_pedshopdb";
$pwd = "xxxxxx";
$database = "id16408215_petshopdb";
$con = mysqli_connect($host, $uname, $pwd, $database);

$data=array(); 
$q=mysqli_query($con, "SELECT * FROM tblprodutos"); 


while ($row=mysqli_fetch_array($q)){		
    $data[]=$row; 
}
echo json_encode($data); 

?>