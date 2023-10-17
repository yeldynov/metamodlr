<?php 

$sName   = "localhost";
//$sName   = "localhost:3306";

//$uName   = "root";
//$uName   = "meme3104";
$uName   = "meme3104_root";


//$pass    = "";
$pass    = "$2y$10$Nqq/y251QX2Ccvb1Ax7hUuMqQSkG3yRLCxN2KPdetnSP3oaXVH70a";

$db_name = "meme3104_metamodelr_DB";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}