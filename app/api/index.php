<?php
include("../../app/database/database.php");
include("../../app/class/function.php");

$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); 
$jsonArray["hata"] = FALSE; 
 
$_code = 200; 
$_method = $_SERVER["REQUEST_METHOD"]; 
if($_method  == "POST") {
    include "create.php";
}else if($_method == "PUT") {
    include "update.php";
}else if($_method == "DELETE") {
    include "delete.php";
}else if($_method == "GET") {
    include "read.php";
}else {
    
    $jsonArray["hata"] = TRUE; 
    $jsonArray["hataMesaj"] = "Girilen İşlem Bulunmuyor."; 
}
 
SetHeader($_code);
$jsonArray[$_code] = HttpStatus($_code);
echo json_encode($jsonArray);
?>