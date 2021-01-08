<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once '../database/database.php';
    include_once '../class/posts.php';
    
    $database = new Database();
    $db = $database->getConnection();
    
    $item = new posts($db);
    
    $data = json_decode(file_get_contents("php://input"));
    
    $item->id = $data->id;
    
    if($item->deletePost()){
        echo json_encode("Silindi.");
    } else{
        echo json_encode("Silinemedi");
    }
?>