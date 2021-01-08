<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../../app/database/database.php';
    include_once '../../app/class/posts.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new posts($db);

    $data = json_decode(file_get_contents("php://input"));

    
    $item->user_id = $data->user_id;
    $item->topic_id = $data->topic_id;
    $item->title = $data->title;
    $item->image = $data->image;
    $item->body = $data->body;
    $item->published = $data->published;
    $item->steam = $data->steam;
    $item->offical = $data->offical;
    $item->created_at = date('Y-m-d H:i:s');
    
    if($item->createPost()){
      echo 'Paylaşım oluşturuldu.';
    } else{
        echo 'Employee could not be created.';
    }
?>