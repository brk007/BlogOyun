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
    function deletePost(){
    $item->id = isset($_GET['id']) ? $_GET['id'] : die();
    
    $item->getSinglePost();


    if($item->id != null){
        // create array
        
         //    "id" =>  $item->id,
         //    "user_id" => $item->user_id,
         //    "topic_id" => $item->topic_id,
         //    "title" => $item->title,
         //    "image" => $item->image,
         //    "body" => $item->body,
         //    "published" => $item->published,
         //    "created_at" => $item->created_at,
         //    "steam" => $item->steam,
         //    "offical" => $item->offical
         // );
      
        http_response_code(200);
        echo json_encode($item);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Post not found.");
    }
} 
?>